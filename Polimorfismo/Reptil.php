<?php
require_once "Animal.php";
class Reptil extends Animal{
    private $corDaEscama;

    public function locomover(){
        echo "<br>rastejando";
    }

    public function alimentar(){
        echo " <br> comendo vegetais";
    }

    public function emitirSom(){
        echo "<br> Som de Reptil";
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