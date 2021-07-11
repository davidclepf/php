<div class="titulo">Desafio Erros</div>

<!-- 
    Analisar e corrigir os erros do código abaixo
 -->

<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

//abstract class ClasseAbstrata extends Template { // para que uma classe implemente uma interface devemos usar 'implements' e não 'extends'
abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou funcionando!";
    }
}
    
// class Classe implements ClasseAbstrata { // Uma classe não implementa outra classe. Devemos usar 'extends' 
class Classe extends ClasseAbstrata {
    function __construct($parametro) {
          
    }

   // devemos implementar os 2 métodos da interface. Também poderiamo definir os métodos dentro da ClasseAbstrata
    public function metodo1() {
    
    }
    public function metodo2($parametro){
    
    }
}
        

// $exemplo = Classe(); // Não foi usado 'new' para a criação da nova instância e não foi passado o parâmetro
$exemplo = new Classe('...');

// $exemplo.metodo3(); // Para acessar o 'metodo3' usamos '->' e não '.'
$exemplo->metodo3();

// Corriginco os 7 erros o código irá funcionar