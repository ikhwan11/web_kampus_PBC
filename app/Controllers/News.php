<?php

namespace App\Controllers;

use App\Models\Mod_blog;

class News extends BaseController
{
    protected $blogModel;
    public function __construct()
    {
        $this->blogModel = new Mod_blog();
    }

    public function index()
    {
        $data = [
            'blog_data' => $this->blogModel->paginate(4, 'tb_blog'),
            'blog_terbaru' => $this->blogModel->berita_terbaru(),
            'pager' => $this->blogModel->pager,
        ];
        return view('front_end/news', $data);
    }
    public function detail_news($id)
    {
        $data = [
            'blog_data' => $this->blogModel->getData($id),
        ];
        return view('front_end/news_single', $data);
    }
}
