<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 2</title>
    </head>
    <body>
        <pre>
            <?php
            require_once "./ExercicioP2.php/Video.php";
            require_once "./ExercicioP2.php/Gafanhoto.php";
            require_once "./ExercicioP2.php/Visualizacao.php";
            $v[0]= new Video("Ep.1");
            $v[1]= new Video("Ep.2");
            $v[2]= new Video("Ep.3");
            $v[0]->play();
            $v[0]->play();
            $v[1]->like();
            print_r($v);

            $g[0]= new Gafanhoto("Junior", 15, "M", 15515);
            $g[1]= new Gafanhoto("Maria", 19, "F", 54515);
            print_r($g);

            $vis[0] = new Visualizacao($g[0], $v[1]);
            $vis[1] = new Visualizacao($g[0], $v[0]);
            $vis[0]->avaliar();
            $vis[1]->avaliarPorcento(80);
            print_r( $vis);


            ?>
        </pre>
    </body>
</html>