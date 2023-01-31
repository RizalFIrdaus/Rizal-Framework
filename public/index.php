<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Rizal\Mvc\Router\Route;

Route::add("GET", "/", "HomeController", "index");
Route::add("GET", "/phpinfo", "HomeController", "index");
Route::add("GET", "/test", "HomeController", "index"); 

Route::run();