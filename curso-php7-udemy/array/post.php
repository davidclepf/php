<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
        <option value="SP">São Paulo</option>
        <option value="MG">Minas Gerais</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > *{
        font-size: 1.4rem;
    }
</style>

<?php
// retorna os elementos exibidos na barra de endereço
print_r($_GET);
echo '<br> <br>';
// Retorna os elementos informados no formulário
print_r($_POST);

echo '<br>' . count($_POST);
