<?php 
    class Person{
        public $name;
        public $surname;

        public function __construct($_name, $_surname){
            $this->name = $_name;
            $this->surname = $_surname;
        }
    }
?>