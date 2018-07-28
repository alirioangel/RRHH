

  //SCRIPT PARA EL PASSWORD -->
  //<script>
    $(document).ready(function(){
      $('#login_button').click(function(){  
        var password= $('#password-administrator').val();
        if(password.trim() == ''){
          $('#statusMsg').html('<span style="color:red;">La formula no puede estar en blanco!</span>');
          $('#password-administrator').focus();
          return false
        }else{
          $.ajax({
            type: "POST",
            url: "ingresoAdmin.php",
            data: {pass:password},
            beforeSend: function(){
              $('#login_button').html('ingresando...');
              $('#login_button').attr("disabled","disabled");
            },
            success: function(msg){
              if(msg==1){
                console.log('Verificacion Exitosa!');
                $('#password-administrator').val('');
                $('#statusMsg').html('<span style="color:green;">Acceso exitoso, sera redireccionado en breve.</span>')
                setTimeout(() => {
                  $('#login_button').removeAttr("disabled");
                  $('#login_button').html('ingresar');
                  setTimeout(() => {
                    window.location = 'configurar.php';
                  }, 500);  
                }, 1000);

              }else{
                $('#login_button').removeAttr("disabled");
                $('#login_button').html('ingresar');
                console.log('ERROR!');
                $('#statusMsg').html('<span style="color:red;">Ha ocurrido un error!</span>')
              }

            }
          });
        }
      });
    })

  //</script>
