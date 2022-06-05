<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PesertaModel;
use App\Models\UsersModel;
class Dashboard extends BaseController
{
    protected $PageData;
    protected $Model; //Default Models Of this Controler
    protected $pager;
	public function __construct()
	{
        $this->PageData = $this->attributePage(); //Attribute Of Page
        $this->Peserta = new PesertaModel();
        $this->User = new UsersModel();
        $pager = \Config\Services::pager();
    }
    
    //ATRIBUTE THIS PAGE
    private function attributePage()
	{
		return  [
			'title' => 'Siscapaska | Admin/Peserta',
            'request' => \Config\Services::request(),
			'app' => 'SISCAPASKA',
		];
    }
    public function index()
    {
        $data = [
            'AttributePage' =>$this->PageData,
            'peserta' => $this->Peserta->countAllResults(),
            'users' => $this->User->countAllResults(),
        ];
        return view('admin/dashboard', $data);
    }
}
