<?php
    //Si hubo envio aparece el nombre
    if ($_POST) {
    // Recibir información del formulario HTML(Metodo: POST)
    $nombre=$_POST['txtNombre'];
    echo "Hola ".$nombre;
    }
    

?>
<!-- El metodo POST oculta los datos y los recepciona -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hola Mundo en html en PHP</h1>
    <form action="ejercicio2.php" method="post">
        <input type="text" name="txtNombre" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>