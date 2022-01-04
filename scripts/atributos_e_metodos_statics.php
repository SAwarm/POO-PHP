<?php

    class Exemplo {
        public static $atributo1 = 'Atributo estático';
        public $atributo2 = 'Atributo normal';

        public static function metodo1() {
            echo 'Método estático';
        }

        public function metodo2() {
            echo 'Método normal';
        }
    }

    //$exemplo = new Exemplo();
    // echo Exemplo::$atributo1;

    echo Exemplo::$atributo2;