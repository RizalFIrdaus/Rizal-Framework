<?php

namespace Rizal\Mvc\Controller;

class HomeController {

    public function index(){
        echo "Index HomeContorller";
    }
    public function phpinfo(){
        phpinfo();
    }
    public function test(){
        echo "test";
    }
}