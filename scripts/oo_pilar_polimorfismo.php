<?php

    class Carro extends Veiculo {
        public $tetoSolar = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar() {
            echo "abrir teto";
        }

        function alterarPosicaoVolante() {
            echo "alterar posição volante";
        }

    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo "acelerar";
        }

        function freiar() {
            echo "freio";
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
        }
    }

    class Moto extends Veiculo {
        public $contraGuidao = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar() {
            echo "empinar";
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
        } 
    }

    class Caminhao extends Veiculo {}

    $carro = new Carro('ABC', 'Azul');
    $moto = new Moto('DEF', 'Preto');
    $caminhao = new Caminhao('GHI', 'Branco');

    $carro->trocarMarcha();
    $moto->trocarMarcha();
    $caminhao->trocarMarcha();
