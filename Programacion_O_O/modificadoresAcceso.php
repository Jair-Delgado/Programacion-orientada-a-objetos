<?php

/***
 * Modificadores de acceso son simples propiedades que podemos añadirles a
 * nuestros métodos y atributos de nuestra clase, nos ayudaran con los
 * accesos y la extraccion de métodos o atributos.
 */

/***
* Public: para metodos y atributos accesibles para quien sea
* 
* Private: solo puede ser llamado desde otro metodo de la clase
* no se puede llamar a un metodo privado desde donde definimos un objeto, ni de una clase heredada
* 
* Protected: Un atributo o método protected puede ser accedido desde la  clase, por todas 
* sus subclases pero no por los objetos que definimos  de de dichas clases 
*/


class  Facebook {

    //Atributos
    public $nombre;
    public $edad;
    private $pass; //Contraseña
    
    //Metodos
    public function __construct($nombre, $edad, $pass){
        $this->$nombre = $nombre;
        $this->edad = $edad;
        $this->pass = $pass;
    }

    //funcion para ver el nombre edad y contraseña
    public function verInformacion (){

        echo "Nombre: $this->nombre <br>";
        echo "Edad: $this->edad <br>";
        //se accede al metodo privado y en el parametro cambia la contraseña 
        self:: cambiarPass('54321');
        echo "Password: $this->pass ";
    }

    private function cambiarPass($pass){
        $this->pass = $pass;
    }
}

$facebook = new Facebook("Jair Delgado", 22, "1234");
$facebook ->verInformacion(); //Jair Delgado, 22, 54321
