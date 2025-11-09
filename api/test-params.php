<?php
/**
 * Script para probar diferentes combinaciones de parámetros en CONDUSEF
 */

$CONDUSEF_URL = 'https://webapps.condusef.gob.mx/SIPRES/jsp/pub/resulbusq.jsp';

// Diferentes combinaciones a probar
$tests = [
    'Original (psec=69,68 psta=60)' => [
        'tipo' => '1',
        'pnom' => '',
        'pedo' => '',
        'psec' => '69,68',
        'psta' => '60'
    ],
    'Solo SOFOM ENR (psec=69)' => [
        'tipo' => '1',
        'pnom' => '',
        'pedo' => '',
        'psec' => '69',
        'psta' => '60'
    ],
    'Solo SOFOM ER (psec=68)' => [
        'tipo' => '1',
        'pnom' => '',
        'pedo' => '',
        'psec' => '68',
        'psta' => '60'
    ],
    'Sin filtro de sector' => [
        'tipo' => '1',
        'pnom' => '',
        'pedo' => '',
        'psec' => '',
        'psta' => '60'
    ],
    'Sin filtro de status' => [
        'tipo' => '1',
        'pnom' => '',
        'pedo' => '',
        'psec' => '69,68',
        'psta' => ''
    ],
    'Sin filtros (solo tipo=1)' => [
        'tipo' => '1',
        'pnom' => '',
        'pedo' => '',
        'psec' => '',
        'psta' => ''
    ],
];

function testParams($url, $params) {
    $ch = curl_init($url);

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($params),
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_USERAGENT => 'SOFOMES.COM/1.0',
    ]);

    $html = curl_exec($ch);
    curl_close($ch);

    // Parse para extraer el número de resultados
    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML('<?xml encoding="UTF-8">' . $html);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);
    $spanRojo = $xpath->query("//span[@class='rojo']");

    $total = 0;
    if ($spanRojo->length > 0) {
        $total = (int)trim($spanRojo->item(0)->textContent);
    }

    return [
        'total' => $total,
        'html_length' => strlen($html)
    ];
}

echo "<h1>Prueba de Parámetros CONDUSEF</h1>";
echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
echo "<tr><th>Configuración</th><th>Resultados</th><th>HTML Size</th><th>Status</th></tr>";

foreach ($tests as $name => $params) {
    $result = testParams($CONDUSEF_URL, $params);

    $status = $result['total'] > 0 ? '✅ FUNCIONA' : '❌ 0 resultados';
    $color = $result['total'] > 0 ? '#d4edda' : '#f8d7da';

    echo "<tr style='background-color: $color;'>";
    echo "<td><b>$name</b><br><small>" . http_build_query($params) . "</small></td>";
    echo "<td style='text-align: center; font-size: 20px;'><b>{$result['total']}</b></td>";
    echo "<td>{$result['html_length']} bytes</td>";
    echo "<td>$status</td>";
    echo "</tr>";

    // Pequeño delay para no saturar el servidor
    usleep(500000); // 0.5 segundos
}

echo "</table>";
?>
