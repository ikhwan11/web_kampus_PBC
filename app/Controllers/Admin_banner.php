<?php

namespace App\Controllers;

class Admin_banner extends BaseController
{
    public function index()
    {
        return view('back_end/banner_promosi');
    }
}
