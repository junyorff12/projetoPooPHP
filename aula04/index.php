<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta("BIC","0.5", "Azul");
            
            //$c1->setModelo("BIC");
            //$c1->setPonta(0.5);
            print_r($c1);
        ?>
        </pre>
    </body>
</html>