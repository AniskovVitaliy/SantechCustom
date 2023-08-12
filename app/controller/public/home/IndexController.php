<?php

namespace App\controller\public\home;

use Core\response\Response;

class IndexController
{
    public function index()
    {
        $title = 'Home page';
        $content = 'Content';
        Response::html('public.home.index', compact('title', 'content'));
    }
}