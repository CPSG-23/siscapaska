<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\SamaptaModel;
use App\Models\PesertaModel;

class Samapta extends BaseController
{
    protected $PageData;
    protected $Model; //Default Models Of this Controler
    protected $pager;
	public function __construct()
	{
		$this->Model = new SamaptaModel(); //Set Default Models Of this Controler
        $this->PageData = $this->attributePage(); //Attribute Of Page
        $pager = \Config\Services::pager();
    }
    
    //ATRIBUTE THIS PAGE
    private function attributePage()
	{
		return  [
			'title' => 'SICAPASKA | Samapta',
			'request' => \Config\Services::request(),
			'app' => 'SICAPASKA',
		];
    }

    //INDEX 
    public function index()
	{
		$peserta = new PesertaModel();
		$data = [
			'AttributePage' =>$this->PageData,
			'content' => 'Data Nilai Samapta',
            'data' => $this->Model->paginate(5, 'paging'),
			'peserta' => $peserta->getData(),
            'pager' => $this->Model->pager
		];
		return view('admin/samapta/index_samapta', $data);
    }
    //ACTION CREATE
	public function create_action()
	{
		$kode = $this->request->getVar('kode_peserta');
		$peserta = new PesertaModel();
		$samapta = new SamaptaModel();
		$pesertaFind = $peserta->getKode($kode);
		$dataFind = $samapta->getKode($kode);
		$lari = 0;
		$sit_up = 0;
		$push_up = 0;
		$shuttle_run = 0;
		if ($dataFind == true) {
			if ($pesertaFind[0]['jk'] == 'L') {
				if($this->request->getVar('lari') <= 4){
					$lari = 15;
				}elseif ($this->request->getVar('lari') > 4 && $this->request->getVar('lari') <= 4.25) {
					$lari = 16;
				}elseif ($this->request->getVar('lari') > 4.25 && $this->request->getVar('lari') <= 4.5) {
					$lari = 17;
				}elseif ($this->request->getVar('lari') > 4.5 && $this->request->getVar('lari') <= 4.75) {
					$lari = 18;
				}elseif ($this->request->getVar('lari') > 4.75 && $this->request->getVar('lari') <= 5) {
					$lari = 19;
				}elseif ($this->request->getVar('lari') > 5 && $this->request->getVar('lari') <= 5.25) {
					$lari = 20;
				}elseif ($this->request->getVar('lari') > 5.25 && $this->request->getVar('lari') <= 5.5) {
					$lari = 21;
				}elseif ($this->request->getVar('lari') > 5.5 && $this->request->getVar('lari') <= 5.75) {
					$lari = 22;
				}elseif ($this->request->getVar('lari') > 5.75 && $this->request->getVar('lari') <= 6) {
					$lari = 23;
				}elseif ($this->request->getVar('lari') > 6 && $this->request->getVar('lari') <= 6.25) {
					$lari = 24;
				}else{
					$lari = 25;
				}
				for ($i=10; $i <=30 ; $i++) { 
					if ($this->request->getVar('sit_up') == $i) {
						$sit_up = $i-6;
					}
				}
				for ($i=10; $i <=30 ; $i++) { 
					if ($this->request->getVar('sit_up') == $i) {
						if($i > 30 ){$sit_up = 25;}else{$sit_up = $i-6;}
					}
				}
				for ($i=10; $i <=30 ; $i++) { 
					if ($this->request->getVar('push_up') == $i) {
						if($i > 30 ){$push_up = 25;}else{$push_up = $i-6;}
					}
				}
				for ($i=10; $i <=30 ; $i++) { 
					if ($this->request->getVar('shuttle_run') == $i) {
						if($i > 30 ){$shuttle_run = 25;}else{$shuttle_run = $i-6;}
					}
				}
			}else{
				if($this->request->getVar('lari') <= 3.5){
					$lari = 15;
				}elseif ($this->request->getVar('lari') > 3.5 && $this->request->getVar('lari') <= 3.75) {
					$lari = 16;
				}elseif ($this->request->getVar('lari') > 3.75 && $this->request->getVar('lari') <= 4) {
					$lari = 17;
				}elseif ($this->request->getVar('lari') > 4 && $this->request->getVar('lari') <= 4.25) {
					$lari = 18;
				}elseif ($this->request->getVar('lari') > 4.25 && $this->request->getVar('lari') <= 4.5) {
					$lari = 19;
				}elseif ($this->request->getVar('lari') > 4.5 && $this->request->getVar('lari') <= 4.75) {
					$lari = 20;
				}elseif ($this->request->getVar('lari') > 4.75 && $this->request->getVar('lari') <= 5) {
					$lari = 21;
				}elseif ($this->request->getVar('lari') > 5 && $this->request->getVar('lari') <= 5.25) {
					$lari = 22;
				}elseif ($this->request->getVar('lari') > 5.25 && $this->request->getVar('lari') <= 5.5) {
					$lari = 23;
				}elseif ($this->request->getVar('lari') > 6 && $this->request->getVar('lari') <= 5.75) {
					$lari = 24;
				}else{
					$lari = 25;
				}
				for ($i=5; $i <=25 ; $i++) { 
					if ($this->request->getVar('sit_up') == $i) {
						if($i > 25) { $sit_up = 25;}{$sit_up = $i-1;};
					}
				}
				for ($i=5; $i <=25 ; $i++) { 
					if ($this->request->getVar('push_up') == $i) {
						if($i > 25) { $push_up = 25;}{$push_up = $i-1;};
					}
				}
				for ($i=5; $i <=25 ; $i++) { 
					if ($this->request->getVar('shuttle_run') == $i) {
						if($i > 25) { $shuttle_run = 25;}{$shuttle_run = $i-1;};
					}
				}
			}
			$data =[
				'id' => $dataFind[0]['id'],
				'kode_peserta' => $this->request->getVar('kode_peserta'),
				'lari' => $lari,
				'sit_up' => $sit_up,
				'push_up' => $push_up,
				'shuttle_run' => $shuttle_run,
				'total_nilai' => $lari + $sit_up + $push_up + $shuttle_run
		   ];
		   session()->setFlashdata('message', 'Data Berhasil Di Ubah');
		   $this->Model->save($data);
		}else{
			if ($pesertaFind[0]['jk'] == 'L') {
				if($this->request->getVar('lari') <= 4){
					$lari = 15;
				}elseif ($this->request->getVar('lari') > 4 && $this->request->getVar('lari') <= 4.25) {
					$lari = 16;
				}elseif ($this->request->getVar('lari') > 4.25 && $this->request->getVar('lari') <= 4.5) {
					$lari = 17;
				}elseif ($this->request->getVar('lari') > 4.5 && $this->request->getVar('lari') <= 4.75) {
					$lari = 18;
				}elseif ($this->request->getVar('lari') > 4.75 && $this->request->getVar('lari') <= 5) {
					$lari = 19;
				}elseif ($this->request->getVar('lari') > 5 && $this->request->getVar('lari') <= 5.25) {
					$lari = 20;
				}elseif ($this->request->getVar('lari') > 5.25 && $this->request->getVar('lari') <= 5.5) {
					$lari = 21;
				}elseif ($this->request->getVar('lari') > 5.5 && $this->request->getVar('lari') <= 5.75) {
					$lari = 22;
				}elseif ($this->request->getVar('lari') > 5.75 && $this->request->getVar('lari') <= 6) {
					$lari = 23;
				}elseif ($this->request->getVar('lari') > 6 && $this->request->getVar('lari') <= 6.25) {
					$lari = 24;
				}else{
					$lari = 25;
				}
				for ($i=10; $i <=30 ; $i++) { 
					if ($this->request->getVar('sit_up') == $i) {
						if($i > 30 ){$sit_up = 25;}else{$sit_up = $i-6;}
					}
				}
				for ($i=10; $i <=30 ; $i++) { 
					if ($this->request->getVar('push_up') == $i) {
						if($i > 30 ){$push_up = 25;}else{$push_up = $i-6;}
					}
				}
				for ($i=10; $i <=30 ; $i++) { 
					if ($this->request->getVar('shuttle_run') == $i) {
						if($i > 30 ){$shuttle_run = 25;}else{$shuttle_run = $i-6;}
					}
				}
			}else{
				if($this->request->getVar('lari') <= 3.5){
					$lari = 15;
				}elseif ($this->request->getVar('lari') > 3.5 && $this->request->getVar('lari') <= 3.75) {
					$lari = 16;
				}elseif ($this->request->getVar('lari') > 3.75 && $this->request->getVar('lari') <= 4) {
					$lari = 17;
				}elseif ($this->request->getVar('lari') > 4 && $this->request->getVar('lari') <= 4.25) {
					$lari = 18;
				}elseif ($this->request->getVar('lari') > 4.25 && $this->request->getVar('lari') <= 4.5) {
					$lari = 19;
				}elseif ($this->request->getVar('lari') > 4.5 && $this->request->getVar('lari') <= 4.75) {
					$lari = 20;
				}elseif ($this->request->getVar('lari') > 4.75 && $this->request->getVar('lari') <= 5) {
					$lari = 21;
				}elseif ($this->request->getVar('lari') > 5 && $this->request->getVar('lari') <= 5.25) {
					$lari = 22;
				}elseif ($this->request->getVar('lari') > 5.25 && $this->request->getVar('lari') <= 5.5) {
					$lari = 23;
				}elseif ($this->request->getVar('lari') > 6 && $this->request->getVar('lari') <= 5.75) {
					$lari = 24;
				}else{
					$lari = 25;
				}
				
				for ($i=5; $i <=25 ; $i++) { 
					if ($this->request->getVar('sit_up') == $i) {
						if($i > 25) { $sit_up = 25;}{$sit_up = $i-1;};
					}
				}
				for ($i=5; $i <=25 ; $i++) { 
					if ($this->request->getVar('push_up') == $i) {
						if($i > 25) { $push_up = 25;}{$push_up = $i-1;};
					}
				}
				for ($i=5; $i <=25 ; $i++) { 
					if ($this->request->getVar('shuttle_run') == $i) {
						if($i > 25) { $shuttle_run = 25;}{$shuttle_run = $i-1;};
					}
				}

			}
			$data =[
				'id' => $this->request->getVar('id'),
				'kode_peserta' => $this->request->getVar('kode_peserta'),
				'lari' => $lari,
				'sit_up' => $sit_up,
				'push_up' => $push_up,
				'shuttle_run' => $shuttle_run,
				'total_nilai' => $lari + $sit_up + $push_up + $shuttle_run
		   ];
		   $this->Model->save($data);
		   session()->setFlashdata('message', 'Create Record Success');
		}
		return redirect()->to(base_url('admin/nilai/samapta'));
    }

    //DELETE
	public function delete($id)
	{
		$row = $this->Model->find(['id' => $id]);
		if ($row) {
            $this->Model->delete($id);
            session()->setFlashdata('message', 'Delete Record Success');
            return redirect()->to(base_url('admin/nilai/samapta'));
        } else {
            session()->setFlashdata('message', 'Record Not Found');
            return redirect()->to(base_url('admin/nilai/samapta'));
        }

    }

    //RULES
    public function _rules() 
    {
	$this->form_validation->set_rules('kode_peserta', 'kode peserta', 'trim|required');
	$this->form_validation->set_rules('lari', 'lari', 'trim|required|numeric');
	$this->form_validation->set_rules('sit_up', 'sit up', 'trim|required|numeric');
	$this->form_validation->set_rules('push_up', 'push up', 'trim|required|numeric');
	$this->form_validation->set_rules('shuttle_run', 'shuttle run', 'trim|required|numeric');
	$this->form_validation->set_rules('total_nilai', 'total nilai', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}