# Rizal Framework

> About
> This Project is starter with mvc architecture and composer management project

## Getting started

A quick introduction

#Via clone github

```shell
git clone https://github.com/RizalFIrdaus/Rizal-Framework
```

#Via Composer

```shell
composer create-project rizal/mvc
```

## Connect Database

Modified Config file database in /Helper/Database.

```shell
 $host = "localhost";
 $port = 3306;
 $dbname = "your dbname";
 $username = "your username";
 $password = "your password";
```

## Controller

Inside App\Controller\(NameController.php)
User is model from App\Mode\User.php, you can modified or add some models.
Controller::view is static function to passing your view and models

```shell
  public function index(){
        $models = User::run();
        Controller::view("index",$models);

  }
```

IF there is no data model in your controller you can passing array null

```shell
  public function phpinfo(){
        Controller::view("phpinfo",[]);
    }
```

## Model

This code are eloquent data, in $sql variable you can modified SQL Syntax like INSERT,UPDATE, OR DELETE
Then you can passing your data with row in database like "name" => $row["name"]

```shell
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
```

## View

This way to fetch your data from controller

```shell
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <?php foreach($models as $row) : ?>
        <h1>Nama : <?= $row["name"]  ?></h1>
        <h1>Umur : <?= $row["age"]  ?></h1>
    <?php endforeach ?>
</body>
</html>
```

## Routing

Routing Connection, in app\Router\Web.php

```shell
 public function run(){
        Route::add("GET", "/", HomeController::class, "index");
        Route::add("GET", "/phpinfo", HomeController::class, "phpinfo");
        Route::add("GET", "/test/([0-9a-zA-Z]*)", HomeController::class, "test");
    }
```

## How to running

```shell
cd public
php -S localhost:8080
```

### Built By

Muhammad Rizal Firdaus
