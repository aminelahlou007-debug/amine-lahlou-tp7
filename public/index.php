<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Polyfill for mb_split when the PHP mbstring extension is not available.
if (! function_exists('mb_split')) {
    function mb_split($pattern, $string)
    {
        $result = @preg_split($pattern, $string);
        if ($result === null) {
            // Try adding delimiters and UTF-8 modifier if preg_split failed
            $try = '/'.trim($pattern, '/').'/' . 'u';
            $result = @preg_split($try, $string);
        }

        return $result === null ? [] : $result;
    }
}

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
