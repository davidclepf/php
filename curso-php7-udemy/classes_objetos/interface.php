<div class="titulo">Interface</div>

<!-- 
	Dentro da interface definimos métodos que devem ser implementados apartir das classes.
	As interfaces obrigatóriamente devem possuir somente os métodos, sem nenhuma implementação.
	As interfaces por padrão são públicas. Não é possível definí-las como private ou proected.
-->

<?php
interface Animal {
	function respirar();
}  

interface Mamifero {
	function mamar();
}

interface Canino extends Animal, Mamifero {
	function latir(): string;
}

class Cachorro implements Canino {
	function respirar() {
		return "Irei usar oxigênio!";
	}
	
	function latir(): string {
		return 'Au Au';
	}
	
	function mamar() {
		return "Irei usar leite!";
	}
}

$animal1 = new Cachorro();
echo $animal1->respirar() . '<br>';
echo $animal1->latir() . '<br>';
echo $animal1->mamar() . '<br>';

echo '<br>';
var_dump($animal1);

// Verificar se animal1 é uma instância de Cachorro
echo '<br>';
var_dump($animal1 instanceof Cachorro); // Retornará true

// Verificar se animal1 é uma instância de Canino
echo '<br>';
var_dump($animal1 instanceof Canino); // Retornará true

// Verificar se animal1 é uma instância de Mamifero
echo '<br>';
var_dump($animal1 instanceof Mamifero); // Retornará true

// Verificar se animal1 é uma instância de Animal
echo '<br>';
var_dump($animal1 instanceof Animal); // Retornará true



