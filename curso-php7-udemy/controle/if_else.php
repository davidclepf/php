<div class="titulo">If Else</div>

<?php

// Estrutura if simples
if (true) {
    echo "Serei impresso? <br>";       
}

// Estrutura if else dentro de blocos de códigos
if(true) {
    echo "Verdadeiro - Parte A <br>";
    echo "Verdadeiro - Parte B <br>";
} else {
    echo "Falso - Parte A <br>";
    echo "Falso - Parte B <br>";
}

// Estrutura if else com vários blocos de códigos
if(false) {
    echo "Passo A <br>";
} else if(false) {
    echo "Passo B <br>";
} else if(false) {
    echo "Passo C <br>";
} elseif(false) {
    echo "Passo D <br>";
} elseif(false) {
    echo "Passo E <br>";
} else {
    echo "Último passo! <br>";  
}

echo "Fim";

/* 
1. else if é o mesmo que elseif
2. Somente uma sentença será exibida.
3. Enquanto as sentenças forem falsas será verificada a próxima até que uma dê verdadeiro.
4. else if é o mesmo que:
   else {
       if{
           
       }
   }
*/