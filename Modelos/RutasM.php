<?php

    class Modelo{

        static public function RutasModelo($rutas){

            if($rutas == "ingreso" || $rutas == "registrarEpp" || $rutas == "mostrarEpp" || $rutas == "registrarempleado" || $rutas == "empleados" || $rutas == "salir"){

                $pagina = "Vistas/Modulos/".$rutas.".php";
            }else if($rutas == "index"){

                $pagina = "Vistas/Modulos/ingreso.php";
            }else{

                $pagina= "Vistas/Modulos/ingreso.php";
            }

            return $pagina;
        }
    }
    

?>