<?php

namespace Core\helper;

class Helper
{

    public static function screeningSlashes($str): string
    {
        return str_replace('/', '\\/', $str);
    }

}