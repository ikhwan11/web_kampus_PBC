<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_spmi extends Model
{
    protected $table      = 'tb_dokumen';
    protected $primaryKey = 'id_dk';

    protected $allowedFields = ['id_spmi', 'nama_dk', 'file_dk', 'jenis_dk_tambahan', 'tahun_akademik'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function data_sop()
    {
        return $this->where(['jenis_dk_tambahan' => 'SOP']);
    }
}
