<?php

namespace App\model;

use Core\model\BaseModel;

class Product extends BaseModel
{

    public function getProduct($field, $operator, $value): array
    {
        return $this->select('name')->fromTable('product')->where($field, $operator, $value)->get();
    }

}