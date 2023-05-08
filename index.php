<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 2</title>
    </head>
    <body>
        <pre>
            <?php

            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "Faber castell";
            $c1->cor= "Verde";
            //$c1->ponta = 0.7;
            //$c1->carga = 99;
            print_r($c1);
            
            $c1->destampar();
            $c1->rabiscar();

            
            ?>
        </pre>
    </body>
</html>