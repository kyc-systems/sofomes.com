<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ─── Página principal ───────────────────────────────────────────────────────
$routes->get('/', 'HomeController::index');

// ─── Directorio ─────────────────────────────────────────────────────────────
$routes->get('lista-sofomes-mexico', 'DirectorioController::index');

// ─── Artículos informativos ─────────────────────────────────────────────────
$routes->get('sofom-er-vs-enr', 'ArticulosController::erVsEnr');
$routes->get('reportes-regulatorios-cnbv', 'ArticulosController::reportesRegulatorios');
$routes->get('layout-reportes-pld', 'ArticulosController::layoutReportesPld');
$routes->get('mejores-sofomes-mexico-2025', 'ArticulosController::mejoresSofomes');
$routes->get('software-pld-ft-requisitos-cnbv', 'ArticulosController::softwarePld');

// ─── Hub de catálogos ───────────────────────────────────────────────────────
$routes->get('catalogos-rips', 'CatalogosController::hub');

// ─── Catálogos ER (F41) ────────────────────────────────────────────────────
$routes->get('catalogos-er', 'CatalogosController::erIndex');
$routes->get('catalogos-er/(:segment)', 'CatalogosController::erCatalog/$1');

// ─── Catálogos ENR (F36) ───────────────────────────────────────────────────
$routes->get('catalogos-enr', 'CatalogosController::enrIndex');
$routes->get('catalogos-enr/(:segment)', 'CatalogosController::enrCatalog/$1');

// ─── API ────────────────────────────────────────────────────────────────────
$routes->get('api/condusef-proxy', 'ApiController::condusefProxy');
$routes->post('api/condusef-proxy', 'ApiController::condusefProxy');

// ─── Redirects 301 (páginas legacy) ────────────────────────────────────────
$routes->get('catalogos-rips-f36', static function () {
    return redirect()->to('/catalogos-rips', 301);
});

$routes->get('buscar', static function () {
    return redirect()->to('/lista-sofomes-mexico', 301);
});

$routes->get('catalogos', static function () {
    return redirect()->to('/catalogos-enr', 301);
});

$routes->get('catalogos/(:segment)', static function (string $slug) {
    $map = [
        'tipo-operacion-asesor' => 'tipo-operacion-asesores-inv',
    ];
    $target = $map[$slug] ?? $slug;
    return redirect()->to('/catalogos-enr/' . $target, 301);
});
