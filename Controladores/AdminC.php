<?php

class AdminC{

    public function IngresoC(){

        if(isset($_POST["usuarioI"])){

            $datosC = array("usuario"=>$_POST["usuarioI"], "clavetmp"=>$_POST["claveI"]);
            
            $tablaBD = "ct_usuarios";

            $respuesta = AdminM::IngresoM($datosC, $tablaBD);
            //print_r($respuesta);//Mostrar Datos
            if($respuesta["usuario"] == $_POST["usuarioI"] && $respuesta["clavetmp"] == $_POST["claveI"]){

                session_start();
                //print_r( $respuesta["idrol"]);
                $user = $_POST["usuarioI"];
                $rol = $respuesta["idrol"];
                
                $_SESSION["ingreso"] = true;
                $_SESSION["usuario"] = $user;
                $_SESSION["rol"] = $rol;
                //print_r($_SESSION["rol"]);
                echo 'Ingreso';
                header("location:index.php?ruta=registrarEpp");
            }else{
                echo 'Error al ingresar';
            }
        }
    }
}