<?php

namespace Core\response;

class Response
{
    /**
     * @param $template
     * @param $data
     */
    public static function html($template, $data)
    {
        $templateUrl = $_SERVER['DOCUMENT_ROOT'] . '/app/view/' . str_replace('.', '/', $template) . '.php';
        echo self::getHtml($templateUrl, $data);
    }

    /**
     * @param $templateUrl
     * @param $data
     * @return string
     */
    private static function getHtml($templateUrl, $data): string
    {
        extract($data);

        ob_start();

        include $templateUrl;

        $html = ob_get_contents();

        unset($_POST);
        unset($_GET);

        ob_end_clean();

        return $html;
    }
}