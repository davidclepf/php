<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE; // true retorna 1
echo '<br>';
echo FALSE; // false não retorna nada
echo '<br>' . var_dump(true);
echo '<br>' . var_dump(FALSE);
echo '<br>' . var_dump('false'); // como está entre aspas false é uma string
echo '<br>' . is_bool(false); // retornará 1 pois false é booleano
echo '<br>' . is_bool('true'); // não retornará nada, pois aqui true é uma string e não booleano


// Regras de conversão
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas zero é false
echo '<br>' . var_dump((bool) 20); 
echo '<br>' . var_dump((bool) -1); // msm números negativos são convertidos para true 
echo '<br>' . var_dump((bool) 0.0); // é false
echo '<br>' . var_dump((bool) 0.000000001); // é true
echo '<br>' . var_dump((bool) ""); // string vazia é false
echo '<br>' . var_dump((bool) "0"); // string zero é false
echo '<br>' . var_dump((bool) " "); // todo o resto é true
echo '<br>' . var_dump((bool) "00"); // é true
echo '<br>' . var_dump((bool) "false"); //é true

