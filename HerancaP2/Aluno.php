<?php
require_once "Pessoa.php";
class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function pagarMensalidade(){
        echo "<br> Pagando mensalidade do aluno".  $this->getNome();
    }


    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula): self {
        $this->matricula = $matricula;
        return $this;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso): self {
        $this->curso = $curso;
        return $this;
    }
}
?>