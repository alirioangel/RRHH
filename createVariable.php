


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
            <button type="button" data-toggle="modal" data-target="#edit-variable" class="btn btn-block btn-outline-success">Editar</button>
            <button type="button" id="'.$value['id_param'].'" class="btn btn-block btn-outline-danger" value="'.$value['nombre'].'" onclick=eliminarVar(this)>Eliminar</button>
          </td>
        </tr>';
  };


  if(!empty($_POST['formula'])){
    //informacion suministrada por el ajax
    $formula = $_POST['formula'];
    $orden1 = "UPDATE formula SET formula ='".$formula."' WHERE id_formula = 1";
    $query1 =  pg_query($conexion, $orden1);
  }


  if(!empty($_POST['nombreVariable'])){
    $name = $_POST['nombreVariable'];
    $val = $_POST['valorVariable'];
    $orden2 = "INSERT INTO parametros VALUES (default, '".$name."', '".$val."', default, current_date)";
    $query2 =  pg_query($conexion, $orden2);
  }


  if(isset($_POST['nombre'])){
    $name = $_POST['nombre'];
    $orden3 = "SELECT * FROM parametros WHERE nombre = '".$name."'";
    $query3 =  pg_query($conexion, $orden3);
    $arreglo3 = pg_fetch_all($query3);

    foreach ($arreglo3 as $value) {
      //SOFT DELETE
      $orden5 = "INSERT INTO parametros_eliminados VALUES (default, '".$value['nombre']."', '".$value['valor']."', '".$value['tooltip']."',current_date)";
      $query5 = pg_query($conexion, $orden5);
    }

    if($query5){
      echo 'Eliminacion con  exito!';
      //informacion suministrada por el ajax
      $orden4 = "DELETE FROM parametros WHERE nombre = '".$name."'";
      $query4 =  pg_query($conexion, $orden4);
    }else{
      echo 'PENE';
    }
  }

?>