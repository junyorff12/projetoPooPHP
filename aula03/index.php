<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            
            $c1->modelo = "Bic cristal";
            $c1->cor = "azul";
            
            print_r($c1);
            $c1->rabiscar();
            $c1->destampar();
            
        ?>
        </pre>
    </body>
</html>