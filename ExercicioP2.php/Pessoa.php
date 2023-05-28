<?php
abstract class Pessoa{
    private $nome;
    private $idade;
    private $sexo;
    private $experiencia;

    public function __construct($nome, $idade, $sexo){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setExperiencia(0);
    }

    protected function ganharExp($n){
        $this->setExperiencia($this->getExperiencia() + $n);
    }

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

    public function getExperiencia() {
        return $this->experiencia;
    }

    public function setExperiencia($experiencia): self {
        $this->experiencia = $experiencia;
        return $this;
    }
}

?>