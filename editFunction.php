


<?php
  //conectar con la database
  $conexion = pg_connect("host=localhost dbname=Tesis user=postgres password=password")
  or die("Can't connect to database".pg_last_error());


  //Query que busca la formula de calculo
  $orden = "SELECT * FROM formula ORDER BY id_formula ASC";
  $query =  pg_query($conexion, $orden);
  $arreglo = pg_fetch_all($query);


  foreach ($arreglo as $value) {
    echo '<tr>
            <td>'.$value['formula'].'</td>
          </tr>';
  }; 
  

  if(isset($_POST['formula'])){
    //informacion suministrada por el ajax
    $formula = $_POST['formula'];
    $orden = "INSERT INTO formula VALUES (default, $formula)";
    $query =  pg_query($conexion, $orden);
  }else{
    echo 'NANAI';
  }
?>             