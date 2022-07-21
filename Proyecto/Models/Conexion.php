<?php namespace Models;

class Conexion
{
    public $datos = array
    (
        "host"=>"localhost", 
        "port"=>"5432", 
        "user"=>"postgres", 
        "password"=>"1234", 
        "dbname"=>"proyecto"
    );

    public $con;

    public function __construct()
    {
        $this->con =  pg_connect($this->datos['host'], $this->datos['port'], $this->datos['user'], $this->datos['password'], $this->datos['dbname']);
      
        if( $this->con){

            echo "Exito";
           }else{
    
            echo "error". pg_last_error();
    
           }
    }

   /* public function dbconexion()
    {
        
        //$this->con = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=proyecto");

        //Verificar si se hizo la conexion
        
        if( $this->con){

            echo "Exito";
           }else{
    
            echo "error". pg_last_error();
    
           }
           
    }

   /* public function consultaSimple($sql)
    {
        $this->con->query($sql);
    }

    public function consultaRetorno($sql)
    {

    }*/

}

$conexion = new Conexion();
//$conexion->__construct();
//$conexion->dbconexion();
