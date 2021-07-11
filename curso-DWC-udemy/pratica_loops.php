<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Curo PHP</title>
</head>
<body>
    
    <?php
        $registros = array(
            array('titulo' => 'Título Notícia 1', 'conteudo' => 'Conteúdo Notícia 1'),
            array('titulo' => 'Título Notícia 2', 'conteudo' => 'Conteúdo Notícia 2'),
            array('titulo' => 'Título Notícia 3', 'conteudo' => 'Conteúdo Notícia 3'),
            array('titulo' => 'Título Notícia 4', 'conteudo' => 'Conteúdo Notícia 4')
        );
        // imprimindo conteúdo dos arrays
        echo '<pre>';
        print_r($registros);
        echo '</pre>';
        
        echo '<br>';
        
        echo "O array possui " . count($registros) . " registros.<br>";
        
        echo '<br>';
        
        echo '<h1>While</h1>';
        
        //Usando while para percorrer o conteúdo dos arrays
        $idx = 0;
        while($idx < 3) {
            print_r($registros[$idx]);
            echo '<br>';
            
            $idx++;
        }
        
        echo '<br>';
        
        //Usando while para acessar o conteúdo dos arrays pelos índices
        $idx = 0;
        // usando count para que, caso novos arrays sejam adicionados não gere erro
        // while($idx < 3) {  // Substituído pelo count
            while($idx < count($registros)) {
                echo "<h3>" . $registros[$idx]['titulo'] . "</h3>";
                echo "<p>" . $registros[$idx]['conteudo'] . "</p>";
                echo '<br>';
                
                $idx++;
            }
            
            echo '<hr>';
            echo '<br>';
            
            
            
            // DO/WHILE
            echo '<h1>Do / While</h1>';
            
            $idx = 0;
            
            do {
                echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
                
                $idx++;
            } while($idx < count($registros));
            
            
            echo '<br>';
            echo '<hr>';
            echo '<br>';
            
            
            
            // DFOR
            echo '<h1>For</h1>';

            for($idx = 0; $idx < count($registros); $idx++) {
                echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            }
            
            
            
            
            ?>
</body>
</html>