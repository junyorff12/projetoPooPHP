<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Mamifero.php';
            require_once 'Peixe.php';
            require_once 'Reptil.php';
            require_once 'Ave.php';
            require_once 'Canguro.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';
            
            $m = new Mamifero();
            $m->setPeso(33);
            $m->locomover();
            
            $c = new Canguro();
            $k = new Cachorro();
            $t = new Tartaruga();
            
            $k->locomover();
            $t->locomover();
        ?>
    </body>
</html>
