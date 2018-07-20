<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="./css/app.css">
		<link rel="stylesheet" href="./css/bootstrap.min.css">

		<title>Calcular Bono de Alimentacion</title>
	</head>

	<body>
		<!-- NAVEGACION DE LA PAGINA! -->
		<div class="row">
			<div class="nav-side-menu-bg col-md-2">
				<div class="nav-side-menu">
					<div class="brand">Sistema Nomina UJAP</div>
					<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
					<div class="menu-list">
						<ul id="menu-content" class="menu-content collapse out">
							<li>
								<a class="nav-link" href="#">Nomina</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-dashboard fa-lg"></i> Dashboard
								</a>
							</li>
							<li data-toggle="collapse" data-target="#personal" class="collapsed">
								<a href="#">
									<i class="fa fa-users fa-lg"></i> Personal</a>
							</li>
							<ul class="sub-menu collapse" id="personal">
								<li>
									<a href="#">
										<i class="fas fa-user-plus"></i> Nuevo Personal</a>
								</li>
								<li>
									<a href="#">
										<i class="far fa-eye"></i> Ver todos</a>
								</li>
							</ul>
							<li data-toggle="collapse" data-target="#nomina" class="collapsed">
								<a href="#">
									<i class="fas fa-book-open"></i> Generar Nómina</a>
							</li>
							<ul class="sub-menu collapse" id="nomina">
								<li>
									<a href="#">Docente Contratado</a>
								</li>
								<li>
									<a href="#">Docente Ordinario</a>
								</li>
								<li>
									<a href="#">Administrativo</a>
								</li>
								<li>
									<a href="#">Obrero</a>
								</li>
							</ul>
							<li>
								<a class="nav-link" href="#">Calculo de Bono de Alimentacion</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-chart-line"></i> Escalafones </a>
							</li>
							<li>
								<a href="#">
									<i class="far fa-chart-bar"></i> Tasas
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-sign-out-alt"></i> Salir
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- FIN DE LA NAVEGACION -->
			<div class="col-md-10 minHeight">
				<nav class="" aria-label="breadcrumb">
					<ol class="breadcrumb ">
						<li class="breadcrumb-item">
							<a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Calculo de Bono de Alimentacion</li>
					</ol>
				</nav>	
				<div class="container">
					<h2 class="d-flex justify-content-center">Calculo de Bono de Alimentacion</h2>
					<br>
					<br>
					<h3>Configuracion Actual</h3>
					<div class="row">
						<div class="col-md-7">
							<?php
								include 'parametros.php';
							?>
						</div>
						<div class="col-md-5">
							<button type="button" data-toggle="modal" data-target="#pwAdmin" class="btn btn-outline-secondary">Actualizar Configuracion</button>
							<!-- Modal -->
							<div class="modal fade" id="pwAdmin" tabindex="-1" role="form" aria-labelledby="Contraseña para configuracion avanzada del sistema" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="pwAdminLabel">Ingrese Contraseña</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
                      <p class="statusMsg"></p>
											<form name="administrador" method="post" action="index.php">
												<div class="form-group">
													<label for="password-administrator" class="col-form-label">Contraseña</label>
													<input type="password" class="form-control" id="password-administrator">
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" onclick="submitPasswordForm()" class="btn btn-small btn-primary submitbtn">Ingresar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
						</div>
						<div class="col-md-5">
							<a role="button" href="./calcular.php" class="btn btn-outline-secondary">Calcular el bono de alimentacion</a>
						</div>
					</div>
					<br>
					<h3 class="d-flex justify-content-center">Tabla de trabajadores de la UJAP</h3>
					<br>
					<div class="col-md-10 offset-md-1">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead class="thead-dark">
									<tr>
										<th scope="col">Fecha de Calculo</th>
										<th scope="col">Cedula</th>
										<th scope="col">Nombre</th>
										<th scope="col">Apellido</th>
										<th scope="col">Cargo</th>
										<th scope="col">Jornada Laboral</th>
										<th scope="col">Bono de Alimentacion</th>
										<th scope="col">Horas no Laboradas</th>
									</tr>
								</thead>
								<tbody>
									<?php
										include 'tabla.php';
									?>
								</tbody>
							</table>
						</div>
					</div>
					<nav class="d-flex justify-content-center" aria-label="Navegacion de la tabla">
						<ul class="pagination">
							<li class="page-item disabled">
								<span class="page-link">Previous</span>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">1</a>
							</li>
							<li class="page-item ">
								<span class="page-link">
										2
								</span>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<script src="./js/jquery-3.3.1.slim.min.js"></script>
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
    <script src="./js/modal.js"></script>
	</body>
</html>