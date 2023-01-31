<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Rizal\Mvc\Router\Route;
use Rizal\Mvc\Controller\HomeController;

Route::add("GET", "/", HomeController::class, "index");
Route::add("GET", "/phpinfo", HomeController::class, "phpinfo");
Route::add("GET", "/test", HomeController::class, "test"); 

Route::run();