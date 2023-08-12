<?php

namespace Core;

class Error
{

    /**
     * Return Error Name
     *
     * @param $errorNumber
     * @return string
     */
    private static function getErrorName($errorNumber): string
    {
        return match ($errorNumber) {
            E_ERROR => 'E_ERROR',
            E_WARNING => 'E_WARNING',
            E_PARSE => 'E_PARSE',
            E_NOTICE => 'E_NOTICE',
            E_CORE_ERROR => 'E_CORE_ERROR',
            E_COMPILE_WARNING => 'E_COMPILE_WARNING',
            E_USER_ERROR => 'E_USER_ERROR',
            E_USER_WARNING => 'E_USER_WARNING',
            E_USER_NOTICE => 'E_USER_NOTICE',
            E_ALL => 'E_ALL',
            E_STRICT => 'E_STRICT',
            E_RECOVERABLE_ERROR => 'E_RECOVERABLE_ERROR',
            default => 'E_UNDEFINED'
        };
    }

    /**
     * Start to check error
     */
    public function register()
    {
        ini_set('display_errors', 'on');

        set_error_handler([$this, 'errorHandler']);
        register_shutdown_function([$this, 'fatalErrorHandler']);
        set_exception_handler([$this, 'exceptionHandler']);
    }


    public function errorHandler($errno, $errorStr, $file, $line): bool
    {
        $message = '[' . date("Y-m-d H:i:s") . '] {' . self::getErrorName($errno) . '} (' . $line . ') ' . $errorStr . ' ' . $file . PHP_EOL;
        $this->writeErrorLog($message);

        return true;
    }

    public function fatalErrorHandler(): void
    {
        if (!empty($error = error_get_last()) AND $error['type'] & (E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR)) {
            ob_get_clean();
            $message = '[' . date("Y-m-d H:i:s") . '] {' . self::getErrorName($error['type']) . '} (' . $error['line'] . ') ' . $error['message'] . ' ' . $error['file'] . PHP_EOL;
            $this->writeErrorLog($message);
        }
    }

    public function exceptionHandler($e): bool
    {
        $message = '[' . date("Y-m-d H:i:s") . '] {' . self::getErrorName($e->getCode()) . '} (' . $e->getLine() . ') ' . $e->getMessage() . ' ' . $e->getFile() . PHP_EOL;
        $this->writeErrorLog($message);

        return true;
    }

    private function writeErrorLog($message): void
    {
        $errorFile = fopen($_SERVER['HOME'] . '/src/logs/log.log', 'a');
        fwrite($errorFile, $message);
        fclose($errorFile);
    }

}