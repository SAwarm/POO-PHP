<?php
    class Pai {
        private $nome = 'Jonas';
        protected $sobrenome = 'Silva';
        public $humor = 'Estudando';

        // public function getNome () {
        //     return $this->nome;
        // }

        // public function setNome ($value) {

        //     if (strlen($value) >= 3) {
        //         $this->nome = $value;
        //     }
        // }

        // public function __set($atribute, $value) {
        //     $this->$atribute = $value;
        // }

        // public function __get($atribute) {
        //     return $this->$atribute;
        // }

        private function executarMania() {
            echo 'Assoviar';
        }

        protected function responder() {
            echo 'oi';
        }

        public function executarAcao() {
            $x = rand(1, 10);

            if($x >= 1 && $x <= 8){
                $this->executarMania();
            } else {
                $this->responder();
            }
        }
    }

    class Filho extends Pai {
        // public function getAtributo($atribute) {
        //     return $this->$atribute;
        // }

        // public function setAtributo($atribute, $value) {
        //     $this->$atribute = $value;
        // }
        public function __construct () {
            print_r(get_class_methods($this));
        }

        private function executarMania () {
            echo 'cantar';
        }

        protected function responder() {
            echo 'Olá';
        }

        public function x() {
            $this->executarMania();
        }
    }

    $pai = new Pai();
    echo $pai->humor;
    echo '<br>';
    // $pai->setNome('Jonão');
    // echo $pai->getNome();
    //echo $pai->executarAcao();
    echo '<br>';
    $filho = new Filho();
    // $filho->setAtributo('humor', 'Correndo');
    // echo $filho->getAtributo('humor');
    print_r(get_class_methods($filho));
    echo '<br>';
    echo $filho->executarAcao();
    echo '<br>';
    echo $filho->x();
    