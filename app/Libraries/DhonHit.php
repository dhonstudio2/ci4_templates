<?php

namespace App\Libraries;

use CodeIgniter\Controller;

class DhonHit extends Controller
{
    public function hit($token)
    {
        $dhoncurl = new DhonCurl();

        $ip_address =
            !empty($_SERVER["HTTP_X_CLUSTER_CLIENT_IP"]) ? $_SERVER["HTTP_X_CLUSTER_CLIENT_IP"]
            : (!empty($_SERVER["HTTP_X_CLIENT_IP"]) ? $_SERVER["HTTP_X_CLIENT_IP"]
                : (!empty($_SERVER["HTTP_CLIENT_IP"]) ? $_SERVER["HTTP_CLIENT_IP"]
                    : (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"]
                        : (!empty($_SERVER["HTTP_X_FORWARDED"]) ? $_SERVER["HTTP_X_FORWARDED"]
                            : (!empty($_SERVER["HTTP_FORWARDED_FOR"]) ? $_SERVER["HTTP_FORWARDED_FOR"]
                                : (!empty($_SERVER["HTTP_FORWARDED"]) ? $_SERVER["HTTP_FORWARDED"]
                                    : (!empty($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"]
                                        : '::0'
                                    )))))));

        if (ENVIRONMENT !== 'development') {
            foreach (explode(',', $ip_address) as $ip) {
                $ip = trim($ip); // just to be safe

                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                    $ip_address = $ip;
                }
            }
        }

        $addresses = $dhoncurl->get('address/getListByIP/' . $ip_address, [
            'Content-Type'  => 'application/json',
            'Authorization' => "Bearer " . $token,
        ])['Data'];

        $id_address = count($addresses) > 0 ? $addresses[0]['id_address'] : $dhoncurl->post('address', [
            'Content-Type'  => 'application/json',
            'Authorization' => "Bearer " . $token,
        ], [
            'ip_address' => $ip_address,
            'ip_info' => json_encode($dhoncurl->curl_get("http://ip-api.com/json/{$ip_address}")),
        ])['Data']['id_address'];
    }
}
