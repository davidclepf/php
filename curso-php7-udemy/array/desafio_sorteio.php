<div class="titulo">Desafio Sorteio</div>

<?php
// Usar um h1 para imprimir o nome de uma personagem de forma aleatória

$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];

$resultado = array_rand($nomes); // retorna o índice
echo "<h1 center>$nomes[$resultado]</h1>";
?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>