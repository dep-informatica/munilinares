
function vistahechosmunicipal() {

    $.post(
            base_url + "Welcome/vistaechosmunicipales",
            {},
            function (pagina) {

                //Carga archivos de respuestas que provengan de validaLogin
                $("#contenido").hide();
                $("#stream").hide();
                $("#stream").fadeIn(1000).delay(1000);
                $("#stream").html(pagina);

            });
}