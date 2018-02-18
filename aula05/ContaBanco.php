<?php


class ContaBanco {
   
      //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    //Métodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "cc"){
            $this->setSaldo(50);
        }else if ($t == "cp"){
            $this->setSaldo(150);
        }
    }
    
    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo "<p>conta com saldo</p>";
        }else if ($this->getSaldo < 0 ){
            echo "<p>Conta com débito</p>";
        }else {
            $this->setStatus(false);
            echo "<p>Conta de ".$this->getDono()." fechada com sucesso"."</p>";
            
        }
    }
    
    public function depositar($v){
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito de R$ $v na conta de ". $this->getDono()."</p>";
        }else{
            echo "<p>Conta fechada</p>";
        }
    }
    
    public function sacar($v){
        if($this->getStatus() == true){
            if($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v );
                echo "<p>Saque de R$ $v autorizado an conta de ".$this->getDono()."</p>";
            }else{
                echo "<p>Saldo insuficiente.</p>";
            }
        }else{
            echo "<p>A conta esta fechada.</p>";
        }
    }
    
    public function pagarMensal($v){
        if($this->gettipo() == "cc"){
            $v = 12;
        }else if ($this->getTipo() == "cp"){
            $v = 20;
        }
        
        
        if ($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada na conta de ". $this->getDono()."</p>";
        }else{
            echo "<p>Conta fechada</p>";
        }
    }
    
    //Métodos especiais
    function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        
        echo "<p>Conta criada com suscesso</p>";
    }
    
    function getNumConta(){
        return $this->numConta;
    }
    
    function setNumConta($nc){
        $this->numConta = $nc;
    }
    
    function getTipo(){
        return $this->tipo;
    }
    
    function setTipo($t){
        $this->tipo = $t;
    }
    
    function getDono(){
        return $this->dono;
    }
    
    function setDono($d){
        $this->dono = $d;
    }
    
    function getSaldo(){
        return $this->saldo;
    }
    
    function setSaldo($s){
        $this->saldo = $s;
    }
    
    function getStatus(){
        return $this->status;
    }
    
    function setStatus($st){
        $this->status = $st;
    }
}
