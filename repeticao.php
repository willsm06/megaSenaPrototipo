<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição</title>
    <style>
        body{
        display:flex;
        justify-content:center;
        align-items:center;
        gap: 20px;
        }
    </style>
</head>
<body>
    <?php 
        //$num = $_POST["txtNumero"];

        //for($i = 1; $i <= 10; $i++){
            
          //  echo "<p>" . $num * $i . "</p>";
        //}

        for($j = 1; $j <= 10; $j++){

            echo "<div>";
        for($i = 1; $i <= 10; $i++){
            
            echo "<h2> " . $j * $i . " </h2>";
        }
        echo "</div>";
        }
    
    ?>
</body>
</html>