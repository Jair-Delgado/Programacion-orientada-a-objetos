<?php

use Persona as GlobalPersona;

/***
 * Son fragmentos de codigo que pueden ser reusados en clases que pueden tener un poco
 * de similitud con una clase
 * 
 * Las clases permiten usar tantos traits sean posibles separandolos por una coma.
 * 
 * Un trait es similar a una clase pero con el unnico objetivo de agrupar funcionalidades.
 * No se puede instanciar directamente un trait.
 * Funciona casi igual que una herencia.
 * Permite combinar mienbros de clases sin tener que usar herencia
 */

 //Se crea con la palabra trait
    trait Persona
    {
    //puede contener casi todo lo que tiene una clase

        public $nombre;

        public function mostrarNombre()
        {
            print $this->nombre;
        }

        abstract public function asignarNombre($nombre);
    }

    trait Trabajador
    {
        protected function mensaje()
        {
            echo "Mi nombre es: ";
        }

        
    }

    class Persona2 
    {
        //Uso de los traits
        use Persona, Trabajador;

        
        public function asignarNombre($nombre)
        {
            //Se puede concatenar con un metodo tipo private debido a que se esta usando el trait que lo contiene y estos funcionan casi igual a las herencias
            $this->nombre = self::mensaje() . $nombre;
        }
        
    }

/***
 * Los traits trabajan bajo el orden de precedencia. Si una trait y una clase tienen los mismos
 * métodos se usará siempre primero el de la clase
 */
    $persona = new Persona2();
    $persona->asignarNombre("Jair");
    $persona->mostrarNombre();//Mi nombre es: Jair

    