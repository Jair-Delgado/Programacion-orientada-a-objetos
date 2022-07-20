<?php

/***
 * Las interfaces de objetos permiten crear codigo con el cual especificamos que metodos 
 * deben ser implementados por una clase
 * 
 * Las interfaces son definidas utilizando la palabra clave interface, pero sin metodos que 
 * tengan su contenido definido.
 * 
 * Todos los métodos declarados en una interfaz deben ser públicos
 * 
 * Para implementar una interfaz se utiliza el operador implements.
 * Todos los métodos en una interfaz deben ser implementados dentro de la clase sino dará error.
 * 
 * Las clases pueden implementar mas de una interfaz separandolas por una coma
 * 
 * Las interfaces se pueden extender utilizando el operador extends.
 * 
 * Se deben usar todos los metodos declarados en la interface
 */

interface Auto{
    public function encender();
    public function apagar();
}

interface gasolina extends Auto{
    public function vaciarTanque();
    public function llenarTanque($cant);//cantidad que le vamos a ingresar al tanque
}

//Para implementar una interface a una clase se usa implements

class Deportivo implements gasolina{

    private $estado = false;
    private $tanque = 0;

    // verifica si esta encendido el auto e indica cuanta gasolina tiene despues de usarlo
    public function estado(){

        if($this->estado){
            print "El auto esta encendido y tiene $this->tanque de litros en el tanque <br>";
        }else{
            print "El auto esta apagado <br>";
        }
    }

    /***
     * La clase debe tener todos los metodos de las interfaces y como gasolina hereda de auto 
     * se debe poner tambien los metodos de la interface Auto
     */

    //enciende el auto
    public function encender(){
        if($this->estado){
            print "No puedes encender el auto dos veces <br>";
        }else{
           if($this->tanque<=0){
            print "Usted no puede encender el auto porque el tanque está vacío";
           }else{

               //cuando se enciende el auto el estado tiene que cambiarse a true
               $this->estado = true;
               print "Auto encendido <br>";
           }
        }
    }

    //apaga el auto
    public function apagar(){
        if($this->estado){
            //cuando se apaga el estado debe ser false
            $this->estado = false;
            print "Auto apagado";
        }else{
            print "El auto ya esta apagado";
        }
    }

    //vacía el tanque
    public function vaciarTanque(){
        $this->tanque = 0;
    }

    //llena el tanque con la cantidad deseada
    public function llenarTanque($cant){
        $this->tanque = $cant;
    }

    //usar el automovil poniendo los km recorridos
    public function usar($km){
        if ($this->estado){
            $reducir = $km / 3;
            $this->tanque = $this->tanque - $reducir;
            if ($this->tanque<=0){
                $this->estado =false;
            }
        }else{
            print "El auto está apagado y no se puede usar <br>";
        }
    }
}

$obj = new Deportivo();
$obj->estado();//el auto está apagado
//En los parametros ponemos la cantidad de litros que queremos llenar
$obj->llenarTanque(50);//El auto esta apagado y no se puede usar
$obj->encender();//Auto encendido
//En los parametros se pone la cantidad de km recorridos
$obj->usar(20);
$obj->estado();//El auto esta encendido y tiene 43.333333333333 de litros en el tanque


