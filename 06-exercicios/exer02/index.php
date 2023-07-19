<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 02</title>
</head>

<body>
    <?php
        $numero = $_GET['numero'] ?? 0;
        $raiz_quadrada = sqrt($numero);
        $raiz_cubica = pow($numero, (1/3));
    ?>
    <main>
        <h1>Informe um número:</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" value="<?= $numero ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h3>Resultado</h3>
        <p>Raiz quadrada: <?=$raiz_quadrada?></p>
        <p>Raiz cubica: <?=$raiz_cubica?></p>
    </section>
</body>
</html>