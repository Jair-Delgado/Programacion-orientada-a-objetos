<?php namespace Models;

class Seccion
{
    private $id;
    private $nombre;
    private $con;

    public function __construct()
    {
        $this->con = new Conexion();
    }

    public function set ($atributo, $contenido)
    {
        $this->atributo = $contenido;
    }
    public function get ($atributo)
    {
        return $this->atributo;
    }

    public function listar()
    {
        $sql = "SELECT * FROM secciones";
        $datos = $this->con->consultaRetorno($sql);
    }

    public function add()
    {
        $sql = "INSERT INTO secciones VALUES (null, '{$this->nombre}')";
        $this->con->consultaSimple($sql);

    }

    public function delete()
    {
        $sql = "DELETE FROM secciones WHERE id = '{$this->id}'";
    }
    public function edit()
    {
        $sql = "UPDATE FROM secciones SET nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
        $this->con->consultaSimple($sql);
    }

    public function view()
    {
        $sql = "SELECT * FROM secciones WHERE id= '{$this->id}'";
        $datos = $this->con->consultaRetorno($datos);
        $row = pg_fetch_row($datos);
    }

}
