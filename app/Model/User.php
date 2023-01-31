<?php

namespace Rizal\Mvc\Model;

use Rizal\Mvc\Helper\Database;

class User {
    static private array $field;
    
    public static function run():array{
       
        $con = Database::getConnection();
        $sql = "SELECT * FROM user";
        $statement = $con->prepare($sql);
        $statement->execute();
        foreach ($statement as $row){
             self::$field[] = [
                "name" => $row["name"],
                "age" =>$row["age"]
            ];
        }
        return self::$field;
    }
}