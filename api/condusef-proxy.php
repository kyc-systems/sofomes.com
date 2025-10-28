<?php
/**
 * CONDUSEF SIPRES Proxy
 * Evita problemas de CORS haciendo el request desde el servidor
 */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Configuración CONDUSEF
$CONDUSEF_URL = 'https://webapps.condusef.gob.mx/SIPRES/jsp/pub/resulbusq.jsp';

// Parámetros para obtener TODAS las SOFOMes en operación
$params = [
    'tipo' => '1',      // SOFOMes
    'pnom' => '',       // Sin filtro de nombre
    'pedo' => '',       // Sin filtro de estado
    'psec' => '69,68',  // Sectores: SOFOM ENR (69) + SOFOM ER (68)
    'psta' => '60'      // Status: En operación (código 60)
];

try {
    // Inicializar cURL
    $ch = curl_init($CONDUSEF_URL);

    // Configurar opciones
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($params),
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_MAXREDIRS => 5,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER => false, // Solo para desarrollo
        CURLOPT_USERAGENT => 'SOFOMES.COM/1.0',
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/x-www-form-urlencoded',
            'Accept: text/html,application/xhtml+xml,application/xml',
        ]
    ]);

    // Ejecutar request
    $html = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);

    curl_close($ch);

    // Verificar si hubo error
    if ($error) {
        throw new Exception("cURL Error: $error");
    }

    if ($httpCode !== 200) {
        throw new Exception("HTTP Error: $httpCode");
    }

    if (empty($html)) {
        throw new Exception("Respuesta vacía desde CONDUSEF");
    }

    // Log para debugging
    error_log("CONDUSEF Response length: " . strlen($html));

    // Parsear el HTML con DOMDocument
    libxml_use_internal_errors(true); // Suprimir warnings de HTML mal formado

    $dom = new DOMDocument();
    $dom->loadHTML('<?xml encoding="UTF-8">' . $html);

    libxml_clear_errors();

    $xpath = new DOMXPath($dom);

    // Primero extraer el total desde el span con clase 'rojo'
    $totalSpan = $xpath->query("//span[@class='rojo']");
    $totalReportado = $totalSpan->length > 0 ? trim($totalSpan->item(0)->textContent) : 0;

    error_log("Total reportado por CONDUSEF: " . $totalReportado);

    // Buscar la tabla principal con los resultados (la segunda tabla)
    // Primera tabla es solo el contador, segunda tiene los datos
    $tables = $xpath->query("//table[@class='table table-striped table-responsiv']");

    if ($tables->length < 2) {
        throw new Exception("No se encontró la tabla de resultados. Tables encontradas: " . $tables->length);
    }

    // La segunda tabla tiene los datos
    $table = $tables->item(1);
    $rows = $xpath->query('.//tbody/tr', $table);

    error_log("Rows encontradas: " . $rows->length);

    // Array para almacenar SOFOMes
    $sofomes = [];

    // Iterar sobre las filas
    foreach ($rows as $row) {
        $cells = $xpath->query('.//td', $row);

        if ($cells->length < 8) {
            error_log("Row skipped - solo tiene " . $cells->length . " celdas");
            continue;
        }

        // Estructura según el HTML real:
        // 0: Clave de Registro
        // 1: Denominación Social (con link)
        // 2: Nombre Corto
        // 3: Estatus
        // 4: Sector
        // 5: Estado
        // 6: Última Sección Actualizada
        // 7: No Localizable

        $sofom = [
            'clave' => trim($cells->item(0)->textContent),
            'denominacion' => trim($cells->item(1)->textContent),
            'nombre_corto' => trim($cells->item(2)->textContent),
            'estatus' => trim(strip_tags($cells->item(3)->textContent)),
            'sector' => trim($cells->item(4)->textContent),
            'estado' => trim($cells->item(5)->textContent),
            'ultima_actualizacion' => trim($cells->item(6)->textContent),
            'no_localizable' => trim($cells->item(7)->textContent)
        ];

        $sofomes[] = $sofom;
    }

    error_log("SOFOMes parseadas: " . count($sofomes));

    // Preparar respuesta JSON
    $response = [
        'success' => true,
        'total' => count($sofomes),
        'sofomes' => $sofomes,
        'fecha' => date('c'), // ISO 8601
        'source' => 'CONDUSEF SIPRES',
        'params' => $params
    ];

    // Opcional: guardar en archivo para debugging
    if (isset($_GET['debug'])) {
        file_put_contents(
            __DIR__ . '/condusef-response-' . date('Y-m-d-His') . '.json',
            json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );
    }

    // Retornar JSON
    echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

} catch (Exception $e) {
    http_response_code(500);

    echo json_encode([
        'success' => false,
        'error' => $e->getMessage(),
        'fecha' => date('c')
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
?>
