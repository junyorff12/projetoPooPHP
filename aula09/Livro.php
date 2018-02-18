<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPag;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    function detalhes(){
        echo "<hr>O livro ".$this->getTitulo(). " foi escrito por ". $this->getAutor();
        echo "<br>Paginas ". $this->getTotPag(). " atual ". $this->pagAtual; 
        echo "<br>esta sendo lido por ". $this->leitor->getNome(); //Leitor é a instancia e getNome pega o atributo dessa instancia.
    }
    
    function __construct($titulo, $autor, $totPag, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->totPag = $totPag;
        $this->leitor =  $leitor;
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPag() {
        return $this->totPag;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPag($totPag) {
        $this->totPag = $totPag;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPag() {
        
        $this->pagAtual ++;
       
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if($p > $this->totPag){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $p;
        }
    }

    public function voltarPag() {
        
        $this->pagAtual --;
        
    }

}
