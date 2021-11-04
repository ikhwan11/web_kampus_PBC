<?php

namespace App\Controllers;

use App\Models\Mod_dosen;

class Prodi extends BaseController
{
    protected $dosenModel;
    public function __construct()
    {
        $this->dosenModel = new Mod_dosen();
    }

    public function pp()
    {

        $data = [
            'dosen_data' => $this->dosenModel->where(['id_pengajar' => 5])->first()
        ];
        return view('front_end/prodi_pp', $data);
    }
    public function pw()
    {
        $data = [
            'dosen_data' => $this->dosenModel->where(['id_pengajar' => 1])->first()
        ];
        return view('front_end/prodi_pw', $data);
    }
    public function sk()
    {
        $data = [
            'dosen_data' => $this->dosenModel->where(['id_pengajar' => 3])->first()
        ];
        return view('front_end/prodi_sk', $data);
    }
}
