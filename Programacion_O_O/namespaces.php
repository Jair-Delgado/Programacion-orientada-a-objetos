<?php

/***
 * Los namespace nos ayudan a tener que colocar "subnombres" a nuestros archivos, clases
 * o funciones. 
 */

 /*
 //Hay que ingresar la direccion donde esta la clase
require_once "api/Models/Persona.php";
require_once "api/Controllers/PersonaController.php";
*/

spl_autoload_register(function($clase)
{
    print $clase;//Models\Persona
    //reemplaza la barra \ por / en la $clase {\\es fuga al texto}
    $ruta = "api/" . str_replace("\\", "/", $clase) .".php";
    
    if(is_readable($ruta)) {

        require_once $ruta;

    }else{

        echo "El archivo no existe";
    }
});

//Para llamar a nuestra clase hay que poner primero el nombre del namespace seguido de \
 
 Models\Persona::Hola();
 Controllers\PersonaControllers::Hola();
 