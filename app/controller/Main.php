<?php

namespace app\controller;

use App\model\Product;
use App\request\MainRequest;
use Core\controller\Controller;

class Main extends Controller
{

    public function index()
    {
        $product_obj = new Product();
        $product_array = $product_obj->getProduct('id', '!=', 0);

        foreach ($product_array as $key => $value)
        {
            echo 'id = ' . $key . ' | name = ' . $value['name'] . '<br>';
        }
    }

    public function show($first_param, $last_param, MainRequest $mainRequest)
    {
        $request = $mainRequest->validate();

        echo 'вы перешли по адресу: /hello/' . $first_param . '/product/' . $last_param . $request->get('test1');
    }

}