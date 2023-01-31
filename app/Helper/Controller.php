<?php 

namespace Rizal\Mvc\Helper;


class Controller {

    public static function view(string $path, array $models =[]){
        $models;
        require __DIR__."/../View/$path.php";
    }
}