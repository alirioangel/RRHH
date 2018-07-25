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
            <h2 class="d-flex justify-content-center">Configuracion de Parametros de Calculo</h2>
            <br>
            <br>
            <div class="row">
              <div class="col-md-10 offset-md-1">
                  <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" 
                           id="nav-function-tab" 
                           data-toggle="tab" 
                           href="#nav-function" 
                           role="tab" 
                           aria-controls="nav-function" 
                           aria-selected="true">
                        
                            Formula

                        </a>
                        <a class="nav-item nav-link" 
                           id="nav-variables-tab" 
                           data-toggle="tab" 
                           href="#nav-variables" 
                           role="tab" 
                           aria-controls="nav-variables" 
                           aria-selected="false">
                           
                            Variables

                        </a>
                      </div>
                  </nav>
                    <br>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" 
                           id="nav-function" 
                           role="tabpanel" 
                           aria-labelledby="nav-function-tab">
                          <div class="row">
                            <div class="col-md-10 offset-md-1">
                            
                                <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#modify-function">Modificar Formula </button>  
                              <hr>
                              <table class="table table-borderless">
                                <tr>
                                  <th>Formula</th>
                                </tr>
                                <tr>
                                  <td>Formula</td>
                                </tr>
                              </table>
                            </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" 
                           id="nav-variables" 
                           role="tabpanel" 
                           aria-labelledby="nav-variables-tab">

                          <div class="row">
                            <div class="col-md-10 offset-md-1">
                            
                                <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#create-variables">Crear Variables </button>  
                              <hr>
                              <table class="table table-borderless">
                                <tr>
                                  <th class="col-md-10">Variables</th>
                                  <th class="col-md-2">Accion</th>
                                </tr>
                                <tr>
                                  <td>Variable1</td>
                                  <td>Editar Eliminar</td>
                                </tr>
                                <tr>
                                  <td>Variable2</td>
                                  <td>Editar Eliminar</td>
                                </tr>
                                <tr>
                                  <td>Variable3</td>
                                  <td>Editar Eliminar</td>
                                </tr>
                                <tr>
                                  <td>Variable4</td>
                                  <td>Editar Eliminar</td>
                                </tr>
                                
                              </table>
                            </div>
                          </div>

                      </div>

                    </div>


              </div>
          </div>
        </div>

    <!-- INICIO modal para formula -->
     <div class="modal fade" 
           id="modify-function" 
           tabindex="-1" 
           role="form" 
           aria-labelledby="Modificar-Formula" 
           aria-hidden="true">

        <div class="modal-dialog modal-lg" 
             role="document">

          <div class="modal-content">

            <div class="modal-header">

              <h5 class="modal-title" 
                  id="modifyFunction">
                  
                   Editar Formula
                  
                  </h5>
              <button type="button" 
                      class="close" 
                      data-dismiss="modal" 
                      aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>
            <div class="modal-body">

              <p class="">
                En el siguiente formulario debe considerar: 
              </p>
              <ul>
                  <li class="nav-link">Las variables deben de ser escritas exactamente como estan en el apartado de variables</li>
              </ul>
              <hr>
              <form name="modify-function" method="post" action="configurar.php">
                <div class="form-group">
                  <label for="formula" class="col-form-label">Formula del sistema</label>
                  <input type="text" class="form-control" id="formula">
                  <p id="status-formula"></p>
                </div>

              </form>
            </div>
            <div class="modal-footer">
              <button type="button" 
                      name="modify-function-button" 
                      id="modify_function_button" 
                      class="btn btn-primary btn-lg">Modificar</button>
            </div>
          </div>
        </div>
      </div>
    <!-- FIN modal para formula -->

    <!-- INICIO modal para variables -->
      <div class="modal fade" 
           id="create-variables" 
           tabindex="-1" 
           role="form" 
           aria-labelledby="Crear-Variables" 
           aria-hidden="true">

        <div class="modal-dialog modal-lg" 
             role="document">

          <div class="modal-content">

            <div class="modal-header">

              <h5 class="modal-title" 
                  id="createVariable">
                  
                   Crear Variable
                  
                  </h5>
              <button type="button" 
                      class="close" 
                      data-dismiss="modal" 
                      aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>
            <div class="modal-body">

              <p class="">
                En el siguiente formulario debe considerar: 
              </p>
              <ul>
                  <li class="nav-link">Cada variable debe de tener un nombre unico</li>
                  <li class="nav-link">la variable no puede comenzar por un numero o caracter especial ejemplo: 
                  unidadTributaria <span class="bg-success text-white"> (correcto) </span>/ !unidadTributaria <span class="bg-danger text-white"> (incorrecto) </span> </li>
                  <li class="nav-link">el valor de la variable debe ser numerico o una formula valida. Ejemplo: JornadaMaxima*5 ó 40 <span class="bg-success text-white"> (correcto) </span></li>
              </ul>
              <p id="statusVariable"></p>
              <form name="create-variable" method="post" action="configurar.php">
                <div class="form-group">
                  <label for="nombre-variable" class="col-form-label">Nombre de la Variable</label>
                  <input type="text" class="form-control" id="nombre_variable">
                  <p id="status-create-variable"></p>
                </div>
                <div class="form-group">
                  <label for="valor-variable" class="col-form-label">Valor de la Variable</label>
                  <input type="text" class="form-control" id="valor_variable">
                  <p id="status-create-variable2"></p>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" 
                      name="create-variable-button" 
                      id="create_variable_button" 
                      class="btn btn-primary btn-lg">Crear</button>
            </div>
          </div>
        </div>
      </div>
    <!-- FIN modal para variables -->


    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/createVariable.js"></script>
    <script src="./js/editFunction.js"></script>
  </body>
</html>