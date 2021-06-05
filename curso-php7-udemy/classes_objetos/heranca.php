<div class="titulo">Herança</div>

<?php
class Pessoa {
	public $nome;
	public $idade;
	
	function __contruct($nome, $idade) {
		$this->nome = $nome;
		$this->idade = $idade;
		echo 'Pessoa Criada! <br>';
	}
	
	function __destruct() {
		echo 'Pessoa diz: Tchau!!';
	}
	
	public function apresentar() {
		echo "{$this->nome}, {$this->idade} anos<br>";
	}	
}

// extends é usado para referenciar a classe pai. Pessoa é a super classe e Usuario é a sub classe. Usuario é uma extensão de Pessoa. 
class Usuario extends Pessoa {
	public $login;
	public $email;
	
	function __construct($nome, $idade, $login) {
		//$this->nome = $nome; //chamando o atributo nome  
		//$this->idade = $idade; //chamando o atributo idade
		
		// outra forma é chamando a classe pai
		parent::__contruct($nome, $idade);
		$this->login = $login;
		echo 'Usuário Criado! <br>';
	}
	
	function __destruct() {
		echo 'Usuário diz: Tchau! <br>';
		parent::__destruct(); // invocando o destrutor para a classe pessoa (classe pai)
	}
	 
	/* a classe usuario herda a função apresentar da classe pessoa. sobrescrevendo a classe pai
	public function apresentar() {
		 echo "@{$this->login}: {$this->nome}, {$this->idade} anos <br>";
	} */
	
	// chamando a função da classe pai (super classe) acrecentando uma nova informação
	public function apresentar() {
		echo "@{$this->login}: ";
		parent::apresentar(); //'patrent::'chama a classe pai
	}
}

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();
unset($usuario); // invocando o destrutor para a classe usuario


