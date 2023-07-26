<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento</title>
</head>
<body>
    <h1>Princípio do Encapsulamento</h1>

    <?php

        class Pai{
            private $nome = null;
            protected $sobrenome = null;
            public $humor = 'Feliz';

            public function __get($atributo){
                return $this->$atributo;
            }
            public function __set($atributo, $valor){
                $this->$atributo = $valor;
            }
            public function setNome($valor){
                if(strlen($valor) >= 3){
                    $this->nome = $valor;
                }else{
                    $this->nome = '(Invalide Name)';
                }
            }

            private function executarMania(){
                echo 'Assobiou!';
            }
            protected function responder(){
                echo 'Disse Oi!';
            }
            
            // método interface (faz o uso de métodos privados e protegidos)
            public function executarAcao(){
                $num = rand(0, 10);
                if($num <= 5){
                    $this->executarMania();
                }else{
                    $this->responder();
                }
            }
        }

        $pai_01 = new Pai();
        $pai_01->setNome('JP'); // usando set específico para $nome
        $pai_01->__set('sobrenome', 'Silva');
        
        echo $pai_01->__get('nome') . ' ' . $pai_01->__get('sobrenome');
        echo '</br>';
        echo $pai_01->executarAcao();
    ?>
</body>
</html>