<?php

require_once "Conexion.php";

class AdminM extends ConexionBD{

    static public function IngresoM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clavetmp, claveingreso, idrol FROM $tablaBD WHERE usuario = :usuario");
        
        $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
        
        $pdo-> execute();
        //print_r($pdo);//Mostrar Consulta
        return $pdo->fetch();
        
        $pdo->close();
    }
}