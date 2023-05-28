<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 2</title>
    </head>
    <body>
        <pre>
            <?php
            require_once "./Polimorfismo/Mamifero.php";
            require_once "./Polimorfismo/Ave.php";
            require_once "./Polimorfismo/Peixe.php";
            require_once "./Polimorfismo/Reptil.php";
            require_once "./Polimorfismo/Cachorro.php";
            require_once "./Polimorfismo/Arrara.php";
            require_once "./Polimorfismo/Canguru.php";
            require_once "./Polimorfismo/Cobra.php";
            require_once "./Polimorfismo/GoldeFish.php";
            require_once "./Polimorfismo/Tartaruga.php";

            $m = new Mamifero;
            $m->setCorDoPelo("Rajado");
            $m->setIdade(10);
            $m->setPeso(45.7);
            $m->alimentar();
            $m->locomover();
            $m->emitirSom();
            print_r($m);
            echo "<br>";

            $p = new Peixe;
            $p->setCorDaEscama("Cinza");
            $p->setIdade(2);
            $p->setPeso(4.7);
            $p->alimentar();
            $p->locomover();
            $p->emitirSom();
            $p->soltarBolha();
            print_r($p);
            echo "<br>";

            $a = new Ave;
            $a->setCorDaPena("Verde");
            $a->setIdade(3);
            $a->setPeso(1.5);
            $a->alimentar();
            $a->locomover();
            $a->emitirSom();
            $a->fazendoNinho();
            print_r($a);
            echo "<br>";

            $r = new Reptil;
            $r->setCorDaEscama("Preto");
            $r->setIdade(5);
            $r->setPeso(5.7);
            $r->alimentar();
            $r->locomover();
            $r->emitirSom();
            print_r($r);
            echo "<br>";

            $c= new Canguru;
            $c2= new Cachorro;
            $t= new Tartaruga;

            $c->locomover();
            $c2->locomover();
            $t->locomover();
            $c2->emitirSom();
            $c->usarBolsa();
            $c2->abanarRabinho();
            $c2->enterrarOsso();

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