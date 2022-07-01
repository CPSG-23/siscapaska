<?php namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','username','password','hak_access','created_at','updated_at','deleted_at']; 

    // GET ALL DATA
    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->db->where($this->primaryKey, $id)->first();
    }
    public function getUser($nisn){
        return $this
        ->table($this->table)
        ->where('username', $nisn)
        ->paginate(1);
    }


}