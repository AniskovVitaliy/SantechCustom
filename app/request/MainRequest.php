<?php

namespace App\request;

use Core\request\Request;

class MainRequest extends Request
{
    public function run()
    {
        return [
            'test1' => 'string',
            //'test2' => 'integer',
            //'test3' => 'bool'
        ];
    }
}