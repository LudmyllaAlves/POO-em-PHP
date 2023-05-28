<?php
require_once "AcoesVideos.php";
class Video implements AcoesVideos{
    private $titulo;
    private $avaliacao;
    private $views;
    private $likes;
    private $reproduzindo;

    public function __construct($titulo){
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->likes = 0;
        $this->reproduzindo = false;
    }
    public function play(){
        if($this->getReproduzindo()){
            echo "Video está sendo reproduzido<br>";
        }else{
            $this->setReproduzindo(true);
        }
    }

    public function pause(){
        if($this->getReproduzindo()){
            $this->setReproduzindo(false);
        }else{
            echo "Video não está sendo reproduzido";
        }
    }

    public function like(){
        $this->setLikes($this->getLikes() + 1);
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo): self {
        $this->titulo = $titulo;
        return $this;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao): self {
        $media = ($this->getAvaliacao() + $avaliacao) / $this->getViews();
        $this->avaliacao = $media;
        return $this;
    }

    public function getViews() {
        return $this->views;
    }

    public function setViews($views): self {
        $this->views = $views;
        return $this;
    }

    public function getLikes() {
        return $this->likes;
    }

    public function setLikes($likes): self {
        $this->likes = $likes;
        return $this;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setReproduzindo($reproduzindo): self {
        $this->reproduzindo = $reproduzindo;
        return $this;
    }
}
?>