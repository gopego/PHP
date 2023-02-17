<?php

class Astro {
    public $array;
    
    public function display($array) {
        $this->array = $array;
        foreach($this->array as $value) {
            echo $value.'<br>';
        }
    }
}

$array = ['Mudi','Fahmi','Udin','Adel'];
$display = new Astro();
$display->display($array);

?>