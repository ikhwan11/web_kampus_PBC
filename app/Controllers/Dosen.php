<?php

namespace App\Controllers;

use App\Models\Mod_dosen;
use App\Models\Mod_pengalaman;

class Dosen extends BaseController
{
    protected $dosenModel;
    protected $pengalamanModel;
    public function __construct()
    {
        $this->dosenModel = new Mod_dosen();
        $this->pengalamanModel = new Mod_pengalaman();
    }
    public function index()
    {
        $data = [
            'dosen_data' => $this->dosenModel->findAll()
        ];
        return view('front_end/dosen', $data);
    }

    public function dosen_detail($id)
    {
        $data = [
            'dosen_data' => $this->dosenModel->getData($id),
            'pengalaman_data' => $this->pengalamanModel->getPengalaman($id)
        ];
        return view('front_end/dosen_detail', $data);
    }
}
