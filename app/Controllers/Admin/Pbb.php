<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\PbbModel;
use App\Models\PesertaModel;

class Pbb extends BaseController
{
    protected $PageData;
    protected $Model; //Default Models Of this Controler
    protected $pager;
	public function __construct()
	{
		$this->Model = new PbbModel(); //Set Default Models Of this Controler
        $this->PageData = $this->attributePage(); //Attribute Of Page
        $pager = \Config\Services::pager();
    }
    
    //ATRIBUTE THIS PAGE
    private function attributePage()
	{
		return  [
			'title' => 'SICAPASKA | PBB',
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
			'content' => 'Data Nilai PBB',
            'data' => $this->Model->paginate(5, 'paging'),
			'peserta' => $peserta->getData(),
            'pager' => $this->Model->pager
		];
		return view('admin/pbb/index_pbb', $data);
    }
    
    //ACTION CREATE
	public function create_action()
	{
		$kode = $this->request->getVar('kode_peserta');
		$pbb = new PbbModel();
		$dataFind = $pbb->getKode($kode);
		if($dataFind == true){
			$dataUpdate = [
				'id' => $dataFind[0]['id'],
				'kode_peserta' => $this->request->getVar('kode_peserta'),
				'sikap_sempurna' => $this->request->getVar('sikap_sempurna'),
				'sikap_hormat' => $this->request->getVar('sikap_hormat'),
				'sikap_istirahat' => $this->request->getVar('sikap_istirahat'),
				'langkah_tegap' => $this->request->getVar('langkah_tegap'),
				'jalan_ditempat' => $this->request->getVar('jalan_ditempat'),
				'hadap_kanan_kiri' => $this->request->getVar('hadap_kanan_kiri'),
				'hadap_serong_kanan_kiri' => $this->request->getVar('hadap_serong_kanan_kiri'),
				'balik_kanan' => $this->request->getVar('balik_kanan'),
				'langkah_lrfb' => $this->request->getVar('langkah_lrfb'),
				'kesigapan' => $this->request->getVar('kesigapan'),
				'total_nilai' => $this->request->getVar('sikap_sempurna')+$this->request->getVar('sikap_hormat')+$this->request->getVar('sikap_hormat')+
				$this->request->getVar('langkah_tegap') + $this->request->getVar('jalan_ditempat') + $this->request->getVar('hadap_kanan_kiri') +
				$this->request->getVar('hadap_serong_kanan_kiri') + $this->request->getVar('balik_kanan') + $this->request->getVar('langkah_lrfb') + $this->request->getVar('kesigapan')

   
		   ];
		   $this->Model->save($dataUpdate);
		   session()->setFlashdata('message', 'Update Record Success');
		}else{
			$data =[
				'id' => $this->request->getVar('id'),
				'kode_peserta' => $this->request->getVar('kode_peserta'),
				'sikap_sempurna' => $this->request->getVar('sikap_sempurna'),
				'sikap_hormat' => $this->request->getVar('sikap_hormat'),
				'sikap_istirahat' => $this->request->getVar('sikap_istirahat'),
				'langkah_tegap' => $this->request->getVar('langkah_tegap'),
				'jalan_ditempat' => $this->request->getVar('jalan_ditempat'),
				'hadap_kanan_kiri' => $this->request->getVar('hadap_kanan_kiri'),
				'hadap_serong_kanan_kiri' => $this->request->getVar('hadap_serong_kanan_kiri'),
				'balik_kanan' => $this->request->getVar('balik_kanan'),
				'langkah_lrfb' => $this->request->getVar('langkah_lrfb'),
				'kesigapan' => $this->request->getVar('kesigapan'),
				'total_nilai' => $this->request->getVar('sikap_sempurna')+$this->request->getVar('sikap_hormat')+$this->request->getVar('sikap_hormat')+
				$this->request->getVar('langkah_tegap') + $this->request->getVar('jalan_ditempat') + $this->request->getVar('hadap_kanan_kiri') +
				$this->request->getVar('hadap_serong_kanan_kiri') + $this->request->getVar('balik_kanan') + $this->request->getVar('langkah_lrfb') + $this->request->getVar('kesigapan') 
   
		   ];
		   $this->Model->save($data);
		   session()->setFlashdata('message', 'Create Record Success');
		}
		
		return redirect()->to(base_url('admin/nilai/pbb'));
    }
    //DELETE
	public function delete($id)
	{
		$row = $this->Model->find(['id' => $id]);
		if ($row) {
            $this->Model->delete($id);
            session()->setFlashdata('message', 'Delete Record Success');
            return redirect()->to(base_url('admin/nilai/pbb'));
        } else {
            session()->setFlashdata('message', 'Record Not Found');
            return redirect()->to(base_url('admin/nilai/pbb'));
        }

    }

    //RULES
    public function _rules() 
    {
	$this->form_validation->set_rules('kode_peserta', 'kode peserta', 'trim|required');
	$this->form_validation->set_rules('sikap_sempurna', 'sikap sempurna', 'trim|required|numeric');
	$this->form_validation->set_rules('sikap_hormat', 'sikap hormat', 'trim|required|numeric');
	$this->form_validation->set_rules('sikap_istirahat', 'sikap istirahat', 'trim|required|numeric');
	$this->form_validation->set_rules('langkah_tegap', 'langkah tegap', 'trim|required|numeric');
	$this->form_validation->set_rules('jalan_ditempat', 'jalan ditempat', 'trim|required|numeric');
	$this->form_validation->set_rules('hadap_kanan_kiri', 'hadap kanan kiri', 'trim|required|numeric');
	$this->form_validation->set_rules('hadap_serong_kanan_kiri', 'hadap serong kanan kiri', 'trim|required|numeric');
	$this->form_validation->set_rules('balik_kanan', 'balik kanan', 'trim|required|numeric');
	$this->form_validation->set_rules('langkah_lrfb', 'langkah lrfb', 'trim|required|numeric');
	$this->form_validation->set_rules('kesigapan', 'kesigapan', 'trim|required|numeric');
	$this->form_validation->set_rules('total_nilai', 'total nilai', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}