<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 2</title>
    </head>
    <body>
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampar();
        $c1->rabiscar();
        print_r($c1);

        $c2 = new Caneta;
        $c2->cor = "Verde";
        $c2->ponta = 0.7;
        $c2->destampar();
        $c2->rabiscar();
        print_r($c2);
        ?>
    </body>
</html>