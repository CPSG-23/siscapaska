<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\KesehatanModel;
class Kesehatan extends BaseController
{
    /**
	 * Class constructor.
     */	
    protected $PageData;
    protected $Model; //Default Models Of this Controler
    protected $pager;
	public function __construct()
	{
		$this->Model = new KesehatanModel(); //Set Default Models Of this Controler
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
			'content' => 'Data Nilai Kesehatan',
            'data' => $this->Model->paginate(5, 'paging'),
            'pager' => $this->Model->pager
		];
		return view('admin/kesehatan/index_kesehatan', $data);
    }

    //CREATE
    public function create()
	{
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Create Data Kesehatan',
			'action' => site_url('Pbb/create_action'),
			'data' =>   [
					     'id' => set_value('id'),
					     'kode_peserta' => set_value('kode_peserta'),
					     'total_nilai' => set_value('total_nilai'),
					     'created_at' => set_value('created_at'),
					     'updated_at' => set_value('updated_at'),
					     'deleted_at' => set_value('deleted_at'),
					    ]
		];
		return view('admin/kesehatan/form_kesehatan', $data);
    }
    
    //ACTION CREATE
	public function create_action()
	{
		$data =[
				     'id' => $this->request->getVar('id'),
				     'kode_peserta' => $this->request->getVar('kode_peserta'),
				     'total_nilai' => $this->request->getVar('total_nilai'),
				     'created_at' => $this->request->getVar('created_at'),
				     'updated_at' => $this->request->getVar('updated_at'),
				     'deleted_at' => $this->request->getVar('deleted_at'),
        
				];
		$this->Model->save($data);
		session()->setFlashdata('message', 'Create Record Success');
		return redirect()->to(base_url('/admin/kesehatan'));
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
			'action' => 'admin/kesehatan/update_action',
			'data' => $this->Model->find($id),
        ];
		session()->setFlashdata('message', 'Update Record Success');
		return view('admin/kesehatan/form_kesehatan', $data);
    }
    
    //ACTION UPDATE
   	public function update_action()
	{
		$id = $this->request->getVar('id');
		$row = $this->Model->find(['id' => $id]);

			$data =[
				     'id' => $this->request->getVar('id'),
				     'kode_peserta' => $this->request->getVar('kode_peserta'),
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