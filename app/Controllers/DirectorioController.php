<?php

namespace App\Controllers;

class DirectorioController extends BaseController
{
    public function index(): string
    {
        return $this->renderPage('directorio/index', [
            'pageTitle'       => 'Lista Completa de SOFOMes en México ' . date('Y') . ' | Directorio CONDUSEF',
            'pageDescription' => 'Directorio searchable de todas las SOFOMes en operación en México. Busca por nombre, estado, tipo (ER/ENR). Datos actualizados desde CONDUSEF SIPRES.',
            'pageKeywords'    => 'lista sofomes, sofomes méxico, directorio sofomes, sofomes condusef, sofom er, sofom enr',
            'canonicalUrl'    => 'https://sofomes.com/lista-sofomes-mexico',
            'activeMenu'      => 'directorio',
        ]);
    }
}
