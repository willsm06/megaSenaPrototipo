<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        #color1{
            color: green;
        }
        #color2{
            color: blue;
        }
    </style>
</head>
<body>
    <?php 

        $numero = array();

        $numero[0] = $_POST["txtNumero1"];
        $numero[1] = $_POST["txtNumero2"];
        $numero[2] = $_POST["txtNumero3"];
        $numero[3] = $_POST["txtNumero4"];
        $numero[4] = $_POST["txtNumero5"];
        $numero[5] = $_POST["txtNumero6"];

        $sorte = array();

        for($i = 0; $i < 6; $i++){
            $sorte[] = rand(1,60);
        }      

        $num_crt = implode(", ", $numero);

        echo "<p>Numeros ESCOLHIDOS: " . $num_crt . "</p>";
        echo "<p>Numeros SORTEADOS: " . implode(", ", $sorte) . "</p>";

        $qtd_acertos = 0;

        for($j = 0; $j < 6; $j++){
            if($numero[$j] == $sorte[0]){
                $qtd_acertos = $qtd_acertos + 1;
            }else if($numero[$j] == $sorte[1]){
                $qtd_acertos = $qtd_acertos + 1;
            }else if($numero[$j] == $sorte[2]){
                $qtd_acertos = $qtd_acertos + 1;
            }else if($numero[$j] == $sorte[3]){
                $qtd_acertos = $qtd_acertos + 1;
            }else if($numero[$j] == $sorte[4]){
                $qtd_acertos = $qtd_acertos + 1;
            }else if($numero[$j] == $sorte[5]){
                $qtd_acertos = $qtd_acertos + 1;
            }else{}
            
        }

        echo "<p>Numero de acertos: " . $qtd_acertos . "</p>";
    ?>

    <?php
    echo "<a href='index.php'><p>voltar</p></a>"
    ?>
</body>
</html>