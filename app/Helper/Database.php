<?php

namespace Rizal\Mvc\Helper;
use PDO;
use PDOException;

class Database extends PDO {
   
    public static function getConnection(){

        try {
            $host = "localhost";
            $port = "3306";
            $dbname = "mvc";
            $username = "root";
            $password ="";
            $dsn = "mysql:port=$host:$port;dbname=$dbname";
            return new PDO($dsn, $username,$password);
        }catch(PDOException $exception){
            echo "Error : " . $exception->getMessage().PHP_EOL; 
            
        }
      
    
    }
}