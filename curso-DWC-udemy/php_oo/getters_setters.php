<?php

    // GETTERS & SETTERS

    class Funcionario {
        // atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        // setters
        function setNome($nome) {
            $this->nome = $nome;
        } 
        function setTelefone($telefone) {
            $this->telefone = $telefone;
        } 
        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        } 
        
        // getters
        function getNome() {
            return $this->nome;
        }
        function getTelefone() {
            return $this->telefone;
        }
        function getNumFilhos() {
            return $this->numFilhos;
        }

        function resumirCadFuncionario() {
            return "{$this->getNome()} tem o número de telefone {$this->getTelefone()} e possui {$this->getNumFilhos()} filho(s)";
        }
        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        
    }

    $y = new Funcionario();
    $y->setNome("Maria");
    $y->setTelefone("35 98989-9898");
    $y->setnumFilhos(4);
    echo $y->resumirCadFuncionario();
   
    echo '<br>';
    
    $x = new Funcionario();
    $x->setNome("José");
    $x->setNumFilhos(2);
    echo "{$x->getNome()} possui {$x->getNumFilhos()} filho(s). <br>";
    $x->modificarNumFilhos(3);
    echo "{$x->getNome()} possui {$x->getNumFilhos()} filho(s).";
    
    echo '<br>';
    
    $z = new Funcionario();
    $z->setNome('Ana');
    $z->setNumFilhos(0);
    echo "{$z->getNome()} possui {$z->getNumFilhos()} filho(s).";


?>