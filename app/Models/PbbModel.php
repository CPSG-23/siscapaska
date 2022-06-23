<?php namespace App\Models;
use CodeIgniter\Model;

class PbbModel extends Model
{
    protected $table      = 'pbb';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','kode_peserta','sikap_sempurna','sikap_hormat','sikap_istirahat','langkah_tegap','jalan_ditempat','hadap_kanan_kiri','hadap_serong_kanan_kiri','balik_kanan','langkah_lrfb','kesigapan','total_nilai','created_at','updated_at','deleted_at']; 

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