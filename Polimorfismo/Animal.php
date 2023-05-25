<?php
abstract class Animal{
    private $peso;
    private $idade;
    private $membros;

    abstract function  locomover();
    abstract function  alimentar();
    abstract function emitirSom();

    

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso): self {
        $this->peso = $peso;
        return $this;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade): self {
        $this->idade = $idade;
        return $this;
    }

    public function getMembros() {
        return $this->membros;
    }

    public function setMembros($membros): self {
        $this->membros = $membros;
        return $this;
    }
}
?>