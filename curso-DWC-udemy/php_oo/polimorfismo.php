<?php
    //Polimorfismo nada mais é do que a sobrescrita de métodos
    
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
        // definindo o método trocarMarcha que sobrescreverá o método definido na classe Veiculo
        function trocarMarcha() {
            echo 'Acionar embreagem com a mão e mudar a marcha com o pé.';
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
        function trocarMarcha() {
            echo 'Acionar embreagem com o pé e mudar a marcha com a mão.';
        }
    }

    class Caminhao extends Veiculo {

    }

    $carro = new Carro('ABC1234', 'Branco');
    $carro->trocarMarcha();
   
    echo '<br>';
    
    $moto = new Moto('DEF1122', 'Preta');
    $moto->trocarMarcha();
    
    echo '<br>';

    $caminhao = new Caminhao();
    $caminhao->trocarMarcha();

    

?>