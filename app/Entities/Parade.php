<?php
namespace App\Entities;

use CodeIgniter\Entity;

class Parade extends Entity
{
    protected $attributes = [
        'kode_peserta' => null,
        'tinggi_badan' => null,
        'berat_badan' => null,
        'mata' => null,
        'bahu' => null,
        'tangan' => null,
        'kaki' => null,
        'platefoot' => null,
        'total_nilai' => null
    ];

    public function setKodePeserta(string $kode_peserta):self
    {
        $this->attributes['kode_peserta'] = $kode_peserta;
        return $this;
    }
    public function setTinggiBadan(int $tinggi_badan):self
    {
        $this->attributes['tinggi_badan'] = $tinggi_badan;
        return $this;
    }
    public function setBeratBadan(int $berat_badan):self
    {
        $this->attributes['berat_badan'] = $berat_badan;
        return $this;
    }
    public function setMata(int $mata):self
    {
        $this->attributes['mata'] = $mata;
        return $this;
    }
    public function setBahu(int $bahu):self
    {
        $this->attributes['bahu'] = $bahu;
        return $this;
    }
    public function setTangan(int $tangan):self
    {
        $this->attributes['tangan'] = $tangan;
        return $this;
    }
    public function setKaki(int $kaki):self
    {
        $this->attributes['kaki'] = $kaki;
        return $this;
    }
    public function setPlatefoot(int $platefoot):self
    {
        $this->attributes['platefoot'] = $platefoot;
        return $this;
    }
    public function setTotal(int $total):self
    {
        $this->attributes['total_nilai'] = $total_nilai;
        return $this;
    }
}