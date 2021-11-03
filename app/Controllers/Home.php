<?php

namespace App\Controllers;

use App\Models\Mod_dosen;

class Home extends BaseController
{
    protected $dosenModel;
    public function __construct()
    {
        $this->dosenModel = new Mod_dosen();
    }

    public function index()
    {
        $data = [
            'dosen_data' => $this->dosenModel->findAll(),
        ];
        return view('front_end/home', $data);
    }
}
