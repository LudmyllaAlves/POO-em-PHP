<?php
class Conta{
    public $nunConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    function __construct()
    {
        $this->saldo = 0;
        $this->status = false;
        echo "conta criada com sucesso <br>";
    }
        public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo= $tipo;
    }

    public function getDono(){
        return $this->dono;
    }
    public function setDono($dono){
        $this->dono= $dono;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo= $saldo;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status= $status;
    }
    
    function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->status = true;
        if($tipo == "CC"){
            $this->setSaldo(50);
        }else{
            $this->setSaldo(150);
        }
    }

    function fecharConta(){
        if($this->getSaldo() > 0){
            echo "Você precisa retirar todo  o saldo <br>";
        }else if($this->getSaldo() < 0){
            echo "Você tem dividas pendentes. <br>";
        }else{
            $this->status = false;
        }
    }

    function depositar($valor){
        if($this->getStatus()){
            $this->setSaldo($this->saldo + $valor);
        }else{
            echo "você necessita de uma conta...<br>";
        }
    }

    function sacar($valor){
        if($this->getSaldo() >= $valor){
            $this->setSaldo($this->saldo - $valor);
        }else{
            echo "você não pode sacar <br>";
        }
    }

    function pagarMensal(){
        if ($this->getTipo() == "CC"){
            $vm = 12;
        }else if($this->getTipo()== "CP"){
            $vm = 20;
        }
        if($this->status = true){
                if($this->getSaldo() >= $vm){
                    $this->setSaldo($this->saldo - $vm);
                }else{
                    echo "Saldo abaixo da mensalidade <br>";
                }
            
        }else{
            echo "Conta fechada <br>";
        }
    }

    
    

}







?>