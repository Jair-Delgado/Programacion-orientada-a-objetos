<?php namespace Models;

class Conexion
{
    //
    
    /*public $datos = array
    (
        "host"=>"localhost", 
        "port"=>"5432", 
        "user"=>"postgres", 
        "password"=>"1234", 
        "dbname"=>"proyecto"
    );*/
    
    private $con;
    public function __construct()
    {
        $this->con = \pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=proyecto");

        //Verificar si se hizo la conexion
        
        /*if( $this->con){

            echo "Exito";
           }else{
    
            echo "error". pg_last_error();
    
           }*/
      
    }

  

   public function consultaSimple($sql)
    {
        $this->con->query($sql);
    }

    public function consultaRetorno($sql)
    {
        $datos = $this->con->query($sql);
        return $datos;
    }


    public function realizarConsulta()
    {
        $query = "SELECT * FROM estudiantes";
        $this->result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

        echo  $this->result;
        
    }
}

$conexion = new Conexion();
//$conexion->consultaSimple();
//$conexion->dbconexion();
