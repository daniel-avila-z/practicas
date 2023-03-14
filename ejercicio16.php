<?php
    //Funciones
    //A las funciones en php se les pasa argumentos
    function imprimirNombre($nombre, $apellido=""){
        //Se le asigna un string vacio al apellido para que no haya un error al llamar la funcion
        // Rutinas(instrucciones)
        echo "HOLA ".$nombre." ".$apellido."<br/>";
    }
    // Llamar a la funcion para que se ejecute
    imprimirNombre("Daniel");
    imprimirNombre("Oscar", "Ramirez");
    imprimirNombre("Daniel", "Teran");

?>