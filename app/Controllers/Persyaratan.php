<?php

namespace App\Controllers;

class Persyaratan extends BaseController
{
    public function index()
    {
        $data = [
            'request' => $this->request,
            'session' => $this->session
        ];
        return view('persyaratan', $data);
    }
}
