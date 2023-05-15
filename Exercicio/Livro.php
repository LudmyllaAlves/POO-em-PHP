<?php
require_once "Publicacoes.php";
require_once "Pessoa.php";

class Livro implements Publicações{
    private $titulo;
    private $autor;
    private $totalPag;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($t, $a, $tp, $l){
        $this->setTitulo($t);
        $this->setAutor($a);
        $this->setTotalPag($tp);
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor= $l;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo): self {
        $this->titulo = $titulo;
        return $this;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor): self {
        $this->autor = $autor;
        return $this;
    }

    public function getTotalPag() {
        return $this->totalPag;
    }

    public function setTotalPag($totalPag): self {
        $this->totalPag = $totalPag;
        return $this;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual): self {
        $this->pagAtual = $pagAtual;
        return $this;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function setAberto($aberto): self {
        $this->aberto = $aberto;
        return $this;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setLeitor($leitor): self {
        $this->leitor = $leitor;
        return $this;
    }

    public function detalhes(){
        echo "<br> Titulo:" . $this->getTitulo();
        echo " <br>Autor:" . $this->getAutor();
        echo " <br>Total de Paginas:". $this->getTotalPag();
        echo "<br> Leitor:".$this->leitor->getNome();
        echo "<br> Pagina Atual:".$this->getPagAtual();
    }

    public function abrir(){
        if($this->aberto == false){
            echo "<br> Abrindo livro...";
            $this->setPagAtual(1);
            echo "<br> Livro aberto na Pagina" . $this->getPagAtual();
        }else{
            echo "<br> Livro já está aberto na pagina:" .$this->getPagAtual();
        }
    }
    public function fechar(){
        if($this->aberto = true){
            echo "<br> fechando livro...";
            $this->aberto = false;
        }else{
            echo "<br> Livro já está fechado";
        }
    }
    public function folear($p){
        if ($p > $this->getTotalPag()){
            $this->setPagAtual(0);
        }else{
            $this->setPagAtual($p);
        }
        
    }
    public function avancarPag(){
        if($this->aberto = true){
            $this->setPagAtual($this->getPagAtual() + 1);
            echo "<br>Pagina atual" . $this->getPagAtual();
        }else{
            echo "O Livro está fechado";
        }
    }
    public function voltarPag(){
        if($this->aberto = true){
            $this->setPagAtual($this->getPagAtual() - 1);
            echo "<br>Pagina atual" . $this->getPagAtual();
        }else{
            echo "O Livro está fechado";
        }
    }
}


?>