<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\WawancaraModel;

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
		$data = [
			'AttributePage' =>$this->PageData,
			'content' => 'Data Nilai Wawancara',
            'data' => $this->Model->paginate(5, 'paging'),
            'pager' => $this->Model->pager
		];
		return view('admin/wawancara/index_wawancara', $data);
    }

    //READ
    public function read($id)
	{
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Read Pages',
			'data' => $this->Model->find($id) //find on data
		];
		return view('wawancara/read_wawancara', $data);
    }

    //CREATE
    public function create()
	{
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Create Pages',
			'action' => site_url('Wawancara/create_action'),
			'data' =>   [
					     'id' => set_value('id'),
					     'kode_peserta' => set_value('kode_peserta'),
					     'sikap' => set_value('sikap'),
					     'cara_bicara' => set_value('cara_bicara'),
					     'pemakaian_bahasa' => set_value('pemakaian_bahasa'),
					     'kemampuan_menjawab' => set_value('kemampuan_menjawab'),
					     'kemampuan_komputer' => set_value('kemampuan_komputer'),
					     'total_nilai' => set_value('total_nilai'),
					     'created_at' => set_value('created_at'),
					     'updated_at' => set_value('updated_at'),
					     'deleted_at' => set_value('deleted_at'),
					    ]
		];
		return view('wawancara/form_wawancara', $data);
    }
    
    //ACTION CREATE
	public function create_action()
	{
		$data =[
				     'id' => $this->request->getVar('id'),
				     'kode_peserta' => $this->request->getVar('kode_peserta'),
				     'sikap' => $this->request->getVar('sikap'),
				     'cara_bicara' => $this->request->getVar('cara_bicara'),
				     'pemakaian_bahasa' => $this->request->getVar('pemakaian_bahasa'),
				     'kemampuan_menjawab' => $this->request->getVar('kemampuan_menjawab'),
				     'kemampuan_komputer' => $this->request->getVar('kemampuan_komputer'),
				     'total_nilai' => $this->request->getVar('total_nilai'),
				     'created_at' => $this->request->getVar('created_at'),
				     'updated_at' => $this->request->getVar('updated_at'),
				     'deleted_at' => $this->request->getVar('deleted_at'),
        
				];
		$this->Model->save($data);
		session()->setFlashdata('message', 'Create Record Success');
		return redirect()->to(base_url('/Wawancara'));
    }
    
    //UPDATE
	public function update($id)
	{
		$dataFind = $this->Model->find($id);
		if($dataFind == false){
			return redirect()->to(base_url('/Wawancara'));
		}
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Edite Pages',
			'action' => 'wawancara/update_action',
			'data' => $this->Model->find($id),
        ];
		session()->setFlashdata('message', 'Update Record Success');
		return view('wawancara/form_wawancara', $data);
    }
    
    //ACTION UPDATE
   	public function update_action()
	{
		$id = $this->request->getVar('id');
		$row = $this->Model->find(['id' => $id]);

			$data =[
				     'id' => $this->request->getVar('id'),
				     'kode_peserta' => $this->request->getVar('kode_peserta'),
				     'sikap' => $this->request->getVar('sikap'),
				     'cara_bicara' => $this->request->getVar('cara_bicara'),
				     'pemakaian_bahasa' => $this->request->getVar('pemakaian_bahasa'),
				     'kemampuan_menjawab' => $this->request->getVar('kemampuan_menjawab'),
				     'kemampuan_komputer' => $this->request->getVar('kemampuan_komputer'),
				     'total_nilai' => $this->request->getVar('total_nilai'),
				     'created_at' => $this->request->getVar('created_at'),
				     'updated_at' => $this->request->getVar('updated_at'),
				     'deleted_at' => $this->request->getVar('deleted_at'),
                    ];
            $this->Model->save($data);
			session()->setFlashdata('message', 'Update Record Success');
			
			return redirect()->to(base_url('wawancara'));
		
	}

    //DELETE
	public function delete($id)
	{
		$row = $this->Model->find(['id' => $id]);
		if ($row) {
            $this->Model->delete($id);
            session()->setFlashdata('message', 'Delete Record Success');
            return redirect()->to(base_url('/wawancara'));
        } else {
            session()->setFlashdata('message', 'Record Not Found');
            return redirect()->to(base_url('/wawancara'));
        }

    }

    //RULES
    public function _rules() 
    {
	$this->form_validation->set_rules('kode_peserta', 'kode peserta', 'trim|required');
	$this->form_validation->set_rules('sikap', 'sikap', 'trim|required');
	$this->form_validation->set_rules('cara_bicara', 'cara bicara', 'trim|required');
	$this->form_validation->set_rules('pemakaian_bahasa', 'pemakaian bahasa', 'trim|required');
	$this->form_validation->set_rules('kemampuan_menjawab', 'kemampuan menjawab', 'trim|required');
	$this->form_validation->set_rules('kemampuan_komputer', 'kemampuan komputer', 'trim|required');
	$this->form_validation->set_rules('total_nilai', 'total nilai', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');
	$this->form_validation->set_rules('deleted_at', 'deleted at', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}