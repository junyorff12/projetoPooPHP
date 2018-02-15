<?php


class Lutador {
    #atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;
   
    #metodos especiais
    
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria($categoria) {
        if ($this->peso < 52.2){
            $this->categoria = "Inválido";
        }elseif($this->peso <= 72.3){
            $this->categoria = "Leve";
        }elseif($this->peso <= 83.9){
            $this->categoria = "Médio";
        }elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
        
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }

    
    
    #metodos
    function apresentar(){
        echo "<p>O lutador ". $this->getNome();
        echo " Veio de ". $this->getNacionalidade();
        echo " tem ". $this->getIdade(). " anos e pesa ". $this->getPeso(). "Kg";
        echo "<br>Ele tem ". $this->getVitorias(). " Vitorias ";
        echo $this->getDerrotas(). " derrotas e ". $this->getEmpates(). " empates</p>";
    }
    function status(){
        echo "<p>". $this->getNome() . " é um Peso " . $this->getCategoria();
        echo " e ja ganhou ". $this->getVitorias(). " vezes, ";
        echo "perdeu ". $this->getDerrotas(). " vezes e ";
        echo "epatou ". $this->getEmpates(). " vezes!";
    }
    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    
}
