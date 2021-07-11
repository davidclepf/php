<div class="titulo">Comparação Arrays</div>

<?php
$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];
var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

$arr3 = ['idade' => 20, 'nome' => 'Maria'];
echo '<br>';
var_dump($arr1 == $arr3); // Apesar da ordem dos itens no array estar invertida, o comteúdo é o mesmo, portanto retornará true
var_dump($arr1 === $arr3); // Na comparação extrita retornará false, pois não são idênticos
var_dump($arr1 != $arr3); // Na comparação por diferença retornará false
var_dump($arr1 !== $arr3); // Na comparação por diferença extrita retornará true

echo '<br>';
$arr4 = ['idade' => '20', 'nome' => 'Maria']; // idade string
var_dump($arr3 == $arr4); // msm a idade sendo de tipos diferentes retornará true
var_dump($arr3 === $arr4); // retornará false
