
  <?php
    //conectar con la database
    $conexion = pg_connect("host=localhost dbname=Tesis user=postgres password=password")
    or die("Can't connect to database".pg_last_error());
  
    //Query que solicita los datos de los profesores
    $orden = "SELECT * FROM trabajadores WHERE cargo = 'Profesor' ORDER BY id_user ASC";
    $query =  pg_query($conexion, $orden);
    $arreglo = pg_fetch_all($query);

    //Query que solicita los datos de los trabajadores
    $orden3 = "SELECT * FROM trabajadores WHERE cargo != 'Profesor' ORDER BY id_user ASC";
    $query3 =  pg_query($conexion, $orden3);
    $arreglo3 = pg_fetch_all($query3);

    //Query que solicita los datos de la tabla bono
    $orden2 = "SELECT * FROM bono ORDER BY id_trabajador ASC";
    $query2 =  pg_query($conexion, $orden2);
    $arreglo2 = pg_fetch_all($query2);
    

    //guardar cada elemento de arreglo2 en una posicion de un vector
    $vector;
    $vector2;
    $i = 0;
    foreach ($arreglo2 as $value) {
      $vector[$i] = $value['fecha'];
      $vector2[$i] = $value['monto_bono'];
      $i++;
    }
    

    //------------------------TABLA PROFESORES------------------------
    //Ciclo que recorre le array con los datos de todos los trabajadores obtenidos del query
    $j = 0;
    echo '<div class="col-md-10 offset-md-1">
            <div class="row">
              <div class="col-md-8">
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" id="busqueda" onkeyup="buscar()" placeholder="Buscar por nombre..">
              </div>
            </div>
            <br>
            <div class="table-responsive">
              <table id="trabajadores" class="table table-striped table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Fecha de Calculo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Jornada Laboral</th>
                    <th scope="col">Bono de Alimentacion</th>
                    <th scope="col">Horas no Laboradas</th>
                  </tr>
                </thead>
              <tbody>';
    foreach ($arreglo as $array) {
      echo '<tr>
              <td>'. $vector[$j].'</td>
              <td>'. $array['nombre'].'</td>
              <td>'. $array['apellido'].'</td>
              <td>'. $array['cedula'].'</td>
              <td>'. $array['cargo'].'</td>
              <td>'. $array['jornada'].' hrs</td>
              <td>'. $vector2[$j].' Bs.</td>
              <td>
                <form action="inasistencias.php?id_user='.$array['id_user'].'" method="post" accept-charset="utf-8">
                  <div class="row">
                    <div class="col-md-5">
                      <input type="number" class="form-control" name="horas" required>                   
                    </div>
                    <div class="col-md-5">
                      <button type="submit" class="btn btn-small btn-outline-primary">Cargar</button>
                    </div>
                  </div>
                </form>
              </td>
            </tr>';
            $j++;
    }
    
    //Paginacion
    echo '</tbody>
        </table>
      </div>
      <br>
      <nav class="d-flex justify-content-center" aria-label="Navegacion de la tabla">
        <ul class="pagination">
        </ul>
      </nav>
    </div> 
  </div>';
  


  //------------------------TABLA TODO MENOS PROFESORES------------------------
  echo '<div class="col-md-10 offset-md-1">
          <br>
          <br>
          <h3 class="d-flex justify-content-center">Personal Administrativo y Obrero de la UJAP</h3>
          <br>
            <div class="row">
              <div class="col-md-8">
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" id="busqueda" onkeyup="buscar()" placeholder="Buscar por nombre..">
              </div>
            </div>
            <br>
            <div class="table-responsive">
              <table id="trabajadores" class="table table-striped table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Fecha de Calculo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Jornada Laboral</th>
                    <th scope="col">Bono de Alimentacion</th>
                    <th scope="col">Dias no Laborados</th>
                  </tr>
                </thead>
              <tbody>';
    foreach ($arreglo3 as $array) {
      echo '<tr>
              <td>'. $vector[$j].'</td>
              <td>'. $array['nombre'].'</td>
              <td>'. $array['apellido'].'</td>
              <td>'. $array['cedula'].'</td>
              <td>'. $array['cargo'].'</td>
              <td>'. $array['jornada'].' hrs</td>
              <td>'. $vector2[$j].' Bs.</td>
              <td>
                <form action="inasistencias.php?id_user='.$array['id_user'].'" method="post" accept-charset="utf-8">
                  <div class="row">
                    <div class="col-md-5">
                      <input type="number" class="form-control" name="horas" required>                   
                    </div>
                    <div class="col-md-5">
                      <button type="submit" class="btn btn-small btn-outline-primary">Cargar</button>
                    </div>
                  </div>
                </form>
              </td>
            </tr>';
            $j++;
    }
    
    //Paginacion
    echo '</tbody>
        </table>
      </div>
      <br>
      <nav class="d-flex justify-content-center" aria-label="Navegacion de la tabla">
        <ul class="pagination">
        </ul>
      </nav>
    </div> 
  </div>';
  ?> 