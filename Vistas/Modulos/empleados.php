<?php
	session_start();
	if(!$_SESSION["ingreso"]){

		header("location:index.php?ruta=ingreso");
		exit();
	}
?>	
	<br>
	<h1>Operarios</h1>
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<!--<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>-->
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table id="table_id" class="display" width="100%" cellspacing="0"><!--<table class="table table-bordered" id="dataTable" >-->
					<thead class="thead">
						<tr>
							<th>#</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Cargo</th>
							<!--<th>Activo</th>-->
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>#</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Cargo</th>
							<!--<th>Activo</th>-->
						</tr>
					</tfoot>

					<tbody>
						<?php
							$mostrar = New EmpleadosC();
							$mostrar-> MostrarEmpleadosC();
						?>
					</tbody>
			</div>
		</div>
	</table>
