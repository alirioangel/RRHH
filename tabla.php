
  <?php
    //conectar con la database
    $conexion = pg_connect("host=localhost dbname=Tesis user=postgres password=password")
    or die("Can't connect to database".pg_last_error());
  
    //Query que solicita los datos de los trabajadores
    $orden = "SELECT * FROM trabajadores";
    $query =  pg_query($conexion, $orden);
    $arreglo = pg_fetch_all($query);
    
    //Ciclo que recorre le array con los datos de todos los trabajadores obtenidos del query
    foreach ($arreglo as $array) {
      echo '<tr>
              <td>'. $array['id_user'].'</td>
              <td>'. $array['cedula'].'</td>
              <td>'. $array['nombre'].'</td>
              <td>'. $array['apellido'].'</td>
              <td>'. $array['cargo'].'</td>
              <td>'. $array['jornada'].' hrs</td>
              <td>'. $array['bono'].' Bs.</td>
              <td>
                <form action="inasistencias.php" method="get" accept-charset="utf-8">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="number" class="form-control" id="'.$array['id_user'].'" required>                   
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