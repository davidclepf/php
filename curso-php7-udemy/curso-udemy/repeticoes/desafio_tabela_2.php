<div class="titulo">Desafio Tabela 2</div>

<!-- 
    Criar um formulário que receba 2 valores e apartir destes dois valores crie uma tabela com o número de linhas e colunas recebidos e gere uma lista de números dentro da tabela.
 -->

 <form action="#" method="post">
    <div>
        <label for="linhas">Linhas</label>
        <input type="number" value=<?= $_POST['linhas'] ?? 5 ?> 
        name="linhas" id="linhas">
    </div>
    
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" value=<?= $_POST['colunas'] ?? 5 ?>
        name="colunas" id="colunas">
    </div>
    <button>Gerar Tabela</button> 
 </form>

<table>
    <?php
        $linhas = intval($_POST['linhas']); //A função intval() converte o valor recebido para int
        $colunas = intval($_POST['colunas']);

        if(!$linhas) $linhas = 10;
        if(!$colunas) $colunas = 10;

        $num = 1;
        for($i = 0; $i < $linhas; $i++){
            echo '<tr>';
            for($j = 0; $j < $colunas; $j++){
                echo "<td>$num</td>";
                $num++;
            }
            echo '</tr>';
        }
    ?>
</table>


 <style>
    form * {
        font-size: 1.5rem;
    }

    form > div {
        margin-bottom: 10px;
    }
    table {
        border: 1px solid #444;
        border-collapse: collapse; 
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;        
    }

    table td {
        padding: 10px 20px;
    }

</style>