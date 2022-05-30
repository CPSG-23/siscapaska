<?php
namespace App\Controllers\Rest;
use CodeIgniter\RESTful\ResourceController;

class Peserta extends ResourceController
{
    protected $modelName = 'App\Models\PesertaModel';
    protected $format = 'json';

    public function index(){
        return $this->respond($this->model->findAll());
    }
    public function show($id = null)
    {
        $record = $this->model->find($id);
        if (!$record) {
            return $this->failNotFound(sprintf('Peserta dengan id %d tidak ditemukan', $id));
        }
        return $this->respond($record);
    }
    public function create()
    {
        $data = $this->request->getPost();
        if (!$this->model->save($data)) {
            return $this->fail($this->model->errors());
        }

        return $this->respondCreated($data, 'peserta created');
    }
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id'] = $id;

        if (!$this->model->save($data)) {
            return $this->fail($this->model->errors());
        }

        return $this->respond($data, 200, 'peserta updated');
    }
    public function delete($id = null)
    {
        $delete = $this->model->delete($id);
        if ($this->model->db->affectedRows() === 0
        ) {
            return $this->failNotFound(sprintf(
                'peserta dengan id %id tidak ditemukan atau sudah dihapus',
                $id
            ));
        }

        return $this->respondDeleted(['id' => $id], 'peserta telah dihapus');
    }

}
?>