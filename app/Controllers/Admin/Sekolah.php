<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\SekolahModel;
class Sekolah extends BaseController
{
    /**
	 * Class constructor.
     */	
    protected $PageData;
    protected $Model; //Default Models Of this Controler
    protected $pager;
	public function __construct()
	{
		$this->Model = new SekolahModel(); //Set Default Models Of this Controler
        $this->PageData = $this->attributePage(); //Attribute Of Page
        $pager = \Config\Services::pager();
    }
    
    //ATRIBUTE THIS PAGE
    private function attributePage()
	{
		return  [
			'title' => 'SICAPASKA | Data Sekolah',
			'request' => \Config\Services::request(),
			'app' => 'SICAPASKA',
		];
    }

    //INDEX 
    public function index()
	{
		$data = [
			'AttributePage' =>$this->PageData,
			'content' => 'Data Sekolah',
            'data' => $this->Model->getData(),
            'pager' => $this->Model->pager
		];
		return view('admin/sekolah/index_sekolah', $data);
    }
    //ACTION CREATE
	public function create_action()
	{
		$sekolah = new SekolahModel();
		$dataFind = $sekolah->getNpsn($this->request->getVar('npsn'));
		if ($dataFind == true) {
			$dataUpdate = [
				'id' => $dataFind[0]['id'],
				'npsn' => $this->request->getVar('npsn'),
				'nama_sekolah' => $this->request->getVar('nama_sekolah'),
				'alamat_sekolah' => $this->request->getVar('alamat')
			];
			$this->Model->save($dataUpdate);
			session()->setFlashdata('message', 'Nilai Berhasil Diubah');
		} else {
			$data =[
				     'id' => $this->request->getVar('id'),
					'npsn' => $this->request->getVar('npsn'),
					'nama_sekolah' => $this->request->getVar('nama_sekolah'),
					'alamat' => $this->request->getVar('alamat')
				];
			$this->Model->save($data);
			session()->setFlashdata('message', 'Data Sekolah Berhasil Disimpan');
		}
		
		return redirect()->to(base_url('/admin/datasekolah'));
    }
    //DELETE
	public function delete($id)
	{
		$row = $this->Model->find(['id' => $id]);
		if ($row) {
            $this->Model->delete($id);
            session()->setFlashdata('message', 'Delete Record Success');
            return redirect()->to(base_url('/admin/datasekolah'));
        } else {
            session()->setFlashdata('message', 'Record Not Found');
            return redirect()->to(base_url('/admin/datasekolah'));
        }

    }

    //RULES
    public function _rules() 
    {
	$this->form_validation->set_rules('npsn', 'kode peserta', 'trim|required');
	$this->form_validation->set_rules('nama_sekolah', 'total nilai', 'trim|required');
	$this->form_validation->set_rules('alamat', 'total nilai', 'trim');
	$this->form_validation->set_rules('created_at', 'created at', 'trim');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim');
	$this->form_validation->set_rules('deleted_at', 'deleted at', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}