<?php
require_once "Pessoa.php";
final class Professor extends Pessoa{
    private $especialidade;
    private $salario;
    
    public function receberAum($aum){
        $this->setSalario($this->getSalario() + $aum);
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade): self {
        $this->especialidade = $especialidade;
        return $this;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario): self {
        $this->salario = $salario;
        return $this;
    }
}


?>