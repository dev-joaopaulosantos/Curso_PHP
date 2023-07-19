<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - Estrutura de repetição</title>
    <style>
        *{
            font-family: Helvetica;
        }
        #noticia{
            background-color: #ccc;
            padding: 1rem;
            margin: 0 .8rem;
            display: inline-block;

        }
    </style>
</head>
<body>
    <h1>estruturas de repetição</h1>
    <h3>While</h3>
    <?php 
        $numero = 0;

        while($numero < 15){
            $numero++;
            
            if($numero === 6 || $numero === 9){
                continue;
            }
            
            echo $numero . ', ';
        }
        echo 'Fim do loop while';
    ?>
    <hr>

    <h3>Do While</h3>
    <?php 
        $numero2 = 0;
        // O do while executa pelo menos uma vez
        do {
            echo "$numero2, ";
            $numero2++;
        }while($numero2 < 10)
    ?>
    <hr>

    <h3>For</h3>
    <?php 
        for($numero3 = 0; $numero3 < 10; $numero3++){
            if($numero3 % 2 == 0){
                echo $numero3 . ', ';
            }
        }
    ?>
    <hr>


    <h3>Praticando com array</h3>
    <p>COM WHILE</p>
    <?php 
        $registros = [
            ['titulo' => 'Titulo noticia 1', 'conteudo' => 'Conteudo noticia 1'],
            ['titulo' => 'Titulo noticia 2', 'conteudo' => 'Conteudo noticia 2'],
            ['titulo' => 'Titulo noticia 3', 'conteudo' => 'Conteudo noticia 3'],
            ['titulo' => 'Titulo noticia 4', 'conteudo' => 'Conteudo noticia 4'],
        ];
        $i = 0;
        while($i < count($registros)){
            echo '<div id="noticia">';
            echo '<h4>' . $registros[$i]['titulo'] . '</h4>';
            echo '<p>' . $registros[$i]['conteudo'] . '</p>';
            echo '</div>';
            $i++;
        }
    ?>
    <P>COM FOR</P>
    <?php 
        for($index = 0; $index < count($registros); $index++){
            echo '<div id="noticia">';
            echo '<h4>' . $registros[$index]['titulo'] . '</h4>';
            echo '<p>' . $registros[$index]['conteudo'] . '</p>';
            echo '</div>';
        }
    ?>
    <p>COM FOR-EACH (FORMA MAIS CORRETA no caso de arrays e objetos)</p>
    <?php 
        foreach($registros as $id => $item){
            echo '<div id="noticia">';
            echo "<p>id: $id </p>";
            echo '<h4>' . $item['titulo'] . '</h4>';
            echo '<p>' . $item['conteudo'] . '</p>';
            echo '</div>';
        }

    ?> 
</body>
</html>