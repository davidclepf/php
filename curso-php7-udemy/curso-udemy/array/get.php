<div class="titulo">$_GET</div>

<?php
// $_GET a princípio é um array vazio. Ele retornará os dados da barra de endereço após a ?. Os dados são separados por &
echo $_GET;
echo '<br>';
print_r($_GET);
echo "<br> {$_GET['nome']}";