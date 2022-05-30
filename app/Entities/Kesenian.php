<?php
namespace App\Entities;

use CodeIgniter\Entity;

class Kesenian extends Entity
{
    protected $attributes = [
        'kode_peserta' => null,
        'menyanyi_suara_baik' => null,
        'menyanyi_intonasi_lagu' => null,
        'menyanyi_penghayatan' => null,
        'menari_gerakan_gemulai' => null,
        'menari_pengetahuan' => null,
        'menari_penghayatan' => null,
        'alat_musik_memainkan' => null,
        'alat_musik_pengetahuan' => null,
        'alat_musik_penghayatan' => null,
        'keterampilan_lainnya' => null
    ];
    public function setKodePeserta($kode_peserta):self
    {
        $attributes['kode_peserta'] = $kode_peserta;
        return $this;
    }
    public function setMenyanyiSuaraBaik(int $menyanyi_suara_baik):self
    {
        $attributes['menyanyi_suara_baik'] = $menyanyi_suara_baik;
        return $this;
    }
    public function setMenyanyiIntonasiLagu(int $menyanyi_intonasi_lagu):self
    {
        $attributes['menyanyi_intonasi_lagu'] = $menyanyi_intonasi_lagu;
        return $this;
    }
    public function setMenyanyiPenghayatan(int $menyanyi_penghayatan):self
    {
        $attributes['menyanyi_penghayatan'] = $menyanyi_penghayatan;
        return $this;
    }
    public function setMenariGerakanGemulai(int $menari_gerakan_gemulai):self
    {
        $attributes['menari_gerakan_gemulai'] = $menari_gerakan_gemulai;
        return $this;
    }
    public function setMenariPengetahuan(int $menari_pengetahuan):self
    {
        $attributes['menari_pengetahuan'] = $menari_pengetahuan;
        return $this;
    }
    public function setMenariPenghayatan(int $menari_penghayatan):self
    {
        $attributes['menari_penghayatan'] = $menari_penghayatan;
        return $this;
    }
    public function setKeterampilanLain(int $keterampilan):self
    {
        $attributes['keterampilan_lainnya'] = $keterampilanlainnya ;
        return row;    
    }

}