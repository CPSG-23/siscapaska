<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\PsikotesModel;
use App\Models\PesertaModel;
class Psikotes extends BaseController
{
    /**
	 * Class constructor.
     */	
    protected $PageData;
    protected $Model; //Default Models Of this Controler
    protected $pager;
	public function __construct()
	{
		$this->Model = new PsikotesModel(); //Set Default Models Of this Controler
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
			'content' => 'Data Nilai Psikotes',
            'data' => $this->Model->paginate(5, 'paging'),
			'peserta' => $peserta->getData(),
            'pager' => $this->Model->pager
		];
		return view('admin/psikotes/index_psikotes', $data);
    }
    //ACTION CREATE
	public function create_action()
	{
		$dataFind = $this->Model->getKode($this->request->getVar('kode_peserta'));
		if ($dataFind == true) {
			$dataUpdate = [
				'id' => $dataFind[0]['id'],
				'kode_peserta' => $this->request->getVar('kode_peserta'),
				'nilai' => $this->request->getVar('nilai')
			];
			$this->Model->save($dataUpdate);
			session()->setFlashdata('message', 'Nilai Berhasil Diubah');
		} else {
			$data =[
				     'id' => $this->request->getVar('id'),
				     'kode_peserta' => $this->request->getVar('kode_peserta'),
				     'nilai' => $this->request->getVar('nilai')
        
				];
			$this->Model->save($data);
			session()->setFlashdata('message', 'Nilai Berhasil Disimpan');
		}
		
		return redirect()->to(base_url('/admin/nilai/psikotes'));
    }
    //DELETE
	public function delete($id)
	{
		$row = $this->Model->find(['id' => $id]);
		if ($row) {
            $this->Model->delete($id);
            session()->setFlashdata('message', 'Delete Record Success');
            return redirect()->to(base_url('/admin/nilai/psikotes'));
        } else {
            session()->setFlashdata('message', 'Record Not Found');
            return redirect()->to(base_url('/admin/nilai/psikotes'));
        }

    }

    //RULES
    public function _rules() 
    {
	$this->form_validation->set_rules('kode_peserta', 'kode peserta', 'trim|required');
	$this->form_validation->set_rules('nilai', 'nilai', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim');
	$this->form_validation->set_rules('deleted_at', 'deleted at', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}