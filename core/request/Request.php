<?php

namespace Core\request;

use Core\router\Route;

abstract class Request
{
    private array $post;
    //private array $get;

    public function __construct()
    {
        $this->post = $_POST;
        //$this->get = $_GET;

        return $this;
    }

    public function get($key)
    {
        return $this->post[$key];
    }

    abstract public function run();

    public function validate()
    {
        $validateArray = $this->run();

        foreach ($validateArray as $key => $type)
        {
            $variable = $this->checkVariable($type, $this->post[$key]);

            if($variable !== 'bad_variable') {
                $this->post[$key] = $variable;
            } else {
                Route::Redirect('localhost');
            }
        }

        return $this;
    }

    private function checkVariable($type, $variable): string|bool|int
    {
        return match ($type){
            'integer' => preg_match('/^\d+$/ui', $variable) ? (integer)$variable : 'bad_variable',
            'string' => is_string($variable) ? $variable : 'bad_variable',
            'bool' => preg_match('/(false|true)/ui', $variable) ? json_decode($variable) : 'bad_variable',
            default => 'bad_variable'
        };
    }
}