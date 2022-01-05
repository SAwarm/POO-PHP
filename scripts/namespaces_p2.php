<?php

    require './bibliotecas/lib1/lib1.php';
    require './bibliotecas/lib2/lib2.php';

    use A\Cliente as Cli_A;
    use B\Cliente as Cli_B;

    $c = new Cli_A();
    print_r($c->remover());