<!DOCTYPE html>
<html lang="en">

      <!-- NAVEGACION.PHP tiene el head con el css y javascript ademas de el inicio del body-->
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
						<?php 
              include 'info_Index.php';
            ?>
				</div>
      </div>
    </div>		
		<script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/modal.js"></script>
    <script src="./js/paginacion.js"></script>
    <script src="./js/busqueda.js"></script>
	</body>
</html>