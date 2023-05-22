<?php
require_once "Pessoa.php";
class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function cancelarMatr(){
        echo "<br> Matricula cancelada";
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