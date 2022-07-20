<?php

/***
 * Métodos y Atributos estaticos: 
 * Un metodo estatico pertenece a la clase pero no puede acceder a los atributos de una 
 * instancia.
 * Un metodo estatico se puede llamar sin tener que crear un objeto de dicha clase.
 * 
 * Una propiedad declarada como static no puede ser accedida con un objeto de clase instanciado 
 * aunque 
 * un metodo estatico si lo puede hacer
 * 
 * IMPORTANTE
 * 
 * Un metodo estático no puede acceder a los atributos de la clase
 * 
 * Indicamos primero el nombre de la clase, luego el operador :: y por ultimo indicamos el 
 * nombre de método estático a llamar.
 * 
 * Las propiedades estáticas no pueden ser accedidas a través del objeto utilizando el operador 
 * flecha (->)
 */

class Pagina{

    //Atributos
    public $nombre = 'Sistema de Inventairo';
    public static $url = 'www.SistemaInventario.com';

    //Métodos
    public function bienvenida(){

        //Se puede acceder a un atributo static usando el operador ::
        echo "Binvenidos a <b> $this->nombre </b> La pagina es:" . Pagina::$url . "<br>";
    }
    //Los metodos estaticos no pueden acceder a los atributos de la clase
    public static function bienvenida2(){

        //Se puede acceder a los atributos estaticos con self::
        echo "Binvenidos a" . self::$url;
    }
}

class Web extends Pagina {

}

$pagina = new Pagina();
$pagina->bienvenida();

//Se puede llamar una clase estatica sin nececidad de instanciar un objeto
Pagina::bienvenida2();
//Los metodos estaticos tambien pueden ser heredados 
Web::bienvenida2();