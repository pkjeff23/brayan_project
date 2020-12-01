<?php
	session_start();
	if(!$_SESSION["ingreso"]){

		header("location:index.php?ruta=ingreso");
		exit();
	}
?>
<div id="container">
    <br>
	<h1 class="text-center">REGISTRAR PERSONAL OPERATIVO</h1>
	<div class="d-flex justify-content-center form_container">
		<form method="post" action="" class="p-3 mb-2 bg-primary text-white">
			<div class="form-group">
				<label for="FechaO">Fecha:</label>
				<input   class="form-control" name="FechaO"  value="<?php echo date("Y-m-d");?>" readonly>
			</div>
			<div class="form-group">
				<label for="cedulaR" >Nombres:</label>
				<input type="text" class="form-control" placeholder="Ingrese Nombres Completos" name="nombreO" pattern="[az-Az]" title="Digite Solo letras" required>
			</div>
			<div class="form-group">
				<label for="cedulaR" >Apellidos:</label>
				<input type="text" class="form-control" placeholder="Ingrese Apellidos Completos" name="apellidoO" pattern="[az-Az]" title="Digite Solo letras" required>
			</div>
			<div class="form-group">
				<p>Cargo:
					<select type="text" class="form-control" name="cargoO">						
						<option value="" >Seleccione:
						<?php
							$proyecto = New EmpleadosC();
							$proyecto->MostrarCargosC();
						?></option>
					</select>
				</p>
			</div>

			<input type="submit" value="Registrar">
		</form>
	</div>
</div>