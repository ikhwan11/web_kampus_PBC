<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_pengalaman extends Model
{
    protected $table      = 'tb_pengalaman';
    protected $primaryKey = 'id_pengalaman';

    protected $allowedFields = ['id_pengajar', 'jabatan', 'perusahaan', 'tahun_mulai', 'tahun_selesai'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_pengalaman' => $id])->first();
    }

    public function getPengalaman($id)
    {
        return $this->where(['id_pengajar' => $id])->findAll();
    }
}
