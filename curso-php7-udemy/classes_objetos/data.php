<div class="titulo">Classe Data</div>

<?php
class Data {
	// Definindo os atributos e os valores padrão
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970; 

	// Definindo o metódo
    public function apresentar(){
        return "A data informada é: {$this->dia} / {$this->mes} / {$this->ano}.";
    }    
}

// Criando um novo objeto
$data1 = new Data();
// Chamando o método, com os valores padrão
echo $data1->apresentar() . '<br>'; 

// Criando um novo objeto
$data2 = new Data();
// Definindo novos valores para os atributos
$data2->dia = 12;
$data2->mes = 12;
$data2->ano = 1980;
// Chamando o método
echo $data2->apresentar() . '<br>';

// Criando um novo objeto
$data3 = new Data();
// Definindo um novo valor apenas para um atributo (os demais receberão os valores padrão)
$data3->dia = 23;
// Chamando o método
echo $data3->apresentar() . '<br>';
