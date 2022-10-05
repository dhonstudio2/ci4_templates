<?php

namespace App\Libraries;

use CodeIgniter\Controller;
use CodeIgniter\Cookie\Cookie;
use DateTime;

class DhonHit extends Controller
{
    protected $session_name = 'DH1022s';
    protected $session_expire = '+104 weeks';

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

        $entity = isset($_SERVER['HTTP_USER_AGENT']) ? htmlentities($_SERVER['HTTP_USER_AGENT']) : 'BOT';

        $session_secure = ENVIRONMENT === 'production' ? true : false;
        $session_prefix = ENVIRONMENT === 'production' ? '__Secure-' : '__m-';
        $session_value  = "BOT";

        if (isset($_SERVER['HTTP_USER_AGENT'])) {
            helper('text');
            helper('cookie');

            $session_value  = random_string('alnum', 32) . $ip_address;
            $session_cookie = (new Cookie($this->session_name))
                ->withValue($session_value)
                ->withPrefix($session_prefix)
                ->withExpires(new DateTime($this->session_expire))
                ->withPath('/')
                ->withDomain('')
                ->withSecure($session_secure)
                ->withHTTPOnly(true)
                ->withSameSite(Cookie::SAMESITE_LAX);

            if (!get_cookie($session_prefix . $this->session_name) || get_cookie($session_prefix . $this->session_name) === '' || get_cookie($session_prefix . $this->session_name) === null) {
                set_cookie($session_cookie);
            } else {
                $session_value = get_cookie($session_prefix . $this->session_name);
            }
        }

        $source_value = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : base_url();

        if ($_GET) {
            $get_join = [];
            foreach ($_GET as $key => $value) {
                array_push($get_join, $key . '=' . $value);
            }
            $get = '?' . implode('&', $get_join);
        } else {
            $get = '';
        }
        $page_value = uri_string() ? base_url() . '/' . uri_string() . $get : base_url() . '/';

        $dhoncurl->post('hit', [
            'Content-Type'  => 'application/json',
            'Authorization' => "Bearer " . $token,
        ], [
            'address' => $ip_address,
            'entity' => $entity,
            'session' => $session_value,
            'source' => $source_value,
            'page' => $page_value,
        ])['Data'];
    }
}
