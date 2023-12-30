<?php

    class Student {
        public $name;
        public $class;
        public $roll;

        function __construct($name, $class, $roll) {
            $this->name = $name;
            $this->class = $class;
            $this->roll = $roll;
        }

        function print_info() {
            echo "Student name: ".$this->name."\n"."Class: ".$this->class."\n"."Roll: ".$this->roll;
        }

    }


    $student1 = new Student("Arif", "Diploma In Computer Engineering", "112864");

    $student1->print_info();

?>