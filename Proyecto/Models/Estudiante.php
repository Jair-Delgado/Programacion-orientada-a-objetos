<?php namespace Models;

class Estudiante {

    private $id;
    private $nombre;
    private $edad;
    private $promedio;
    private $imagen;
    private $id_seccion;

    public function __construct()
    {
         $this->con = new Conexion();
    }

    public function set($atributo, $contenido)
    {
        $this->$atributo->$contenido;
    }
    public function get($atributo)
    {
        $this->$atributo;
    }

    public function listar()
    {
        $sql ="SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes
        INNER JOIN secciones t2 ON t1.id_seccion = tu.id";
        $this->con->consultaRetorno($sql);
        return $datos;
    }
    
    public function add()
    {
        $sql = "INSERT INTO estudiantes VALUES(null,'{$this->nombre}', '{$this->edad}', '{$this->promedio}', '{$this->imagen}', '{$this->id_seccion}',)";

        $this->con->consultaSimple($sql);
    }

    public function delete()
    {
        $sql = "DELETE FROM estudiantes WHERE id='{$this->id}'";
        $this->con->consultaSimple($sql);
    }

    public function edir()
    {
        $sql = "UPDATE FROM estudiantes SET nombre='{$this->nombre}', edad='{$this->edad}', promedio='{$this->promedio}', id_seccion='{$this->id_seccion}'";
        $this->consultaSimple($sql);
    }

    public function view()
    {
        $sql ="SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN
         secciones t2 ON t1.id_seccion = t2.id WHERE id.t1 = '{$this->id}'";
         $datos = $this->con->consultaRetorno("sql");
         $row = pg_fetch_row($datos);
         return $row;
        //return $datos;
    }
    
}