<?php

    // static properties
/*
    class Product {
        static public $product_name = "Laptop";
        
        public function product_info() {
            return self::$product_name;
        }
    }

    $product = new Product();

    echo $product->product_info();

    echo Product::$product_name;
*/

// static method

    class Student {
        static public function send_sms_alert() {
            return "Your child presented our campus";
        }
    }

    class StudentInfo{
        public function sms_alert() {
            return Student::send_sms_alert();
        }
    }

    class Notify extends Student {
        public function notify() {
            return parent::send_sms_alert();
        }
    }

    // $student1 = new StudentInfo();

    // $student_notify = new Notify();

    // echo $student_notify->notify();

    // echo $student1 -> sms_alert();

    // echo Student::send_sms_alert();

?>