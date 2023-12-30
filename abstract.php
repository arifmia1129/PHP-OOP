<?php

   abstract class Greeting {
        public $name;

        function __construct($name) {
            $this->name = $name;
        }

        abstract public function show_greeting();
    }

    class Send_Greeting extends Greeting{
        public function show_greeting () {
            return "Hello, $this->name";
        }
    }

    $person1 = new Send_Greeting("Arif");

   echo $person1->show_greeting();

?>