<?php
require_once "Animal.php";

class Mamifero extends Animal{
    private $corDoPelo;

    public function locomover(){
        echo "<br>Correndo";
    }

    public function alimentar(){
        echo "<br>Mamando";
    }

    public function emitirSom(){
        echo "<br>Som de mamifero";
    }

    public function getCorDoPelo() {
        return $this->corDoPelo;
    }

    public function setCorDoPelo($corDoPelo): self {
        $this->corDoPelo = $corDoPelo;
        return $this;
    }
}
?>