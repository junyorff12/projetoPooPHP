<?php

require_once 'Lutador.php';
class Luta {
    //atributos
    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;
    
    
    //Métodos Publicos
    public function marcarLuta($l1, $l2){
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiante = $l1;
            $this->desafiado = $l2;
        } else{
            $this->aprovada = false;
            $this->desafiante = null;
            $this->desafiado =  null;
        }
     }
    
    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0:
                    echo "<p>empate</p>";
                    $this->desafiado->empatarLuta();
                    $this->desfiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>". $this->desafiado->getNome(). " venceu a luta</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>". $this->desafiante->getNome()." VENCEU A LUTA</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        }else{
            echo "Luta não pode acontecer";
        }
    }
    
    //metodos especiais
    
    function getDesafiante() {
        return $this->desafiante;
    }

    function getDesfiado() {
        return $this->desfiado;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setDesfiado($desfiado) {
        $this->desfiado = $desfiado;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }


    
}
