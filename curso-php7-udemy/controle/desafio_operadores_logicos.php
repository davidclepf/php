<div class="titulo">Desafio Operadores Lógicos</div>

<!-- 
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' + sorvete.
    - Se apenas um for executado -> tv 32' + Sorvete.
    - Se nenhum for executado -> Fica em casa.
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado!</option>
            <option value="0">Não Executado!</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado!</option>
            <option value="0">Não Executado!</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php
if(isset($_POST['t1']) && isset($_POST['t2'])) { // O código será rodado somente quando t1 e t2 estiverem setados (por isso o uso de 'isset')

    $t1 = $_POST['t1'] === '1'; // Se a entrada de $t1 for estritamente igual a 1, recebe true.
    $t2 = !!$_POST['t2']; // A dupla negação (!!) converte a string em boleano (true ou false)
    $tv = '';
    $sorvete = false;

    if($t1 && $t2) { // Se t1 e t2 forem true
        $tv = '50"';
    } elseif($t1 xor $t2) { // Somente se um dos dois for true (ou exclusivo)
        $tv = '32"';
    }

    if($t1 or $t2) { // Se um dos dois for true
        $sorvete = true;
    }

    if($tv) { // Se $tv for true
        $resultado = "Vamos comprar uma TV de $tv";
    } else {  // Se $tv for false
        $resultado = "Sem TV dessa vez :(";
    }

    if(!$sorvete) { // Se $sorvete for false (negação)
        $resultado .= '<br>Sem sorvete. Estamos mais saudáveis!'; 
    } else {
        $resultado .= '<br>Sorvete liberado!! \o/';
    }

    echo "<p>$resultado</p>";
}


