<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 2</title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Conta.php';
            $p1 = new Conta;
            $p2 = new conta;

            $p1->nunConta = 1111;
            $p1 ->abrirConta("CC");
            $p1->setDono("Junior");

            $p2->nunConta = 2222;
            $p2->abrirConta("CP");
            $p2->setDono("Maria");

            $p1->depositar(300);
            $p2->depositar(500);

            $p2->sacar(900);

            $p1->pagarMensal();
            $p2->pagarMensal();

            $p1->sacar(338);
            $p1->fecharConta();
            print_r($p1);
            print_r($p2);
            ?>
        </pre>
    </body>
</html>