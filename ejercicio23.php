<?php
// Public: Esto quiere decir que cualquier propiedad o método puede ser leído, accedido o modificado 
// desde cualquier parte del sistema. Es público, es libre sin restricciones.
    
    class persona{//Programación Orientada a Objetos
        // Declaración de una propiedad
        public $nombre;//propiedades
         // Declaración de un método
        public function asignarNombre($nuevoNombre){// acciones o métodos... 
            $this->nombre = $nuevoNombre;
        }
        // Declaración de un método
        public function imprimirNombre(){
            echo "Hola soy".$this->nombre;
        }
    }

    $objAlumno = new persona();// instancia o creación de un objeto
    $objAlumno->asignarNombre("Dan");//llamando un método

    $objAlumno2 = new persona();
    $objAlumno2->asignarNombre("Siuuu");
    $objAlumno2->imprimirNombre();

    // echo $objAlumno2->nombre;
    echo $objAlumno->nombre;// imprimir una propiedad
?>