<?php

    namespace B;
    class Cliente implements CadastroInterface {
        public $nome = 'Joel';

        public function __construct() {
            // echo 'pre';
            // print_r(get_class_methods($this));
            // echo '</pre>';
        }

        public function __get($atribute) {
            return $this->$atribute;
        }

        public function remover() {
            echo 'remover';
        }

        public function salvar() {
            echo 'salvar';
        }
    }

    interface CadastroInterface {
        public function remover();
    }