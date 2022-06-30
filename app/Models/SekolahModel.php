<?php namespace App\Models;
use CodeIgniter\Model;

class SekolahModel extends Model
{
    protected $table      = 'sekolah';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','npsn','nama_sekolah','alamat','created_at','updated_at','deleted_at']; 

    // GET ALL DATA
    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->db->where($this->primaryKey, $id)->first();
    }
    public function getKode($kode)
    {
        return $this
        ->table($this->table)
        ->where('npsn', $kode)
        ->paginate(1);
    }

}