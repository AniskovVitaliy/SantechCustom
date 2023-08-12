<?php

namespace App\controller\admin\home;

use Core\response\Response;

class IndexController
{
    public function index()
    {
        $title = 'Home page';
        $content = 'Content';
        Response::html('admin.home.index', compact('title', 'content'));
    }
}