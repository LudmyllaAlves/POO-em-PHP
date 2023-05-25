<?php
require_once "Animal.php";
class Peixe extends Animal{
    private $corDaEscama;

    public function locomover(){
        echo "<br>Nadando";
    }

    public function alimentar(){
        echo " <br> comendo substancias";
    }

    public function emitirSom(){
        echo "<br>Peixe é silencioso";
    }

    public function soltarBolha(){
        echo "<br>glob glob";
    }

    public function getCorDaEscama() {
        return $this->corDaEscama;
    }

    public function setCorDaEscama($corDaEscama): self {
        $this->corDaEscama = $corDaEscama;
        return $this;
    }
}

?>