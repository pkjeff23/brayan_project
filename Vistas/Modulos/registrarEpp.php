<?php
	session_start();
	if(!$_SESSION["ingreso"]){

		header("location:index.php?ruta=ingreso");
		exit();
	}
?>
<div id="container">
    <br>
	<h1 class="text-center">REGISTRAR COMPORTAMIENTO Y USO ELEMENTOS DE PROTECCIÓN PERSONAL</h1>
	<div class="d-flex justify-content-center form_container">
		<form id="frmajax" method="post" class="p-3 mb-2 bg-primary text-white">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="FechaR">Fecha:</label>
                    <input style="width: 100%;" class="form-control" name="FechaR"  value="<?php echo date("Y-m-d H:i:s");?>" readonly>
                </div>
                <!-- </div>
                Mostrar Operativos
                <div class="form-group">-->
                <div class="col-md-6 mb-3">
                    <label>Operativos:</label>
                        <select  type="text" class="form-control" placeholder="nombre" name="nombreR">						
                            <option value=""> Seleccione
                                <?php
                                    $operativos = New EppC();
                                    $operativos->MostraroperativosC();
                                ?>
                            </option>
                        </select>                      
                </div>    
            </div>
            
            <div class="row">
                <!--Mostrar Elementos-->
                <div class="col-sm-6">
                    <p>ELEMENTOS DE PROTECCIÓN PERSONAL</p>
                    <div class="input-group">
                        <?php
                            $elementos = New EppC();
                            $elementos->MostrarElementosC();
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Observaciones" id= "observacionesR" name="observacionesR" maxlength="250">
                        </div>
                        <div class="col-sm-6">
                            <input type="file" accept="image/*" capture="camera" name="fileR">
                        </div>
                    </div>
                </div>
                <!--Mostrar Equipos-->
                <div class="col-sm-6">
                    <p>EQUIPOS DE TRABAJO EN ALTURA</p>
                    <div class="input-group">
                        <?php
                            $equipos = New EppC();
                            $equipos->MostrarEquiposC();
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Observaciones"  id= "observacionesR" name="observacionesR" maxlength="250" >
                        </div>
                        <div class="col-sm-6">
                            <input type="file" accept="image/*" capture="camera" name="fileR">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <!--Mostrar PRocedimientos-->
                    <p>PROCEDIMIENTOS</p>
                    <div class="input-group">
                        <?php
                            $equipos = New EppC();
                            $equipos->MostrarOtrosC();
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Observaciones"  id= "observacionesR" name="observacionesR" maxlength="250" >
                        </div>
                        <div class="col-sm-6">
                            <input type="file" accept="image/*" capture="camera" name="fileR" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!--Mostrar Bioseguridad-->
                    <p>PROTOCOLO BIOSEGURIDAD</p>
                    <div class="input-group">
                        <?php
                            $equipos = New EppC();
                            $equipos->MostrarBioseguridadC();
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Observaciones" id= "observacionesR" name="observacionesR" maxlength="250" >
                        </div>
                        <div class="col-sm-6">
                            <input type="file" accept="image/*" capture="camera" name="fileR" >
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div style="display: flex; justify-content: center;">
                <div style="width: 800px;">
                    <input type="submit" id="btnguardar" value="Registrar" class="btn btn-warning btn-lg btn-block btn-guardar">
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    $registrar = New EppC();
    $registrar->RegistrarEppC();
?>


<!--<script>
    alert("si lo coje");
</script>-->