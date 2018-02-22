<?php

require_once 'Pessoa.php';
class Gafanhoto extends Pessoa
{
    private $login;
    private $totAssistido;
    
    public function __construct($nome, $idade, $sexo, $login) 
    {
        parent:: __construct($nome, $idade, $sexo);
            $this->login = $login;
    }

    
    public function verMaisUm()
    {
        $this->totAssitido ++;
    }
    
    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistido() {
        return $this->totAssitido;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setTotAssistido($totAssitido) {
        $this->totAssitido = $totAssitido;
    }


}
