function buscar() {
    // Declare variables 
    var input, filter, table, tr, td, i;
    input = document.getElementById("busqueda");
    filter = input.value.toUpperCase();
    table = document.getElementById("trabajadores");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";

            }
        }
        if(filter == ''){
            paginarRetorno();
        }
    }
}

function paginarRetorno(){
    var table = '#trabajadores';
    $('.pagination').html('')
    var trnum = 0
    var maxRows = 5
    var totalRows = $(table + ' tbody tr').length
    $(table + ' tr:gt(0)').each(function () {
        trnum++
        if (trnum > maxRows) {
            $(this).hide()
        }
        if (trnum <= maxRows) {
            $(this).show()
        }
    })
    if (totalRows > maxRows) {
        var pagenum = Math.ceil(totalRows / maxRows)
        for (var i = 1; i <= pagenum;) {
            $('.pagination').append('<li class="page-item" data-page="' + i + '">\<span><a class="page-link">' + i++ + '</a><span class="sr-only">(current)</span></span>\</li>').show()
        }
    }
    $('.pagination li:first-child').addClass('active')
    $('.pagination li').on('click', function () {
        var pageNum = $(this).attr('data-page')
        var trIndex = 0;
        $('.pagination li').removeClass('active')
        $(this).addClass('active')
        $(table + ' tr:gt(0)').each(function () {
            trIndex++
            if (trIndex > (maxRows * pageNum) || trIndex <= ((maxRows * pageNum) - maxRows)) {
                $(this).hide()
            } else {
                $(this).show()
            }
        })
    })
}