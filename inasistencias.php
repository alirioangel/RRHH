


<?php
  //conectar con la database
  $conexion = pg_connect("host=localhost dbname=Tesis user=postgres password=password")
  or die("Can't connect to database".pg_last_error()); 
  

  //Obtener el id del usuario en cuestion desde index
  $id_t = $_GET["id_user"];
  //Obtener inasistencias del usuario en cuestion desde el form en index
  $horas = $_POST["horas"];
  //Obtener los dias de inasistencia de la segunda tabla
  $dias = $_POST["dias"];


  //Query que solicita el id del trabajador en cuestion
  $orden = "SELECT jornada FROM trabajadores WHERE id_user = $id_t";
  $query =  pg_query($conexion, $orden);
  $arreglo = pg_fetch_all($query);


  //guardar el valor de la jornada maxima en una variable
  foreach ($arreglo as $value) {
    $j = $value['jornada'];
  }


  //Query que solicita valores de los parametros
  $orden = "SELECT * FROM parametros";
  $query =  pg_query($conexion, $orden);
  $arreglo = pg_fetch_all($query);


  //guardar cada parametro en una variable
  $vector;
  $i = 0;
  foreach ($arreglo as $value) {
    //UT, num_pto, Jornada_max
    $vector[$i] = $value['valor'];
    $i++;
  }
  $UT = $vector[0];
  $punto = $vector[1];



  //calcular el bono maximo del trabajador en cuestion
  $a = j_maxima($UT, $punto, $j);


  // DETERMINAR SI ES POR HORA O POR DIA
  if($horas > 0){
    //calcular las inasistencias del trabajador en cuestion
    $b = inasistencias_horas($UT, $punto, $horas);
    //Bono correspondiente luego de las inasistencias
    $c = $a - $b;
  }elseif ($dias > 0){
    //calcular las inasistencias del trabajador en cuestion
    $b = inasistencias_dias($UT, $punto, $dias);
    //Bono correspondiente luego de las inasistencias
    $c = $a - $b;
  }
  


  //FUNCIONES NECESARIAS PARA EL NUEVO MONTO DEL BONO
  function j_maxima($u, $p, $jorneid){
    $jm = $u * $p * $jorneid;
    return $jm;
  }
  function inasistencias_horas($u, $p, $horas){
    $horas_i = $u * $p * $horas;
    return $horas_i;
  }
  function inasistencias_dias($u, $p, $dias){
    $dias_i = $u * $p * ($dias * 8);
    return $dias_i;
  }


  //Query que ingresa el nuevo valor del bono para el trabajador
  $orden = "UPDATE bono SET monto_bono = $c WHERE id_bono = $id_t";
  $query =  pg_query($conexion, $orden);
  

  //Query que actualiza la fecha en la tabla bono para este usuario
  $orden = "UPDATE bono SET fecha = current_date WHERE id_trabajador = $id_t";
  $query =  pg_query($conexion, $orden);

  //alerta y redirect
  echo '<script>
          window.location.replace("index.php")
        </script>';
  //header("Location: index.php"); /* Redirect */
  exit();


?>