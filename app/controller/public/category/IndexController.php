<?php

namespace app\controller\public\category;

use Core\controller\Controller;
use Core\response\Response;

class IndexController extends Controller
{

    public function index()
    {
        Response::html('public.category.index', []);
    }

}