<?php

namespace App\Models;

use App\Entities\Peserta;
use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $table = 'peserta';
    protected $returnType = Peserta::class;
    protected $allowedFields = [
        'kode',
        'nama',
        'jk',
        'ttl',
        'agama',
        'alamat',
        'telp',
        'hp',
        'tinggi_badan',
        'berat_badan',
        'golongan_darah',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'alamat_ortu',
    ];
    protected $validationRules = [
        'kode' => 'required|is_unique[Peserta.kode,id,{id}]',
        'nama' => 'required|alpha|min_length[3]|max_length[50]',
        'jk' => 'required',
        'ttl' => 'required',
        'agama' => 'required',
        'hp' => 'required|numeric',
        'tinggi_badan' => 'required|numeric',
        'berat_badan' => 'required|numeric'
    ];
}