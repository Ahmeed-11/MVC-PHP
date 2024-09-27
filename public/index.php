<?php 


use SecTheater\Http\Route;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__.'/../routes/web.php';

var_dump(Route::$routes['get']['/']);