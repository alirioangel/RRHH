


<?php
  //conectar con la database
  $conexion = pg_connect("host=localhost dbname=Tesis user=postgres password=password")
  or die("Can't connect to database".pg_last_error());

  //Query que solicita los valores de los parametros
  $orden = "SELECT * FROM parametros ORDER BY id_param ASC";
  $query =  pg_query($conexion, $orden);
  $arreglo = pg_fetch_all($query);

  foreach ($arreglo as $value) {
    echo '<tr>
            <td>'.$value['nombre'].'</td>
            <td>
              <form action="" method="" accept-charset="utf-8">
                <div class="">
                  <button type="submit" class="btn btn-small btn-outline-primary">Editar</button>
                  <button type="submit" class="btn btn-small btn-outline-primary">Eliminar</button>
                </div>
              </form>
            </td>
          </tr>';
  }
?>


