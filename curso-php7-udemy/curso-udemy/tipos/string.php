<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também"); //Retorna o tipo e o tamanho da string. Obs: conta o assento como uma string.
echo '<br>';

// Concatenação
echo ("Nós também" . ' somos' . '<br>'); // o '.' faz a concatenação
echo("Número é " . 123);
echo '<br>', "Também aceito", " vírgulas";

echo '<br>';
echo "'Teste' " . ' "Teste" <br>';
echo '\'Teste\' ' . "\"Teste\" <br>";
echo "\\ <br>"; //Para imprimir a barra é necessário digitá-la 2 vezes

print("Também existe a função print <br>");
print "Também existe a função print <br>"; //Podemos usar sem parênteses também

// Algumas funções
echo strtoupper('maximizado'), '<br>'; // Converte as letras em maiúsculas (strtoupper = string to upper)
echo strtolower('MINIMIZADO'), '<br>'; // Converte as letras em minúsculas (strtolower = string to lower)
echo ucfirst('só a primeira letra'), '<br>'; // Converte a primeira letra em maiúscula (ucfirst - uppercase first)
echo ucwords('todas as primeiras letras de todas as palavras'), '<br>'; // Converte a primeira letra de todas as palavras em maiúscula (ucwords - uppercase words)
echo strlen('Quantas letras?'), '<br>'; // Mostra o tamanho da string. (strlen - string lenght)
echo mb_strlen('Eu também'), '<br>'; // Mostra o tamanho da string considerando o padrão UTF-8 (Não conta os acentos)
echo substr("Só uma parte mesmo", 7, 6), '<br>'; // exibe os 5 caracteres apartir do índice 7. A contagem de índice se inicia no 0, e será contado 6 strings apartir do índice 7, porém a 6ª string não entra. Caso só seja passado um parâmetro será exibido até o final.

echo str_replace('isso', 'aquilo', 'Trocar isso'), '<br>'; // Procura pelo primeiro parâmetro e troca pelo segundo parâmentro dentro do terceiro parâmetro informado









