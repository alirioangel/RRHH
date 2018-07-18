


<?php 
  
  //conectar con la database
  $conexion = pg_connect("host=localhost dbname=Tesis user=postgres password=password")
  or die("Can't connect to database".pg_last_error());

  //Query que solicita los valores de los parametros
  $orden = "SELECT * FROM parametros";
  $query =  pg_query($conexion, $orden);
  $arreglo = pg_fetch_all($query);

  foreach ($arreglo as $array) {
    echo '<ul>
            <li>'.$array['nombre'].': '.$array['valor'].'</li>
          </ul>';
  }
  

?>