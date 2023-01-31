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