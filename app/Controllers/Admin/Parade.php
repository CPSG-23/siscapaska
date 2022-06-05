<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\ParadeModel;

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
		$data = [
			'AttributePage' =>$this->PageData,
			'content' => 'Data Nilai Parade',
            'data' => $this->Model->paginate(5, 'paging'),
            'pager' => $this->Model->pager
		];
		return view('admin/parade/index_parade', $data);
    }

    //READ
    public function read($id)
	{
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Read Nilai Parade',
			'data' => $this->Model->find($id) //find on data
		];
		return view('admin/parade/read_parade', $data);
    }

    //CREATE
    public function create()
	{
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Create Pages',
			'action' => site_url('Parade/create_action'),
			'data' =>   [
					     'id' => set_value('id'),
					     'kode_peserta' => set_value('kode_peserta'),
					     'tinggi_badan' => set_value('tinggi_badan'),
					     'berat_badan' => set_value('berat_badan'),
					     'mata' => set_value('mata'),
					     'bahu' => set_value('bahu'),
					     'tangan' => set_value('tangan'),
					     'kaki' => set_value('kaki'),
					     'platefoot' => set_value('platefoot'),
					     'total_nilai' => set_value('total_nilai'),
					     'created_at' => set_value('created_at'),
					     'updated_at' => set_value('updated_at'),
					     'deleted_at' => set_value('deleted_at'),
					    ]
		];
		return view('parade/form_parade', $data);
    }
    
    //ACTION CREATE
	public function create_action()
	{
		$data =[
				     'id' => $this->request->getVar('id'),
				     'kode_peserta' => $this->request->getVar('kode_peserta'),
				     'tinggi_badan' => $this->request->getVar('tinggi_badan'),
				     'berat_badan' => $this->request->getVar('berat_badan'),
				     'mata' => $this->request->getVar('mata'),
				     'bahu' => $this->request->getVar('bahu'),
				     'tangan' => $this->request->getVar('tangan'),
				     'kaki' => $this->request->getVar('kaki'),
				     'platefoot' => $this->request->getVar('platefoot'),
				     'total_nilai' => $this->request->getVar('total_nilai'),
				     'created_at' => $this->request->getVar('created_at'),
				     'updated_at' => $this->request->getVar('updated_at'),
				     'deleted_at' => $this->request->getVar('deleted_at'),
        
				];
		$this->Model->save($data);
		session()->setFlashdata('message', 'Create Record Success');
		return redirect()->to(base_url('/Parade'));
    }
    
    //UPDATE
	public function update($id)
	{
		$dataFind = $this->Model->find($id);
		if($dataFind == false){
			return redirect()->to(base_url('/Parade'));
		}
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Edite Pages',
			'action' => 'parade/update_action',
			'data' => $this->Model->find($id),
        ];
		session()->setFlashdata('message', 'Update Record Success');
		return view('admin/parade/form_parade', $data);
    }
    
    //ACTION UPDATE
   	public function update_action()
	{
		$id = $this->request->getVar('id');
		$row = $this->Model->find(['id' => $id]);

			$data =[
				     'id' => $this->request->getVar('id'),
				     'kode_peserta' => $this->request->getVar('kode_peserta'),
				     'tinggi_badan' => $this->request->getVar('tinggi_badan'),
				     'berat_badan' => $this->request->getVar('berat_badan'),
				     'mata' => $this->request->getVar('mata'),
				     'bahu' => $this->request->getVar('bahu'),
				     'tangan' => $this->request->getVar('tangan'),
				     'kaki' => $this->request->getVar('kaki'),
				     'platefoot' => $this->request->getVar('platefoot'),
				     'total_nilai' => $this->request->getVar('total_nilai'),
				     'created_at' => $this->request->getVar('created_at'),
				     'updated_at' => $this->request->getVar('updated_at'),
				     'deleted_at' => $this->request->getVar('deleted_at'),
                    ];
            $this->Model->save($data);
			session()->setFlashdata('message', 'Update Record Success');
			
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
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');
	$this->form_validation->set_rules('deleted_at', 'deleted at', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}