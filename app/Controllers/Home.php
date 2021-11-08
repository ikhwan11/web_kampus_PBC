<?php

namespace App\Controllers;

use App\Models\Mod_dosen;
use App\Models\Mod_blog;

class Home extends BaseController
{
    protected $dosenModel;
    protected $blogModel;
    public function __construct()
    {
        $this->dosenModel = new Mod_dosen();
        $this->blogModel = new Mod_blog();
    }

    public function index()
    {

        $data = [
            'dosen_data' => $this->dosenModel->paginate(4),
            'blog_data' => $this->blogModel->paginate(8),
        ];
        return view('front_end/home', $data);
    }
}
