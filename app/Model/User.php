<?php

namespace Rizal\Mvc\Model;

use Rizal\Mvc\Helper\Database;

class User {
    static private array $field;

    public static function All(){
        $con = Database::getConnection();
        $sql = "SELECT * FROM user";
        $statement = $con->prepare($sql);
        $statement->execute();
        foreach ($statement as $value){
             self::$field[] = [
                "name" => $value["name"],
                "age" => $value["age"],
            ];
        }
        
        return self::$field;
    }
}