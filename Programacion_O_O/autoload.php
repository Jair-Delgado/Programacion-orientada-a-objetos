<?php

//Funcion para cargar clases de otro archivo 
function autoload($clase){
    //se pone la direccion de la carpeta donde estan almacenadas las clases
    include "Clases/" . $clase . ".php";
}
//funcion nativa de php para cargar el autoload
spl_autoload_register('autoload');

//llamamos al metodo de la clase de la carpeta Clases en el archivo personas.php 
//la clase debe ser static para poder invocarla con este método
persona::mostrar("ya voy entendiendo php");//la persona dice: ya voy entendiendo php
//metodo de la clase auto de la carpeta Clases del archivo auto.php
auto::ver("brrrr!");//El auto dice: brrr!
