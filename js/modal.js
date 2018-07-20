


  //SCRIPT PARA EL PASSWORD

  function submitPasswordForm(){
    var reg= /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
    var password= $('#password-administrator').val();
    if(password.trim() == ''){
      alert('Por favor ingrese la contraseña.');
      $('#password-administrator').focus();
      return false
    }else{
      $.ajax({
        type: 'POST',
        url:'ingresoAdmin.php',
        data:{password:password},
        beforeSend: function () {
          $(.submitbtn).val("ingresando...");
          $(.submitbtn).attr("disabled","disabled");
        },
        success:function(msg){
          if(msg=='ok'){
            $(#password-administrator).val('');
            $('.statusmsg').html('<span style="color:green;">Clave correcta, sera redireccionado en breve</span>')
            setTimeout('redirect()', 2000); 
          }else{
            $('.statusmsg').html('<span style="color:red;">Ha ocurrido un error!.</span>')
          }
          $(.submitbtn).removeAttr("disabled");
          $(.submitbtn).val('ingresar');
        }
      })
    }
  }

  function redirect(){
    window.location = 'configurar.php';
  }