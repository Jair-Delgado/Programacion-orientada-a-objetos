<?php

require_once "Config/Autoload.php";
Config\Autoload::run();
new Models\Estudiante();

$est = new Models\Estudiante();
$est->set("id", 1);
$datos = $est->view();
print $datos['nombre'];

