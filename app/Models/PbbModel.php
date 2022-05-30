<?php

namespace App\Models;

use App\Entities\Pbb;
use CodeIgniter\Model;

class PbbModel extends Model
{
    protected $table = 'pbb';
    protected $returnType = Pbb::class;
    protected $allowedFields = [];
}