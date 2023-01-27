<?php require_once "Cat.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ming_ming = new Cat;
        $ming_ming->feed();
        $ming_ming->feed();
        $ming_ming->feed();
        $ming_ming->sleep();
        $ming_ming->getStats();
    ?>
</body>
</html>