<?php
/***
 * Atributos: Simples variables o Arrays
 * Definicion del tipo del atributo: (public, private, protected)
 * 
 * Metodos: Accede a atributos con $this -> Nombre
 * Se puede acceder a otros metodos con $this o self::
 */

 class Persona {
    
    //Atributos

    public $nombre = array();
    public $apellido = array();

    //Metodos

    public function guardar($nombre, $apellido){

        /***
         * Estamos accediendo a un atributo con $this
         * Lo que se escriba en la variable nombre se va a guardar en el array nombre[]
         * de igual forma con apellido
         */

        $this->nombre[] = $nombre;
        $this->apellido[] = $apellido;


    }

    public function mostrar(){

        //Ciclo para obtener varios registros
        for($i = 0; $i < count($this->nombre); $i++ ){

            //Se accede al metodo formato por self::; [$i] es la posicion en la que queremos que se muestre
            self:: formato ($this->nombre[$i], $this->apellido[$i]);

        }

    }

    //Este metodo nos indica el formato en el que se va a mostrar el nombre y el apellido
    public function formato($nombre, $apellido){
        echo "Nombre: $nombre ° Apellido: $apellido <br>";
    }

    
 }

 //Creamos el objeto
$persona = new Persona();
//Llenamos los registros
$persona -> guardar("Jair", "Delgado");
$persona -> guardar("Abel", "Rea");
$persona -> guardar("Liliana", "Otuna");
//Accedemos al metodo mostrar
$persona -> mostrar();