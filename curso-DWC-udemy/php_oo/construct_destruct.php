<?php

    class Pessoa {
        public $nome = null;

        // método construtor
        function __construct($nome) {
            echo 'Objeto iniciado!<br>';
            $this->nome = $nome;
        }

        function __destruct() {
            echo 'Objeto removido!';
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        function correr() {
            return "{$this->__get('nome')} está correndo.<br>";
        }
    }

    // 'new' invoca o método construct
    $pessoa = new Pessoa('João');
    echo "Nome: {$pessoa->__get('nome')}<br>";
    echo $pessoa->correr();
    // unset invoca o destruct
    unset($pessoa);
    // echo $pessoa->__get('nome'); // como o objeto foi destruído essa linha do código não será processada

    echo '<br>';

    $pessoa1 = new Pessoa('Ana');
    echo $pessoa1->correr();

    // Obs: unset invoca o destruct para destruir um determinado objeto, caso unset não seja usado, ao final do código o destruct será invocado automáticamente, destruindo os objetos criados 
  
?>