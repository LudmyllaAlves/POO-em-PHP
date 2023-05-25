<?php
require_once "Mamifero.php";
class Cachorro extends Mamifero{
    public function emitirSom(){
        echo "<br> Au, Au, Au!!!";
    }

    public function enterrarOsso(){
        echo "<br>cavando burraco... Osso enterrado";
    }

    public function abanarRabinho(){
        echo "<br>Abanando rabinho";
    }
}
?>