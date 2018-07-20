<?php

  //conectar con la database
  $conexion = pg_connect("host=localhost dbname=Tesis user=postgres password=password")
  or die("Can't connect to database".pg_last_error());

if(isset($_POST['pass'])){

    //informacion suministrada por el ajax
    $password = $_POST['pass'];
    $orden = "SELECT password FROM ingreso WHERE password='".$password."'";
    $query =  pg_query($conexion, $orden);
    if(pg_num_rows($query)==1){
      echo 'ok';

    }else{
      echo 'err';
      exit;
    }
}

?>