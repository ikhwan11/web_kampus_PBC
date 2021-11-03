<?php

namespace App\Controllers;

use App\Models\Mod_dosen;

class Dosen extends BaseController
{
    protected $dosenModel;
    public function __construct()
    {
        $this->dosenModel = new Mod_dosen();
    }
    public function index()
    {
        return view('front_end/dosen');
    }

    public function dosen_detail($id)
    {
        $data = [
            'dosen_data' => $this->dosenModel->getData($id),
        ];
        return view('front_end/dosen_detail', $data);
    }
}
