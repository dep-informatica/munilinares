//echos municipales
function vistahechosmunicipal() {

    $.post(
            base_url + "Welcome/vistaechosmunicipales",
            {},
            function (pagina) {

                $("#contenido").hide();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}

function vistamebePDF() {

    $.post(
            base_url + "Welcome/vistaembepdf",
            {},
            function (pagina) {

//                $("#contenido").hide();
                $("#verPDF").hide();
                $("#verPDF").fadeIn(1000).delay(1000);
                $("#verPDF").html(pagina);

            });
}

//quienes somos
function vistaquienessomos() {
    $.post(
            base_url + "Welcome/vistaquienSomos",
            {},
            function (pagina) {

                $("#sidebar").show();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}


//historia
function vistaHistoriaMuni() {
    $.post(
            base_url + "Welcome/vistaHistoria",
            {},
            function (pagina) {

                $("#sidebar").show();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}

//msj alcalde
function vistaMSJealcalde() {
    $.post(
            base_url + "Welcome/vistaMSJalcalde",
            {},
            function (pagina) {

                $("#sidebar").show();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}

//consejo municipal
function vistaConsejoMunici() {
    $.post(
            base_url + "Welcome/vistaConsejoMunicipal",
            {},
            function (pagina) {
                $("#sidebar").show();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}
//estructura organica
function vistaOrgrama() {
    $.post(
            base_url + "Welcome/vistaOrganigrama",
            {},
            function (pagina) {

                $("#sidebar").hide();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}

function vistaOrgramaDepartamentos() {
    $.post(
            base_url + "Welcome/vistaOrganigramaDepto",
            {},
            function (pagina) {

                $("#sidebar").hide();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}


//salud
function vistaSaludd() {
    $.post(
            base_url + "Welcome/vistaSalud",
            {},
            function (pagina) {

                $("#sidebar").show();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}

//cartografia
function vistaCartografia() {
    $.post(
            base_url + "Welcome/vistaDeCartografia",
            {},
            function (pagina) {

                $("#sidebar").show();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}

//deporte
function vistaDeportes() {
    $.post(
            base_url + "Welcome/vistaDeporte",
            {},
            function (pagina) {

                $("#sidebar").show();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}

//director unidad
function vistaDirUnidad() {
    $.post(
            base_url + "Welcome/vistaDireccionUnidad",
            {},
            function (pagina) {

                $("#sidebar").show();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}


//jefe depto
function vistaJefeDepartamentos() {
    $.post(
            base_url + "Welcome/vistajefeDepto",
            {},
            function (pagina) {

                $("#sidebar").show();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}


//bienestar
function vistaPresentacionBienestar() {
            
                $("#sidebar").show();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").load( '../bienestar/presentacion_servicio_bienestar.pdf');

         }