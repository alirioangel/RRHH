
  <?php
    //conectar con la database
    $conexion = pg_connect("host=localhost dbname=Tesis user=postgres password=password")
    or die("Can't connect to database".pg_last_error());
  
    //Query que solicita los datos de los trabajadores
    $orden = "SELECT * FROM trabajadores ORDER BY id_user ASC";
    $query =  pg_query($conexion, $orden);
    $arreglo = pg_fetch_all($query);

    //Ciclo que recorre le array con los datos de todos los trabajadores obtenidos del query
    foreach ($arreglo as $array) {
      echo '<tr>
              <td>'. $array['fecha'].'</td>
              <td>'. $array['cedula'].'</td>
              <td>'. $array['nombre'].'</td>
              <td>'. $array['apellido'].'</td>
              <td>'. $array['cargo'].'</td>
              <td>'. $array['jornada'].' hrs</td>
              <td>'. $array['bono'].' Bs.</td>
              <td>
                <form action="inasistencias.php?id_user='.$array['id_user'].'" method="post" accept-charset="utf-8">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="number" class="form-control" name="horas" required>                   
                    </div>
                    <div class="col-md-5">
                      <button type="submit" class="btn btn-small btn-outline-primary">Cargar</button>
                    </div>
                  </div>
                </form>
              </td>
            </tr>';
    }
  ?> 