<?php namespace App\Controllers;

use App\Models\SamaptaModel;

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
			'title' => 'LigatCode | Samapta',
			'app' => 'LigatCode',
		];
    }

    //INDEX 
    public function index()
	{
		$data = [
			'AttributePage' =>$this->PageData,
			'content' => 'Create Pages',
            'data' => $this->Model->paginate(5, 'paging'),
            'pager' => $this->Model->pager
		];
		return view('samapta/index_samapta', $data);
    }

    //READ
    public function read($id)
	{
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Read Pages',
			'data' => $this->Model->find($id) //find on data
		];
		return view('samapta/read_samapta', $data);
    }

    //CREATE
    public function create()
	{
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Create Pages',
			'action' => site_url('Samapta/create_action'),
			'data' =>   [
					     'id' => set_value('id'),
					     'kode_peserta' => set_value('kode_peserta'),
					     'lari' => set_value('lari'),
					     'sit_up' => set_value('sit_up'),
					     'push_up' => set_value('push_up'),
					     'shuttle_run' => set_value('shuttle_run'),
					     'total_nilai' => set_value('total_nilai'),
					     'created_at' => set_value('created_at'),
					     'updated_at' => set_value('updated_at'),
					     'deleted_at' => set_value('deleted_at'),
					    ]
		];
		return view('samapta/form_samapta', $data);
    }
    
    //ACTION CREATE
	public function create_action()
	{
		$data =[
				     'id' => $this->request->getVar('id'),
				     'kode_peserta' => $this->request->getVar('kode_peserta'),
				     'lari' => $this->request->getVar('lari'),
				     'sit_up' => $this->request->getVar('sit_up'),
				     'push_up' => $this->request->getVar('push_up'),
				     'shuttle_run' => $this->request->getVar('shuttle_run'),
				     'total_nilai' => $this->request->getVar('total_nilai'),
				     'created_at' => $this->request->getVar('created_at'),
				     'updated_at' => $this->request->getVar('updated_at'),
				     'deleted_at' => $this->request->getVar('deleted_at'),
        
				];
		$this->Model->save($data);
		session()->setFlashdata('message', 'Create Record Success');
		return redirect()->to(base_url('/Samapta'));
    }
    
    //UPDATE
	public function update($id)
	{
		$dataFind = $this->Model->find($id);
		if($dataFind == false){
			return redirect()->to(base_url('/Samapta'));
		}
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Edite Pages',
			'action' => 'samapta/update_action',
			'data' => $this->Model->find($id),
        ];
		session()->setFlashdata('message', 'Update Record Success');
		return view('samapta/form_samapta', $data);
    }
    
    //ACTION UPDATE
   	public function update_action()
	{
		$id = $this->request->getVar('id');
		$row = $this->Model->find(['id' => $id]);

			$data =[
				     'id' => $this->request->getVar('id'),
				     'kode_peserta' => $this->request->getVar('kode_peserta'),
				     'lari' => $this->request->getVar('lari'),
				     'sit_up' => $this->request->getVar('sit_up'),
				     'push_up' => $this->request->getVar('push_up'),
				     'shuttle_run' => $this->request->getVar('shuttle_run'),
				     'total_nilai' => $this->request->getVar('total_nilai'),
				     'created_at' => $this->request->getVar('created_at'),
				     'updated_at' => $this->request->getVar('updated_at'),
				     'deleted_at' => $this->request->getVar('deleted_at'),
                    ];
            $this->Model->save($data);
			session()->setFlashdata('message', 'Update Record Success');
			
			return redirect()->to(base_url('samapta'));
		
	}

    //DELETE
	public function delete($id)
	{
		$row = $this->Model->find(['id' => $id]);
		if ($row) {
            $this->Model->delete($id);
            session()->setFlashdata('message', 'Delete Record Success');
            return redirect()->to(base_url('/samapta'));
        } else {
            session()->setFlashdata('message', 'Record Not Found');
            return redirect()->to(base_url('/samapta'));
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
	$this->form_validation->set_rules('total_nilai', 'total nilai', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');
	$this->form_validation->set_rules('deleted_at', 'deleted at', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Samapta.php */
 /* Location: ./app/controllers/Samapta.php */
 /* Please DO NOT modify this information : */
 /* Generated by Ligatcode Codeigniter 4 CRUD Generator 2022-06-03 12:03:32 */