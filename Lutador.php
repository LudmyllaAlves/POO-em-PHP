<?php
class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas= $de;
        $this->empates = $em;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome): self {
        $this->nome = $nome;
        return $this;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade): self {
        $this->nacionalidade = $nacionalidade;
        return $this;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade): self {
        $this->idade = $idade;
        return $this;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura): self {
        $this->altura = $altura;
        return $this;
    }


    public function getPeso() {
        return $this->peso;
    }


    public function setPeso($peso): self {
        $this->peso = $peso;
        $this->setCategoria();
        return $this;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    private function setCategoria(){
        if($this->peso < 52.2){
            $this->categoria = "invalido";
        }else if($this->peso <= 70.3){
            $this-> categoria = "Leve";
        }else if ($this->peso <= 83.9){
            $this->categoria = "Medio";
        }else if($this->peso <= 120.2){
            $this->categoria = "pesado";
        }else{
            $this->categoria = "invalido";
        }
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function setVitorias($vitorias): self {
        $this->vitorias = $vitorias;
        return $this;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas): self {
        $this->derrotas = $derrotas;
        return $this;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setEmpates($empates): self {
        $this->empates = $empates;
        return $this;
    }

    public function apresentar(){
        echo "<p>___________________________</p>";
        echo "<p> O lutador:" . $this->getNome();
        echo "<br> Diretamente de :". $this->nacionalidade;
        echo "<br>Com seus".$this->idade. "anos, veio para uma luta de peso:" .$this->getCategoria();
    }

    public function status(){
        echo "<p>___________________________</p>";
        echo "<br> Nome:" . $this->getNome();
        echo "<br> Idade:" . $this->getIdade();
        echo "<br> Vitorias:" .$this->getVitorias();
        echo "<br> Derrotas:".$this->getDerrotas();
        echo "<br> Empates:". $this->getEmpates();
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
}



?>