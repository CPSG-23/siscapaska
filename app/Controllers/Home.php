<?php

namespace App\Controllers;

use App\Models\PesertaModel;

class Home extends BaseController
{
    public function __construct()
	{
		$this->db = db_connect();
        $this->Model = new PesertaModel();
        $this->builder = $this->db->table('peserta');
    }
    public function index()
    {
        $data = [
            'sekolah' => $this->db->query("SELECT * FROM sekolah")->getResult(),
            'kode_peserta' => $this->Model->kodePeserta('P'),
            'request' => $this->request,
            'session' => $this->session
        ];
        return view('home', $data);
    }
}
