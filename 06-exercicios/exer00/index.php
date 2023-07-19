<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 00</title>
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;

        $quociente = intdiv($dividendo, $divisor); // divisão inteira
        $resto = $dividendo % $divisor;

    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h3>Estrutura da divisão</h3>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>