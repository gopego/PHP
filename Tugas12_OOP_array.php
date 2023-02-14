<?php

class Astro {
    public $array;

    public function __construct($array) {
        $this->array = $array;
    }

    public function display() {
        foreach($this->array as $value) {
            echo $value.'<br>';
        }
    }
}

$array = ['Mudi','Fahmi','Udin','Adel'];
$display = new Astro($array);
$display->display();

?>