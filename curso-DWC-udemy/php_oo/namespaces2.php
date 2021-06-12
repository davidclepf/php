<?php

require "./bibliotecas/lib1/lib1.php";
require "./bibliotecas/lib2/lib2.php";

//instanciando o namespace A
use A\Cliente as C1; // se não usarmos 'as C1' será gerado um erro, pois terá um conflito  entre namespace A e B 

//instanciando o namespace B
use B\Cliente; // informando qual o namespace queremos acessar

// acessando os dados do namespace A
$c = new C1();
print_r($c);
echo $c->__get('nome');

// acessando os dados do namespace B
$c = new Cliente();
print_r($c);
echo $c->__get('nome');
?>