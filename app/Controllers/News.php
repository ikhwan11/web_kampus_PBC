<?php

namespace App\Controllers;

class News extends BaseController
{
    public function index()
    {
        return view('front_end/news');
    }
    public function detail_news()
    {
        return view('front_end/news_single');
    }
}
