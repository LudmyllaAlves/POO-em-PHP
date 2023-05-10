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
            /*
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "Faber castell";
            $c1->cor= "Verde";
            //$c1->ponta = 0.7;
            //$c1->carga = 99;
            print_r($c1);
            
            $c1->destampar();
            $c1->rabiscar();
            
            $c1->setModelo("BIC");
            $c1->setPonta(0.5);
            $c1 = new Caneta("JUMP", "Azul", 0.7);
            $c2 = new Caneta("UP", "Rosa", 1.0);
            print_r($c1);
            print_r($c2);*/
            print_r($p1);
            print_r($p2);
            ?>
        </pre>
    </body>
</html>