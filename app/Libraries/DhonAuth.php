<?php

namespace App\Libraries;

use CodeIgniter\Controller;

class DhonAuth extends Controller
{
    public $token;

    public function __construct()
    {
    }

    public function auth()
    {
        $dhoncurl = new DhonCurl();
        $this->token = $dhoncurl->post('login', '', [
            "email" => getenv('API_SECRET_EMAIL'),
            "password" => getenv('API_SECRET_PASS')
        ])['access_token'];
    }
}
