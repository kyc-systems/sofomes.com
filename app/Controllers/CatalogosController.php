<?php

namespace App\Controllers;

use App\Libraries\DatasetSchema;
use CodeIgniter\Exceptions\PageNotFoundException;

class CatalogosController extends BaseController
{
    /**
     * Configuración centralizada de catálogos ER (F41).
     */
    private array $erCatalogs = [
        'actividad-economica' => [
            'title'       => 'Catálogo ER: Actividad Económica | SOFOMES.COM',
            'description' => 'Catálogo de actividades económicas para SOFOM ER. 1,172 actividades para reportes RIPS F41 CNBV.',
            'keywords'    => 'catalogo cnbv, rips f41, pld sofom er, actividad económica, scian',
            'view'        => 'catalogos/er/actividad_economica',
            'jsonFile'    => 'er/actividad-economica.json',
            'recordCount' => 1172,
            'field'       => '28',
            'fieldDesc'   => 'Actividad Económica del cliente',
        ],
        'monedas' => [
            'title'       => 'Catálogo ER: Monedas | SOFOMES.COM',
            'description' => '123 monedas para SOFOM ER, reportes RIPS F41 CNBV.',
            'keywords'    => 'catalogo cnbv, rips f41, monedas, divisas, sofom er',
            'view'        => 'catalogos/er/monedas',
            'jsonFile'    => 'er/monedas.json',
            'recordCount' => 123,
            'field'       => '12',
            'fieldDesc'   => 'Moneda de la operación',
        ],
        'pais' => [
            'title'       => 'Catálogo ER: Países | SOFOMES.COM',
            'description' => '245 países para SOFOM ER, exclusivo F41.',
            'keywords'    => 'catalogo cnbv, rips f41, países, sofom er, pld',
            'view'        => 'catalogos/er/pais',
            'jsonFile'    => 'er/pais.json',
            'recordCount' => 245,
            'field'       => '7',
            'fieldDesc'   => 'País de origen de la operación',
        ],
        'tipo-operacion' => [
            'title'       => 'Catálogo ER: Tipo Operación | SOFOMES.COM',
            'description' => '40 tipos de operación para SOFOM ER.',
            'keywords'    => 'catalogo cnbv, rips f41, tipo operacion, sofom er, operaciones bancarias',
            'view'        => 'catalogos/er/tipo_operacion',
            'jsonFile'    => 'er/tipo-operacion.json',
            'recordCount' => 40,
            'field'       => '8',
            'fieldDesc'   => 'Tipo de operación bancaria o financiera',
        ],
        'instrumento-monetario' => [
            'title'       => 'Catálogo ER: Instrumento Monetario | SOFOMES.COM',
            'description' => '10 instrumentos monetarios para SOFOM ER.',
            'keywords'    => 'catalogo cnbv, rips f41, instrumento monetario, sofom er, efectivo, transferencia',
            'view'        => 'catalogos/er/instrumento_monetario',
            'jsonFile'    => 'er/instrumento-monetario.json',
            'recordCount' => 10,
            'field'       => '11',
            'fieldDesc'   => 'Instrumento o medio de pago',
        ],
        'localidades' => [
            'title'       => 'Catálogo ER: Localidades | SOFOMES.COM',
            'description' => '3,689 localidades de México para SOFOM ER.',
            'keywords'    => 'catalogo cnbv, rips f41, localidades, inegi, sofom er, municipios',
            'view'        => 'catalogos/er/localidades',
            'jsonFile'    => 'er/localidades.json',
            'recordCount' => 3689,
            'field'       => '26',
            'fieldDesc'   => 'Localidad donde se realizó la operación',
        ],
        'tipo-reporte' => [
            'title'       => 'Catálogo ER: Tipo Reporte | SOFOMES.COM',
            'description' => '3 tipos de reporte PLD/FT para SOFOM ER.',
            'keywords'    => 'catalogo cnbv, rips f41, tipo reporte, operaciones relevantes, inusuales, preocupantes',
            'view'        => 'catalogos/er/tipo_reporte',
            'jsonFile'    => 'er/tipo-reporte.json',
            'recordCount' => 3,
            'field'       => '6',
            'fieldDesc'   => 'Tipo de reporte RIPS F41',
        ],
    ];

