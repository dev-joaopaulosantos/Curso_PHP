<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
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

    <?php
    function exibirBoasVindas($nome){
        return "Seja bem vindo $nome";
    }

    $largura = 50;
    $comprimento = 25;

    function calcularArea($largura, $comprimento){
        $area = $largura * $comprimento;
        return $area;
    }

    $area = calcularArea($largura, $comprimento);
    ?>

    <h2><?= exibirBoasVindas('João Paulo Santos') ?></h2>
    <p>Dimenções do terreno: largura(<?= $largura ?>m) x comprimento(<?= $comprimento ?>m)</p>
    <p>A area do terreno é: <?= $area ?>m²</p>
    <hr>


    <h3>Funções de Texto</h3>
    <?php
    $texto = 'Exemplo de texto!';

    $texto_minusculo = strtolower($texto);
    $texto_maiusculo = strtoupper($texto);
    $texto_primeira_maiuscula = ucfirst($texto);
    $tamanho_texto = strlen($texto);
    $substitui_texto = str_replace('!', ' Substituido!', $texto);
    $recorta_texto = substr($texto, 11, 6) // variavel, posição inicial, quantidade de caracteres
    ?>

    <ul>
        <li>Texto: <span><?= $texto ?></span></li>
        <li>Texto minúsculo: <span><?= $texto_minusculo ?></span></li>
        <li>Texto maiúsculo: <span><?= $texto_maiusculo ?></span></li>
        <li>Primeira letra maiúscula: <span><?= $texto_primeira_maiuscula ?></span></li>
        <li>Tamanho do texto: <span><?= $tamanho_texto ?></span> caracteres</li>
        <li>Texto substituido: <span><?= $substitui_texto ?></span></li>
        <li>Texto recortado: <span><?= $recorta_texto ?></span></li>
    </ul>
    <hr>


    <h3>Funções Matemáticas</h3>
    <?php
    $numero = 57.80;
    ?>
    <ul>
        <li>Número original: <span><?= $numero ?></span></li>
        <li>Arredondado para cima: <span><?= ceil($numero) ?></span></li>
        <li>Arredondado para baixo: <span><?= floor($numero) ?></span></li>
        <li>Arredondado para numero mais próximo: <span><?= round($numero) ?></span></li>
        <li>Número aleatório: <span><?= rand(0, 10) ?></span></li>
        <li>Raiz quadrada de <?= $numero ?>: <span><?= sqrt($numero) ?></span></li>
    </ul>

    <hr>

    <h3>Funções de datas</h3>
    <?php
    // Recuperar data atual / Usar a documentação do php para mais exemplos
    $data_completa = date('Y-m-d H:i');

    $data_inicial = '2022-06-02';
    $data_final = '2022-06-21';
    // Temos que converter as datas e, timestemp para poder fazer calculos
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);

    $diferenca_datas = Abs($time_final - $time_inicial);

    $dia_em_segundos = 24 * 60 * 60;

    ?>

    <ul>
        <li>Dia de 0 a 31: <span><?= date('d') ?></span></li>
        <li>3 primeiras letras do dia: <span><?= date('D') ?></span></li>
        <li>ano/mes/dia horas:minutos: <span><?= $data_completa ?></span></li>
        <li>Diferença entre 2019/06/21 e 2022/06/21: <span><?= $diferenca_datas / $dia_em_segundos ?> dias</span></li>
    </ul>
</body>

</html>