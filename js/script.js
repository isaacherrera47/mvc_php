$(document).ready(function () {
    $('#content').load('metas.php');
    $(".button-collapse").sideNav();
    $('select').material_select();
    $('.metas').click(function () {
        $('#content').load('metas.php');
    });
    $('.objetivos').click(function () {
        $('#content').load('objetivos.php');
    });
});
