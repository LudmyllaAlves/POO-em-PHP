<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 2</title>
    </head>
    <body>
        <pre>
            <?php
            require_once "./Heranca/Aluno.php";
            require_once "./Heranca/Pessoa.php";
            require_once "./Heranca/Funcionario.php";
            require_once "./Heranca/Professor.php";
            $p1 = new Pessoa;
            $p2 = new Aluno;
            $p3 = new Professor;
            $p4 = new Funcionario;

            $p1->setNome("Miguel");
            $p2->setNome("João");
            $p3->setNome("Fernanda");
            $p4->setNome("Maria");

            $p2->setCurso("informatica");
            $p3->setSalario(2500.75);
            $p4->setSetor("Estoque");

            $p3->receberAum(500.10);
            $p4->mudarTrabalho();
            $p2->cancelarMatr();
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
            ?>
        </pre>
    </body>
</html>