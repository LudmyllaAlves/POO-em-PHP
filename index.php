<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 2</title>
    </head>
    <body>
        <pre>
            <?php
            require_once "./Polimorfismo/Cachorro.php";

            $c = new Cachorro;
            $c->reagirFrase("Olá");
            $c->reagirHora(13,20);
            $c->reagirDono(true);
            $c->reagirIdade(12, 15.6);

            $c->reagirFrase("Vai deitar");
            $c->reagirHora(23,20);
            $c->reagirDono(true);
            $c->reagirIdade(5, 11.6);

            ?>
        </pre>
    </body>
</html>