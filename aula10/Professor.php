<?php

require_once 'Pessoa.php';
class Professor extends Pessoa {
    private $especialidade;
    private $salario;
    
    function receberAum($v){
       $this->salario = $this->salario + $v;
    }
    
    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }


}
