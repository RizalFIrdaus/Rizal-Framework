<?php
require_once __DIR__ . "/../vendor/autoload.php";
use Rizal\Mvc\Helper\Route;
use Rizal\Mvc\Router\Web;

$web = new Web();
$web->run();
Route::run();