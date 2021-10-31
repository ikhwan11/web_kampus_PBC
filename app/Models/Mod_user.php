<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_user extends Model
{
    protected $table      = 'tb_user';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'nama', 'username', 'password', 'role'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
