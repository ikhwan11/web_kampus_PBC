<?php

namespace App\Controllers;

class Admin_tenagapengajar extends BaseController
{
    public function index()
    {
        return view('back_end/tenaga_pengajar');
    }

    public function detail()
    {
        return view('back_end/tenaga_pengajar_detail');
    }

    public function create()
    {
        return view('back_end/tenaga_pengajar_tambah');
    }
    public function edit()
    {
        return view('back_end/tenaga_pengajar_edit');
    }
}
