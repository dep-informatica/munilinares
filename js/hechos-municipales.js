



//quienes somos
function vistaquienessomos() {
    $.post(
            base_url + "Welcome/vistaquienSomos",
            {},
            function (pagina) {
                $("#TranpActiva").hide();
                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);

            });
}


//historia
function vistaHistoriaMuni() {
    $.post(
            base_url + "Welcome/vistaHistoria",
            {},
            function (pagina) {
                $("#TranpActiva").hide();
                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);

            });
}

//msj alcalde
function vistaMSJealcalde() {
    $.post(
            base_url + "Welcome/vistaMSJalcalde",
            {},
            function (pagina) {
                $("#TranpActiva").hide();
                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);

            });
}

//consejo municipal
function vistaConsejoMunici() {
    $.post(
            base_url + "Welcome/vistaConsejoMunicipal",
            {},
            function (pagina) {
                $("#TranpActiva").hide();
                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);

            });
}
//estructura organica
function vistaOrgrama() {
    $.post(
            base_url + "Welcome/vistaOrganigrama",
            {},
            function (pagina) {
                $("#TranpActiva").hide();
                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);

            });
}

function vistaOrgramaDepartamentos() {
    $.post(
            base_url + "Welcome/vistaOrganigramaDepto",
            {},
            function (pagina) {
                $("#TranpActiva").hide();
                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);

            });
}


function vistaSaludd() {
    $.post(
            base_url + "Welcome/vistaSalud",
            {},
            function (pagina) {
                $("#TranpActiva").hide();
                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);

            });
}

//cartografia
function vistaCartografia() {
    $.post(
            base_url + "Welcome/vistaDeCartografia",
            {},
            function (pagina) {
                $("#TranpActiva").hide();
                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);

            });
}

//deporte
function vistaDeportes() {
    $.post(
            base_url + "Welcome/vistaDeporte",
            {},
            function (pagina) {
                $("#TranpActiva").hide();
                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);

            });
}

//director unidad
function vistaDirUnidad() {
    $.post(
            base_url + "Welcome/vistaDireccionUnidad",
            {},
            function (pagina) {
                $("#TranpActiva").hide();
                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);

            });
}


//jefe depto
function vistaJefeDepartamentos() {
    $.post(
            base_url + "Welcome/vistajefeDepto",
            {},
            function (pagina) {
                $("#TranpActiva").hide();
                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);

            });
}


//bienestar
function vistaPresentacionBienestar() {
    $("#TranpActiva").hide();
    $("#sidebar").show();
    $("#main").hide();
    $("#main").fadeIn(1000).delay(1000);
    $("#main").load('../bienestar/presentacion_servicio_bienestar.pdf');

}