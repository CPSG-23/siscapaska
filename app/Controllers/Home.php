<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
	{
		$this->db = db_connect();
    }
    public function index()
    {
        $data = [
            'sekolah' => $this->db->query("SELECT * FROM sekolah")->getResult()
        ];
        return view('layouts/front_layout', $data);
        // return view('home');
    }
}
