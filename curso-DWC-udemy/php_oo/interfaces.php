<?php

    // criando uma interface
    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();

        // OBS: as interfaces Não implementam os métodos, apenas definem a assinatura do método. A implementeção será feita pela classe que implementará a respectiva interface
    }
    

    // usando 'implements' para implementar a interface
    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta() {
            echo 'Abrir a porta.';
        }

        // instanciando os métodos definidos na interface
        // a partir do momento que uma interface é implementada, todos seus métodos devem, obigatóriamente, ser instanciados.
        public function ligar() {
            echo 'Ligar a geladeira';
        } 
        public function desligar() {
            echo 'Desligar a geladeira';
        } 
    }
     
    
    // usando implements para implementar a interface
    class TV implements EquipamentoEletronicoInterface {
        public function trocarCanal() {
            echo 'Trocar de canal';
        }

        // instanciando os métodos definidos na interface
        public function ligar() {
            echo 'Ligar a TV';
        }
        public function desligar() {
            echo 'Desligar a TV.';
        }
    }



    $geladeira = new Geladeira();
    echo '<strong>Objeto Geladeira</strong> <br>';
    $geladeira->abrirPorta();
    echo '<br>';
    $geladeira->ligar();
    echo '<br>';
    $geladeira->desligar();
    
    echo '<br>';
    echo '<br>';
    
    $tv = new TV();
    echo '<strong>Objeto TV</strong> <br>';
    $tv->trocarCanal();
    echo '<br>';
    $tv->ligar();
    echo '<br>';
    $tv->desligar();
    
    echo '<br>';
    echo '<br>';
    echo '<hr>';
    echo '<br>';
    
    // ----------------------------------------------------------------------//
    
    /* 
    >> É possível implementar mais de uma interface para a classe <<
    */
    
    // crinado interfaces
    interface MamiferoInterface {
        public function respirar();
    }
    
    interface TerrestreInterface {
        public function andar();
    }
    
    interface AquaticoInterface {
        public function nadar();
    }
    
    // criando classe humano e implementando as interfaces mamifero e terrestre (basta separar as interfaces por ',')
    class Humano implements MamiferoInterface, TerrestreInterface {
        //implementando o método da interface Mamifero
        public function respirar() {
            echo 'Respirar';
        }
        //implementando o método da interface Terrestre
        public function andar() {
            echo 'Andar';
        }
        // criando um novo método para a classe Humano
        public function conversar() {
            echo 'Conversar';
        }
    }
    
    // criando classe Baleia e implementando as interfaces mamifero e terrestre (basta separar as interfaces por ',')
    class Baleia implements MamiferoInterface, AquaticoInterface {
        //implementando o método da interface Mamifero
        public function respirar() {
            echo 'Respirar';
        }
        //implementando o método da interface Aquatico
        public function nadar() {
            echo 'Nadar';
        }
        // criando um novo método para a classe Baleia
        public function esguichar() {
            echo 'Esguichar';
        }
        
        
    }
    
    $humano = new Humano();
    echo '<strong>Objeto Humano</strong> <br>';
    $humano->andar();
    echo '<br>';
    $humano->respirar();
    echo '<br>';
    $humano->conversar();
    echo '<br>';
    
    echo '<br>';
    
    $baleia = new Baleia();
    echo '<strong>Objeto Baleia</strong> <br>';
    $baleia->nadar();
    echo '<br>';
    $baleia->respirar();
    echo '<br>';
    $baleia->esguichar();
    
    echo '<br>';
    echo '<br>';
    echo '<hr>';
    echo '<br>';
    
    // ----------------------------------------------------------------------//

    /* 
        >> Também é possível fazer com que interfaces herdem regras esrabelecidas em outras interfaces <<
    */

    // definindo as interfaces
    interface AnimalInterface {
        public function comer();
    }
    // a interface AveInterface extende (herda) a interface AnimalInterface
    interface AveInterface extends AnimalInterface{
        public function voar();
    }

    // criando a classe 'Papagaio' e implementando as interfaces 
    class Papagaio implements AveInterface {
    // ao implementar AveInterface a classe recebe também os métodos de AnimalInterface, já que foram herdados por AveInterface
        
        // instancinado o método de AveInteface
        public function voar() {
            echo 'Voar';
        } 
        // instancinado o método herdado de AnimalInteface
        public function comer() {
            echo 'Comer';
        }
    }

    $papagaio = new Papagaio();
    echo '<strong>Objeto Papagaio</strong> <br>';
    $papagaio->comer();
    echo '<br>';
    $papagaio->voar();
    
    
    
    ?>