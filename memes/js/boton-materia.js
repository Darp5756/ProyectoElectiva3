$(document).ready(function () {

    $('.boton-materia').on('click', function() {

        let materia = $(this).text();
        let imagen = datos_materias[materia]['imagen'];
        let autor = datos_materias[materia]['autor'];

        //Cambiar datos del motal
        $('#titulo-materia').text(materia);
        $('#imagen-materia').attr('src', 'img/' + imagen);
        $('#imagen-de').text('De: ' + autor);

    });

});