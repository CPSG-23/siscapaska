<?php namespace App\Controllers;

use App\Models\PesertaModel;

class Peserta extends BaseController
{
    /**
	 * Class constructor.
     */	
    protected $PageData;
    protected $Model; 
    protected $pager;
	public function __construct()
	{
		$this->Model = new PesertaModel(); 
        $this->PageData = $this->attributePage(); 
        $pager = \Config\Services::pager();
    }
    
    //ATRIBUTE THIS PAGE
    private function attributePage()
	{
		return  [
			'title' => 'LigatCode | Peserta',
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
		return view('peserta/index_peserta', $data);
    }

    //READ
    public function read($id)
	{
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Read Pages',
			'data' => $this->Model->find($id) //find on data
		];
		return view('peserta/read_peserta', $data);
    }

    //CREATE
    public function create()
	{
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Create Pages',
			'action' => site_url('Peserta/create_action'),
			'data' =>   [
					     'id' => set_value('id'),
					     'kode_peserta' => set_value('kode_peserta'),
					     'nama' => set_value('nama'),
					     'jk' => set_value('jk'),
					     'ttl' => set_value('ttl'),
					     'agama' => set_value('agama'),
					     'alamat' => set_value('alamat'),
					     'telp' => set_value('telp'),
					     'hp' => set_value('hp'),
					     'asal_sekolah' => set_value('asal_sekolah'),
					     'tinggi_badan' => set_value('tinggi_badan'),
					     'berat_badan' => set_value('berat_badan'),
					     'golongan_darah' => set_value('golongan_darah'),
					     'nama_ayah' => set_value('nama_ayah'),
					     'nama_ibu' => set_value('nama_ibu'),
					     'pekerjaan_ayah' => set_value('pekerjaan_ayah'),
					     'pekerjaan_ibu' => set_value('pekerjaan_ibu'),
					     'alamat_ortu' => set_value('alamat_ortu'),
					     'created_at' => set_value('created_at'),
					     'updated_at' => set_value('updated_at'),
					     'deleted_at' => set_value('deleted_at'),
					    ]
		];
		return view('peserta/form_peserta', $data);
    }
    
    //ACTION CREATE
	public function create_action()
	{
		$data =[
				     'id' => $this->request->getVar('id'),
				     'kode_peserta' => $this->request->getVar('kode_peserta'),
				     'nama' => $this->request->getVar('nama'),
				     'jk' => $this->request->getVar('jk'),
				     'ttl' => $this->request->getVar('ttl'),
				     'agama' => $this->request->getVar('agama'),
				     'alamat' => $this->request->getVar('alamat'),
				     'telp' => $this->request->getVar('telp'),
				     'hp' => $this->request->getVar('hp'),
				     'asal_sekolah' => $this->request->getVar('asal_sekolah'),
				     'tinggi_badan' => $this->request->getVar('tinggi_badan'),
				     'berat_badan' => $this->request->getVar('berat_badan'),
				     'golongan_darah' => $this->request->getVar('golongan_darah'),
				     'nama_ayah' => $this->request->getVar('nama_ayah'),
				     'nama_ibu' => $this->request->getVar('nama_ibu'),
				     'pekerjaan_ayah' => $this->request->getVar('pekerjaan_ayah'),
				     'pekerjaan_ibu' => $this->request->getVar('pekerjaan_ibu'),
				     'alamat_ortu' => $this->request->getVar('alamat_ortu'),
				     'created_at' => $this->request->getVar('created_at'),
				     'updated_at' => $this->request->getVar('updated_at'),
				     'deleted_at' => $this->request->getVar('deleted_at'),
        
				];
		$this->Model->save($data);
		session()->setFlashdata('message', 'Create Record Success');
		return redirect()->to(base_url('/Peserta'));
    }
    
    //UPDATE
	public function update($id)
	{
		$dataFind = $this->Model->find($id);
		if($dataFind == false){
			return redirect()->to(base_url('/Peserta'));
		}
		$data = [
			'AttributePage' => $this->PageData,
			'content' => 'Edite Pages',
			'action' => 'peserta/update_action',
			'data' => $this->Model->find($id),
        ];
		session()->setFlashdata('message', 'Update Record Success');
		return view('peserta/form_peserta', $data);
    }
    
    //ACTION UPDATE
   	public function update_action()
	{
		$id = $this->request->getVar('id');
		$row = $this->Model->find(['id' => $id]);

			$data =[
				     'id' => $this->request->getVar('id'),
				     'kode_peserta' => $this->request->getVar('kode_peserta'),
				     'nama' => $this->request->getVar('nama'),
				     'jk' => $this->request->getVar('jk'),
				     'ttl' => $this->request->getVar('ttl'),
				     'agama' => $this->request->getVar('agama'),
				     'alamat' => $this->request->getVar('alamat'),
				     'telp' => $this->request->getVar('telp'),
				     'hp' => $this->request->getVar('hp'),
				     'asal_sekolah' => $this->request->getVar('asal_sekolah'),
				     'tinggi_badan' => $this->request->getVar('tinggi_badan'),
				     'berat_badan' => $this->request->getVar('berat_badan'),
				     'golongan_darah' => $this->request->getVar('golongan_darah'),
				     'nama_ayah' => $this->request->getVar('nama_ayah'),
				     'nama_ibu' => $this->request->getVar('nama_ibu'),
				     'pekerjaan_ayah' => $this->request->getVar('pekerjaan_ayah'),
				     'pekerjaan_ibu' => $this->request->getVar('pekerjaan_ibu'),
				     'alamat_ortu' => $this->request->getVar('alamat_ortu'),
				     'created_at' => $this->request->getVar('created_at'),
				     'updated_at' => $this->request->getVar('updated_at'),
				     'deleted_at' => $this->request->getVar('deleted_at'),
                    ];
            $this->Model->save($data);
			session()->setFlashdata('message', 'Update Record Success');
			
			return redirect()->to(base_url('peserta'));
		
	}

    //DELETE
	public function delete($id)
	{
		$row = $this->Model->find(['id' => $id]);
		if ($row) {
            $this->Model->delete($id);
            session()->setFlashdata('message', 'Delete Record Success');
            return redirect()->to(base_url('/peserta'));
        } else {
            session()->setFlashdata('message', 'Record Not Found');
            return redirect()->to(base_url('/peserta'));
        }

    }

    //RULES
    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jk', 'jk', 'trim|required');
	$this->form_validation->set_rules('ttl', 'ttl', 'trim|required');
	$this->form_validation->set_rules('agama', 'agama', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('telp', 'telp', 'trim|required');
	$this->form_validation->set_rules('hp', 'hp', 'trim|required');
	$this->form_validation->set_rules('asal_sekolah', 'asal sekolah', 'trim|required');
	$this->form_validation->set_rules('tinggi_badan', 'tinggi badan', 'trim|required|numeric');
	$this->form_validation->set_rules('berat_badan', 'berat badan', 'trim|required|numeric');
	$this->form_validation->set_rules('golongan_darah', 'golongan darah', 'trim|required');
	$this->form_validation->set_rules('nama_ayah', 'nama ayah', 'trim|required');
	$this->form_validation->set_rules('nama_ibu', 'nama ibu', 'trim|required');
	$this->form_validation->set_rules('pekerjaan_ayah', 'pekerjaan ayah', 'trim|required');
	$this->form_validation->set_rules('pekerjaan_ibu', 'pekerjaan ibu', 'trim|required');
	$this->form_validation->set_rules('alamat_ortu', 'alamat ortu', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');
	$this->form_validation->set_rules('deleted_at', 'deleted at', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}