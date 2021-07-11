<div class="titulo">Desafio For</div>

<!-- 
    Fazer um laço for que retorne:
        #
        ##
        ###
        ####
        #####
    1) Pode usar incremento $i++
    2) Não pode usar incremento    
 -->

<?php

// 1) Com incremento:
$impressao = '';
for($count = 1; $count <= 5; $count++) { // contador começa com o valor 1 e o laço se repete até q o contador seja igual a 5
    $impressao .= '#'; // variável recebe o valor de #
    echo "$impressao <br>";
}

echo "<hr>";

// 2) Sem incremento:
for($imp = '#'; $imp !== '######'; $imp .= '#') {
    echo "$imp <br>";
}
/*  
    A variável $imp foi setada com o valor string '#', será feita a concatenação da string da variável enquanto a variável for diferente de '######'. 
*/


