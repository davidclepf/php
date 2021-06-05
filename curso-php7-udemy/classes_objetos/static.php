<div class="titulo">Membros Estáticos</div>

<?php
class A {
	public $naoStatic = 'Variável de instância (de objeto)';
	public static $static = 'Variável de classe (estática)';
	
	public function mostrarA() {
		echo "Não estática = {$this->naoStatic}<br>";
		
		// this representa a instância atual, como a variável de classe (estática) não pertence a instância atual ela não será acessada.
		// echo "Estática = {$this->static}<br>";

		// Para acessar uma variável estática usamos 'self::'
		echo "Estática = ". self::$static . "<br>";
		// A variável estática não pode ser acessada com interpolação, por isso precisamos fazer uma concatenação
	}
	
	// Função estática
	public static function mostrarStaticA() {
		echo "Estática = " . self::$static . "<br>";
	}
	
}

$objetoA = new A();
$objetoA->mostrarA();

//$objetoA->mostrarStaticA(); //Apesar de conseguirmos acessar a função estática apartir de uma instância não é o mais indicado.

A::mostrarStaticA(); // Acessando a função statica diretamente pela classe    

 echo A::$static . '<br>'; // Acessando a variável estática diretamente

A::$static = 'Alterado membro de classe!'; // Alterando membro de classe
echo A::$static;
