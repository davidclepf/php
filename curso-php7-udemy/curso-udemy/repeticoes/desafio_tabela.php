<div class="titulo">Desafio Tabela #01</div>
<!-- 
    Criar duas tabelas com os conteúdos dos arrays abaixo:
    1) Tabela simples com o conteúdo dos arrays.
    2) Tabela zebrada com o conteúdo dos arrays.
 -->
<?php
$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

foreach($matriz as $linha) {
    foreach($linha as $valor) {
        echo "$valor ";
    }
    echo '<br>';
}
?>

<br>

<!-- Tabela Simples -->
<table>
    <?php
        foreach($matriz as $linha) { //Percorre cada uma das linhas da matriz
            echo '<tr>'; // Define a linha da tabela (Table Row)
            foreach($linha as $valor) {
                echo "<td>$valor</td>"; //Define os dados da tabela (Table Data)
            }
            echo '<tr>';
        }
    ?>
</table>

<br>

<!-- Tabela Zebrada -->
<!-- Nesse caso precisaremos percorrer tanto o índice quanto o valor -->
<table>
    <?php
        foreach($matriz as $index => $linha) {
            $style = $index %2 ===1 ? 'background-color: lightblue' : '';
            echo "<tr style='{$style}'>";
            foreach($linha as $valor) {
                echo "<td>$valor</td>";
            }
            echo '</tr>';            
        }
    ?>
</table>



<style>
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
