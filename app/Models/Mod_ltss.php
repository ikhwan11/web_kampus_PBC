<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_ltss extends Model
{
    protected $table      = 'tb_sslaptahunan';
    protected $primaryKey = 'id_ss';

    protected $allowedFields = ['id_lap', 'nama_ss', 'file_ss'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_ss' => $id])->first();
    }
}
