<?php
	session_start();
	if(!$_SESSION["ingreso"]){

		header("location:index.php?ruta=ingreso");
		exit();
	}
?>
<?php
    $mostrar = New EppC();
    $mostrar -> PaginacionEppc();
?>

<!-- Container Table-->
<div id="container" class="table-responsive">
    <br>
	<h1 class="text-center">OBSERVACIÓN DE COMPORTAMIENTO Y USO ELEMENTOS DE PROTECCIÓN PERSONAL</h1>
    <br>
    <!-- Search form -->
    <div class="card-body">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <form method="get" class="form-inline justify-content-right md-form form-sm mt-0">
                        <div>
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input class="form-control form-control-sm ml-3" type="text" name="buscar" placeholder="Buscar" aria-label="Search">
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
                <div class="col-3" style="float: right;">
                    <form method="get" action="mostrarepp.php">
                        <select method="get" name="sell" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <table id="dtBasicExample" class="table table-striped" cellspacing="0" width="100%">
            <thead class="bg-primary text-white">
                <tr>
                    <th class="th-sm">Fecha</th>
                    <th class="th-sm">Nombres</th>
                    <th class="th-sm">Promedio</th>
                    <th class="th-sm">Realido Por</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $mostrar = New EppC();
                    $mostrar -> MostrarEppC();
                ?>
            </tbody>
            <tfoot class="bg-primary text-white">
                <tr>
                    <th>Fecha</th>
                    <th>Nombres</th>
                    <th>Promedio</th>
                    <th>Realizado Por</th>
                </tr>
            </tfoot>
        </table>
    </div>  
</div>
<!--
<script>
    //Call by DataTable
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });

    // Active button search
    $(document).ready(function () {
        $('#dtBasicExample').DataTable({
            "searching": true // false to disable search (or any other option)
        });
        $('.dataTables_length').addClass('bs-select');
    });

    $(document).ready(function() {
        $('#dtBasicExample').DataTable( {
            buttons:['searchBuilder'],
            dom: 'Bfrtip',
        });
    });
</script>End Container Table-->