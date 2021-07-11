<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    // atributos. Os atributos pertêncem ao objeto ou instância.
    public $nome = 'Anônimo'; // 'public' é um modificador de visibilidade. define que o atributo está visível fora da classe
    public $idade = 18;

	// Método (função)
    public function apresentar() {
        // para acessarmos o atributo é necessário usar '$this'
        return "Nome: {$this->nome} Idade: {$this->idade}";
    }
}

$c1 = new Cliente(); // 'new' cria um novo objeto apartir de uma classe
echo $c1->apresentar() . '<br>';

// criando outro cliente e alterando os atributos pré definidos
$c2 = new Cliente();
$c2->nome = 'Ana Silva';
$c2->idade = '34';
echo $c2->apresentar() . '<br>';

// Apartir de uma classe podemos criar quantos objetos quisermos
$c3 = new Cliente; // o uso dos parênteses não é obrigatório
$c3->nome = 'João';
$c3->idade = '53';
echo $c3->apresentar() . '<br>';

//também podemos acessar um atributo expecífico
echo $c2->nome;


