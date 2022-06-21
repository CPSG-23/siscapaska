<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\KesenianModel;
use App\Models\PesertaModel;

class Kesenian extends BaseController
{
    /**
	 * Class constructor.
     */	
    protected $PageData;
    protected $Model; //Default Models Of this Controler
    protected $pager;
	public function __construct()
	{
		$this->Model = new KesenianModel(); //Set Default Models Of this Controler
        $this->PageData = $this->attributePage(); //Attribute Of Page
        $pager = \Config\Services::pager();
    }
    
    //ATRIBUTE THIS PAGE
    private function attributePage()
	{
		return  [
			'title' => 'SICAPASKA | Kesehatan',
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
			'content' => 'Data Kesenian',
            'data' => $this->Model->paginate(5, 'paging'),
			'peserta' => $peserta->getData(),
            'pager' => $this->Model->pager
		];
		return view('admin/kesenian/index_kesenian', $data);
    }
    //ACTION CREATE
	public function create_action()
	{
		$kesenian = new KesenianModel();
		$dataFind = $kesenian->getKode($this->request->getVar('kode_peserta'));
		$menyanyi = [
			$this->request->getVar('menyanyi_suara_baik'),
			$this->request->getVar('intonasi_lagu'),
			$this->request->getVar('penghayatan')
		];
		$menari = [
			$this->request->getVar('gerakan_gemulai'),
			$this->request->getVar('menari_pengetahuan'),
			$this->request->getVar('menari_penghayatan')
		];
		$alat_musik = [
			$this->request->getVar('memainkan_alat_musik'),
			$this->request->getVar('pengetahuan_alat_musik'),
			$this->request->getVar('penghayatan_alat_musik')
		];
		if($dataFind == true){
			$dataUpdate = [
				'id' => $dataFind[0]['id'],
				'kode_peserta' => $this->request->getVar('kode_peserta'),
				'menyanyi' => serialize($menyanyi),
				'menari' => serialize($menari),
				'alat_musik' => serialize($alat_musik),
				'keterampilan_lainnya' => $this->request->getVar('keterampilan_lainnya'),
				'total_nilai' => ($this->request->getVar('keterampilan_lainnya')+$this->request->getVar('memainkan_alat_musik')+$this->request->getVar('pengetahuan_alat_musik')+$this->request->getVar('penghayatan_alat_musik')+$this->request->getVar('gerakan_gemulai')+$this->request->getVar('menari_pengetahuan')+$this->request->getVar('menari_penghayatan')+$this->request->getVar('menyanyi_suara_baik')+$this->request->getVar('intonasi_lagu')+$this->request->getVar('penghayatan')),
			];
			$this->Model->save($dataUpdate);
			session()->setFlashdata('message', 'Nilai Berhasil Di Update');
		}else{
			$data =[
				     'id' => $this->request->getVar('id'),
				     'kode_peserta' => $this->request->getVar('kode_peserta'),
				     'menyanyi' => serialize($menyanyi),
				     'menari' => serialize($menari),
					 'alat_musik' => serialize($alat_musik),
				     'keterampilan_lainnya' => $this->request->getVar('keterampilan_lainnya'),
				     'total_nilai' => ($this->request->getVar('keterampilan_lainnya')+$this->request->getVar('memainkan_alat_musik')+$this->request->getVar('pengetahuan_alat_musik')+$this->request->getVar('penghayatan_alat_musik')+$this->request->getVar('gerakan_gemulai')+$this->request->getVar('menari_pengetahuan')+$this->request->getVar('menari_penghayatan')+$this->request->getVar('menyanyi_suara_baik')+$this->request->getVar('intonasi_lagu')+$this->request->getVar('penghayatan')),
        
				];
			$this->Model->save($data);
			session()->setFlashdata('message', 'Create Record Success');
			}
		return redirect()->to(base_url('/admin/nilai/kesenian'));
    }
    
    //DELETE
	public function delete($id)
	{
		$row = $this->Model->find(['id' => $id]);
		if ($row) {
            $this->Model->delete($id);
            session()->setFlashdata('message', 'Delete Record Success');
            return redirect()->to(base_url('/admin/nilai/kesenian'));
        } else {
            session()->setFlashdata('message', 'Record Not Found');
            return redirect()->to(base_url('/admin/nilai/kesenian'));
        }

    }

    //RULES
    public function _rules() 
    {
	$this->form_validation->set_rules('kode_peserta', 'kode peserta', 'trim|required');
	$this->form_validation->set_rules('menyanyi', 'menyanyi', 'trim|required');
	$this->form_validation->set_rules('menari', 'menari', 'trim|required');
	$this->form_validation->set_rules('alat_musik', 'alat musik', 'trim|required');
	$this->form_validation->set_rules('keterampilan_lainnya', 'keterampilan lainnya', 'trim|required');
	$this->form_validation->set_rules('total_nilai', 'total nilai', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
