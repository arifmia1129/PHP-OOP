<?php

    class MySelf {
        const MESSAGE = "I am a Software Developer";

        public function show_message() {
            return self::MESSAGE;
        }

    }

    $my_self = new MySelf();

    echo $my_self->show_message();

    // echo MySelf::MESSAGE;

?>