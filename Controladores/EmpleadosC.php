<?php

    class EmpleadosC{

        //Mostrar Empleados para la tabla de Empleados
        public function MostrarEmpleadosC(){

            $tablaBD = "ct_prsnalop";

            $respuesta = EmpleadosM::MostrarEmpleadosM($tablaBD); 
            //print_r($respuesta);//Mostrar Resultados

            foreach ($respuesta as $key => $value) {
                echo '<tr>
                    <td>'.$value["id"].'</td>
                    <td>'.$value["Nombres"].'</td>
                    <td>'.$value["Apelllidos"].'</td>
                    <td>'.$value["Cargo"].'</td>
                </tr>';
            }

        }

        //Mostrar Cargos
        public function MostrarCargosC(){

            $tablaBD = "ct_cargos";

            $respuesta = EmpleadosM::MostrarCargosM($tablaBD);

            foreach ($respuesta as $key => $value) {
                echo '<option>'.$value["nombres"].'</option>';
            }
        }
    }