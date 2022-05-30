<?php

namespace App\Models;

use App\Entities\Parade;
use CodeIgniter\Model;

class ParadeModel extends Model
{
    protected $table = 'parade';
    protected $returnType = Parade::class;
    protected $allowedFields = [];
}