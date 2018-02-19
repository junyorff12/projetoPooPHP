<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <hr>
        <?php
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            /*$v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setIdade("33");
            $v1->setSexo("M");*/
            
            $a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->setMatricula(1111);
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->setCurso("Informatica");
            
            $b1 = new Bolsista();
            $b1->setMatricula(1112);
            $b1->setNome("Jubileu");
            $b1->setBolsa(12.5);
            $b1->setCurso("Administracao");
            $b1->setIdade(17);
            
            $b1->pagarMensal();
                    
            $a1->pagarMensal();
            
            print_r($b1);
            print_r($a1);
        ?>
        </pre>
    </body>
</html>
