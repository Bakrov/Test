<?php

class Example {

    private $tablica;

    public function __construct() {
        $this->tablica = [];
        for ($i = 0; $i < 100; $i++) {
            array_push($this->tablica, "To jest" . ($i + 1) . "linijka tekstu<br/>");
        }
    }

    public function display() {
        foreach ($this->tablica as $element) {
            echo $element;
        }
    }

}
