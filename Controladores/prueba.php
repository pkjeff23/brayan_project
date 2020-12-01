<?php
if(isset($_POST['insertar'])){
///////////// Informacion enviada por el formulario /////////////
$fecha = $_POST["FechaR"]; 
$nombre = $_POST["nombreR"]; 
$elemento = $_POST["elementoR"]; 
$realiza = $_POST["RelementoR"]; 
$observaciones = $_POST["observacionesR"];
///////// Fin informacion enviada por el formulario ///

////////////// Insertar a la tabla la informacion generada /////////
$sql="insert into Cpt_epp(fechaCreacion,nombres) values(:fecha,:nombre,:elemento,:realiza,:observaciones)";

$sql = $connect->prepare($sql);

$sql->bindParam(':fecha',$fecha,PDO::PARAM_STR, 25);
$sql->bindParam(':nombre',$nombre,PDO::PARAM_STR, 25);
$sql->bindParam(':realiza',$realiza,PDO::PARAM_STR,25);
$sql->bindParam(':elemento',$elemento,PDO::PARAM_STR);
$sql->bindParam(':observaciones',$observaciones,PDO::PARAM_STR,25);

$sql->execute();

$lastInsertId = $connect->lastInsertId();
if($lastInsertId>0){

echo "<div class='content alert alert-primary' > Gracias .. Tu Nombre es : $nombre </div>";
}
else{
echo "<div class='content alert alert-danger'> No se pueden agregar datos, comuníquese con el administrador </div>";

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>