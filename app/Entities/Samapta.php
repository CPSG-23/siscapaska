<?php
namespace App\Entities;

use CodeIgniter\Entity;

class Samapta extends Entity
{
    protected $attributes = [
        'kode_peserta' => null,
        'lari' => null,
        'sit_up' => null,
        'push_up' => null,
        'shuttle_run' => null
    ];
    public function setKodePeserta(string $kode_peserta):self
    {
        $attributes['kode_peserta'] = $kode_peserta;
        return $this;
    }
    public function setLari(int $lari):self
    {
        $attributes['lari'] = $lari;
        return $this;
    }
    public function setSitup(int $sit_up):self
    {
        $attributes['sit_up'] = $sit_up;
        return $this;
    }public function setPushup(int $push_up):self
    {
        $attributes['push_up'] = $push_up;
        return $this;
    }public function setShuttleRun(int $shuttle_run):self
    {
        $attributes['shuttle_run'] = $shuttle_run;
        return $this;
    }
}