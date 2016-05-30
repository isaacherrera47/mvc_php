$(document).ready(function () {
    $(".button-collapse").sideNav();
    $('select').material_select();
});

$('#formMeta').submit(function (e) {
    e.preventDefault();
    data = $('#formMeta').serialize();
    operacionMeta(data, 'C');
    $('#formMeta')[0].reset();
});

$('#formObjetivo').submit(function (e) {
    e.preventDefault();
    data = $(this).serialize();
    operacionObjetivo(data,'C');
    $('#formObjetivo')[0].reset();
})

//Elements created dynamically have to use this function
$(document).on('click', '.actualizaMeta', function () {
    $('#modalMeta').openModal();
});

$(document).on('click', '.actualizaObjetivo', function () {
    $('#modalObjetivo').openModal();
});

$(document).on('click', '.borraMeta', function () {
    var id = $(this).data('id');
    operacionMeta('id=' + id, 'D', this);
});

$(document).on('click', '.borraObjetivo', function () {
    var id = $(this).data('id');
    operacionObjetivo('id=' + id, 'D', this);
});

function operacionMeta(data, tipo, elemento) {
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

function operacionObjetivo(data, tipo, elemento) {
    $.ajax({
        type: 'POST',
        url: 'controller/ajaxObjetivo.func.php',
        data: data+'&tipo='+tipo,
        success: function (result) {
            switch (tipo) {
                case 'C':
                    $('#containerObjetivo').append(result);
                    Materialize.toast('Elemento creado',2000);
                    break;
                case 'U':
                    break;
                case 'D':
                    $(elemento).parent().parent().remove();
                    Materialize.toast('Elemento eliminado',2000);
                    break;
            }
        }
    })
}