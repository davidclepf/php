<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Curso PHP</title>
</head>
<body>
    
    <?php
        
        echo '<h1>1)</h1>';
        // criando array
        $funcionarios = ['João', 'Maria', 'José'];
        
        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';
        
        foreach($funcionarios as $idx => $nome_funcionario) {
            // $idx receberá o índice do array e $nome_funcionario receberá o conteúdo do array
            echo "ID $idx - Nome:  $nome_funcionario <br>";
        }
        
        echo '<br>';
        echo '<hr>';
        
        echo '<h1>2)</h1>';
        // criando array
        $funcionarios = [
            ['nome' => 'João', 'salario' => 2500],
            ['nome' => 'Maria', 'salario' => 3000],
            ['nome' =>'José', 'salario' => 2300]
        ];
        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';
        
        echo '<br>';
        
        foreach($funcionarios as $id => $funcionario) {
            // nesse caso $id receberá o índice dos arrays internos e $funcionario receberá os arrays internos.
            print_r($funcionario);
        }
        
        echo '<br>';
        
        echo '<br>Podemos também encadear o foreach: <br>';
        
        foreach($funcionarios as $idx => $funcionario) {
            // $id receberá o índice dos arrays internos e $funcionario receberá os arrays internos.
            foreach($funcionario as $idx2 => $valor) {
                // $id2 receberá o índice do conteúdo dos arrays internos e $valor receberá o conteúdo dos arrays internos
                echo "$idx2 > $valor <br>";
            }
            echo '<br>';
        }
        
        
        echo '<br><b>Caso algum array receba um novo elemento o foreach conseguirá percorrê-lo e listá-lo sem problemas, pois somente quando chega no final do array ele passa para o próximo.</b><br>';
        
        $funcionarios = [
            ['nome' => 'João', 'salario' => 2500, 'data_nascimento' => '21/06/1976'],
            ['nome' => 'Maria', 'salario' => 3000],
            ['nome' =>'José', 'salario' => 2300]
        ];
        foreach($funcionarios as $idx => $funcionario) {
        // $id receberá o índice dos arrays internos e $funcionario receberá os arrays internos.
            foreach($funcionario as $idx2 => $valor) {
        // $id2 receberá o índice do conteúdo dos arrays internos e $valor receberá o conteúdo dos arrays internos
                echo "$idx2 > $valor <br>";
            }
            echo '<br>';
        }



        ?>
</body>
</html>