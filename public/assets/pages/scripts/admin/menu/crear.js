//Pone un icono en el espacio col-lg-1
$(document).ready(function () {
    Biblioteca.validacionGeneral('form-general');
    $('#icono').on('blur', function () {
        $('#mostrar-icono').removeClass().addClass('fa fa-fw ' + $(this).val());
    });
});