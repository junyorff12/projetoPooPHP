<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            
            $pessoa[0] = new Pessoa('Pedro', 22, 'M');
            $pessoa[1] = new Pessoa('Maria', 31, 'F');
            
            $l[0] = new Livro("php basico", "jose J", 300, $pessoa[0]);
            $l[1] = new Livro("php poo", "maria m", 350, $pessoa[0]);
            $l[2] = new Livro("php av", "jj k roll", 800, $pessoa[1]);
            
            $l[0]->abrir();
            $l[0]->folhear(80);
            $l[0]->avancarPag();
            
            $l[1]->detalhes();
            $l[0]->detalhes();
            $l[2]->detalhes();
        ?>
        
    </body>
</html>
