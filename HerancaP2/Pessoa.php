<?php
class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome): self {
        $this->nome = $nome;
        return $this;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade): self {
        $this->idade = $idade;
        return $this;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo): self {
        $this->sexo = $sexo;
        return $this;
    }

    
    public function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
    }

    public function dados(){
        echo "<br>Nome:" .$this->getNome();
        echo "<br>Idade:". $this->getIdade();
        echo "<br>Sexo:". $this->getSexo();
    }
}

?>