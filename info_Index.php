

<?php 
  echo '<div class="col-md-5">
          <button type="button" data-toggle="modal" data-target="#pwAdmin" class="btn btn-outline-secondary">
            Actualizar Configuracion
          </button>

          
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
                  <form name="administrador" method="post" action="index.php">
                    <p id="statusMsg"></p>
                    <div class="form-group">
                      <label for="password-administrator" class="col-form-label">Contraseña</label>
                      <input type="password" class="form-control" id="password-administrator">
                    </div>
                  </form>
                </div>

                
                <div class="modal-footer">
                  <button type="button" name="login_button" id="login_button" class="btn btn-small btn-primary submitbtn">
                    Ingresar
                  </button>
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
      <h3 class="d-flex justify-content-center">Escoge la Tabla a ver</h3>
      <br>
      <div class="row">
        <div class="col-md-6">
          <a role="button" href="./vertabla1.php" class="btn btn-block btn-outline-primary">
            Trabajadores Administrativos/obreros
          </a>
        </div>
        <div class="col-md-6">
          <a role="button" href="./verTabla2.php" class="btn btn-block btn-outline-primary">
            Profesores
          </a>
        </div>
      </div>';
  ?>