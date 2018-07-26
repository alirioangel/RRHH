
  <?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);

    //conectar con la database
    $conexion = pg_connect("host=localhost dbname=Tesis user=postgres password=password")
    or die("Can't connect to database".pg_last_error());
  

    //Query que solicita los datos de los profesores
    $orden = "SELECT * FROM trabajadores WHERE cargo = 'Profesor' ORDER BY id_user ASC";
    $query =  pg_query($conexion, $orden);
    $arreglo = pg_fetch_all($query);


    //Query que solicita los datos de la tabla bono
    $orden2 = "SELECT * FROM bono ORDER BY id_trabajador ASC";
    $query2 =  pg_query($conexion, $orden2);
    $arreglo2 = pg_fetch_all($query2);
    

    //guardar los id de trbajadores del primer query para comparacion
    $vector3;
    $i = 0;
    foreach ($arreglo as $value) {
      $vector3[$i] = $value['id_user'];
      $i++;
    }


    //guardar cada elemento de arreglo2 en una posicion de un vector
    $vector;
    $vector2;
    $i = 0;
    $j = 0;
    foreach ($arreglo2 as $value) {
      if($value['id_bono'] == $vector3[$i]){
        $vector[$i] = $value['fecha'];
        $vector2[$i] = $value['monto_bono'];
        $i++;
      }
    }


    //------------------------TABLA TODO MENOS PROFESORES------------------------

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
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Jornada Laboral</th>
                    <th scope="col">Fecha de Calculo</th>
                    <th scope="col">Bono de Alimentacion</th>
                    <th scope="col">Horas no Laboradas</th>
                  </tr>
                </thead>
                <tbody>';
    foreach ($arreglo as $array) {
      echo '<tr>
              <td>'. $array['nombre'].'</td>
              <td>'. $array['apellido'].'</td>
              <td>'. $array['cedula'].'</td>
              <td>'. $array['jornada'].' hrs</td>
              <td>'. $vector[$j].'</td>
              <td>'. $vector2[$j].' Bs.</td>
              <td>
                <form action="inasistencias.php?id_user='.$array['id_user'].'&cargo='.$array['cargo'].'" method="post" accept-charset="utf-8">
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