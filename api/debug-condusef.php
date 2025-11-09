<?php
/**
 * Script de debugging para investigar la estructura actual de CONDUSEF
 */

$CONDUSEF_URL = 'https://webapps.condusef.gob.mx/SIPRES/jsp/pub/resulbusq.jsp';

$params = [
    'tipo' => '1',
    'pnom' => '',
    'pedo' => '',
    'psec' => '69,68',
    'psta' => '60'
];

$ch = curl_init($CONDUSEF_URL);

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($params),
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_MAXREDIRS => 5,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_USERAGENT => 'SOFOMES.COM/1.0',
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/x-www-form-urlencoded',
        'Accept: text/html,application/xhtml+xml,application/xml',
    ]
]);

$html = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo "<h1>CONDUSEF Structure Debug</h1>";
echo "<p>HTTP Code: $httpCode</p>";
echo "<p>HTML Length: " . strlen($html) . " bytes</p>";

// Parse HTML
libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML('<?xml encoding="UTF-8">' . $html);
libxml_clear_errors();

$xpath = new DOMXPath($dom);

// Buscar TODAS las tablas
echo "<h2>Tablas encontradas:</h2>";
$allTables = $xpath->query("//table");
echo "<p>Total de tablas: " . $allTables->length . "</p>";

foreach ($allTables as $index => $table) {
    $class = $table->getAttribute('class');
    $id = $table->getAttribute('id');

    echo "<h3>Tabla #$index</h3>";
    echo "<p>Class: '$class'</p>";
    echo "<p>ID: '$id'</p>";

    // Contar filas
    $rows = $xpath->query('.//tr', $table);
    echo "<p>Rows: " . $rows->length . "</p>";

    // Mostrar primeras 3 filas
    $counter = 0;
    foreach ($rows as $row) {
        if ($counter >= 3) break;

        $cells = $xpath->query('.//td | .//th', $row);
        echo "<p>Row $counter (" . $cells->length . " cells):</p>";
        echo "<ul>";
        foreach ($cells as $cell) {
            $text = trim($cell->textContent);
            if (strlen($text) > 100) $text = substr($text, 0, 100) . '...';
            echo "<li>" . htmlspecialchars($text) . "</li>";
        }
        echo "</ul>";

        $counter++;
    }
    echo "<hr>";
}

// Buscar el span con el total
echo "<h2>Span con clase 'rojo':</h2>";
$spanRojo = $xpath->query("//span[@class='rojo']");
echo "<p>Encontrados: " . $spanRojo->length . "</p>";
if ($spanRojo->length > 0) {
    echo "<p>Contenido: " . trim($spanRojo->item(0)->textContent) . "</p>";
}

// Guardar HTML completo para inspección
$debugFile = __DIR__ . '/condusef-debug-' . date('Y-m-d-His') . '.html';
file_put_contents($debugFile, $html);
echo "<p>HTML completo guardado en: $debugFile</p>";
?>
