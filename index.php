<?php


require_once "Controladores/RutasC.php";
require_once "Controladores/AdminC.php";
require_once "Controladores/EmpleadosC.php"; 
require_once "Controladores/RegistrarEppC.php";

require_once "Modelos/RutasM.php";
require_once "Modelos/AdminM.php";
require_once "Modelos/EmpleadosM.php";
require_once "Modelos/RegistrarEppM.php";

$rutas = New RutasControlador();
$rutas -> Plantilla();