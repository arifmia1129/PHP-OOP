<?php

class Man{
    public $name = "Arif";
    public $age = '24';
    public $gender = "male";

    function info() {
        return "I am Software Developer";
    }
}


$my_info = new Man();

echo $my_info->name;
echo $my_info->age;
echo $my_info->gender;
echo $my_info->info();

?>