<?php
namespace App\Entities;

use CodeIgniter\Entity;

class Peserta extends Entity
{
    protected $attributes = [
        'kode_peserta' => null,
        'nama' => null,
        'jk' => null,
        'ttl' => null,
        'agama' => null,
        'alamat' => null,
        'telp' => null,
        'hp' => null,
        'tinggi_badan' => null,
        'berat_badan' => null,
        'golongan_darah' => null,
        'nama_ayah' => null,
        'nama_ibu' => null,
        'pekerjaan_ayah' => null,
        'pekerjaan_ibu' => null,
        'alamat_ortu' => null,
    ];
    public function setKode(string $kode):self
    {
        $this->attributes['kode_peserta'] = $kode;
        return $this;
    }
    public function setNama(string $nama):self
    {
        $this->attributes['nama'] = $nama;
        return $this;
    }
    public function setJk(string $jk):self
    {
        $this->attributes['jk'] = $jk;
        return $this;
    }
    public function setTtl(string $ttl):self
    {
        $this->attributes['ttl'] = $ttl;
        return $this;
    }
    public function setAgama(string $agama):self
    {
        $this->attributes['agama'] = $agama;
        return $this;
    }
    public function setAlamat(string $alamat):self
    {
        $this->attributes['alamat'] = $alamat;
        return $this;
    }
    public function setTelp(string $telp):self
    {
        $this->attributes['telp'] = $telp;
        return $this;
    }
    public function setHp(string $hp):self
    {
        $this->attributes['hp'] = $hp;
        return $this;
    }
    public function setTinggibadan(int $tinggi_badan):self
    {
        $this->attributes['tinggi_badan'] = $tinggi_badan;
        return $this;
    }
    public function setBeratbadan(int $berat_badan):self
    {
        $this->attributes['berat_badan'] = $berat_badan;
        return $this;
    }
    public function setDarah(string $golongan_darah):self
    {
        $this->attributes['golongan_darah'] = $golongan_darah;
        return $this;
    }
    public function setNamaayah(string $nama_ayah):self
    {
        $this->attributes['nama_ayah'] = $nama_ayah;
        return $this;
    }
    public function setNamaibu(string $nama_ibu):self
    {
        $this->attributes['nama_ibu'] = $nama_ibu;
        return $this;
    }
    public function setPekerjaanayah(string $pekerjaan_ayah):self
    {
        $this->attributes['pekerjaan_ayah'] = $pekerjaan_ayah;
        return $this;
    }
    public function setPekerjaanIbu(string $pekerjaan_ibu):self
    {
        $this->attributes['pekerjaan_ibu'] = $pekerjaan_ibu;
        return $this;
    }
    public function setAlamatortu(string $alamat_ortu):self
    {
        $this->attributes['alamat_ortu'] = $alamat_ortu;
        return $this;
    }
}
?>