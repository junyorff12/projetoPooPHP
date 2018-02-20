<?php

require_once 'Animal.php';
class Ave extends Animal {
    private $corPena;
    
    public function fazerNinho(){
        echo "<p>Construindo ninho</p>";
    }

    public function alimentar() {
        echo "<p>Comendo frutas</p>";
    }

    public function emitirSom() {
        echo "<p>som da ave</p>";
    }

    public function locomover() {
        echo "<p>voando</p>";
    }
    
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }



}
