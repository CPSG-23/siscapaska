<?php namespace App\Models;
use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $table      = 'peserta';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','kode_peserta','nama','jk','ttl','agama','alamat','telp','hp','asal_sekolah','tinggi_badan','berat_badan','golongan_darah','nama_ayah','nama_ibu','pekerjaan_ayah','pekerjaan_ibu','alamat_ortu','created_at','updated_at','deleted_at']; 

    // GET ALL DATA
    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->db->where($this->primaryKey, $id)->first();
    }


}