<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lógica e Operadores</title>
    <style>
        * {font-family: Helvetica;}
    </style>
</head>
<body>
    <!-- *AVISO* - Operadores de comparação em PHP funcionam iguais os do JavaScript -->
    <?php
        $idade = 17;
        echo "<h3>Idade: $idade</h3>";
        if($idade < 18){
            echo 'Você é menor de idade!';
        }else{
            echo 'Você é maior de idade!';
        }
        echo '<hr>';

        // Usando if/else com operadores logicos
        $valor_total;
        $valor_compra = 1000;
        $cliente_cadastrado = true;
        $desconto = 0;

        echo '
            <p>PROMOÇÃO:<br/>
                Clientes cadastrados e com compras acima de R$100: Desconto de 25%.<br/>
                Clientes cadastrados ou com compras acima de R$100: Desconto de 15%.
            </p>';

        if($valor_compra >= 100 && $cliente_cadastrado === true){
            $desconto = ($valor_compra * 0.25);
            $valor_total = $valor_compra - $desconto;
        }
        else if($valor_compra >= 100 || $cliente_cadastrado === true){
            $desconto = ($valor_compra * 0.15);
            $valor_total = $valor_compra - $desconto;
        }
        else{
            $valor_total = $valor_compra;
        }
        
        $cadastro = $cliente_cadastrado ? 'SIM' : 'NÃO';
    ?>
    <ul style="list-style: none; text-transform: uppercase; padding: 0;" >
        <li><strong>Cadastrado:</strong> <?= $cadastro ?></li>
        <li><strong>Valor da compra:</strong> R$<?= $valor_compra ?></li>
        <li><strong>Desconto:</strong> R$<?= $desconto ?></li>
        <li><strong>Valor final:</strong> R$<?= $valor_total ?></li>
    </ul>
    <hr>
    <?php
        echo '<h3>Usando Switch</h3>';
        $variavel = '2';
        switch ($variavel) {
            case 1:
                echo 'Entrou no case 1';
                break;
            case 2:
                echo 'Entrou no case 2';
                break;
            case 3:
                echo 'Entrou no case 3';
            default:
                echo 'Entrou no default';
        }
    ?>
    <hr>
    <h3>Casting de tipos/conversão de tipos</h3>
    <?php 
        $valor = 10;
        $valor_float = (float)$valor;
        // ----------------------------
        $valor2 = 20;
        $valor2_string = (string)$valor2;
        // ----------------------------
        $valor3 = 29.99;
        $valor3_int = (int)$valor3;
    ?>
    <ul style="list-style: none; padding: 0;" >
        <li>Valor: <?=$valor?>, Tipo: <?=gettype($valor)?>, Convertido:<?=gettype($valor_float)?>, Novo valor:<?=$valor_float?></li>
        <li>Valor: <?=$valor2?>, Tipo: <?=gettype($valor2)?>, Convertido:<?=gettype($valor2_string)?>, Novo valor:<?=$valor2_string?></li>
        <li>Valor: <?=$valor3?>, Tipo: <?=gettype($valor3)?>, Convertido:<?=gettype($valor3_int)?>, Novo valor:<?=$valor3_int?></li>
    </ul>
</body>
</html>