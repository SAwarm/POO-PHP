<?php

    class Funcionario{

        // atributos
        public $nome        = null;
        public $telefone    = null;
        public $numFilhos   = null;

        //getters e setters
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNome() {
            return $this->nome;
        }

        function getTelefone() {
            return $this->telefone;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }

        // métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filhos";
        }

        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
    }

    $func = new Funcionario();
    $func->setNome('Jonas');
    $func->setNumFilhos(3);
    echo $func->getNome() . ' possui ' . $func->getNumFilhos() . ' filho(s)';