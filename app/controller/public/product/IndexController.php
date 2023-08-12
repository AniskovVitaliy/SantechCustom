<?php

namespace app\controller\public\product;

use Core\controller\Controller;
use Core\response\Response;

class IndexController extends Controller
{

    public function index()
    {
        Response::html('public.product.index', []);
    }

}