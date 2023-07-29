<?php

namespace App\controller\home;

use Core\response\Response;

class IndexController
{
    public function index()
    {
        $title = 'Home page';
        $content = 'Content';
        Response::html('home.index', compact('title', 'content'));
    }
}