    /**
     * Configuración centralizada de catálogos ENR (F36).
     */
    private array $enrCatalogs = [
        'actividad-economica' => [
            'title'       => 'Catálogo ENR: Actividad Económica | SOFOMES.COM',
            'description' => '1,265 actividades económicas para SOFOM ENR, RIPS F36.',
            'keywords'    => 'catalogo cnbv, rips f36, pld sofom enr, actividad económica',
            'view'        => 'catalogos/enr/actividad_economica',
            'jsonFile'    => 'actividad-economica.json',
            'recordCount' => 1265,
            'field'       => '28',
            'fieldDesc'   => 'Actividad Económica del cliente',
        ],
        'monedas' => [
            'title'       => 'Catálogo ENR: Monedas | SOFOMES.COM',
            'description' => '192 monedas para SOFOM ENR, RIPS F36.',
            'keywords'    => 'catalogo cnbv, rips f36, monedas, divisas, sofom enr',
            'view'        => 'catalogos/enr/monedas',
            'jsonFile'    => 'monedas.json',
            'recordCount' => 192,
            'field'       => '12',
            'fieldDesc'   => 'Moneda de la operación',
        ],
        'tipo-operacion-sofom' => [
            'title'       => 'Catálogo ENR: Tipo Operación SOFOM | SOFOMES.COM',
            'description' => '19 tipos de operación SOFOM para SOFOM ENR, RIPS F36.',
            'keywords'    => 'catalogo cnbv, rips f36, tipo operacion sofom, credito, factoraje, arrendamiento',
            'view'        => 'catalogos/enr/tipo_operacion_sofom',
            'jsonFile'    => 'tipo-operacion-sofom.json',
            'recordCount' => 19,
            'field'       => '8',
            'fieldDesc'   => 'Tipo de operación SOFOM',
        ],
        'tipo-operacion-asesores-inv' => [
            'title'       => 'Catálogo ENR: Tipo Operación Asesores | SOFOMES.COM',
            'description' => '4 tipos de operación para Asesores de Inversión ENR.',
            'keywords'    => 'catalogo cnbv, rips f36, tipo operacion asesores, inversiones',
            'view'        => 'catalogos/enr/tipo_operacion_asesores',
            'jsonFile'    => 'tipo-operacion-asesores-inv.json',
            'recordCount' => 4,
            'field'       => '8',
            'fieldDesc'   => 'Tipo de operación para asesores de inversión',
        ],
        'instrumento-monetario' => [
            'title'       => 'Catálogo ENR: Instrumento Monetario | SOFOMES.COM',
            'description' => '10 instrumentos monetarios para SOFOM ENR.',
            'keywords'    => 'catalogo cnbv, rips f36, instrumento monetario, efectivo, transferencia',
            'view'        => 'catalogos/enr/instrumento_monetario',
            'jsonFile'    => 'instrumento-monetario.json',
            'recordCount' => 10,
            'field'       => '11',
            'fieldDesc'   => 'Instrumento o medio de pago',
        ],
        'localidades' => [
            'title'       => 'Catálogo ENR: Localidades | SOFOMES.COM',
            'description' => '3,689 localidades de México para SOFOM ENR.',
            'keywords'    => 'catalogo cnbv, rips f36, localidades, inegi, sofom enr',
            'view'        => 'catalogos/enr/localidades',
            'jsonFile'    => 'localidades.json',
            'recordCount' => 3689,
            'field'       => '26',
            'fieldDesc'   => 'Localidad donde se realizó la operación',
        ],
        'tipo-reporte' => [
            'title'       => 'Catálogo ENR: Tipo Reporte | SOFOMES.COM',
            'description' => '3 tipos de reporte PLD/FT para SOFOM ENR.',
            'keywords'    => 'catalogo cnbv, rips f36, tipo reporte, operaciones relevantes',
            'view'        => 'catalogos/enr/tipo_reporte',
            'jsonFile'    => 'tipo-reporte.json',
            'recordCount' => 3,
            'field'       => '6',
            'fieldDesc'   => 'Tipo de reporte RIPS F36',
        ],
    ];

    /**
     * Hub principal de catálogos RIPS.
     */
    public function hub(): string
    {
        return $this->renderPage('catalogos/hub', [
            'pageTitle'       => 'Catálogos RIPS F36 y F41 CNBV ' . date('Y') . ': Actividades Económicas, Monedas, Localidades | SOFOM ER y ENR',
            'pageDescription' => 'Catálogos RIPS oficiales CNBV para reportes PLD/FT: 7 catálogos F36 (SOFOM ENR) y 7 catálogos F41 (SOFOM ER). Actividades económicas, monedas, localidades, tipos de operación.',
            'pageKeywords'    => 'catalogos rips f36 cnbv, catalogos rips f41, actividades economicas sofom, monedas cnbv, localidades mexico, tipo operacion sofom, reportes pld sofom',
            'canonicalUrl'    => 'https://sofomes.com/catalogos-rips',
            'activeMenu'      => 'catalogos',
        ]);
    }

