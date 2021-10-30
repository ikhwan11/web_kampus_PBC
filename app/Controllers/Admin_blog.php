<?php

namespace App\Controllers;

class Admin_blog extends BaseController
{
    public function index()
    {
        return view('back_end/blog');
    }
}
