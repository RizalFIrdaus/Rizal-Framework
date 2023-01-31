<?php


namespace Rizal\Mvc\Router;
require_once "../vendor/autoload.php";

use Rizal\Mvc\Helper\Route;
use Rizal\Mvc\Controller\HomeController;

class Web {
    public function run(){
        Route::add("GET", "/", HomeController::class, "index");
        Route::add("GET", "/phpinfo", HomeController::class, "phpinfo");
        Route::add("GET", "/test", HomeController::class, "test"); 
    }
}



