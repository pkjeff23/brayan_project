<?php
	session_start();
	session_destroy();	
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	swal.fire({
		icon: 'warning',
		title: "Haz cerrado sesión!",
		}).then(function() {
			window.location="index.php?ruta=ingreso";
		});
</script>
