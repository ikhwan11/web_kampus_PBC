<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        return view('front_end/about');
    }
}
