<?php

require __DIR__ . "/vendor/autoload.php";

require __DIR__ . '/app/router/routeList.php';

use Core\App;

//$_POST['test1'] = 'test';
//$_POST['test2'] = '123asd';
//$_POST['test3'] = 'false';

App::run();