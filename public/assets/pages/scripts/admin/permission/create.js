$(document).ready(function () {
    Rancho.validacionGeneral('form-general');
    $('#name').on('change',function(){
        $('#slug').val($(this).val().toLowerCase().replace(/ /g, '-'))
    })
});