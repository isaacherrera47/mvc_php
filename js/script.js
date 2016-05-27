$(document).ready(function () {
    $(".button-collapse").sideNav();
    $('select').material_select();
});

$('#agregaMeta').click(function () {
    if ($(this)[0].checkValidity()) {
        data = $('#formMeta').serialize();
        operacionMeta(data, 'C');
    } else {
        Materialize.toast('Por favor completa los campos', 2000);
    }
});
//Elements created dynamically have to use this function
$(document).on('click', '.modal-trigger', function () {
    $('#modalMeta').openModal();
});

$(document).on('click', '.borraMeta', function () {
    var id = $(this).data('id');
    operacionMeta('id='+id, 'D', this);
});

function operacionMeta(data, tipo,elemento) {
    $.ajax({
        type: 'POST',
        url: 'controller/ajaxMeta.func.php',
        data: data + '&tipo=' + tipo,
        success: function (result) {
            switch (tipo) {
                case 'C':
                    $('#containerMeta').append(result);
                    Materialize.toast('Elemento creado', 2000);
                    break;
                case 'U':
                    break;
                case 'D':
                    $(elemento).parent().parent().remove();
                    Materialize.toast('Elemento eliminado', 2000);
                    break;
            }
        }
    })
}