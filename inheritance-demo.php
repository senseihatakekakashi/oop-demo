<?php require_once "Student.php"; ?>

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
        $student1 = new Student;
        $student1->sayHello();
        $student1->setName("Renmark");
        $student1->sayName();
        $student1->sayDream();
    ?>
</body>
</html>