<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // $this->load->helper('url');
        // $this->load->view('welcome_message');
        return view('welcome_message');
    }
}
