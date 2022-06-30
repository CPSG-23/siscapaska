<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'request' => $this->request,
            'session' => $this->session
        ];
        return view('tentang', $data);
    }
}
