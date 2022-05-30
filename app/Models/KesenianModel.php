<?php

namespace App\Models;

use App\Entities\Kesenian;
use CodeIgniter\Model;

class KesenianModel extends Model
{
    protected $table = 'kesenian';
    protected $returnType = Kesenian::class;
    protected $allowedFields = [];
}