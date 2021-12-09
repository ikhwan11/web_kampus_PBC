<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_lt extends Model
{
    protected $table      = 'tb_laptahunan';
    protected $primaryKey = 'id_lap';

    protected $allowedFields = ['nama_lap', 'cover', 'kreator', 'file_laporan', 'paragraf_1', 'paragraf_2', 'paragraf_3', 'paragraf_4', 'paragraf_5', 'point_1', 'point_2', 'point_3', 'point_4', 'point_5',];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    public function getDataAja($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_lap' => $id])->first();
    }

    public function getData($id)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return  $this->db->table('tb_laptahunan')
            ->join('tb_sslaptahunan', 'tb_sslaptahunan.id_lap = tb_laptahunan.id_lap')
            ->where(['tb_laptahunan.id_lap' => $id])
            ->get()->getFirstRow();
    }
}
