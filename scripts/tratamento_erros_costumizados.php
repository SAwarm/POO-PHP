<?php
    
    class ExceptionCustom extends Exception {
        private $erro = '';

        public function __construct($erro) {
            $this->erro = $erro;
        }

        public function showMessageErrorCustom() {
            return $this->erro;
        }
    }

    try {

        throw new ExceptionCustom('Esse é um erro teste');

        /**
         * ERROR (PHP)
         * EXCEPTION (PROGRAMADORES)
         * CUSTOMIZADAS (PROGRAMADORES)
         */
    
    } catch (ExceptionCustom $e) {
    
        echo $e->showMessageErrorCustom();
    
    }