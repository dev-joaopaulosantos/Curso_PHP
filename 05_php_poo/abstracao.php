<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstração</title>
    <style>
        .info{
            display: flex;
            flex-direction: row;
        }
    </style>
</head>

<body>
    <h1>Princípio da Abstração</h1>
    <?php
        // modelo
        class Funcionario{
            // atributos
            public $nome = null;
            public $telefone = null;
            public $numFilhos = null;
            public $cargo = null;
            public $salario = null;

            // iniciado no momento em que o objeto é instanciado
            function __construct($nome, $telefone, $numFilhos, $cargo, $salario){
                $this->nome = $nome;
                $this->telefone = $telefone;
                $this->numFilhos = $numFilhos;
                $this->cargo = $cargo;
                $this->salario = $salario;
            }

            //getters e setters (overloading/sobrecarga)
            function __set($atributo, $valor){
                $this->$atributo = $valor;
            }
            function __get($atributo){
                return $this->$atributo;
            }

            // métodos
            function resumirCadFunc(){
                return 
                '<div style="background-color: #ccc; padding: 1rem; margin: 1rem;">' .
                    '<h3>Nome: ' . $this->__get('nome') . '</h3>
                    <h4>Telefone: ' . $this->__get('telefone') . '</h4>
                    <h4>Filhos: ' . $this->__get('numFilhos') . '</h4>
                    <h4>Cargo: ' . $this->__get('cargo') . '</h4>
                    <h4>Salário: R$' . $this->__get('salario') . '</h4>
                </div>';
            }

            function modificarNumFilhos($num){
                $this->numFilhos = $num;
            }
        }

        // Instaciando o objeto
        $funcionario_01 = new Funcionario('João Paulo', '(99) 0 0000-0000', 0, 'Programador', 900);

        $funcionario_02 = new Funcionario('Maria Clara', '(99) 0 0000-0000', 0, 'Designer Gráfico', 1200);
        $funcionario_02->modificarNumFilhos(3);

        echo '<div class="info">';
        echo $funcionario_01->resumirCadFunc();
        echo $funcionario_02->resumirCadFunc();
        echo '</div>';

        echo '<hr>';
    ?>
</body>

</html>