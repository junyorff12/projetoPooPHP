<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           require_once 'Lutador.php';
           require_once 'Luta.php';
           $l = array();
           $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
           $l[1] = new Lutador("Putscript", "Brasil", 28, 1.68, 57.8, 14, 2, 3);
           $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
           $l[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
           $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
           $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
           
           $uec01 = new Luta();
           $uec01->marcarLuta($l[4], $l[5]);
           $uec01->lutar();
           
           #$l[0]->status();
           #$l[1]->status();
           
           #$l[3]->perderLuta();
           #$l[3]->status();
           #$l[3]->apresentar();
           
        ?>
    </body>
</html>
