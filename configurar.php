<!DOCTYPE html>
<html lang="en">

        <?php 
          include 'layout.php';
        ?>
        <!-- FIN DE LA NAVEGACION -->
        <div class="col-md-10 minHeight">
          <nav class="" aria-label="breadcrumb">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item">
                <a href="layout.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item" aria-current="page">
                <a href="./index.php">
                    Calculo de bono de Alimentacion
                </a>    
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Configuracion de Parametros
              </li>
            </ol>
          </nav>
          <div class="container">
            <h2 class="d-flex justify-content-center">Configuracion del Calculo de Bono de Alimentacion</h2>
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
                <button type="button" onclick="location.href = 'index.php'" class="btn btn-outline-secondary">Volver a Inicio</button>        
              </div>
            </div>
            <h3 class="d-flex justify-content-center">Configurar Parametros</h3>
            <br>
            <div class="col-md-10">
              <div class="">
                <form>
                  <div class="form-group row">
                    <?php 
                      include 'modificar.php';
                    ?>
                  </div>
                  <br>
                  <div class="text-center">
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    <button type="submit" class="btn btn-outline-danger">Cancelar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="./js/jquery-3.3.1.slim.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
  </body>
</html>