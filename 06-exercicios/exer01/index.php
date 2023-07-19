<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 01</title>
</head>
<body>
    <?php 
        define('SALARIO_MINIMO', 1380);

        $salario = $_GET['salario'] ?? null;
        if($salario > 0){
            $resultado = intdiv($salario, SALARIO_MINIMO);
            $resto = $salario % SALARIO_MINIMO;
        }

    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário:</label>
            <input type="number" name="salario" step="0.01" value="<?=$salario?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        if($salario > 0){
            echo "
            <section>
                <h3>Resultado</h3>
                <p>Você recebe: <strong>$resultado</strong> salários mínimos + <strong>R$" . number_format($resto, 2, ",", "."). "</strong></p>
            </section>
            ";
        }
    ?>
</body>
</html>