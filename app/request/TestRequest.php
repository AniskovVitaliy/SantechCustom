<?php

namespace App\request;

use Core\request\Request;

class testRequest extends Request
{

    public function run()
    {
        return 'test_request';
    }

}