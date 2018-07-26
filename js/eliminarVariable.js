

    function eliminarVar(link){
      if(confirm("Esta seguro que desea eliminar?")){
        var nombre = $(link).val();
        $.ajax({
          type: "POST",
          url: "createVariable.php",
          data: {nombre:nombre},
          success: function(msg){
            if(msg){
              console.log('Variable eliminada!');
              setTimeout('redirect()', 1250);  
            }else{
              alert("No se pudo eliminar.");
              console.log('ERROR!');
            }
          }
        });
      }
    }
    function redirect(){
      window.location = 'configurar.php';
    } 