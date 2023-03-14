<?php

    $frutas=array( "m"=>"Mango", "p"=>"Pera", "mz"=>"Manzana");

    print_r($frutas);

    echo $frutas["mz"]."<br/>";
    //Vamos a leer todo el arreglo de frutas y lo vamos a pasar como indice y valor
    foreach ($frutas as $indice =>&$valor) {
        echo $indice."<br/>";
        echo "El valor ".$valor." Tiene el índice:".$indice."<br/>";

        echo $frutas[$indice]."<br/>";
    }

?>