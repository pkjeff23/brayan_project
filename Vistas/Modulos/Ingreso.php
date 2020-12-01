<div class="container">
<!-- Outer Row -->
<div class="row justify-content-center">
	<div class="col-xl-10 col-lg-12 col-md-9">
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->	
				<div class="row">
					<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
					<div class="col-lg-6">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
							</div>
							<form  method="post" class="user">
								<div class="form-group">
									<input type="text" class="form-control form-control-user" placeholder="Ingrese Usuario" name="usuarioI" required>
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-user" name="claveI" placeholder="Ingrese Contraseña" required>
								</div>
								<!--<a href="index.html" class="btn btn-primary btn-user btn-block">
									Login
								</a>--><input type="submit" class="btn btn-primary btn-user btn-block" value="Ingresar">	
								<hr>
								<a href="#" class="btn btn-google btn-user btn-block">
									<i class="fab fa-google fa-fw"></i> Login with Google
								</a>
								<a href="#" class="btn btn-facebook btn-user btn-block">
									<i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
								</a>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
</div>
<?php
	$ingreso = New AdminC();
	$ingreso->IngresoC();
?>