<?php

namespace App\Libraries;

/**
 * Proxy CONDUSEF SIPRES con cache de 24 horas.
 * Migración de api/condusef-proxy.php a librería CI4.
 */
class CondusefProxy
{
    private string $condusefUrl  = 'https://webapps.condusef.gob.mx/SIPRES/jsp/pub/resulbusq.jsp';
    private string $cacheFile;
    private int    $cacheLifetime = 86400; // 24 horas

    private array $params = [
        'tipo' => '1',      // SOFOMes
        'pnom' => '',       // Sin filtro de nombre
        'pedo' => '',       // Sin filtro de estado
        'psec' => '69,68',  // Sectores: SOFOM ENR (69) + SOFOM ER (68)
        'psta' => '60',     // Status: En operación (código 60)
    ];

    public function __construct()
    {
        $this->cacheFile = WRITEPATH . 'cache/condusef-cache.json';
    }

    /**
     * Obtiene datos de SOFOMes con lógica de cache.
     */
    public function getData(bool $forceRefresh = false): array
    {
        if ($forceRefresh && file_exists($this->cacheFile)) {
            unlink($this->cacheFile);
        }

        if (! $forceRefresh && file_exists($this->cacheFile)) {
            $cacheAge = time() - filemtime($this->cacheFile);

            if ($cacheAge < $this->cacheLifetime) {
                $data = json_decode(file_get_contents($this->cacheFile), true);
                $data['cached']                 = true;
                $data['cache_age_hours']        = round($cacheAge / 3600, 1);
                $data['cache_expires_in_hours'] = round(($this->cacheLifetime - $cacheAge) / 3600, 1);

                return $data;
            }
        }

        return $this->fetchFromCondusef();
    }

    private function fetchFromCondusef(): array
    {
        try {
            $ch = curl_init($this->condusefUrl);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST           => true,
                CURLOPT_POSTFIELDS     => http_build_query($this->params),
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_MAXREDIRS      => 5,
                CURLOPT_TIMEOUT        => 30,
                CURLOPT_SSL_VERIFYPEER => ENVIRONMENT !== 'development',
                CURLOPT_USERAGENT      => 'SOFOMES.COM/2.0',
                CURLOPT_HTTPHEADER     => [
                    'Content-Type: application/x-www-form-urlencoded',
                    'Accept: text/html,application/xhtml+xml,application/xml',
                ],
            ]);

            $html     = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $error    = curl_error($ch);
            curl_close($ch);

            if ($error) {
                throw new \RuntimeException("cURL Error: {$error}");
            }
            if ($httpCode !== 200) {
                throw new \RuntimeException("HTTP Error: {$httpCode}");
            }
            if (empty($html)) {
                throw new \RuntimeException('Respuesta vacía de CONDUSEF');
            }

            $sofomes  = $this->parseHtml($html);
            $response = [
                'success' => true,
                'total'   => count($sofomes),
                'sofomes' => $sofomes,
                'fecha'   => date('c'),
                'source'  => 'CONDUSEF SIPRES',
                'params'  => $this->params,
                'cached'  => false,
            ];

            file_put_contents(
                $this->cacheFile,
                json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
            );

            return $response;
        } catch (\RuntimeException $e) {
            log_message('error', 'CondusefProxy: ' . $e->getMessage());

            return $this->emergencyFallback($e->getMessage());
        }
    }

    private function parseHtml(string $html): array
    {
        // CONDUSEF responde en ISO-8859-1 (Latin-1), convertir a UTF-8
        $html = mb_convert_encoding($html, 'UTF-8', 'ISO-8859-1');

        libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->loadHTML('<?xml encoding="UTF-8">' . $html);
        libxml_clear_errors();

        $xpath  = new \DOMXPath($dom);
        $tables = $xpath->query("//table[@class='table table-striped table-responsiv']");

        if ($tables->length < 2) {
            throw new \RuntimeException(
                'Tabla de resultados no encontrada. Tables: ' . $tables->length
            );
        }

        $rows    = $xpath->query('.//tbody/tr', $tables->item(1));
        $sofomes = [];

        foreach ($rows as $row) {
            $cells = $xpath->query('.//td', $row);
            if ($cells->length < 8) {
                continue;
            }

            $sofomes[] = [
                'clave'                => trim($cells->item(0)->textContent),
                'denominacion'         => trim($cells->item(1)->textContent),
                'nombre_corto'         => trim($cells->item(2)->textContent),
                'estatus'              => trim(strip_tags($cells->item(3)->textContent)),
                'sector'               => trim($cells->item(4)->textContent),
                'estado'               => trim($cells->item(5)->textContent),
                'ultima_actualizacion' => trim($cells->item(6)->textContent),
                'no_localizable'       => trim($cells->item(7)->textContent),
            ];
        }

        return $sofomes;
    }

    private function emergencyFallback(string $error): array
    {
        if (file_exists($this->cacheFile)) {
            $data     = json_decode(file_get_contents($this->cacheFile), true);
            $cacheAge = time() - filemtime($this->cacheFile);

            $data['cached']             = true;
            $data['cache_age_hours']    = round($cacheAge / 3600, 1);
            $data['emergency_fallback'] = true;
            $data['condusef_error']     = $error;
            $data['warning']            = 'CONDUSEF no disponible. Mostrando datos del último cache.';

            return $data;
        }

        return [
            'success' => false,
            'error'   => $error,
            'fecha'   => date('c'),
            'message' => 'CONDUSEF no disponible y no hay cache previo.',
        ];
    }
}
