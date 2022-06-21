<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\WawancaraModel;
use App\Models\PesertaModel;

class Wawancara extends BaseController
{
    /**
	 * Class constructor.
     */	
    protected $PageData;
    protected $Model; //Default Models Of this Controler
    protected $pager;
	public function __construct()
	{
		$this->Model = new WawancaraModel(); //Set Default Models Of this Controler
        $this->PageData = $this->attributePage(); //Attribute Of Page
        $pager = \Config\Services::pager();
    }
    
    //ATRIBUTE THIS PAGE
    private function attributePage()
	{
		return  [
			'title' => 'SICAPASKA | Wawancara',
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
			'content' => 'Data Nilai Wawancara',
            'data' => $this->Model->paginate(5, 'paging'),
			'peserta' => $peserta->getData(),
            'pager' => $this->Model->pager
		];
		return view('admin/wawancara/index_wawancara', $data);
    }
    
    //ACTION CREATE
	public function create_action()
	{
		$kode = $this->request->getVar('kode_peserta');
		$wawancara = new WawancaraModel();
		$dataFind = $wawancara->getKode($kode);
		$bahasa = [
			$this->request->getVar('bahasa_indonesia'),
			$this->request->getVar('bahasa_inggris'),
			$this->request->getVar('bahasa_daerah')
		];
		if ($dataFind == true) {
			$dataUpdate = [
				'id' => $dataFind[0]['id'],
				'kode_peserta' => $this->request->getVar('kode_peserta'),
				'sikap' => $this->request->getVar('sikap'),
				'kesigapan' => $this->request->getVar('kesigapan'),
				'cara_bicara' => $this->request->getVar('cara_bicara'),
				'pemakaian_bahasa' => serialize($bahasa),
				'kemampuan_menjawab' => $this->request->getVar('kemampuan_menjawab'),
				'kemampuan_komputer' => $this->request->getVar('kemampuan_komputer'),
				'total_nilai' => $this->request->getVar('sikap') + $this->request->getVar('kesigapan') + $this->request->getVar('cara_bicara') +
				$this->request->getVar('bahasa_indonesia')+
				$this->request->getVar('bahasa_inggris')+
				$this->request->getVar('bahasa_daerah')+
				$this->request->getVar('kemampuan_menjawab')+$this->request->getVar('kemampuan_komputer')
   
		   ];
		   $this->Model->save($dataUpdate);
			session()->setFlashdata('message', 'Create Record Success');
		}else{
			$data =[
				'id' => $this->request->getVar('id'),
				'kode_peserta' => $this->request->getVar('kode_peserta'),
				'sikap' => $this->request->getVar('sikap'),
				'kesigapan' => $this->request->getVar('kesigapan'),
				'cara_bicara' => $this->request->getVar('cara_bicara'),
				'pemakaian_bahasa' => serialize($bahasa),
				'kemampuan_menjawab' => $this->request->getVar('kemampuan_menjawab'),
				'kemampuan_komputer' => $this->request->getVar('kemampuan_komputer'),
				'total_nilai' => $this->request->getVar('sikap') + $this->request->getVar('kesigapan') + $this->request->getVar('cara_bicara') +
				$this->request->getVar('bahasa_indonesia')+
				$this->request->getVar('bahasa_inggris')+
				$this->request->getVar('bahasa_daerah')+
				$this->request->getVar('kemampuan_menjawab')+$this->request->getVar('kemampuan_komputer')
   
		   ];
			$this->Model->save($data);
			session()->setFlashdata('message', 'Create Record Success');
		}
		return redirect()->to(base_url('admin/nilai/wawancara'));
    }

    //DELETE
	public function delete($id)
	{
		$row = $this->Model->find(['id' => $id]);
		if ($row) {
            $this->Model->delete($id);
            session()->setFlashdata('message', 'Delete Record Success');
            return redirect()->to(base_url('admin/nilai/wawancara'));
        } else {
            session()->setFlashdata('message', 'Record Not Found');
            return redirect()->to(base_url('admin/nilai/wawancara'));
        }

    }

    //RULES
    public function _rules() 
    {
	$this->form_validation->set_rules('kode_peserta', 'kode peserta', 'trim|required');
	$this->form_validation->set_rules('sikap', 'sikap', 'trim|required');
	$this->form_validation->set_rules('kesigapan', 'kesigapan', 'trim|required');
	$this->form_validation->set_rules('cara_bicara', 'cara bicara', 'trim|required');
	$this->form_validation->set_rules('bahasa_indonesia', 'pemakaian bahasa', 'trim|required');
	$this->form_validation->set_rules('bahasa_inggris', 'pemakaian bahasa', 'trim|required');
	$this->form_validation->set_rules('bahasa_daerah', 'pemakaian bahasa', 'trim|required');
	$this->form_validation->set_rules('kemampuan_menjawab', 'kemampuan menjawab', 'trim|required');
	$this->form_validation->set_rules('kemampuan_komputer', 'kemampuan komputer', 'trim|required');
	$this->form_validation->set_rules('total_nilai', 'total nilai', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}