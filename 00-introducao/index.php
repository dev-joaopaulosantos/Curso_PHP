<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução</title>
</head>

<body>
    <h2>Echo, print, Variaveis, Concatenação</h2>

    <?php
    echo 'Comando ECHO <br/>';
    print 'Comando PRINT';

    /* 
            Nome de variaveis válidos:
            $nome $Nome $NOME $nome1 $nome_1
        */
    // string
    $nome = 'João Paulo';
    // int
    $idade = 25;
    // float
    $peso = 55.8;
    // bool
    $estudante = true; // Se true: retorna 1, se false: retorna vazio
    ?>

    <!-- Usando a tag de impressão -->
    <h3>Nome: <?= $nome ?> </h3>
    <p>Idade: <?= $idade ?> </p>
    <p>Peso: <?= $peso ?> </p>
    <p>Estudante: <?= $estudante ?> </p>

    <?php
    // concatenação
    echo 'Meu nome é ' . $nome . ', e peso ' . $peso . ' Kg <br/>';
    // ou
    echo "Meu nome é $nome, e peso $peso Kg <br/>";

    // Variaveis constantes // Normalmente são definidas com letras MAIUSCULAS
    define('DB_URL', 'http://meubancodedados/exemplo');
    echo '<br/>';

    // Para chama uma variavel constante não precisa do simbolo $
    echo DB_URL;
    ?>
</body>

</html>