<?php

namespace app\controller\product;

use Core\controller\Controller;
use Core\response\Response;

class IndexController extends Controller
{

    public function index()
    {
        Response::html('product.index', []);
    }

}