

  //SCRIPT PARA EL PASSWORD -->
  //<script>
    $(document).ready(function(){
      $('#login_button').click(function(){  
        var password= $('#password-administrator').val();
        if(password.trim() == ''){
          alert('Por favor escriba la contraseña del administrador.');
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
              console.log('ERROR!');
              if(msg=='ok'){
                console.log('Verificacion Exitosa!');
                $('#password-administrator').val('');
                $('.statusmsg').html('<span style="color:green;">la clave es correcta sera redireccionado en breve</span>')
                setTimeout('redirect()', 1750);  
              }else{
                $('.statusmsg').html('<span style="color:red;">Ha ocurrido un error!.</span>')
              }
              $('#login_button').removeAttr("disabled");
              $('#login_button').html('ingresar');
            }
          });
        }
      });
    })
    function redirect(){
      window.location = 'configurar.php';
    } 
  //</script>