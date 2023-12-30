<?php

    class student_info{
        public $name;
        public $class;
        public $roll;

        function __construct($name, $class, $roll){
            $this->name = $name;
            $this->class = $class;
            $this->roll = $roll;
        }

        public function print_student_info() {
            echo "Name: ".$this->name."\n"."Class: ".$this->class."\n"."Roll: ".$this->roll;
        }
    }

    class parent_info extends student_info {
        public $father_name;
        public $mother_name;
        public $contact_no;


        function __construct($name, $class, $roll,$f_name, $m_name, $contact_no) {
            $this->name = $name;
            $this->class = $class;
            $this->roll = $roll;
            $this->father_name = $f_name;
            $this->mother_name = $m_name;
            $this->contact_no = $contact_no;
        }

        function print_full_details() {
            echo "Name: ".$this->name."\n"."Class: ".$this->class."\n"."Roll: ".$this->roll."\n". "Father's name: ".$this->father_name."\n"."Mother's name: ".$this->mother_name."\n"."Contact no: ".$this->contact_no;
        }

    }


    // $student1 = new student_info("Arif", "Computer Technology", "112864");

    $info1 = new parent_info("Arif", "Computer Technology", "112864","Zaidul", "Nurzahan", "01713749534");

    $info1->print_full_details();


    // final class channel1{
    //    final public function message(){
    //         return "Hello, everyone";
    //     }
    // }

    // class channel2 extends channel1 {
    //     public function message() {
    //         return "Thanks for watching";
    //     }
    // }

?>