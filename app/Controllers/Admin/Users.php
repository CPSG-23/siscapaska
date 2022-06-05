<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController
{
    /**
	 * Class constructor.
     */	
    protected $PageData;
    protected $Model; //Default Models Of this Controler
    protected $pager;
	protected $request;
	public function __construct()
	{
		$this->Model = new UsersModel(); //Set Default Models Of this Controler
        $this->PageData = $this->attributePage(); //Attribute Of Page
        $pager = \Config\Services::pager();

    }
    
    //ATRIBUTE THIS PAGE
    private function attributePage()
	{
		return  [
			'title' => 'SISCAPASKA | Admin/Users',
			'request' => \Config\Services::request(),
			'app' => 'SISCAPASKA',
		];
    }

    //INDEX 
    public function index()
	{
		$data = [
			'AttributePage' =>$this->PageData,
			'content' => 'Data Users',
            'data' => $this->Model->paginate(5, 'paging'),
            'pager' => $this->Model->pager
		];
		return view('admin/users/index_users', $data);
    }

    //READ
    public function read($id)
	{
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Read Pages',
			'data' => $this->Model->find($id) //find on data
		];
		return view('admin/users/read_users', $data);
    }

    //CREATE
    public function create()
	{
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Create Pages',
			'action' => site_url('Admin/Users/create_action'),
			'data' =>   [
					     'id' => set_value('id'),
					     'username' => set_value('username'),
					     'password' => set_value('password'),
					     'hak_access' => set_value('hak_access'),
					    ]
		];
		return view('admin/users/form_users', $data);
    }
    
    //ACTION CREATE
	public function create_action()
	{
		$data =[
				     'id' => $this->request->getVar('id'),
				     'username' => $this->request->getVar('username'),
				     'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
				     'hak_access' => $this->request->getVar('hak_access'),
        
				];
		$this->Model->save($data);
		session()->setFlashdata('message', 'Create Record Success');
		return redirect()->to(base_url('/Admin/Users'));
    }
    
    //UPDATE
	public function update($id)
	{
		$dataFind = $this->Model->find($id);
		if($dataFind == false){
			return redirect()->to(base_url('/Admin/Users'));
		}
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Edite Pages',
			'action' => 'admin/users/update_action',
			'data' => $this->Model->find($id),
        ];
		session()->setFlashdata('message', 'Update Record Success');
		return view('admin/users/form_users', $data);
    }
    
    //ACTION UPDATE
   	public function update_action()
	{
		$id = $this->request->getVar('id');
		$row = $this->Model->find(['id' => $id]);

			$data =[
				    'id' => $this->request->getVar('id'),
				    'username' => $this->request->getVar('username'),
				    'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
				    'hak_access' => $this->request->getVar('hak_access'),
                    ];
            $this->Model->save($data);
			session()->setFlashdata('message', 'Update Record Success');
			
			return redirect()->to(base_url('admin/users'));
		
	}

    //DELETE
	public function delete($id)
	{
		$row = $this->Model->find(['id' => $id]);
		if ($row) {
            $this->Model->delete($id);
            session()->setFlashdata('message', 'Delete Record Success');
            return redirect()->to(base_url('/admin/users'));
        } else {
            session()->setFlashdata('message', 'Record Not Found');
            return redirect()->to(base_url('/admin/users'));
        }

    }

    //RULES
    public function _rules() 
    {
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('hak_access', 'hak access', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
