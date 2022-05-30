<?php
namespace App\Entities;

use CodeIgniter\Entity;

class Pbb extends Entity
{
    protected $attributes = [
        'kode_peserta' => null,
        'sikap_sempurna' => null,
        'sikap_hormat' => null,
        'sikap_istirahat' => null,
        'langkah_tegap' => null,
        'jalan_ditempat' => null,
        'hadap_kanan_kiri' => null,
        'hadap_serong_kanan_kiri' => null,
        'balik_kanan' => null,
        'langkah_lrfb' => null,
        'kesigapan' => null
    ];
    public function setKodePeserta(int $kode_peserta):self
    {
        $attributes['kode_peserta'] = $kode_peserta;
        return $this;
    }
    public function setSempurna(int $sikap_sempurna):self
    {
        $attributes['sikap_sempurna'] = $sikap_sempurna;
        return $this;
    }public function setHormat(int $sikap_hormat):self
    {
        $attributes['sikap_hormat'] = $sikap_hormat;
        return $this;
    }public function setIstirahat(int $sikap_istirahat):self
    {
        $attributes['sikap_istirahat'] = $sikap_istirahat;
        return $this;
    }public function setLangkahTegap(int $langkah_tegap):self
    {
        $attributes['langkah_tegap'] = $langkah_tegap;
        return $this;
    }public function setJalanTempat(int $jalan_ditempat):self
    {
        $attributes['jalan_ditempat'] = $jalan_ditempat;
        return $this;
    }public function setHadapKananKiri(int $hadap_kanan_kiri):self
    {
        $attributes['hadap_kanan_kiri'] = $hadap_kanan_kiri;
        return $this;
    }public function setHadapSerongKananKiri(int $hadap_serong_kanan_kiri):self
    {
        $attributes['hadap_serong_kanan_kiri'] = $hadap_serong_kanan_kiri;
        return $this;
    }public function setBalikKanan(int $balik_kanan):self
    {
        $attributes['balik_kanan'] = $balik_kanan;
        return $this;
    }public function setLangkahLrfb(int $langkah_lrfb):self
    {
        $attributes['langkah_lrfb'] = $langkah_lrfb;
        return $this;
    }
    public function setKesigapan(int $kesigapan):self
    {
        $attributes['kesigapan'] = $kesigapan;
        return $this;
    }
}