<?php
require_once "Animal.php";
class Ave extends Animal{
    private $corDaPena;

    public function locomover(){
        echo "<br>Voando";
    }

    public function alimentar(){
        echo " <br> comendo frutas";
    }

    public function emitirSom(){
        echo "<br>Assoviando";
    }

    public function fazendoNinho(){
        echo "<br>Novo ninho!!!";
    }

    public function getCorDaPena() {
        return $this->corDaPena;
    }

    public function setCorDaPena($corDaPena): self {
        $this->corDaPena = $corDaPena;
        return $this;
    }
}

?>