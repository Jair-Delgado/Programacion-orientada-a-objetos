<?php

/***
 * La herencia significa que se pueden crear nuevas clases partiendo de
 * clases existentes, que tendrá todos los atributos, métodos de su 
 * superclase o clase padre y se pueden añadir otros atributos y metodos 
 * propios
 * 
 * IMPORTANTE:
 * Una clase solo puede derivar de una única clase, PHP no permite herencia multiple
 */

class Vehiculo {

    //Atributos
    public $motor = false; //se inicia en flase para evaluar luego
    public $marca;
    public $color;

    //Métodos

    //Muestra el estado del motor
    protected function estado(){
        
        if ($this->motor){
            echo "El motor está encendido <br>";
        }else {
            echo "El motor está apagado <br>";
        }

    }
    //Cree esta funcion debido a que estado() es protected, asi ya puedo mostrar desde el objeto
    public function mostrarEstado(){

        self:: estado();
    }

    //Verifica si ya está encendido, sino lo enciende
    public function encender(){

        if ($this->motor){
            echo "Cuidado, el motor ya está encendido <br>";
        }else {
            //Aqui enceinde el motor si no lo está
            $this->motor = true;
            echo "El motor ahora está encendiendo <br>";
        }
    }
}

/***
 * La moto también es un vehiculo, tiene motor, marca y color 
 * para heredar de una clase se usa extends
 */

class Moto extends Vehiculo{
    
    public function estadoMoto(){
        $this->estado();
        //Se puede llamar al método protected ya que es heredado de la clase Vehiculo que contienen este metodo
    }
}

/***
 * Al heredarse de moto se hereda tambien de Vehiculo porque moto  hereda tambien de Vehiculo
 */

class Cuadron extends Moto {
    
    public function estadoCuadron(){
        $this->estado();
    }
}

$vehiculo = new Vehiculo();
$vehiculo ->mostrarEstado();//El motor está apagado
$vehiculo ->encender();//El motor ahora está encendiendo
$vehiculo ->mostrarEstado();//El motor está encendido


$moto = new Moto();
$moto ->estadoMoto();//el motor está apagado

$cuadron = new Cuadron;
$cuadron ->estadoCuadron();//el motor está apagado