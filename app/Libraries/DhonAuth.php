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
            "email" => "doon13@gmail.com",
            "password" => "adminDS"
        ])['access_token'];
    }
}
