<?php

    interface Youtube_Channel{
        public function show_message();
    }

    class TenMS implements Youtube_Channel{
        public function show_message()
        {
            return "Educational channel";
        }
    }

    class SomoyTv implements Youtube_Channel{
        public function show_message()
        {
            return "News channel";
        }
    }

    class AlAtism implements Youtube_Channel {
        public function show_message()
        {
            return "Islamic Lecture";
        }
    }


    $ten_ms = new TenMS();
    $somoy_tv = new SomoyTv();
    $al_atism = new AlAtism();


    $data = array($ten_ms, $somoy_tv, $al_atism);

    foreach($data as $value){
        echo $value->show_message()."\n";
    }


?>