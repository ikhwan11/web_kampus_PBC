<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_blog extends Model
{
    protected $table      = 'tb_blog';
    protected $primaryKey = 'id_blog';

    protected $allowedFields = ['judul', 'gambar', 'kategori', 'admin', 'tanggal', 'paragraf_1', 'paragraf_2', 'paragraf_3', 'paragraf_4', 'paragraf_5', 'paragraf_6', 'paragraf_7'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_blog' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('tb_blog')->like('judul', $keyword);
    }

    public function berita_terbaru()
    {
        return $this->table('tb_blog')
            ->orderBy('id_blog', 'DESC')
            ->limit(1)
            ->first();
    }
}
