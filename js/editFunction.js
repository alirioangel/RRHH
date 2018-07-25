



$(document).ready(function () {
    $('#modify_function_button').click(function () {
        var formula = $('#formula').val();
        if (formula.trim() == ''){
            $('#status-formula').html('<span style="color:red;">La formula no puede estar en blanco!</span>');
            $('#formula').focus();
            return false
        }else{
            $.ajax({
                type: "POST",
                url: "editFunction.php",
                data: {formula:formula},
                beforeSend: function(){
                  $('#edit_function_button').html('editando...');
                  $('#edit_function_button').attr("disabled","disabled");
                },
                success: function(msg){
                    if(msg="ok"){
                        console.log('Edicion exitosa');
                        $('#formula').val('');
                        setTimeout(() => {
                            $('#edit_function_button').removeAttr("disabled");
                            $('#edit_function_button').html('editar');
                            setTimeout(() => {
                                window.location = 'configurar.php';
                            }, 500);

                        }, 1000);
                    }else{
                        console.log('Error!');
                        alert('Ha ocurrido un error inesperado');
                        $('#create_variable_button').removeAttr("disabled");
                        $('#create_variable_button').html('crear');
                    }
                }
            })
        }
    })
})