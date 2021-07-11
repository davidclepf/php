<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);

// int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

// float para int
echo '<p>Float para int</p>';
var_dump((int) 6.8); // o float não é arredondado. o valor após a vírgula é descartado
echo '<br>';
var_dump(intval(2.999)); // o float não é arredondado. o valor após a vírgula é descartado
echo '<br>';
var_dump((int) round (2.8)); //  nesse caso o float é arredondado.


// Operações com strings
echo '<p>String</p>';
var_dump(3 + '2'); //Ao somar um número com um valor numérico do tipo string o php entenderá a string como um numero e realizará a soma normalmente
echo '<br>';
var_dump("3" . 2); //será feita a concatenação
echo '<br>';
is_string("3" . 2); // o resultado será true
echo '<br>';
var_dump(1 + "3+5"); //será feita a soma de 1 e 3 e será descartada a string 5
echo '<br>';
var_dump(1 + "3.2"); // será efetuada a soma
echo '<br>';
var_dump(1 + "-3.2e2"); // será efetuada a soma
echo '<br>';
var_dump((int) "10.5"); // a string será convertida para int descartando a casa decimal
echo '<br>';
var_dump((float) "10.5"); // a string será convertida para float




