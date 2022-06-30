<?php namespace App\Models;
use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $table      = 'peserta';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','kode_peserta','nisn','nama','jk','email','ttl','agama','alamat','telp','hp','asal_sekolah','tinggi_badan','berat_badan','golongan_darah','nama_ayah','nama_ibu','pekerjaan_ayah','pekerjaan_ibu','alamat_ortu', 'foto','status_sertifikat','created_at','updated_at','deleted_at'];

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
    public function getNisn($nisn){
        return $this
        ->table($this->table)
        ->where('nisn', $nisn)
        ->paginate(1);
    }
    public function kodePeserta($value){
        $datas = $this->builder($this->table);
        $datas->select('RIGHT(kode_peserta,1) as kode_peserta',FALSE);
        $datas->orderBy('kode_peserta','DESC');
        $datas->limit(1);
        $query = $datas->getWhere(['jk'=> $value]);
        if($query->getNumRows()<>0){
            $data = $query->getRow();
            if($value=='L'){
                $kode =intval($data->kode_peserta)+1;
            }else{
                $kode =intval($data->kode_peserta)+2;
            }
        }else{
            if($value=='L'){
            $kode = 1;
            }else{
            $kode = 2;
            }
        }
        $batas = str_pad($kode,3,"0",STR_PAD_LEFT);
        $kodetampil =$value.$batas;
        return $kodetampil;
    }

}