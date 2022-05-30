<?php

namespace App\Models;

use App\Entities\Samapta;
use CodeIgniter\Model;

class SamaptaModel extends Model
{
    protected $table = 'samapta';
    protected $returnType = Samapta::class;
    protected $allowedFields = [];
}