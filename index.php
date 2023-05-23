<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 2</title>
    </head>
    <body>
        <pre>
            <?php
            require_once "./HerancaP2/Visitante.php";
            require_once "./HerancaP2/Aluno.php";
            require_once "./HerancaP2/Bolsista.php";
            require_once "./HerancaP2/Professor.php";
            require_once "./HerancaP2/Tecnico.php";
            $v1 = new Visitante;
            $a1 = new Aluno;
            $b1 = new Bolsista;
            $t1 = new Tecnico;
            $p1 = new Professor;

            $v1->setNome("Humberto");
            $v1->setSexo("M");
            $v1->setIdade(15);
            print_r($v1);

            $a1->setNome("Laiz");
            $a1->setSexo("F");
            $a1->setIdade(21);
            $a1->setMatricula(45564);
            $a1->setCurso("Matematica");
            $a1->pagarMensalidade();
            print_r($a1);

            $b1->setNome("Marli");
            $b1->setSexo("F");
            $b1->setIdade(31);
            $b1->setMatricula(464);
            $b1->setCurso("Historia");
            $b1->setBolsa(15.2);
            $b1->pagarMensalidade();
            print_r($b1);

            $t1->setNome("Jorge");
            $t1->setSexo("M");
            $t1->setIdade(27);
            $t1->setRgProfissional(45465);
            $t1->pagarMensalidade();
            $t1->praticar();            
            print_r($t1);

            $p1->setNome("Mateus");
            $p1->setSexo("M");
            $p1->setIdade(42);
            $p1->setEspecialidade("Geografia");
            $p1->setSalario(2500.00);
            $p1->receberAum(50);

            print_r($p1);


            ?>
        </pre>
    </body>
</html>