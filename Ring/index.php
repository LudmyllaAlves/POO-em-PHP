<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 2</title>
    </head>
    <body>
        <pre>
            <?php
            require_once "Lutador.php";
            require_once "Luta.php";
            $l = array();
            $l[0]= new Lutador("Jacquin", " França", 49, 1.68, 85.5, 27, 2, 1);
            $l[1]= new Lutador("Feran", " Alemanha", 38, 1.78, 65.5, 25, 3, 2);
            $l[2]= new Lutador("Jack", " Portugal", 28, 1.88, 53.5, 22, 5, 3);
            $l[3]= new Lutador("VanGlog", " Brasil", 47, 1.75, 78.5, 20, 4, 6);
            $l[4]= new Lutador("Van Diesel", " Italia", 34, 1.76, 64.5, 15, 15, 0);
            $l[5]= new Lutador("Ariel", " Mexico", 45, 1.74, 96.5, 13, 14, 3);
            
            //$l[2]->setCategoria();
            
            $Luta1 = new Luta;

            $Luta1->marcarLuta($l[2], $l[1]);
            $Luta1->lutar();

            $Luta1->marcarLuta($l[2], $l[4]);
            $Luta1->lutar();
            
            $Luta1->marcarLuta($l[1], $l[4]);
            $Luta1->lutar();


            $l[1]->status();
            $l[2]->status();
            $l[4]->status();
            ?>
        </pre>
    </body>
</html>