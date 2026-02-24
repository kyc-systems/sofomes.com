<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * BaseController - Controlador base para sofomes.com
 *
 * Provee el método renderPage() que unifica header + footer en un solo layout.
 * Todos los controllers del sitio deben extender esta clase.
 */
abstract class BaseController extends Controller
{
    /**
     * Helpers disponibles en todos los controllers.
     *
     * @var list<string>
     */
    protected $helpers = ['url', 'html'];

    /**
     * Datos default que se pasan a todas las vistas.
     * Se pueden sobreescribir desde cada controller.
     */
    protected array $viewData = [
        'activeMenu'    => '',
        'useDatatables' => false,
        'schemaJson'    => null,
        'pageScript'    => null,
        'pageKeywords'  => null,
        'isHomepage'    => false,
    ];

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }

    /**
     * Renderiza una vista dentro del layout principal.
     *
     * @param string $view Ruta relativa de la vista (ej: 'articulos/er_vs_enr')
     * @param array  $data Datos específicos de la página
     * @return string HTML completo de la página
     */
    protected function renderPage(string $view, array $data = []): string
    {
        // Merge datos default con datos específicos de la página
        $data = array_merge($this->viewData, $data);

        // Canonical URL automática si no se especifica
        if (empty($data['canonicalUrl'])) {
            $data['canonicalUrl'] = 'https://sofomes.com' . uri_string();
        }

        // Renderizar la vista de contenido
        $data['content'] = view($view, $data);

        // Pasar todo al layout principal
        return view('layouts/main', $data);
    }
}
