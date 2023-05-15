<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 2</title>
    </head>
    <body>
        <pre>
            <?php
                require_once "ControleRemoto.php";
                $c = new ControleRemoto;
                $c->ligar();
                $c->play();
                $c->maisVolume();
                $c->abrirMenu();
            ?>
        </pre>
    </body>
</html>