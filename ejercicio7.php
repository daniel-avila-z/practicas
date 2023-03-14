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
    <form action="ejercicio7.php" method="post">
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