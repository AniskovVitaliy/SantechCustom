<?php

namespace app\controller\category;

use Core\controller\Controller;
use Core\response\Response;

class IndexController extends Controller
{

    public function index()
    {
        Response::html('category.index', []);
    }

}