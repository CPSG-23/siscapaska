<?php
namespace App\Entities;

use CodeIgniter\Entity;

class Wawancara extends Entity
{
    protected $attributes = [
        'kode_peserta' => null,
        'sikap' => null,
        'cara_bicara' => null,
        'pemakaian_bahasa' => null,
        'kemampuan_menjawab' => null,
        'kemampuan_komputer' => null,
        'totalnilai' => null
    ];
    public function setKodePeserta(int $kode_peserta):self
    {
        $attributes['kode_peserta'] = $kode_peserta;
        return $this;
    }
    public function setSikap(int $sikap):self
    {
        $attributes['sikap'] = $sikap;
        return $this;
    }
    public function setCaraBicara(int $cara_bicara):self
    {
        $attributes['cara_bicara'] = $cara_bicara;
        return $this;
    }
    public function setPemakaianBahasa(int $pemakaian_bahasa):self
    {
        $attributes['pemakaian_bahasa'] = $pemakaian_bahasa;
        return $this;
    }
    public function setKemampuanMenjawab(int $kemampuan_menjawab):self
    {
        $attributes['kemampuan_menjawab'] = $kemampuan_menjawab;
        return $this;
    }
    public function setKemampuanKomputer(int $kemampuan_komputer):self
    {
        $attributes['kemampuan_komputer'] = $kemampuan_komputer;
        return $this;
    }
    public function setTotalNilai(int $total_nilai):self
    {
        $attributes['total_nilai'] = $total_nilai;
        return $this;
    }
}