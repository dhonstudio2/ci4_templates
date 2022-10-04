<?php

namespace App\Libraries;

use CodeIgniter\Controller;

class DhonCurl extends Controller
{
    protected $client;
    protected $api_url = 'http://localhost:8080/';

    public function __construct()
    {
        $this->client = \Config\Services::curlrequest();
    }

    public function post($endpoint, $headers, $form_params)
    {
        $result = $this->client->request('POST', $this->api_url . $endpoint, [
            'headers' => $headers,
            'form_params' => $form_params,
        ])->getJSON();
        return json_decode(json_decode($result, true), true);
    }

    public function get($endpoint, $headers)
    {
        $result = $this->client->request('GET', $this->api_url . $endpoint, [
            'headers' => $headers,
        ]);
        return json_decode(json_decode($result->getJSON(), true), true);
    }
}
