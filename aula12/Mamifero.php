<?php
require_once 'Animal.php';
class Mamifero extends Animal {
    
    private $corPele;

    public function alimentar() {
        echo"<p>Mamando</p>";
    }

    public function emitirSom() {
        echo "<p>som de mamifero</p>";
    }

    public function locomover() {
        echo "<p>correndo</p>";
    }
    
    function getCorPele() {
        return $this->corPele;
    }

    function setCorPele($corPele) {
        $this->corPele = $corPele;
    }



}
