<?php

    trait ProgrammingLanguage1 {
        public function php() {
            return "PHP is a awesome language. It's very easy to learn\n";
        }
    }

    trait ProgrammingLanguage2 {
        public function javascript() {
            return "Javascript is a very good language. We can use this language client side as well as server side";
        }
    }


    class Programming {
        use ProgrammingLanguage1;
        use ProgrammingLanguage2;
    }

    $programming = new Programming();

    echo $programming->php();
    echo $programming->javascript();


?>