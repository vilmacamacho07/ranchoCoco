$(document).ready(function () {
    Rancho.validacionGeneral('form-general');
    $('#icono').on('blur', function() {
        $('#show-icon').removeClass().addClass('fas ' + $(this).val());

    });
});
