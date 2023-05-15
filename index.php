<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 2</title>
    </head>
    <body>
        <pre>
            <?php
                require_once "./Exercicio/Livro.php";
                require_once "./Exercicio/Pessoa.php";
                $p1 = new Pessoa("Sebose", 21, "Masculino");
                $p2 = new Pessoa("Salome", 19, "Feminino");
                $p3 = new Pessoa("Simone", 34, "Feminino");
                $l= array();
                $l[0]= new Livro("Quadrinhos", "Joana Dark", 350, $p1);
                $l[1]=new Livro("Php", "Guarana Antartica", 100, $p2);
                $l[2]= new Livro("Internacional", "Uvas Verdes", 230, $p3);

                $l[0]->folear(81);
                $l[0]->avancarPag();
                $l[0]->avancarPag();
                $l[0]->avancarPag();
                $l[0]->voltarPag();
                $l[0]->detalhes();
            ?>
        </pre>
    </body>
</html>