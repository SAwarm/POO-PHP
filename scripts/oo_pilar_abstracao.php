<?php

    class Funcionario{

        // atributos
        public $nome        = "José";
        public $telefone    = '99 99999 9999';
        public $numFilhos   = 2;

        // métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filhos";
        }

        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
    }

    $func = new Funcionario();
    echo $func->resumirCadFunc();

    $func->modificarNumFilhos(3);
    echo '<br>';
    echo $func->resumirCadFunc();