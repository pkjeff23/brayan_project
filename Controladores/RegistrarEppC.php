<?php

    class EppC{

        //Registrar Informacion respecto al EPP
        public function RegistrarEppC(){

            if(isset($_POST["nombreR"])){
                
                $fechaG = date("Y-m-d H:i:s"); //Traer hora y fecha para guardar en el campo fecha Guardado
                
                $tabla = "ct_Elementos";
                
                $tablaC = "cpt_epp";

                $Melementos = EppM::MostrarElementosM($tabla);
                ///Aca recupero la informacion del AJAX
                /*$fecha = $_POST["FechaR"]; 
                $nombre = $_POST["nombreR"]; 
                $elemento = $_POST["elementoR"]; 
                $realiza = $_POST["RelementoR"]; 
                $observaciones = $_POST["observacionesR"]; */

                foreach ($Melementos as $e => $key) {
                    foreach ($key as $tmp => $value) {
                        //Informacion que le voy a enviar al modelo.
                        $datosC = array("fechaCreacion"=>$_POST["FechaR"], "nombres"=> $_POST["nombreR"], 
                                         "fechaGuardado"=>$fechaG, "descripcion"=>$_POST["elementoR"], 
                    "realiza"=>$_POST["RelementoR"], "observaciones"=>$_POST["observacionesR"]);   
                    }
                    //return 1;
                    //print_r(json_encode($datosC));
                    //echo'<br>';
                    $respuesta = EppM::RegistrarEppM($tablaC, $datosC);
                }
                
                $Mequipos = EppM::MostrarEquiposM($tabla);

                foreach ($Mequipos as $e => $key) {
                    foreach ($key as $tmp => $value) {
                        $datosC = array("fechaCreacion"=>$_POST["FechaR"], "nombres"=>$_POST["nombreR"], 
                                         "fechaGuardado"=>$fechaG, "descripcion"=>$value, 
                                        "realiza"=>$_POST["RelementoR"], "observaciones"=>$_POST["observacionesR"]);   
                    }
                    $respuesta = EppM::RegistrarEppM($tablaC, $datosC);
                }

                $Mbio = EppM::MostrarBioseguridadM($tabla);

                foreach ($Mbio as $e => $key) {
                    foreach ($key as $tmp => $value) {
                        $datosC = array("fechaCreacion"=>$_POST["FechaR"], "nombres"=>$_POST["nombreR"], 
                                         "fechaGuardado"=>$fechaG, "descripcion"=>$value, 
                                        "realiza"=>$_POST["RelementoR"], "observaciones"=>$_POST["observacionesR"]);   
                    }
                    $respuesta = EppM::RegistrarEppM($tablaC, $datosC);
                }

                $Mprocedure = EppM::MostrarOtrosM($tabla);

                foreach ($Mprocedure as $e => $key) {
                    foreach ($key as $tmp => $value) {
                        $datosC = array("fechaCreacion"=>$_POST["FechaR"], "nombres"=>$_POST["nombreR"], 
                                         "fechaGuardado"=>$fechaG, "descripcion"=>$value, 
                                        "realiza"=>$_POST["RelementoR"], "observaciones"=>$_POST["observacionesR"]);   
                    }
                    $respuesta = EppM::RegistrarEppM($tablaC, $datosC);
                }
            }
        }

        //Mostrar EPP 
        public function MostrarEppC(){

            //print_r($_GET["dataTable_length"]);
            $tablaBD = 'cpt_epp';

            $respuesta = EppM::MostrarEppM($tablaBD);

            foreach ($respuesta as $key => $value) {
                echo '
                    <tr>
                        <td>'.$value["Fecha"].'</td>
                        <td>'.$value["nombres"].'</td>
                        <td>'.$value["Promedio"].'</td>
                        <td>'.$value["nombres"].'</td>
                    </tr>';
            }

        }

        //Paginacion de Mostrar EPP
        public function PaginacionEppc(){

            $respuesta = EppM::PaginacionEppM();            
        }


        //Mostrar Elementos tabla ct_elementos
        public function MostrarElementosC(){
            
            $tablaBD = "ct_opciones";
            $tabla = "ct_Elementos";
            
           $option = EppM::OptionsM($tablaBD); 

            $respuesta = EppM::MostrarElementosM($tabla);

            foreach ($respuesta as $key => $value) {
                
                echo '<input class="form-control" name="elementoR" style="width: 80%;" value="'.$value["NElemento"].'" readonly><br><br>
                    <select class="form-control" style="width: 20%;"  placeholder="Proyecto" id="RelementoR" name="RelementoR">
                        <option value="0">NO</option>
                        <option value="5">SI</option>
                        <option value=" ">N/A</option>
                    </select>';
            }
        }
    
        //Mostrar Options
        public function OptionsC(){

            $tablaBD = "ct_opciones";

            $respuesta = EppM::OptionsM($tablaBD);

            foreach ($respuesta as $key => $value) {
                echo '<option>'.$value["option"].'</option>';
            }
            
        }

        //Mostrar Equipos tabla ct_equipos
        public function MostrarEquiposC(){

            $tabla = "ct_equipos";

            $respuesta = EppM::MostrarEquiposM($tabla);

            foreach ($respuesta as $key => $value) {

                echo '<input class="form-control" name="equipoR" style="width: 80%;" value="'.$value["NEquipo"].'" readonly><br><br>
                    <select class="form-control" style="width: 10%;" id="RelementoR" name="RelementoR">						
                        <option value="0">No</option>
                        <option value="5">Si</option>
                        <option value="">N/A</option>
                    </select>';
            }
        }


        //Mostrar Bioseguridad tabla ct_biosegurirdad
        public function MostrarBioseguridadC(){

            $tabla = "ct_bioseguridad";

            $respuesta = EppM::MostrarBioseguridadM($tabla);

            foreach ($respuesta as $key => $value) {

                echo '
                    <input class="form-control" name="elementoR" style="width: 80%;" value="'.$value["NBioseguridad"].'" readonly><br><br>
                    <select class="form-control" style="width: 20%;"  placeholder="Proyecto" id="RelementoR" name="RelementoR">						
                        <option value="0">No</option>
                        <option value="5">Si</option>
                        <option value="">N/A</option>
                    </select>';
            }
        }

        //Mostrar Demas Elementos y Equipos tabla ct_bioseguridad
        public function MostrarOtrosC(){

            $tabla = "ct_bioseguridad";

            $respuesta = EppM::MostrarOtrosM($tabla);

            foreach ($respuesta as $key => $value) {

                echo '<input class="form-control" name="elementoR" style="width: 80%;" value="'.$value["NOtros"].'" readonly><br><br>
                    <select class="form-control" style="width: 20%;" id="RelementoR" name="RelementoR">
                        <option value="0">No</option>
                        <option value="5">Si</option>
                        <option value="">N/A</option>
                    </select>';
            }
        }

        //Mostrar empleados para el select del registrar EPP
        public function MostraroperativosC(){

            $tablaBD = "ct_prsnalop";

            $respuesta = EppM::MostraroperativosM($tablaBD); 
            //print_r($respuesta);//Mostrar Resultados

            foreach ($respuesta as $key => $value) {
                echo '<option> '.$value["Nombres"].' </option>';
            }
        }
    } 