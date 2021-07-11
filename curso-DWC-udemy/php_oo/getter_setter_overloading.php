<?php

    // GETTERS & SETTERS MÁGICOS (OVERLOADING DE ATRIBUTOS E MÉTODOS)

    /* 
        Ao usarmos getter e setter precisamos criar 2 métodos para cada atributo. Uma classe com muitos atributos resultará em um código muito extenso.
        Uma forma mais inteligente de lidar com esse problema é usando o overloading que consiste em criar um único método get e um único método set que receberão como parâmetros o atributo e seu valor reduzindo assim o tamanho do nosso código.
    */

    class Funcionario {
        // atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        // setter overloading / sobrecarga
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        } 
        
        // getters overloading / sobrecarga
        function __get($atributo) {
            return $this->$atributo;
        }
        

        function resumirCadFuncionario() {
            return "{$this->__get('nome')} tem o número de telefone {$this->__get('telefone')}, seu cargo é {$this->__get('cargo')}, seu salário é R$ {$this->__get('salario')}  e possui {$this->__get('numFilhos')} filho(s).";
        }
        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
        
    }

    $y = new Funcionario();
    $y->__set("nome", "Maria");
    $y->__set("telefone", "35 98989-9898");
    $y->__set("numFilhos", 1);
    $y->__set("cargo", "Gerente");
    $y->__set("salario", 6.200);
    echo $y->resumirCadFuncionario();
   
    echo '<br>';
    
    $x = new Funcionario();
    $x->__set('nome', "José");
    $x->__set('numFilhos', 2);
    $x->__set('cargo', 'motorista');
    echo "{$x->__get('nome')}, possui {$x->__get('numFilhos')} filho(s) e seu cargo é {$x->__get('cargo')}.";
    
    echo '<br>';
    
    $z = new Funcionario();
    $z->__set('nome', 'Ana');
    $z->__set('numFilhos', 0);
    $z->__set('salario', 3.800);
    echo "{$z->__get('nome')}, possui {$z->__get('numFilhos')} filho(s) e seu salario é de R$ {$z->__get('salario')}.<br>";
    $z->modificarNumFilhos(1);
    echo "{$z->__get('nome')}, possui {$z->__get('numFilhos')} filho(s) e seu salario é de R$ {$z->__get('salario')}.";


?>