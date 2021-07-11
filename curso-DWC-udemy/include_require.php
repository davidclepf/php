<?php

echo '<h1>Include, Include_one, Require, Require_once</h1>';

echo '<p>São construtores usados para incluir scripts a uma página.</p>';
echo '<p>Existem 2 sintaxes de função que podem ser usadas: include ("arquivo.php") ou include "arquivo.php"</p>';

echo '<br>';

echo '<h2>Include e Require</h2>';

echo '<p>Tanto <b>include</b> quanto <b>require</b> têm a mesma função, anexar scripts à página. A diferença de um para outro é o tratamento de um eventual erro.</p>';

echo '<p>No caso de um erro o <b>include</b> gera um warning, que é apenas um alerta. O processamento posterior não será afetado, ou seja, o restante da página será exibida normalmente. No caso do <b>require</b> um erro gera um fatal error que interrompe totalmente o funcionamento do script.</p>';

echo '<br>';

echo '<h2>Include_once e Require_once</h2>';

echo '<p>O tratamento de erros pelo <b>include_once</b> e pelo <b>require_once</b> são exatamente os mesmos de include e require, a diferença entre o uso de include ou include_once e require ou require_once é que o script será anexado na página todas as vezes que include ou require forem usados. Se usarmos 10 vezes, o script será anexado 10 vezes. Já com o uso de include_once ou require_once o script é anexado somente uma vez, não importa quantas vezes os usarmos.</p>';
?>