<?php
    class Person {
        // Properties
        // Data Members
        private $name;
        private $sex;
        private $age;

        // Methods
        // Functionality
        function sayHello() {
            echo "Hello!<br>";
        }

        function sayName() {
            echo "Hello I am " . $this->name . "!<br>";
        }

        function setName($name) {
            $this->name = $name;
        }
    }
?>