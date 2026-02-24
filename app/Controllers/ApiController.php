<?php

namespace App\Controllers;

use App\Libraries\CondusefProxy;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class ApiController extends Controller
{
    public function condusefProxy(): ResponseInterface
    {
        $this->response->setHeader('Content-Type', 'application/json; charset=utf-8');
        $this->response->setHeader('Access-Control-Allow-Origin', '*');
        $this->response->setHeader('Access-Control-Allow-Methods', 'POST, GET, OPTIONS');
        $this->response->setHeader('Access-Control-Allow-Headers', 'Content-Type');

        if ($this->request->getMethod() === 'OPTIONS') {
            return $this->response->setStatusCode(200);
        }

        $forceRefresh = $this->request->getGet('refresh') === 'true';
        $proxy = new CondusefProxy();
        $data  = $proxy->getData($forceRefresh);

        return $this->response->setJSON($data);
    }
}
