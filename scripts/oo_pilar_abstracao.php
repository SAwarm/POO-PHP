<?php

    class Funcionario{

        // atributos
        public $nome        = null;
        public $telefone    = null;
        public $numFilhos   = null;
        public $cargo       = null;
        public $salario     = null;

        //getters setters (overloading / sobrecargar)
        function __set($atribute, $value) {
            $this->$atribute = $value;
        }

        function __get($atribute) {
            return $this->$atribute;
        }

        //getters e setters
        // function setNome($nome) {
        //     $this->nome = $nome;
        // }

        // function setTelefone($telefone) {
        //     $this->telefone = $telefone;
        // }

        // function setNumFilhos($numFilhos) {
        //     $this->numFilhos = $numFilhos;
        // }

        // function getNome() {
        //     return $this->nome;
        // }

        // function getTelefone() {
        //     return $this->telefone;
        // }

        // function getNumFilhos() {
        //     return $this->numFilhos;
        // }

        // métodos
        function resumirCadFunc() {
            return $this->__get('nome') . ' possui ' .$this->__get('numFilhos') . ' filho(s)'; 
        }

        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
    }

    $func = new Funcionario();
    // $func->setNome('Jonas');
    // $func->setNumFilhos(3);
    $func->__set('nome', 'Jonas');
    $func->__set('numFilhos', 3);
    $func->__set('salario', 1000);
    // echo $func->getNome() . ' possui ' . $func->getNumFilhos() . ' filho(s)';
    // echo $func->__get('nome') . ' possui ' . $func->__get('numFilhos') . ' filho(s)';
    // echo ' Salário: ' . $func->__get('salario');
    echo $func->resumirCadFunc();