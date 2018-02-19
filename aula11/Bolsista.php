<?php

require_once 'Aluno.php';
class Bolsista extends Aluno {
    private $bolsa;
    
    function renovarBolsa(){
        echo "<p>Bolsa renovada</p>";
    }
    
    function pagarMensal(){
        echo "<p>$this->nome é bolsista, então paga com desconto</p>";
    }
    
    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }


}
