<div class="titulo">Visibilidade</div>

<!-- 
	- Atributo Público: é exibido tando dentro quanto fora da classe
	- Atributo Protegido: é exibido dentro da classe e é transmitido por herança e estará visível nas classes filhas.
	- Atributo Privado: é restrito a classe e não será transmitido nem mesmo por herança
-->

<?php
class A {
	public $publico = "Público"; // Valor público
	protected $protegido = 'Protegido'; // Valor protegido
	private $privado = 'Privado'; // Valor privado
	
	// Função public
	// Como a função mostrarA pertence a própria classe ela terá acesso à todos os atributos (público, protegido e privado)
	public function mostrarA() {
		echo "Class A) Publico = {$this->publico}<br>";
		echo "Class A) Protegido = {$this->protegido}<br>";
		echo "Class A) Privado = {$this->privado}<br>";
	}
	
	protected function vaiPorHeranca() {
		echo 'Serei transmitido por herança!<br>';
	}	
	
	private function naoMostrar() {
		echo 'Não vou imprimir!<br>';
	}	
}

// A função privada pode ser acessada dentro da classe da qual faz parte
$a = new A();
$a->mostrarA();
// $a->naoMostrar(); // Gerará um erro, pois funções privadas só podem ser acessadas dentro da própria classe.


// Classe B extende a classe A (é herança de A)
class B extends A {
	public function mostrarB() { 
		echo "Class B) Publico = {$this->publico}<br>";	
		echo "Class B) Protegido = {$this->protegido}<br>";	// Será exibido, pois é herdada da classe pai
		echo "Class B) Privado = {$this->privado}<br>"; // Não será exibido, pois só pode ser acessado dentro da própria classe
		
		// será acessado, pois foi herdado e está dentro da classe
		parent::vaiPorHeranca();
	}
}
echo '<br>';
$b = new B();
$b->mostrarB();
// $b->vaiPorHeranca(); // Não será acessado, pois atributos protegidos só poderão ser acessados dentro da classe que o herdou e nesse caso está fora da classe

// O atributo publico e exibido para todas as instâncias.
// O atributo protegido é exibido por herança (nesse caso a função mostrarB recebe herança de mostrarA)
// O atributo privado não será exibido, pois é restrito a própria classe, nem mesmo quando é recebido por herança.
