<?php
require_once "Aluno.php";
class Tecnico extends Aluno{
    private $rgProfissional;

    public function praticar(){
        echo "<br> Estou a praticar";
    }
    

    public function getRgProfissional() {
        return $this->rgProfissional;
    }

    public function setRgProfissional($rgProfissional): self {
        $this->rgProfissional = $rgProfissional;
        return $this;
    }
}

?>