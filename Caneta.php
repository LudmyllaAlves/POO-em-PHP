<?php
class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function __construct($m, $c, $p){
        $this->cor = $c;
        $this->modelo = $m;
        $this->ponta = $p;
        $this->tampar();
    }

    public function rabiscar(){
        if($this->tampada == true){
            echo "Não se pode rabiscar";
        }else{
            echo "Estou rabiscando...";
        }
        
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo= $m;
    }
    public function getponta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta= $p;
    }
    
}





?>