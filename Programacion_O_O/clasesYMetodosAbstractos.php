<?php

/***
 * CLASES ABSTRACTAS
 * Una clase abstracta tiene por objetivo agrupar atributos y métodos que 
 * seran heredados por otras subclases 
 * 
 * Las clases definidas como abstractas no se pueden instanciar y cualquier clase
 * que contiene al menos un metodo abstracto debe ser definido como tal.
 * 
 * METODOS ABSTRACTOS
 * Si queremos que las subclases implementen comportamientos obligatoriamente  podemos definir 
 * metodos abstractos 
 * 
 * Un metodo abstracto se declara en una clase pero no se lo implementa.
 */

 //las clasesm y metodos abstractos se definen con la palabra abstract
 abstract class Molde{
    abstract public function ingresaNombre($nombre);
    abstract public function obtenerNombre();
 }

 class Persona extends Molde{
    private $mensaje = "Hola gente";

    public function mostrar(){
        print $this->mensaje;
    }
    
    //las clases que son heredadas de otra clase abstracta deben usar obligatoriamente los metodos abstractos que esa clase abstracta tiene
    public function ingresaNombre($nombre){
        $this->nombre = $nombre;
        
    }
    public function obtenerNombre(){
        print $this->nombre;
    }
 }

 $obj = new Persona();
 $obj->ingresaNombre("jair");
 $obj->obtenerNombre();