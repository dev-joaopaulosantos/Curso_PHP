<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>

<body>
    <h1>Princípio do Polimorfismo</h1>

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
            function trocarMarcha(){
                echo 'Desengatou a embreagem com o pé e engatou a marcha com a mão';
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
            // sobrepondo o metodo no objeto filho
            function trocarMarcha(){
                echo 'Desengatou a embreagem com a mão e engatou a marcha com o pé';
            }
        }

        $carro_01 = new Carro('ABC123', 'Branca');
        $moto_01 = new Moto('DEF456', 'Preta');

        echo '<h4>Carro</h4>';
        $carro_01->abrirTetoSolar();
        echo '<br>';
        $carro_01->trocarMarcha();

        echo '<h4>Moto</h4>';
        $moto_01->trocarMarcha();
        echo '<br>';
        $moto_01->acelerar();
        echo '<hr>';
    ?>
</body>

</html>