



<?php
  //conectar con la database
  $conexion = pg_connect("host=localhost dbname=Tesis user=postgres password=password")
  or die("Can't connect to database".pg_last_error());

  //Query que solicita las jornadas e ids de los trabajadores
  $orden = "SELECT * FROM trabajadores";
  $query =  pg_query($conexion, $orden);
  $arreglo = pg_fetch_all($query);

  //Query que solicita valores de los parametros
  $orden2 = "SELECT * FROM parametros";
  $query2 =  pg_query($conexion, $orden2);
  $arreglo2 = pg_fetch_all($query2);

  //Query que establece la fecha de calculo
  $orden3 = "UPDATE bono SET fecha = current_date";
  $query3 =  pg_query($conexion, $orden3);

  //Query que busca los id de a tabla bono
  $orden5 = "SELECT * FROM bono";
  $query5 =  pg_query($conexion, $orden5);
  $arreglo5 = pg_fetch_all($query5);

  //guardar cada parametro en $vector
  $vector;
  $i = 0;
  foreach ($arreglo2 as $value) {
    //UT, num_pto, Jornada_max
    $vector[$i] = $value['valor'];
    $i++;
  }
  $UT = $vector[0];
  $punto = $vector[1];
    

  foreach ($arreglo as $array) {
    $z = calcular($array['jornada'], $UT, $punto);
    almacenar($conexion, $z, $array['id_user']);
  }


  //$x es la jornada laboral de cada trabajador
  function calcular($x, $ut, $pto){
    $y = $ut * $pto * $x;
    return $y;
  }

  function almacenar($conexion, $z, $id){
    //Query que guarda los bonos calculados en la database
    $orden4 = "UPDATE bono SET monto_bono = $z WHERE id_bono = $id";
    $query4 =  pg_query($conexion, $orden4);
  }


  echo '<script>
          alert("Montos calculados con exito.")
          window.location.replace("index.php")
        </script>';
  //header("Location: index.php"); /* Redirect */
  exit();
?>