<?php

    class Exemplo {
        // atributo estático
        public static $atributo1 = 'Eu sou um atributo estático';
        // atributo normal
        public $atributo2 = 'Eu sou um atributo normal';

        // Método estático
        public static function metodo1() {
            echo 'Eu sou um método estático';
        }
        // método normal
        public function metodo2() {
            echo 'Eu sou um método normal';
        }
    }

    // para atributos estáticos não é necessário instanciar
    // para exibir o atributo de um objeto usamos o nome do objeto + '::' + o nome do atributo
    echo Exemplo::$atributo1;    
    echo '<br>';
    // para o método estático não é necessário o uso de echo para imprimir visto que dentro do método já tem o comando echo
    Exemplo::metodo1();
    
    echo '<br>';
    
    // Para atributos e métodos não estáticos é necessário instanciar (invocar o construtor através do new) e acessálos usando '$variável->'
    $e = new Exemplo();
    echo $e->atributo2;
    echo '<br>';
    echo $e->metodo2();
    

?>