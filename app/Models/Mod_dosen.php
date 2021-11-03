<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_dosen extends Model
{
    protected $table      = 'tb_dosen';
    protected $primaryKey = 'id_pengajar';

    protected $allowedFields = ['nama', 'jenis_kelamin', 'tanggal_lahir', 'tempat_lahir', 'alamat_asal', 'jabatan', 'foto', 'no_hp', 'email'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_pengajar' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('tb_dosen')->like('nama', $keyword);
    }
}
