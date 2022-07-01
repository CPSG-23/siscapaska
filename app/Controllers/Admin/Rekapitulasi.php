<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PesertaModel;
use App\Models\ParadeModel;
use App\Models\KesehatanModel;
use App\Models\KesenianModel;
use App\Models\PbbModel;
use App\Models\SamaptaModel;
use App\Models\WawancaraModel;


class Rekapitulasi extends BaseController
{
    
    protected $PageData;
    protected $Model; //Default Models Of this Controler
    protected $pager;
	protected $request;
	public function __construct()
	{
		$this->db = db_connect();
		$this->Model = new PesertaModel(); //Set Default Models Of this Controler
        $this->PageData = $this->attributePage(); //Attribute Of Page
        $pager = \Config\Services::pager();

    }
    
    //ATRIBUTE THIS PAGE
    private function attributePage()
	{
		return  [
			'title' => 'SISCAPASKA | Rekapitulasi Hasil Seleksi',
			'request' => \Config\Services::request(),
			'app' => 'SISCAPASKA',
		];
    }

    //INDEX 
    public function index()
	{
		$peserta = $this->db->query("SELECT * FROM v_rekapitulasi")->getResult();
		$data = [
			'AttributePage' =>$this->PageData,
			'content' => 'Rekapitulasi Peserta',
            'data' => $this->db->query("SELECT * FROM v_rekapitulasi")->getResult(),
            'pager' => $this->Model->pager
		];
		return view('admin/rekapitulasi/index_rekapitulasi', $data);
    }
    
    //ACTION CREATE
	public function create_action()
	{
		$data =[
				     'id' => $this->request->getVar('id'),
				     'status_sertifikat' => $this->request->getVar('status_sertifikat')        
				];
		$this->Model->save($data);
		session()->setFlashdata('message', 'Create Record Success');
		return redirect()->to(base_url('/admin/sertifikat'));
    }

    //DELETE
	public function delete($id)
	{
		$row = $this->Model->find(['id' => $id]);
		if ($row) {
            $this->Model->delete($id);
            session()->setFlashdata('message', 'Delete Record Success');
            return redirect()->to(base_url('/admin/sertifikat'));
        } else {
            session()->setFlashdata('message', 'Record Not Found');
            return redirect()->to(base_url('/admin/sertifikat'));
        }

    }

    //RULES
    public function _rules() 
    {
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('hak_access', 'hak access', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
