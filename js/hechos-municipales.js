
function vistahechosmunicipal() {

    $.post(
            base_url + "Welcome/vistaechosmunicipales",
            {},
            function (pagina) {

                //Carga archivos de respuestas que provengan de validaLogin
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}