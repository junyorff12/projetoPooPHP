<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';
            $v[0] = new Video("Aula 1 php poo");
            $v[1] = new Video("aula 12 PHP");
            $v[2] = new Video("Aula 5 de HTML5");
            
            $g = new Gafanhoto("JR", 30, "M", "ff12");
            
            
            $vis[0] = new Visualizacao($g, $v[2]);
            $vis[1] = new Visualizacao($g, $v[1]);
            $vis[0]->avaliar();
            $vis[1]->avaliarPorc(85);
            print_r($vis);
            
            
        ?>
        </pre>
    </body>
</html>
