
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
              <td>'. $array['cedula'].'</td>
              <td>'. $array['nombre'].'</td>
              <td>'. $array['apellido'].'</td>
              <td>'. $array['cargo'].'</td>
              <td>'. $array['jornada'].'</td>
              <td>'. $array['bono'].'</td>
              <td>
                <form action="tabla_submit" method="get" accept-charset="utf-8">
                <div class="row">

                  <div class="col-md-6">
                    <input type="text" class="form-control" id="parametro1">
                  </div>
                  <div class="col-md-5">
                    <button type="button" action="" class="btn btn-small btn-outline-primary">Boton</button>
                  </div>
                </div>
                </form>
              </td>
            </tr>';
    }
  ?> 
