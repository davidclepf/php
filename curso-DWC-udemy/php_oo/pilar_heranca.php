<?php

    // usando extends a classe Carro herdará os atributos da classe Veiculo
    class Carro extends Veiculo{
        public $teto_solar = true;
        
        // invocando o construtor, que receberá os parâmetros para os atributos placa e cor que foram herdados de veiculos
        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }
        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }
        function alterarPosicaoVolante() {
            echo "Alterar posição do volante";
        }
    }
    
    // usando extends a classe Moto herdará os atributos da classe Veiculo
    class Moto extends Veiculo{
        public $contraPesiaGuidao = true;
        
        // invocando o construtor, que receberá os parâmetros para os atributos placa e cor que foram herdados de veiculos
        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar() {
            echo 'Empinar';
        }
    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'Acelerar';
        }
        function freiar() {
            echo 'Freiar';
        }
    }

    // Invocando o construtor para o objeto Carro e setando os parâmetros para os atributos placa e cor.
    $carro = new Carro('ABC1234', 'Branco');
    // Invocando o construtor para o objeto Moto e setando os parâmetros para os atributos placa e cor.
    $moto = new Moto('DEF5678', 'Preta');

    echo '<pre>';
    print_r($carro);
    echo '</pre>';
    echo '<br><br>';
    echo '<pre>';
    print_r($moto);
    echo '</pre>';

    // invocando o método abrirTetoSolar
    $carro->abrirTetoSolar();
    echo '<br>';
    // Os métodos acelerar e freiar que foram heradados de Veiculo podem ser invocados normalmente
    $carro->acelerar();
    echo '<br>';
    $carro->freiar();

    echo '<br>';
    $carro->alterarPosicaoVolante();
    
    echo '<br>';
    echo '<hr>';
    echo '<br>';
    
    // invocando o método empinar
    $moto->empinar();
    echo '<br>';
     // Os métodos acelerar e freiar que foram heradados de Veiculo podem ser invocados normalmente
    $moto->acelerar();
    echo '<br>';
    $moto->freiar();


?>