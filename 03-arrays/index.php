<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        span {
            text-decoration: underline;
        }

        ul {
            list-style: none;
            padding: 0;
        }
    </style>
</head>

<body>
    <h2>Arrays</h2>
    <?php
    $frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];

    $frutas[] = 'Laranja';

    echo '<pre>';
    var_dump($frutas);
    echo '</pre>';

    echo '<pre>';
    print_r($frutas);
    echo '</pre>';

    echo '</br>';
    echo $frutas[3];
    echo '<hr>';

    // array multidimensional
    echo '<h3>Arrays multidimensionais</h3>';
    $lista_coisas = [
        'produtos' => ['Arroz', 'Feijão', 'Leite'],
        'pessoas' => ['João', 'Ana', 'Maria']
    ];
    
    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';
    echo $lista_coisas['pessoas'][1];
    echo '<hr>';

    // Pesquisa em arrays
    echo '<h3>Pesquisa em arrays</h3>';
    echo in_array('Uva', $frutas); // retorna 1 se for true, e vazio se for false
    echo '</br>';
    echo array_search('Abacate', $frutas); // Retorna o índice do valor pesquisado se for true, e vazio caso seja null
    echo '</br>';
    echo array_search('Maria', $lista_coisas['pessoas'])
    ?>
    <hr>
    <h3>Funções de arrays</h3>
    <?php
    $array = ['teste 1', 'teste 2', 'teste 3', 'teste 4', 'teste 5'];
    echo 'Retorna um array com os indices do array passado pra função';
    echo '<pre>';
    print_r(array_keys($array)); // Retorna um array com os indices do array passado pra função
    echo '</pre>';

    // Outros exemplos
    sort($array); // ordena o array e reajusta seus indices
    asort($array); // Ordena o array preservando seus indices
    count($array); // conta a quantidade de elementos de um array
    array_merge($array); // Funde um ou mais arrays
    explode(' ', 'joao paulo'); // divide uma string baseada em um delimitador
    implode('-', $array); // Junta elementos de um array em uma string 
    ?>
</body>

</html>