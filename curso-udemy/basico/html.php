<div class="titulo">Integração HTML</div>

<!-- É possivel usar códigos PHP dentro de HTML e vice-versa, porém o mais indicado que não se faça isso. -->
<h1>
    <?php
    echo 'Olá';
    echo '<small>';
    echo ' Mundo!';
    echo '</small>'
    ?>
</h1>

<?= "<div>Outra forma de me 'expressar'!</div>"?>

<br>
<div><button><?= "Legal!" ?></button></div>