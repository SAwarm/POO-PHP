<?php

    namespace A;
    class Cliente implements CadastroInterface {
        public $nome = 'Jonas';

        public function __construct() {
            // echo 'pre';
            // print_r(get_class_methods($this));
            // echo '</pre>';
        }

        public function __get($atribute) {
            return $this->$atribute;
        }

        public function salvar() {
            echo 'salvar';
        }

        public function remover() {
            echo 'remover';
        }
    }

    interface CadastroInterface {
        public function salvar();
    }