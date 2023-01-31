<?php

namespace Rizal\Mvc\Controller;

require_once __DIR__ . "/../../vendor/autoload.php";

use Rizal\Mvc\Model\User;
use Rizal\Mvc\Helper\Controller;
class HomeController {

    public function index(){
        $models = User::All();
        Controller::view("index",$models);

    }
    public function phpinfo(){
        Controller::view("phpinfo");
    }
    public function test(string $id){
        echo $id;
    }
}