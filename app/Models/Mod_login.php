<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_login extends Model
{

    public function getLogin($username, $tbl)
    {
        $builder = $this->db->table($tbl);
        $builder->where('username', $username);
        $log = $builder->get()->getRow();
        return $log;
    }
}
