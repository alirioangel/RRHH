
<?php 
  echo '<head>
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
            </div>';
?>