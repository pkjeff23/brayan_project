<?php

    require_once "Conexion.php";

    class EmpleadosM extends ConexionBD{

        //Registrar Empleado
        static public function RegistrarEmpleadoM(){

            $pdo = ConexionBD::cBD()->Prepare("");

            
        }

        //Mostrar Empleados para la tabla de Empleados
        static public function MostrarEmpleadosM($tabla){

            $pdo = ConexionBD::cBD()->prepare("SELECT T0.idpo AS id, T0.Nombres, T0.Apelllidos, T1.nombres AS Cargo FROM `ct_prsnalop` AS T0 INNER JOIN ct_cargos AS T1 ON T1.idpo = T0.idcargo");
            //print_r($pdo); //Ejecutar la consulta
            $pdo-> execute();
            
            return $pdo->fetchAll();

            $pdo->close();
        }

        //Mostrar cargos
        static public function MostrarCargosM($tablaBD){

            $pdo = ConexionBD::cBD()->prepare("SELECT nombres FROM $tablaBD");

            $pdo-> execute();

            return $pdo->fetchAll();

            $pdo->close();
        }
    }