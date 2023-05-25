<?php
require_once "Mamifero.php";
class Canguru extends Mamifero{
    public function locomover(){
        echo "<br>Pulando ";
    }
    public function usarBolsa(){
        echo "<br>Usando bolsa";
    }
}
?>