<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>

<body>
    <h1>Princípio da Herança</h1>

    <?php

        class Veiculo{
            public $placa = null;
            public $cor = null;

            // métodos
            function acelerar(){
                echo 'Acelerou!';
            }
            function freiar(){
                echo 'Freiou!';
            }
        }

        class Carro extends Veiculo{
            public $tetoSolar = true;

            // construtor
            function __construct($placa, $cor){
                $this->placa = $placa;
                $this->cor = $cor;
            }

            // métodos
            function abrirTetoSolar(){
                echo 'Abriu o teto solar';
            }
            function alterarPosicaoVolante(){
                echo 'Alterou a posição do volante!';
            }
        }

        class Moto extends Veiculo{
            public $contraPesoGuidao = true;

            // construtor
            function __construct($placa, $cor){
                $this->placa = $placa;
                $this->cor = $cor;
            }

            // métodos
            function empinar(){
                echo 'empinou!';
            }
        }

        $carro_01 = new Carro('ABC123', 'Branca');
        $moto_01 = new Moto('DEF456', 'Preta');

        echo '<h4>Carro</h4>';
        $carro_01->abrirTetoSolar();
        echo '<br>';
        $carro_01->alterarPosicaoVolante();

        echo '<h4>Moto</h4>';
        $moto_01->acelerar();
        echo '<br>';
        $moto_01->empinar();
        echo '<hr>';
    ?>
</body>

</html>