<?php
/**
 * Script de diagnóstico para verificar archivos en producción
 * Sube este archivo a la raíz y accede a https://sofomes.com/verificar-archivos.php
 */

header('Content-Type: text/plain; charset=utf-8');

echo "=== DIAGNÓSTICO DE ARCHIVOS SOFOMES.COM ===\n";
echo "Fecha: " . date('Y-m-d H:i:s') . "\n\n";

// Verificar directorio catalogos-enr
echo "1. DIRECTORIO catalogos-enr/\n";
echo str_repeat("-", 50) . "\n";
if (is_dir('catalogos-enr')) {
    echo "✅ El directorio catalogos-enr/ existe\n";
    $files = scandir('catalogos-enr');
    echo "Archivos encontrados:\n";
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $size = filesize('catalogos-enr/' . $file);
            echo "  - $file (" . number_format($size) . " bytes)\n";
        }
    }
} else {
    echo "❌ El directorio catalogos-enr/ NO existe\n";
}
echo "\n";

// Verificar directorio catalogos-er
echo "2. DIRECTORIO catalogos-er/\n";
echo str_repeat("-", 50) . "\n";
if (is_dir('catalogos-er')) {
    echo "✅ El directorio catalogos-er/ existe\n";
    $files = scandir('catalogos-er');
    echo "Archivos encontrados:\n";
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $size = filesize('catalogos-er/' . $file);
            echo "  - $file (" . number_format($size) . " bytes)\n";
        }
    }
} else {
    echo "❌ El directorio catalogos-er/ NO existe\n";
}
echo "\n";

// Verificar directorio catalogs/json/enr
echo "3. DIRECTORIO catalogs/json/enr/\n";
echo str_repeat("-", 50) . "\n";
if (is_dir('catalogs/json/enr')) {
    echo "✅ El directorio catalogs/json/enr/ existe\n";
    $files = scandir('catalogs/json/enr');
    echo "Archivos JSON encontrados:\n";
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $size = filesize('catalogs/json/enr/' . $file);
            echo "  - $file (" . number_format($size) . " bytes)\n";
        }
    }
} else {
    echo "❌ El directorio catalogs/json/enr/ NO existe\n";
}
echo "\n";

// Verificar directorio catalogs/json/er
echo "4. DIRECTORIO catalogs/json/er/\n";
echo str_repeat("-", 50) . "\n";
if (is_dir('catalogs/json/er')) {
    echo "✅ El directorio catalogs/json/er/ existe\n";
    $files = scandir('catalogs/json/er');
    echo "Archivos JSON encontrados:\n";
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $size = filesize('catalogs/json/er/' . $file);
            echo "  - $file (" . number_format($size) . " bytes)\n";
        }
    }
} else {
    echo "❌ El directorio catalogs/json/er/ NO existe\n";
}
echo "\n";

// Verificar archivos clave
echo "5. ARCHIVOS CLAVE\n";
echo str_repeat("-", 50) . "\n";
$archivos_clave = [
    'catalogos-rips.php',
    'sofom-er-vs-enr.php',
    'mejores-sofomes-mexico-2025.php',
    'software-pld-ft-requisitos-cnbv.php',
    'includes/dataset-schema.php',
    '.htaccess'
];

foreach ($archivos_clave as $archivo) {
    if (file_exists($archivo)) {
        $size = filesize($archivo);
        echo "✅ $archivo (" . number_format($size) . " bytes)\n";
    } else {
        echo "❌ $archivo NO existe\n";
    }
}
echo "\n";

// Verificar .htaccess
echo "6. CONTENIDO .htaccess (primeras 10 líneas)\n";
echo str_repeat("-", 50) . "\n";
if (file_exists('.htaccess')) {
    $htaccess = file('.htaccess');
    for ($i = 0; $i < min(10, count($htaccess)); $i++) {
        echo ($i+1) . ": " . $htaccess[$i];
    }

    // Buscar RewriteBase
    foreach ($htaccess as $linea) {
        if (stripos($linea, 'RewriteBase') !== false) {
            echo "\n🔍 Línea RewriteBase encontrada: " . trim($linea) . "\n";
            if (stripos($linea, '/sofomes.com/') !== false) {
                echo "⚠️  PROBLEMA: RewriteBase tiene /sofomes.com/ (debe ser solo /)\n";
            } else if (stripos($linea, 'RewriteBase /') !== false) {
                echo "✅ RewriteBase correcto\n";
            }
        }
    }
} else {
    echo "❌ .htaccess NO existe\n";
}
echo "\n";

// Info del servidor
echo "7. INFORMACIÓN DEL SERVIDOR\n";
echo str_repeat("-", 50) . "\n";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "\n";
echo "Script Filename: " . $_SERVER['SCRIPT_FILENAME'] . "\n";
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "\n";
echo "PHP Version: " . phpversion() . "\n";

echo "\n=== FIN DIAGNÓSTICO ===\n";
?>
