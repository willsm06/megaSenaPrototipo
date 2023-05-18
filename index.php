<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula06</title>
</head>
<body>
    <?php 
        echo "<h1>Mega Sena</h1>";
        //Digitar 6 numeros, sistema escolher 6 nummeros, verificar quantos bateram
        //usar array
        //Numeros de 1 a 60
    ?>

    <form action="recebeDados.php" method="post">
    <label for="txtNumero1">Numero1</label><br>
    <input type="number" name="txtNumero1" id="txtNumero1"><br>
    <label for="txtNumero2">Numero2</label><br>
    <input type="number" name="txtNumero2" id="txtNumero2"><br>
    <label for="txtNumero3">Numero3</label><br>
    <input type="number" name="txtNumero3" id="txtNumero3"><br>
    <label for="txtNumero4">Numero4</label><br>
    <input type="number" name="txtNumero4" id="txtNumero4"><br>
    <label for="txtNumero5">Numero5</label><br>
    <input type="number" name="txtNumero5" id="txtNumero5"><br>
    <label for="txtNumero6">Numero6</label><br>
    <input type="number" name="txtNumero6" id="txtNumero6"><br>
    <input type="submit" value="Enviar">
    <br><br>
    </form>

</body>
</html>