<?php
/**
 * Dataset Schema Generator for Schema.org/Dataset markup
 * Helps catalog pages appear in Google Dataset Search and AI systems
 */

/**
 * Generate Dataset schema JSON-LD for catalog pages
 *
 * @param array $config Configuration array with catalog details
 * @return string JSON-LD script tag with Dataset schema
 */
function generateDatasetSchema($config) {
    $defaults = [
        'name' => '',
        'description' => '',
        'url' => '',
        'keywords' => [],
        'jsonFile' => '',
        'recordCount' => 0,
        'catalogType' => 'catalog',
        'field' => '',
        'fieldDescription' => ''
    ];

    $config = array_merge($defaults, $config);

    // Build dataset schema
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "Dataset",
        "name" => $config['name'],
        "description" => $config['description'],
        "url" => $config['url'],
        "keywords" => $config['keywords'],
        "license" => "https://creativecommons.org/publicdomain/zero/1.0/",
        "identifier" => "https://sofomes.com/catalogs/json/" . $config['jsonFile'],
        "creator" => [
            "@type" => "Organization",
            "name" => "Comisión Nacional Bancaria y de Valores",
            "alternateName" => "CNBV",
            "url" => "https://www.gob.mx/cnbv"
        ],
        "publisher" => [
            "@type" => "Organization",
            "name" => "SOFOMES.COM",
            "url" => "https://sofomes.com",
            "logo" => [
                "@type" => "ImageObject",
                "url" => "https://sofomes.com/assets/img/logo_sofomes.png"
            ]
        ],
        "distribution" => [
            [
                "@type" => "DataDownload",
                "encodingFormat" => "application/json",
                "contentUrl" => "https://sofomes.com/catalogs/json/" . $config['jsonFile'],
                "name" => $config['name'] . " - JSON"
            ]
        ],
        "temporalCoverage" => "2025",
        "spatialCoverage" => [
            "@type" => "Place",
            "name" => "México",
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => 23.6345,
                "longitude" => -102.5528
            ]
        ],
        "about" => [
            "@type" => "Thing",
            "name" => "Reportes regulatorios CNBV",
            "description" => "Sistema de reportes para prevención de lavado de dinero y financiamiento al terrorismo"
        ]
    ];

    // Add variableMeasured if field is specified
    if (!empty($config['field'])) {
        $schema['variableMeasured'] = [
            "@type" => "PropertyValue",
            "name" => "Campo " . $config['field'] . " - Layout RIPS F36",
            "description" => $config['fieldDescription']
        ];
    }

    // Encode to JSON with pretty print and unescaped slashes/unicode
    $jsonLd = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

    // Return script tag
    return '<script type="application/ld+json">' . "\n" . $jsonLd . "\n" . '</script>';
}

/**
 * Generate download button HTML for catalog JSON file
 *
 * @param string $jsonFile Filename of the JSON catalog
 * @param int $recordCount Number of records in catalog
 * @return string HTML for download button
 */
function generateDownloadButton($jsonFile, $recordCount) {
    return <<<HTML
<div style="margin-top: 2rem; text-align: center; padding: 1.5rem; background: var(--neutral-50); border-radius: 8px;">
  <p style="margin-bottom: 1rem; color: var(--neutral-700);">
    <strong>📊 Descarga el catálogo completo en formato JSON</strong>
  </p>
  <a href="../catalogs/json/{$jsonFile}"
     download
     class="btn btn-primary"
     style="display: inline-flex; align-items: center; gap: 0.5rem;">
    📥 Descargar JSON ({$recordCount} registros)
  </a>
  <p style="margin-top: 0.75rem; font-size: 0.875rem; color: var(--neutral-600);">
    Ideal para integración en sistemas, análisis de datos y desarrollo de aplicaciones
  </p>
</div>
HTML;
}
?>
