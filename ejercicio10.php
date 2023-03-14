<?php
    if ($_POST) {
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];

        $suma=$valorA+$valorB;
        $resta=$valorA-$valorB;
        $multi=$valorA*$valorB;
        $divi=$valorA/$valorB;

        echo "suma: ".$suma."<br/>";
        echo "resta: ".$resta."<br/>";
        echo "multiplicacion: ".$multi."<br/>";
        echo "division: ".$divi."<br/>";

        if ($valorA==$valorB) {
            echo "El valor de A es igual al valor de B"."<br/>";
            // los if adentro de otro if solo se ejecutan si el if contenedor se ejecuto
            if ($valorA==4) {
                echo "El valor es 4 Siuu"."<br/>";
            }
            if ($valorA==5) {
                echo "El valor es 5 aremangalaempujala"."<br/>";
            }
        }
        if (($valorA==$valorB) && ($valorA==4)) {
            echo "El valor de A es igual a B y es un numero 4";
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
    <form action="ejercicio10.php" method="post">
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