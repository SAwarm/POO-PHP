<?php
    class Pessoa {

        public $nome = null;

        function __construct($nome) {
            $this->nome = $nome;
        }

        function __destruct() {
            echo 'Objeto removido';
        }

        function __get($atribute) {
            return $this->$atribute;
        }

        function correr() {
            return $this->__get('nome') . ' está correndo';
        }
    }

    $pessoa = new Pessoa('Jonas');
    //echo $pessoa->__get('nome');
    echo $pessoa->correr();

    unset($pessoa);
