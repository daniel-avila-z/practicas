<?php

    $frutas=array("Mango", "Naranja", "Cambur");
    // Inserta uno o más elementos al final de un array
    // array_push() trata array como si fuera una pila y coloca la variable que se le proporciona al
    // final del array. El tamaño del array será incrementado por el número de variables insertados.
    array_push($frutas, "Uva");

    print_r($frutas);

?>