<?php 

    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
    }

    //-------------------------------------------------------

    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta() {
            echo 'Abrir porta';
        }

        public function ligar() {
            echo 'ligar';
        }

        public function desligar() {
            echo 'desligar';
        }
    }

    class TV implements EquipamentoEletronicoInterface {
        public function trocarCanal() {
            echo 'Trocar canal';
        }

        public function ligar() {
            echo 'ligar';
        }

        public function desligar() {
            echo 'desligar';
        }
    }

    $geladeira = new Geladeira();
    $tv = new TV();

    //---------------------------------------------------

    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface {
        public function andar() {
            echo 'andar';
        }

        public function respirar() {
            echo 'respirar';
        }

        public function conversar() {
            echo 'conversar';
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface {
        public function respirar() {
            echo 'respirar';
        }

        public function nadar() {
            echo 'nadar';
        }

        public function esguichar() {
            echo 'esguichar';
        }
    }

    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface {
        public function voar();
    }

    class Papagaio implements AnimalInterface, AveInterface {
        public function voar() {
            echo 'voar';
        }

        public function comer() {
            echo 'comer';
        }
    }
