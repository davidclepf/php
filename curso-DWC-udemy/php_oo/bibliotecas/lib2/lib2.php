<?php
    
    namespace B;
    
    class Cliente implements CadastroInterface {
        public $nome = 'Ana';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this)); 
            echo '</pre>';
        }
        
        public function __get($attr) {
            return $this->$attr;
        }
        // implementando o método remover declarado na interface CadastroInterface
        public function remover() {
            echo "Remover";
        }

        public function salvar(){
            echo 'Salvar';
        }
    } 
    // declarando uma interface para o namespace B
    interface CadastroInterface {
        public function remover();
    }
    

?>