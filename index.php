<!DOCTYPE html>
<html lang="en">

      <!-- VAVEGACION.PHP tiene el head con el css y javascript ademas de el inicio del body-->
      <?php
        include 'layout.php';
      ?>
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
                      <button type="button" name="login_button" id="login_button" class="btn btn-small btn-primary submitbtn">Ingresar</button>
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
					<h3 class="d-flex justify-content-center">Tabla de Profesores de la UJAP</h3>
					<br>
					<div class="row">
					<?php
						include 'tabla.php';
					?>		
					</div>
				</div>
      </div>
    </div>		
		<script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/modal.js"></script>
    <!--<script src="./js/paginacion.js"></script>-->
    <script src="./js/busqueda.js"></script>
	</body>
</html>