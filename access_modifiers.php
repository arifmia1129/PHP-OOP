<?php
    class Person{
        public $id;
        public $name;
        private $amount;

        function __construct($id, $name, $amount) {
            $this->id = $id;
            $this->name = $name;
            $this->amount = $amount;
        }

        function print_details () {
            echo "ID: ".$this->id."\n"."Name: ".$this->name."\n"."Amount: ".$this->amount;
        }
    }

    $arif = new Person("101", "Arif", 1999);

    $arif->print_details();
//    echo $arif->amount;
?>