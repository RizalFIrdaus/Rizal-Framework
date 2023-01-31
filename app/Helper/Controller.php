<?php 

namespace Rizal\Mvc\Helper;

use Rizal\Mvc\Model\User;

class Controller {

    public static function view(string $path, array $models =[]){
        if(!is_null($models)){
            $models;
        }
        require __DIR__."/../View/$path.php";
    }
}