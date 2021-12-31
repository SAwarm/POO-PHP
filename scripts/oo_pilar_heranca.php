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
    }

    $carro = new Carro('ABC', 'Azul');
    $moto = new Moto('DEF', 'Preto');

    $carro->acelerar();
    $moto->acelerar();