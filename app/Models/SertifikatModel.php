<?php namespace App\Models;
use CodeIgniter\Model;

class SertifikatModel extends Model
{
    protected $table      = 'sertifikat';
    protected $primaryKey = 'id_sertifikat';
    protected $allowedFields = ['id_sertifikat','id_peserta','status','created_at','updated_at','deleted_at']; 

    // GET ALL DATA
    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->db->where($this->primaryKey, $id)->first();
    }


}