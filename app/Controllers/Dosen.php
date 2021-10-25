<?php

namespace App\Controllers;

class Dosen extends BaseController
{
    public function index()
    {
        return view('front_end/dosen');
    }

    public function dosen_detail()
    {
        return view('front_end/dosen_detail');
    }
}
