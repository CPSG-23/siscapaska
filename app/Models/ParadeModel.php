<?php namespace App\Models;
use CodeIgniter\Model;

class ParadeModel extends Model
{
    protected $table      = 'parade';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','kode_peserta','tinggi_badan','berat_badan','mata','bahu','tangan','kaki','platefoot','total_nilai','created_at','updated_at','deleted_at']; 

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
        ->where('kode_peserta', $kode)
        ->paginate(1);
    }
}