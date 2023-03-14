<?php

    $frutas=array("mango", "Manzana", "Cambur");

    print_r($frutas);

    echo $frutas[1]."<br/>";
    //indice dinamico
    for($indice=0; $indice<3; $indice++){
        echo $frutas[$indice]."<br/>";
    }
?>