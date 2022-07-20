<?php

/***
 * El metodo constructor y destructor son muy usados en la POO
 * 
 * __construct: al definir un objeto con la clase el metodo se ejecuta al comienzo
 * automaticamente. 
 * Normas: Debe ser publico y no puede retornar nada
 * 
 * __destruct: tambien se ejecuta automaticamente pero al final de la clase
 * Normas: Debe ser publico y no puede retornar nada
 */

    class Loteria
    {

        //Atributos
        public $numero; //numero que hay que lograr obtener
        public $intentos;//los intentos que le vamos a dar al usuario
        public $resultado = false; // se inicia en false para luego verificarlo si es true

        //Metodos
        //esete metodo se ejecuta siempre primero
        public function __construct($numero, $intentos)
        {
            //llamamos a los atributos
            $this->numero = $numero;
            $this->intentos = $intentos;
        }

        public function sortear()
        {
            //va a generar mediante rand() numeros aleatorios desde la mitad y el doble del numero a adivinar
            $minimo = $this->numero / 2;
            $maximo = $this->numero * 2;
            //rand() nos genera numeros aleatorios
            $int = rand($minimo, $maximo);

            for($i = 0; $i < $this->intentos; $i++);{
                //llamamos al metodo intentos
                self:: intentos($int);
            }
        }

        public function intentos($int)
        {
            //Si se adivino el numero el resultado es true y va a mostrar el numero igual
            if ($int == $this->numero){
                echo "<b> $int == $this->numero </b> <br>";
                $this->resultado =true;
            }else{
                echo "$int != $this->numero <br>";//sino nos va a decir que no es igual 
            }
        }
        //este metodo se va a ejecutar al final
        public function __destruct()
        {
            //Si resultado es true or false va a mostrar los respectivos mensajes
            if($this->resultado){
                echo "Felicidades, has acertado en $this->intentos intentos";
            }else{

                echo "Lo siento, has perdido en $this->intentos intentos";
            }
        }

    }

    /**
     * Iniciamos el objeto
     * Cuando llamamos a la clase el constructor nos pide los parametros y debemos darselos o
     * dara error
     */

    $loteria = new Loteria(10,7);
    $loteria->sortear();