<?php
    require_once "Person.php";

    class Student extends Person {
        
        function sayHello() {
            echo "Hey!<br>";
        }

        function sayDream() {
            echo 'I wanna be the very best! No one ever was!';
        }
    }
?>