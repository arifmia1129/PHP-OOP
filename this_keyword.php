<?php

    class People{
        public $name;
        public $age;
        public $gender;

        function __construct($name, $age, $gender) {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        public function print_people_info() {
            echo "Name: ".$this->name. "\n"."Age: ".$this->age."\n"."Gender: ".$this->gender;
        }
    }

    $people1 = new People("Arif", "24", "Male");

    $people1->print_people_info();

?>