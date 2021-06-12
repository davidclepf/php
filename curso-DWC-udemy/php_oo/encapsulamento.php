<?php

    /* 
        OPERADORES DE VISIBILIDADE
        - public = pode ser acessado tanto dentro quanto fora da classe à que pertence
        - protected = ó pode ser acessada pela classe à que pertence. Mas pode ser recebida por herança
        - private = só pode ser acessada pela classe à que pertence. Não pode ser recebida por herança.
    */

    class Pai {
        private $nome = 'João';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        // como o método getNome está dentro da classe ele tem acesso ao atributo privado nome.
        public function getNome() {
            return $this->nome;
        }
        // como o método setNome está dentro da classe ele tem acesso ao atributo privado nome.
        public function setNome($nome) {
            // usando o if para verificar se o tamanho da string (usando strlen()) é igual ou maior que 3, para que não gere um erro caso o parâmetro não seja informado
            if(strlen($nome) >= 3) {
                $this->nome = $nome;
            }
        }
    }

    $pai = new Pai();
    // acessando o atributo público humor
    echo $pai->humor;
    // alterando o atributo público humor
    $pai-> humor = 'Triste';
    echo '<br>';
    // acessando o atributo público humor após modificá-lo
    echo $pai->humor;
    
    echo '<br>';
    
    // O método getNome foi definido como público, então poderá ser acessado fora da classe, e como  ele tem acesso ao atributo nome, esse também poderá ser acessado
    echo $pai->getNome();
    
    echo '<br>';
    
    // O método setNome foi definido como público, então poderá ser acessado fora da classe, e como  ele tem acesso ao atributo nome, esse também poderá ser acessado, permitindo assim a alteração do parâmetro
    $pai->setNome('José');
    echo $pai->getNome();
    
    echo '<br>';
    echo '<br>';
    
    // acessando atributos privados e protegidos utilizando get e set
    class Nova{
        private $nome = 'Ana';
        protected $sobrenome = 'Souza';

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
    $nova = new Nova();
    echo $nova->nome;
    echo '<br>';
    echo $nova->sobrenome;
    // usando os métodos get e set como público conseguimos acessar os atributos privados
    echo '<br>';
    // atribuindo um novo parâmetro para o atributo sobrenome
    $nova->sobrenome ='Silva';
    echo $nova->sobrenome;
    echo '<br>';
    //através do método público executarAcao podemos ter acesso aos métodos privado e protegido
    $nova->executarAcao();
    

?>