<?php
    if ($_POST) {
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];
        // sí verdadero es la parte izq del && y verdadero es la dere, entonces se ejecuta,
        // con un solo dato en falso no se ejcuta
        // if ( ($valorA != $valorB) && ($valorA > $valorB) ){
        //     echo "El valor de A es mayor y diferente de B";
        // }
        // Operador logico OR: Sí cualquiera de los dos es verdadero se ejecuta
        if ( ($valorA != $valorB) || ($valorA > $valorB) ){
            echo "El valor de A es mayor y diferente de B";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <form action="ejercicio9.php" method="post">
        <h2>Valor A:</h2>
        <input type="text" name="valorA" id="">
        <br/>
        <h2>Valor B:</h2>
        <input type="text" name="valorB" id="">
        <br/>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>