<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\ParadeModel;
use App\Models\PesertaModel;

class Parade extends BaseController
{
    /**
	 * Class constructor.
     */	
    protected $PageData;
    protected $Model; //Default Models Of this Controler
    protected $pager;
	public function __construct()
	{
		$this->Model = new ParadeModel(); //Set Default Models Of this Controler
        $this->PageData = $this->attributePage(); //Attribute Of Page
        $pager = \Config\Services::pager();
    }
    
    //ATRIBUTE THIS PAGE
    private function attributePage()
	{
		return  [
			'title' => 'SICAPASKA | Parade',
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
			'content' => 'Data Nilai Parade',
            'data' => $this->Model->paginate(5, 'paging'),
			'peserta' => $peserta->getData(),
            'pager' => $this->Model->pager
		];
		return view('admin/parade/index_parade', $data);
    }

    
    //ACTION CREATE
	public function create_action()
	{
		$kode = $this->request->getVar('kode_peserta');
		$parade = new ParadeModel();
		$dataFind = $parade->getKode($kode);
		$peserta = new PesertaModel();
		$pesertaFind = $peserta->getKode($kode);
		$tb = 0;
		$bb = 0;
		if ($pesertaFind[0]['jk'] == 'L') {
			if($pesertaFind['0']['tinggi_badan'] < 165){
				$tb = 35;
			}elseif ($pesertaFind['0']['tinggi_badan'] >= 165 && $pesertaFind['0']['tinggi_badan'] <= 170) {
				$tb = 40;
			}elseif ($pesertaFind['0']['tinggi_badan'] >= 171 && $pesertaFind['0']['tinggi_badan'] <= 175) {
				$tb = 45;
			}elseif ($pesertaFind['0']['tinggi_badan'] >= 176 && $pesertaFind['0']['tinggi_badan'] <= 180) {
				$tb = 40;
			}else{
				$tb = 35;
			}
		}else{
			if($pesertaFind['0']['tinggi_badan'] < 160){
				$tb = 35;
			}elseif ($pesertaFind['0']['tinggi_badan'] >= 160 && $pesertaFind['0']['tinggi_badan'] <= 165) {
				$tb = 40;
			}elseif ($pesertaFind['0']['tinggi_badan'] >= 166 && $pesertaFind['0']['tinggi_badan'] <= 170) {
				$tb = 45;
			}elseif ($pesertaFind['0']['tinggi_badan'] >= 171 && $pesertaFind['0']['tinggi_badan'] <= 175) {
				$tb = 40;
			}else{
				$tb = 35;
			}
		}
		$tb_peserta = $pesertaFind[0]['tinggi_badan'];
		$bb_peserta = $pesertaFind[0]['berat_badan'];
		if($tb_peserta-$bb_peserta == 110){
			$bb = 30;
		}elseif ($tb_peserta-$bb_peserta == 109 || $tb_peserta-$bb_peserta == 111) {
			$bb = 29;
		}elseif ($tb_peserta-$bb_peserta == 108 || $tb_peserta-$bb_peserta == 112) {
			$bb = 28;
		}elseif ($tb_peserta-$bb_peserta == 107 || $tb_peserta-$bb_peserta == 113) {
			$bb = 27;
		}elseif ($tb_peserta-$bb_peserta == 106 || $tb_peserta-$bb_peserta == 114) {
			$bb = 26;
		}elseif ($tb_peserta-$bb_peserta <= 105 || $tb_peserta-$bb_peserta >= 115) {
			$bb = 25;
		}else{
			$bb = 0;
		}
		if($dataFind == true){
			$dataUpdate =[
				'id' => $dataFind[0]['id'],
				'kode_peserta' => $this->request->getVar('kode_peserta'),
				'tinggi_badan' => $tb,
				'berat_badan' => $bb,
				'mata' => $this->request->getVar('mata'),
				'bahu' => $this->request->getVar('bahu'),
				'tangan' => $this->request->getVar('tangan'),
				'kaki' => $this->request->getVar('kaki'),
				'platefoot' => $this->request->getVar('platefoot'),
				'total_nilai' => $tb + $bb + $this->request->getVar('mata')+$this->request->getVar('bahu')+$this->request->getVar('tangan')+
				$this->request->getVar('kaki')+$this->request->getVar('platefoot'),
	
			];
			$this->Model->save($dataUpdate);
			session()->setFlashdata('message', 'Update Record Success');
		}else{
			$data =[
				'id' => $this->request->getVar('id'),
				'kode_peserta' => $this->request->getVar('kode_peserta'),
				'tinggi_badan' => $tb,
				'berat_badan' => $bb,
				'mata' => $this->request->getVar('mata'),
				'bahu' => $this->request->getVar('bahu'),
				'tangan' => $this->request->getVar('tangan'),
				'kaki' => $this->request->getVar('kaki'),
				'platefoot' => $this->request->getVar('platefoot'),
				'total_nilai' => $tb + $bb + $this->request->getVar('mata')+$this->request->getVar('bahu')+$this->request->getVar('tangan')+
				$this->request->getVar('kaki')+$this->request->getVar('platefoot'),
			
					];
			$this->Model->save($data);
			session()->setFlashdata('message', 'Create Record Success');
		}
		return redirect()->to(base_url('admin/nilai/parade'));
    }
    
    
    //DELETE
	public function delete($id)
	{
		$row = $this->Model->find(['id' => $id]);
		if ($row) {
            $this->Model->delete($id);
            session()->setFlashdata('message', 'Delete Record Success');
            return redirect()->to(base_url('admin/nilai/parade'));
        } else {
            session()->setFlashdata('message', 'Record Not Found');
            return redirect()->to(base_url('admin/nilai/parade'));
        }

    }

    //RULES
    public function _rules() 
    {
	$this->form_validation->set_rules('kode_peserta', 'kode peserta', 'trim|required');
	$this->form_validation->set_rules('tinggi_badan', 'tinggi badan', 'trim|required|numeric');
	$this->form_validation->set_rules('berat_badan', 'berat badan', 'trim|required|numeric');
	$this->form_validation->set_rules('mata', 'mata', 'trim|required|numeric');
	$this->form_validation->set_rules('bahu', 'bahu', 'trim|required|numeric');
	$this->form_validation->set_rules('tangan', 'tangan', 'trim|required|numeric');
	$this->form_validation->set_rules('kaki', 'kaki', 'trim|required|numeric');
	$this->form_validation->set_rules('platefoot', 'platefoot', 'trim|required|numeric');
	$this->form_validation->set_rules('created_at', 'created at', 'trim');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim');
	$this->form_validation->set_rules('deleted_at', 'deleted at', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}