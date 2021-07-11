<?php

    class Pai {
        // atriutos
        private $nome = 'João';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        // métodos
        public function __get($attr) {
            return $this->$attr;
        }
        public function __set($attr, $value) {
            $this->$attr = $value;
        }
        private function executarMania() {
            echo 'Assobiar';
        }
        protected function responder() {
            echo 'Oi';
        }
        public function executarAcao() {
            $this->executarMania();
            echo '<br>';
            $this->responder();
        }
    }

    // classe filho herda classe pai
    class Filho extends Pai{
        // método get para acessar o valor dos atributos herdados
        /* public function __getAtributo($attr) {
            return $this->$attr;
        }

        // método set para alterar o valor dos atributos herdados
        public function __setAtributo($attr, $value) {
            $this->$attr = $value;
        } */
    }

    $filho = new Filho();
    echo '<pre>';
    print_r($filho); 
    echo '</pre>';

    /* echo $filho->__getAtributo('humor');
    echo '<br>'; */
    // o atributo sobrenome é protected e será herdado da classe Pai
    // echo $filho->__getAtributo('sobrenome'); 
    // o atributo nome não será herdado da classe Pai pois seu status é private. Será gerado um erro.
    //echo $filho->__getAtributo('nome');
    
    // alterando os atributos com setAtributo
    /* $filho->__setAtributo('humor', 'Triste');
    echo $filho->__getAtributo('humor');
    echo '<br>';
    $filho->__setAtributo('sobrenome', 'Souza');
    echo $filho->__getAtributo('sobrenome'); */

    // EXIBINDO OS MÉTODOS DE UM OBJETO
    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';

    // se os métodos get e set forem delcarados como públicos no objeto pai será possível acessar os atributos mesmo que sejam private e não sejam herdados pelo objeto filho
    echo $filho->__get('nome');

    

?>