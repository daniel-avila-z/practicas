<?php

    if ($_POST) {
        $boton=$_POST['btnValor'];
        //Son condicionales que es caso de que el valor conincida con alguna de ellas se ejecuta
        switch($boton){
            case 1:
                echo "Presionó el boton 1";
            break;

            case 2:
                echo "Presionó el boton 2";
            break;

            case 3:
                echo "Presionó el boton 3";
            break;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="ejercicio12.php" method="post">
        <!-- se les pone el mismo nombre para evaluar lo que es el boton presionado -->
        <input type="submit" name="btnValor" value="1">
        <br>
        <input type="submit" name="btnValor" value="2">
        <br>
        <input type="submit" name="btnValor" value="3">
    </form>
</body>
</html>