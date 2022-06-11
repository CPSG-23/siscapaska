<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\PbbModel;
/**
* THIS CONTROLER CODEIGNITER 4
* Codeigniter Version 4.x
* Generated by LigatCode
**/

class Pbb extends BaseController
{
    /**
	 * Class constructor.
     */	
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
		$data = [
			'AttributePage' =>$this->PageData,
			'content' => 'Data Nilai PBB',
            'data' => $this->Model->paginate(5, 'paging'),
            'pager' => $this->Model->pager
		];
		return view('admin/pbb/index_pbb', $data);
    }

    //READ
    public function read($id)
	{
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Read Pages',
			'data' => $this->Model->find($id) //find on data
		];
		return view('pbb/read_pbb', $data);
    }

    //CREATE
    public function create()
	{
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Create Pages',
			'action' => site_url('Pbb/create_action'),
			'data' =>   [
					     'id' => set_value('id'),
					     'kode_peserta' => set_value('kode_peserta'),
					     'sikap_sempurna' => set_value('sikap_sempurna'),
					     'sikap_hormat' => set_value('sikap_hormat'),
					     'sikap_istirahat' => set_value('sikap_istirahat'),
					     'langkah_tegap' => set_value('langkah_tegap'),
					     'jalan_ditempat' => set_value('jalan_ditempat'),
					     'hadap_kanan_kiri' => set_value('hadap_kanan_kiri'),
					     'hadap_serong_kanan_kiri' => set_value('hadap_serong_kanan_kiri'),
					     'balik_kanan' => set_value('balik_kanan'),
					     'langkah_lrfb' => set_value('langkah_lrfb'),
					     'kesigapan' => set_value('kesigapan'),
					     'total_nilai' => set_value('total_nilai'),
					     'created_at' => set_value('created_at'),
					     'updated_at' => set_value('updated_at'),
					     'deleted_at' => set_value('deleted_at'),
					    ]
		];
		return view('pbb/form_pbb', $data);
    }
    
    //ACTION CREATE
	public function create_action()
	{
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
				     'total_nilai' => $this->request->getVar('total_nilai'),
				     'created_at' => $this->request->getVar('created_at'),
				     'updated_at' => $this->request->getVar('updated_at'),
				     'deleted_at' => $this->request->getVar('deleted_at'),
        
				];
		$this->Model->save($data);
		session()->setFlashdata('message', 'Create Record Success');
		return redirect()->to(base_url('/Pbb'));
    }
    
    //UPDATE
	public function update($id)
	{
		$dataFind = $this->Model->find($id);
		if($dataFind == false){
			return redirect()->to(base_url('/Pbb'));
		}
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Edite Pages',
			'action' => 'pbb/update_action',
			'data' => $this->Model->find($id),
        ];
		session()->setFlashdata('message', 'Update Record Success');
		return view('pbb/form_pbb', $data);
    }
    
    //ACTION UPDATE
   	public function update_action()
	{
		$id = $this->request->getVar('id');
		$row = $this->Model->find(['id' => $id]);

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
				     'total_nilai' => $this->request->getVar('total_nilai'),
				     'created_at' => $this->request->getVar('created_at'),
				     'updated_at' => $this->request->getVar('updated_at'),
				     'deleted_at' => $this->request->getVar('deleted_at'),
                    ];
            $this->Model->save($data);
			session()->setFlashdata('message', 'Update Record Success');
			
			return redirect()->to(base_url('pbb'));
		
	}

    //DELETE
	public function delete($id)
	{
		$row = $this->Model->find(['id' => $id]);
		if ($row) {
            $this->Model->delete($id);
            session()->setFlashdata('message', 'Delete Record Success');
            return redirect()->to(base_url('/pbb'));
        } else {
            session()->setFlashdata('message', 'Record Not Found');
            return redirect()->to(base_url('/pbb'));
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
	$this->form_validation->set_rules('total_nilai', 'total nilai', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');
	$this->form_validation->set_rules('deleted_at', 'deleted at', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pbb.php */
 /* Location: ./app/controllers/Pbb.php */
 /* Please DO NOT modify this information : */
 /* Generated by Ligatcode Codeigniter 4 CRUD Generator 2022-06-03 12:03:32 */