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
    <div class="container-fluid">

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
                            <a class="nav-link" href="./index.php">Calculo de Bono de Alimentacion</a>
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
                            <a href="layout.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="./index.php">
                                Calculo de bono de Alimentacion
                            </a>    
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                                Configuracion Bono de Alimentacion
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
                          <button type="button" data-toggle="modal" data-target="#pwAdmin" class="btn btn-outline-secondary">
                              Configuracion avanzada</button>

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
                                          <form>
                                              <div class="form-group">
                                                  <label for="password-administrator" class="col-form-label">Contraseña</label>
                                                  <input type="password" class="form-control" id="password-administrator">
                                              </div>
                                          </form>
                                      </div>
                                      <div class="modal-footer">
                                          <a role="button" href="./configurarAdmin.php" class="btn btn-primary">Ingresar</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    <br>
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