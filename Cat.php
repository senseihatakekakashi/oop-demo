<?php
    class Cat {
        private $mood = 0;
        private $hungry = 0;
        private $energy = 0;

        private function meow() {
            echo "Meow Meow!<br>";
        }

        function sleep() {
            $this->energy++;
            $this->hungry--;
        }

        function play() {
            $this->mood++;
            $this->energy--;
            $this->meow();
        }

        function feed() {
            $this->hungry--;
            $this->mood++;
            $this->meow();
        }

        function getStats() {
            echo '<h4>Cat Status:</h4>';
            echo '<ul>';
                echo '<li><b>Mood:</b> ' . $this->wordedStats($this->mood, 'mood') . '</li>';
                echo '<li><b>Hungry:</b> ' . $this->wordedStats($this->hungry, 'hungry') . '</li>';
                echo '<li><b>Energy:</b> ' . $this->wordedStats($this->energy, 'energy') . '</li>';
            echo '</ul>';
        }

        function wordedStats($value, $type) {
            if($type == 'mood') {
                if($value > 0) 
                    return "Happy!";
                elseif($value < 0)
                    return  "Angry!";
                else 
                    return "Neutral";
            }
            elseif($type == 'hungry') {
                if($value > 0) 
                    return "Hungry!";
                elseif($value < 0)
                    return  "Full!";
                else 
                    return "Neutral";
            }
            elseif($type == 'energy') {
                if($value > 0) 
                    return "Strong!";
                elseif($value < 0)
                    return  "Weak!";
                else 
                    return "Neutral";
            }
            else 
                return "Error!";
        }
    }
?>