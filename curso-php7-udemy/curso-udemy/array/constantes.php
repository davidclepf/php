<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = ['Laranja', "Abacaxi"];
// FRUTAS[0] = 'banana'; // não é posível modificar o array
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
// CARROS[BMW] = '325i'; // não é posível modificar o array
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[0] = 'Rio de Janeiro'; // não é posível modificar o array
echo '<br>' . CIDADES[1];

// Arrays definidos como const não podem ser alterados e nem sobre-escritos

