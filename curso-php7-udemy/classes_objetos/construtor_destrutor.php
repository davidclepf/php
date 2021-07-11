<div class="titulo">Construtor & Destrutor</div>

<?php
class Pessoa {
	private $nome;
	public $idade;
	
	// Método contrutor
	function __construct($novoNome, $idade = 18) {
		echo 'Construtor invocado! <br>';
		$this->nome = $novoNome;
		$this->idade = $idade;
	}
	
	// Método destrutor
	function __destruct() {
		echo 'E morreu!';		
	}
	
	public function apresentar() {
		return "{$this->nome}, {$this->idade} anos<br>";
	}
}

$pessoa = new Pessoa('Rebeca Maria', 40);
echo $pessoa->apresentar();

// Infocando o destructor
unset($pessoa); // Pode-se usar unset

echo '<br>';
echo '<br>';

// Passando apenas um parâmetro o segundo parâmetro receberá o valor padrão passado anteriormente
$pessoaB = new Pessoa('João');
echo $pessoaB->apresentar();
 
$pessoaB = null;  // Atribuindo null à função o destrutor também é invocado.

// Se não passarmos nenhum parâmetro será gerado um erro, pois o primeiro parâmetro é obrigatório.
//$pessoaC = new Pessoa(); 
