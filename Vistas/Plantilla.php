<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>

    <link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">
    
    <!--DataTable-->
    <link rel="stylesheet" type="text/css" href="Vistas/DataTables/datatables.min.css"/>

    <!-- Plantilla lte2-->
    <link href="Vistas/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="Vistas/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="Vistas/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body>

    <?php
        include "Modulos/menu.php"
    ?>

<section>

    <?php
        $rutas = new RutasControlador();
        $rutas -> Rutas();
    ?>

</section>
    <!--DataTable-->
    <script type="text/javascript" src="Vistas/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="Vistas/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="Vistas/js/dataTables.searchBuilder.min.js"></script>
    <script type="text/javascript" src="Vistas/js/dataTables.buttons.min.js"></script>

    <!--Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>

    <script type="text/javascript" src="Vistas/js/funciones.js"></script>

</body>

</html>