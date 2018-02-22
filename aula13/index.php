<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
        <?php
        require_once 'Animal.php';
            require_once 'Mamifero.php';
            require_once 'Cachorro.php';
            require_once 'Lobo.php';
            $c = new Lobo();
            $c->emitirSom();
        ?>
    </body>
</html>
