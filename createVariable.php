


<?php
  //conectar con la database
  $conexion = pg_connect("host=localhost dbname=Tesis user=postgres password=password")
  or die("Can't connect to database".pg_last_error());


  //traer info de los parametros
  $orden = "SELECT * FROM parametros ORDER BY id_param ASC";
  $query =  pg_query($conexion, $orden);
  $arreglo = pg_fetch_all($query);


  foreach ($arreglo as $value) {
            echo'<tr>
                  <td>'.$value['nombre'].'</td>
                  <td>
                    <button type="submit" class="btn btn-small btn-outline-primary">Editar</button>
                    <button type="submit" class="btn btn-small btn-outline-primary">Eliminar</button>
                  </td>
                </tr>';
          };
?>