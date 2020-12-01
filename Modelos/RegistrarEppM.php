<?php

    require_once "Conexion.php";

    class EppM extends ConexionBD{

        //Registrar Datos Epp
        static public function RegistrarEppM($tablaC, $datosC){

            $pdo = ConexionBD::cBD()->prepare("INSERT 
                                                INTO $tablaC (fechaCreacion, nombres, usuario, FechaGuardado, descripcion, realiza, observaciones) 
                                                VALUES(:fechaCreacion, :nombres, :usuario, :fechaGuardado, :descripcion, :realiza, :observaciones)");

            $pdo -> bindParam(":fechaCreacion", $datosC["fechaCreacion"], PDO::PARAM_STR);
            $pdo -> bindParam(":nombres", $datosC["nombres"], PDO::PARAM_STR);
            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> bindParam(":fechaGuardado", $datosC["fechaGuardado"], PDO::PARAM_STR);
            $pdo -> bindParam(":descripcion", $datosC["descripcion"], PDO::PARAM_STR);
            $pdo -> bindParam(":realiza", $datosC["realiza"], PDO::PARAM_STR);
            $pdo -> bindParam(":observaciones", $datosC["observaciones"], PDO::PARAM_STR);
            
            if($pdo->execute()){
                
                return 1;
            }else{

                return 0;
            }
            
            $pdo->close();
        }

        //Paginacion Mostrar Epp
        public function PaginacionEppM(){

            $pdo = ConexionBD::cBD()->Prepare("SELECT COUNT(*)
                                                FROM (
                                                    SELECT CAST(fechaCreacion AS DATE) AS Fecha, nombres, 
                                                        ROUND(sum(realiza)/count(realiza), 1) AS Promedio, usuario
                                                    FROM cpt_epp
                                                    GROUP BY fechaCreacion, nombres, usuario
                                                )AS tmp");
            $pdo->execute();

            return $pdo->fetch();

            $pdo->close();
        }

        //Mostrar EPP
        static public function MostrarEppM($tablaBD){
           // print_r($_POST["dataTable_length"]);
            $pdo = ConexionBD::cBD()->prepare("SELECT CAST(T0.fechaCreacion AS DATE) AS Fecha, t2.fecha, T0.nombres, ROUND(sum(T0.realiza)/count(T0.realiza), 1) AS Promedio, t2.Aprobo AS Aprobo, T1.nombres AS nombresU
            FROM cpt_epp AS T0 
            INNER JOIN ct_usuarios AS T1 
                ON T1.usuario = T0.usuario 
            LEFT JOIN (
                SELECT CAST(T0.fechaCreacion AS DATE) AS fecha, T0.nombres, count(T0.realiza) AS Aprobo, T1. nombres AS nombresU 
                FROM cpt_epp AS T0
                INNER JOIN ct_usuarios AS T1 
                    ON T1.usuario = T0.usuario 
                GROUP BY T0.fechaCreacion, T0.nombres, T1.nombres
            ) AS T2 ON T2.fecha = CAST(T0.fechaCreacion AS DATE)
                AND T2.nombres = T0.nombres
                AND T2.nombresU = T1.nombres
            WHERE realiza <> ''
            GROUP BY T0.fechaCreacion, T0.nombres, T1.nombres
            ");

            $pdo-> execute();
            //print_r($pdo); //Imprimir Consulta;
            return $pdo->fetchAll();

            $pdo->close();
        }

        //Mostrar Options
        static public function OptionsM($tablaBD){

            $pdo = ConexionBD::cBD()->prepare("SELECT option, valor FROM $tablaBD");

            $pdo-> execute();

            return $pdo->fetchAll();

            $pdo->close();
        }

        //Mostrar Elementos ct_elementos
        static public function MostrarElementosM($tabla){

            $pdo = ConexionBD::cBD()->prepare("SELECT idelemento, NElemento FROM ct_elementos");

            $pdo->execute();

            return $pdo->fetchAll();

            $pdo->close();
        }

        //Mostrar Equipos
        static public function MostrarEquiposM($tabla){

            $pdo = ConexionBD::cBD()->prepare("SELECT idequipo, NEquipo FROM ct_equipos");

            $pdo->execute();

            return $pdo->fetchAll();

            $pdo->close();
        }

        //Mostrar Bioseguridad
        static public function MostrarBioseguridadM($tabla){

            $pdo = ConexionBD::cBD()->prepare("SELECT idbioseg, NBioseguridad FROM ct_bioseguridad");

            $pdo->execute();

            return $pdo->fetchAll();

            $pdo->close();
        }

        //Mostrar Procedimientos
        static public function MostrarOtrosM($tabla){

            $pdo = ConexionBD::cBD()->prepare("SELECT idotroE, NOtros FROM ct_otroselementos");

            $pdo->execute();

            return $pdo->fetchAll();

            $pdo->close();
        }


        //Mostrar empleados para el select del registrar EPP
        static public function MostraroperativosM($tabla){

            $pdo = ConexionBD::cBD()->prepare("SELECT T0.idpo AS id, CONCAT(T0.Nombres, ' ',T0.Apelllidos) AS Nombres FROM `ct_prsnalop` AS T0");
            //print_r($pdo); //Ejecutar la consulta
            $pdo-> execute();
            
            return $pdo->fetchAll();

            $pdo->close();
        }
        
    }
    