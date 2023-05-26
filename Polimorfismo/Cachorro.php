<?php
require_once "Lobo.php";
class Cachorro extends Lobo{
    public function emitirSom(){
        echo "<br> Au, Au, Au!!!";
    }

    public function enterrarOsso(){
        echo "<br>cavando burraco... Osso enterrado";
    }

    public function abanarRabinho(){
        echo "<br>Abanando rabinho";
    }

    public function reagirFrase($frase){
        if($frase = "toma comida" && $frase = "Olá"){
            echo "<br> abanar e latir";
        }else{
            echo "<br> Rosnar";
        }
    }
    public function reagirHora($hora, $min){
        if($hora <12){
            echo "<br> abanar";
        }else if ($hora>=18){
            echo "<br> ignorar";
        }else{
            echo "<br> abanar e latir";
        }
    }
    public function reagirDono($dono){
        if($dono){
            echo "<br> abanar";
        }else{
            echo "<br>rosnar e latir";
        }
    }
    public function reagirIdade($idade, $peso){
        if($idade <5){
            if($idade <10){
                echo "<br>Abanar";
            }else{
            echo "<br>latir";
            }
        }else{
            if ($peso <10){
                echo "<br>Rosnar";
            }else{
                echo "<br>Ignorar";
            }
        }

    }
}
?>