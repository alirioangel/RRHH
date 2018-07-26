$(document).ready(function () {
    $('#create_variable_button').click(function () {
        var nombre = $('#nombre_variable').val();
        var valor = $('#valor_variable').val();
        $('#status-create-variable').html('');
        $('#status-create-variable2').html('');
        if (nombre.trim() == '') {
            $('#status-create-variable').html('<span style="color:red;">Por Favor ingrese el nombre de la variable.</span>');
            $('#nombre_variable').focus();
            return false
        } else if (valor.trim() == '') {
            $('#status-create-variable2').html('<span style="color:red;">Por Favor ingrese el valor de la variable.</span>');
            $('#valor_variable').focus();
            return false
        } else {
            $.ajax({
                type: "POST",
                url: "createVariable.php",
                data: {
                    nombreVariable: nombre,
                    valorVariable: valor
                },
                beforeSend: function () {
                    $('#create_variable_button').html('editando...');
                    $('#create_variable_button').attr("disabled", "disabled");
                },
                success: function (msg) {
                    if (msg) {
                        console.log('Creacion exitosa');
                        $('#nombre_variable').val('');
                        $('#valor_variable').val('');
                        setTimeout(() => {
                            $('#create_variable_button').removeAttr("disabled");
                            $('#create_variable_button').html('editar');
                            setTimeout(() => {
                              window.location = 'configurar.php';
                            }, 500);

                        }, 1000);
                    } else {
                        console.log('Error!');
                        $('#statusVariable').html('<span style="color:red;">Ha ocurrido un error!.</span>')
                        $('#create_variable_button').removeAttr("disabled");
                        $('#create_variable_button').html('editar');
                    }
                }
            })
        }
    })
})