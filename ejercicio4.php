<?php
    // sí haces un envio de informacion, recepciona esa informacion que se llama txtnombre
    // y lo vas a obtener del metodo POST
    if ($_POST) {
        $txtNombre=$_POST['txtNombre'];
        $txtApellido=$_POST['txtApellido'];
        echo "Hola ".$txtNombre." ".$txtApellido;
        // se concatena con un punto
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <form action="ejercicio4.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br/>
        Apellido:
        <input type="text" name="txtApellido" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>