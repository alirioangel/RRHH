


<?php 
  
  //conectar con la database
  $conexion = pg_connect("host=localhost dbname=Tesis user=postgres password=password")
  or die("Can't connect to database".pg_last_error());

  //Query que solicita los valores de los parametros
  $orden = "SELECT * FROM parametros";
  $query =  pg_query($conexion, $orden);
  $arreglo = pg_fetch_all($query);

  foreach ($arreglo as $array) {
    echo '<div class="col-lg-5 text-center">
            <label>'.$array['nombre'].'</label>
            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" data-placement="right" title="'.$array['tooltip'].'">
            ?
            </button>
          </div>
          <div class="col-lg-7">
            <input type="number" class="form-control" id="" placeholder="Valor de ' .$array['nombre'].'">
          </div>';
  }
  

?>



                              