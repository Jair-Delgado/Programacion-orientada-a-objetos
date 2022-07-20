<?php
class Persona{

    //Atributos se definen de una variable
    public $nombre = 'Pedro';
    

    //Metodos se definen de una funcion
    public function hablar($mensaje){
        
            echo $mensaje;
    }

    
}

/***
 * Las clases funcionan como un molde para un objeto
 * Los objetos tienden a estar guardados en variables
 */

//new indica que estamos colocando una clase en un objeto
$persona = new Persona();

//-> se usa para llamar a un atributo o metodo
echo $persona ->nombre; //Pedro

// Debemos crear el objeto primero para luego llamar a sus atributos y metodos
$persona ->hablar('esto es un mensaje');//esto es un mensaje