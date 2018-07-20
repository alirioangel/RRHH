


<?php 
  
  //conectar con la database
  $conexion = pg_connect("host=localhost dbname=Tesis user=postgres password=password")
  or die("Can't connect to database".pg_last_error());

  //Query que solicita los valores de los parametros
  $orden = "SELECT * FROM parametros ORDER BY id_param ASC";
  $query =  pg_query($conexion, $orden);
  $arreglo = pg_fetch_all($query);

  //Query que solicita las fechas de los parametros
  $orden2 = "SELECT fecha FROM parametros ORDER BY fecha ASC";
  $query2 =  pg_query($conexion, $orden2);
  $arreglo2 = pg_fetch_all($query2);
      

  //print_r(implode($arreglo2[0]))

  echo '<p>Fecha ultima Configuracion: '.implode($arreglo2[0]).'</p>
        <p>Datos de la ultima configuracion:</p>';
  foreach ($arreglo as $array) {
    echo '<ul>
            <li>'.$array['nombre'].': '.$array['valor'].'</li>
          </ul>';
  }
  

?>