    /**
     * Índice de catálogos ER (F41).
     */
    public function erIndex(): string
    {
        return $this->renderPage('catalogos/er/index', [
            'pageTitle'       => 'Catálogos SOFOM ER (F41) | SOFOMES.COM',
            'pageDescription' => '7 catálogos oficiales CNBV RIPS F41 para SOFOM ER: actividades económicas, monedas, países, localidades, tipo operación, instrumento monetario y tipo reporte.',
            'pageKeywords'    => 'catalogos cnbv, rips f41, sofom er, pld, entidad regulada',
            'canonicalUrl'    => 'https://sofomes.com/catalogos-er',
            'activeMenu'      => 'catalogos',
        ]);
    }

    /**
     * Página individual de catálogo ER.
     */
    public function erCatalog(string $slug): string
    {
        if (! isset($this->erCatalogs[$slug])) {
            throw PageNotFoundException::forPageNotFound("Catálogo ER '{$slug}' no encontrado");
        }

        $config = $this->erCatalogs[$slug];

        $schemaLib = new DatasetSchema();
        $schemaJson = $schemaLib->generate([
            'name'             => $config['title'],
            'description'      => $config['description'],
            'url'              => "https://sofomes.com/catalogos-er/{$slug}",
            'keywords'         => ['RIPS F41', 'CNBV', 'SOFOM ER', 'PLD/FT'],
            'jsonFile'         => $config['jsonFile'],
            'recordCount'      => $config['recordCount'],
            'field'            => $config['field'],
            'fieldDescription' => $config['fieldDesc'],
        ]);

        return $this->renderPage($config['view'], [
            'pageTitle'       => $config['title'],
            'pageDescription' => $config['description'],
            'pageKeywords'    => $config['keywords'],
            'canonicalUrl'    => "https://sofomes.com/catalogos-er/{$slug}",
            'activeMenu'      => 'catalogos',
            'useDatatables'   => true,
            'schemaJson'      => $schemaJson,
            'catalogType'     => 'er',
            'catalogSlug'     => $slug,
            'jsonFile'        => $config['jsonFile'],
            'recordCount'     => $config['recordCount'],
            'field'           => $config['field'],
            'downloadHtml'    => $schemaLib->downloadButton($config['jsonFile'], $config['recordCount']),
        ]);
    }

    /**
     * Índice de catálogos ENR (F36).
     */
    public function enrIndex(): string
    {
        return $this->renderPage('catalogos/enr/index', [
            'pageTitle'       => 'Catálogos SOFOM ENR (F36) | SOFOMES.COM',
            'pageDescription' => '7 catálogos oficiales CNBV RIPS F36 para SOFOM ENR: actividades económicas, monedas, localidades, tipo operación SOFOM, tipo operación asesores, instrumento monetario y tipo reporte.',
            'pageKeywords'    => 'catalogos cnbv, rips f36, sofom enr, pld, entidad no regulada',
            'canonicalUrl'    => 'https://sofomes.com/catalogos-enr',
            'activeMenu'      => 'catalogos',
        ]);
    }

    /**
     * Página individual de catálogo ENR.
     */
    public function enrCatalog(string $slug): string
    {
        if (! isset($this->enrCatalogs[$slug])) {
            throw PageNotFoundException::forPageNotFound("Catálogo ENR '{$slug}' no encontrado");
        }

        $config = $this->enrCatalogs[$slug];

        $schemaLib = new DatasetSchema();
        $schemaJson = $schemaLib->generate([
            'name'             => $config['title'],
            'description'      => $config['description'],
            'url'              => "https://sofomes.com/catalogos-enr/{$slug}",
            'keywords'         => ['RIPS F36', 'CNBV', 'SOFOM ENR', 'PLD/FT'],
            'jsonFile'         => $config['jsonFile'],
            'recordCount'      => $config['recordCount'],
            'field'            => $config['field'],
            'fieldDescription' => $config['fieldDesc'],
        ]);

        return $this->renderPage($config['view'], [
            'pageTitle'       => $config['title'],
            'pageDescription' => $config['description'],
            'pageKeywords'    => $config['keywords'],
            'canonicalUrl'    => "https://sofomes.com/catalogos-enr/{$slug}",
            'activeMenu'      => 'catalogos',
            'useDatatables'   => true,
            'schemaJson'      => $schemaJson,
            'catalogType'     => 'enr',
            'catalogSlug'     => $slug,
            'jsonFile'        => $config['jsonFile'],
            'recordCount'     => $config['recordCount'],
            'field'           => $config['field'],
            'downloadHtml'    => $schemaLib->downloadButton($config['jsonFile'], $config['recordCount']),
        ]);
    }
}
