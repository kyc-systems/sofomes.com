<?php

namespace App\Libraries;

/**
 * Genera markup Schema.org/Dataset para páginas de catálogos.
 * Migración de includes/dataset-schema.php a librería CI4.
 */
class DatasetSchema
{
    /**
     * Genera JSON-LD para esquema Dataset.
     */
    public function generate(array $config): string
    {
        $defaults = [
            'name'             => '',
            'description'      => '',
            'url'              => '',
            'keywords'         => [],
            'jsonFile'         => '',
            'recordCount'      => 0,
            'catalogType'      => 'catalog',
            'field'            => '',
            'fieldDescription' => '',
        ];

        $config = array_merge($defaults, $config);

        $schema = [
            '@context'     => 'https://schema.org',
            '@type'        => 'Dataset',
            'name'         => $config['name'],
            'description'  => $config['description'],
            'url'          => $config['url'],
            'keywords'     => $config['keywords'],
            'license'      => 'https://creativecommons.org/publicdomain/zero/1.0/',
            'identifier'   => 'https://sofomes.com/catalogs/json/' . $config['jsonFile'],
            'creator'      => [
                '@type'         => 'Organization',
                'name'          => 'Comisión Nacional Bancaria y de Valores',
                'alternateName' => 'CNBV',
                'url'           => 'https://www.gob.mx/cnbv',
            ],
            'publisher'    => [
                '@type' => 'Organization',
                'name'  => 'SOFOMES.COM',
                'url'   => 'https://sofomes.com',
                'logo'  => [
                    '@type' => 'ImageObject',
                    'url'   => 'https://sofomes.com/assets/img/logo_sofomes.png',
                ],
            ],
            'distribution' => [[
                '@type'          => 'DataDownload',
                'encodingFormat' => 'application/json',
                'contentUrl'     => 'https://sofomes.com/catalogs/json/' . $config['jsonFile'],
                'name'           => $config['name'] . ' - JSON',
            ]],
            'temporalCoverage' => (string) date('Y'),
            'spatialCoverage'  => [
                '@type' => 'Place',
                'name'  => 'México',
                'geo'   => [
                    '@type'     => 'GeoCoordinates',
                    'latitude'  => 23.6345,
                    'longitude' => -102.5528,
                ],
            ],
            'about' => [
                '@type'       => 'Thing',
                'name'        => 'Reportes regulatorios CNBV',
                'description' => 'Sistema de reportes para prevención de lavado de dinero y financiamiento al terrorismo',
            ],
        ];

        if (! empty($config['field'])) {
            $schema['variableMeasured'] = [
                '@type'       => 'PropertyValue',
                'name'        => 'Campo ' . $config['field'] . ' - Layout RIPS',
                'description' => $config['fieldDescription'],
            ];
        }

        $jsonLd = json_encode(
            $schema,
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
        );

        return '<script type="application/ld+json">' . PHP_EOL . $jsonLd . PHP_EOL . '</script>';
    }

    /**
     * Genera HTML del botón de descarga del catálogo JSON.
     */
    public function downloadButton(string $jsonFile, int $recordCount): string
    {
        $url = base_url('catalogs/json/' . $jsonFile);

        return <<<HTML
        <div style="margin-top: 2rem; text-align: center; padding: 1.5rem; background: var(--neutral-50); border-radius: 8px;">
          <p style="margin-bottom: 1rem; color: var(--neutral-700);">
            <strong>Descarga el catálogo completo en formato JSON</strong>
          </p>
          <a href="{$url}"
             download
             class="btn btn-primary"
             style="display: inline-flex; align-items: center; gap: 0.5rem;">
            Descargar JSON ({$recordCount} registros)
          </a>
          <p style="margin-top: 0.75rem; font-size: 0.875rem; color: var(--neutral-600);">
            Ideal para integración en sistemas, análisis de datos y desarrollo de aplicaciones
          </p>
        </div>
        HTML;
    }
}
