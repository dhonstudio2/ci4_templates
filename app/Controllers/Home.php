<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message', $this->data);
    }

    public function templatemo($name, $page = '')
    {
        $view = $page ? $name . '/' . $page : $name;
        $this->data['template_name'] = $name;
        $this->data['template_page'] = $page;
        $this->data['title'] = $name == "digitaltrend" && $page ? "Digital Trend - " . ucfirst(str_replace("-", " ", $page)) : "Digital Trend HTML Template";
        return view('templatemo/' . $view, $this->data);
    }
}
