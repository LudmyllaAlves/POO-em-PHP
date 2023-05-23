<?php
require_once "Aluno.php";
class Bolsista extends Aluno{
    private $bolsa;

    public function renovarBolsa(){
        echo "Sua bolsa foi renovada";
    }
    public function pagarMensalidade(){
        echo "Mensalidade do bolsista". $this->getNome();
    }

    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa): self {
        $this->bolsa = $bolsa;
        return $this;
    }
}


?>