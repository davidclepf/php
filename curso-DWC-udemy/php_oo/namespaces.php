<?php
    
    // criando o namespace
    namespace A;
    // criando a classe e implementando a interface CadastroInterface do namespace B
    class CLiente implements \B\CadastroInterface{
        public $nome = 'João';
        // criando o método construct
        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }
        public function __get($attr){
            return $this->$attr;
        }
        // instanciando o método declarado da interface
        public function salvar(){
            echo 'Salvar';
        }
        public function remover(){
            echo 'Remover';
        }
        
    }
    // crinado um interface
    interface CadastroInterface {
        public function salvar();
    }
    
    
    // criando o namespace
    namespace B;
    // criando a classe e implementando a interface CadastroInterface do namespace A
    class CLiente implements \A\CadastroInterface {
        public $nome = 'Ana';
        // criando o método construct
        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }
        public function __get($attr){
            return $this->$attr;
        }
        // instanciando o método declarado da interface
        public function remover() {
            echo 'Remover';
        }
        public function salvar() {
            echo 'Salvar';
        }
    }
    interface CadastroInterface {
        public function remover();
    }
    
    // criando um objeto de uma classe de um namespace expecífico
    $cliente = new \B\Cliente();
    print_r($cliente);
    echo $cliente->__get('nome');
    ?>