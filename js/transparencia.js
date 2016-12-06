

//function vistaMenuTransparenciaActiva() {
//
//
//    $.post(
//            base_url + "Welcome/vistaMenu1",
//            {},
//            function (pagina) {
//
//                $("#sidebar").hide();
//                $("#stream").hide();
//                $("#contenido").hide();
//                $("#contenido").fadeIn(1000).delay(1000);
//                $("#contenido").html(pagina);
//
//            });
//}

function menuTA() {

    $.post(
            base_url + "Welcome/menuTA",
            {},
            function (pagina, datos) {

                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);

            });
}


function transDirOficial() {

    $.post(
            base_url + "Welcome/vistaDiarioOficial",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);

            });
}

function transMNormativo() {

    $.post(
            base_url + "Welcome/vistaMarcoNormativo",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);

            });
}



function transPotestades() {

    $.post(
            base_url + "Welcome/vistaPotestad",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);

            });
}

function transOtrasTransferencias() {

    $.post(
            base_url + "Welcome/vistaotrasTransferencias",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}

function transEmprendedores() {

    $.post(
            base_url + "Welcome/vistaEmprendedores",
            {},
            function (pagina, datos) {



            });
}

function transPostulacionFondeve() {

    $.post(
            base_url + "Welcome/vistaPostulacionFondeve",
            {},
            function (pagina, datos) {


                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}

function transConcursoPublicos() {

    $.post(
            base_url + "Welcome/vistaConcursoPublicos",
            {},
            function (pagina, datos) {


                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}

function transPatenteComerc() {

    $.post(
            base_url + "Welcome/vistaPatenteComerc",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}

function transPermisoEdif() {

    $.post(
            base_url + "Welcome/vistaPermisoEdif",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}


function transDecretoMunicipales() {

    $.post(
            base_url + "Welcome/vistaDecretoMunicipales",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}

function DecretoTransito() {

    $.post(
            base_url + "Welcome/vistaDecretoTransito",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
                $("#anioSelect").click(function () {
                    actualizaTablaDecreto1();

                });
            });
}

function DecretoObras() {

    $.post(
            base_url + "Welcome/vistaDecretoObras",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
                $("#anioSelect").click(function () {
                    actualizaTablaDecreto2();

                });
            });
}

function DecretoRentas() {

    $.post(
            base_url + "Welcome/vistaDecretoRentas",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
                $("#anioSelect").click(function () {
                    actualizaTablaDecreto3();

                });
            });
}


function actualizaTablaDecreto1() {

    var codigo = $('#decto1').val();
    var anios = $("#anioSelect").val();
//document.writeln(codigo, anios); 
    //llama a la funcion que se encuentra el el welcome
    $.post(base_url + "Welcome/vistaTablaDecreto",
            {
                codigo: codigo,
                anios: anios,
            },
            function (pagina, datos) {
                //Se cargan los datos que vienen de cargarCargo del welcome                
                $("#ContenidoDecretos").html(pagina, datos);

            });
}

function actualizaTablaDecreto2() {

    var codigo = $('#decto2').val();
    var anios = $("#anioSelect").val();
//document.writeln(codigo, anios); 
    //llama a la funcion que se encuentra el el welcome
    $.post(base_url + "Welcome/vistaTablaDecreto",
            {
                codigo: codigo,
                anios: anios,
            },
            function (pagina, datos) {
                //Se cargan los datos que vienen de cargarCargo del welcome                
                $("#ContenidoDecretos").html(pagina, datos);

            });
}

function actualizaTablaDecreto3() {

    var codigo = $('#decto3').val();
    var anios = $("#anioSelect").val();
//document.writeln(codigo, anios); 
    //llama a la funcion que se encuentra el el welcome
    $.post(base_url + "Welcome/vistaTablaDecreto",
            {
                codigo: codigo,
                anios: anios,
            },
            function (pagina, datos) {
                //Se cargan los datos que vienen de cargarCargo del welcome                
                $("#ContenidoDecretos").html(pagina, datos);

            });
}

function transOrdenanzas() {

    $.post(
            base_url + "Welcome/vistaOrdenanzas",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}

function transSumarios() {
    $.post(
            base_url + "Welcome/vistaSumarios",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
                $("#anioSelect").click(function () {
                    actualizaTablaSumarios();

                });
            });
}

function actualizaTablaSumarios() {
    var anios = $("#anioSelect").val();

    //llama a la funcion que se encuentra el el welcome
    $.post(base_url + "Welcome/vistaTablaSumarios",
            {
                anios: anios,
            },
            function (pagina, datos) {
                //Se cargan los datos que vienen de cargarCargo del welcome                
                $("#ContenidoSumarios").html(pagina, datos);

            });
}

function transConvenios() {

    $.post(
            base_url + "Welcome/vistaConvenios",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}

function transMparticipacionCiudad() {

    $.post(
            base_url + "Welcome/vistaMpartCiudadana",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);

            });
}

function transConsejeros() {

    $.post(
            base_url + "Welcome/vistaConsejeros",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}



function transCosejo() {

    $.post(
            base_url + "Welcome/vistaConsejoMunicipal",
            {},
            function (pagina, datos) {


                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}

function transActasConsejos() {

    $.post(
            base_url + "Welcome/vistaActasConsejos",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}

function transCuentasPublicas() {

    $.post(
            base_url + "Welcome/vistaCpublicas",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);

            });
}

function transPrepAreaMuni() {

    $.post(
            base_url + "Welcome/vistaPrepAreaMuni",
            {},
            function (pagina, datos) {


            });
}

function transFComunMuni() {

    $.post(
            base_url + "Welcome/vistaFComunMuni",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}


function transResAuditorias() {

    $.post(
            base_url + "Welcome/vistaResAuditorias",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}


function transInfoTrimestral() {

    $.post(
            base_url + "Welcome/vistaInfoTrimestral",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}

function transOtrasEntidades() {

    $.post(
            base_url + "Welcome/vistaEntiMunicipales",
            {},
            function (pagina, datos) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina, datos);
            });
}

function transAnteMernorTaman() {

    $.post(
            base_url + "Welcome/vistaAnteMernorTaman",
            {},
            function (pagina) {

                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);

            });
}

function transDocReservados() {

    $.post(
            base_url + "Welcome/vistaDocReservados",
            {},
            function (pagina) {


                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);
            });
}

function transCostosReproduccion() {

    $.post(
            base_url + "Welcome/vistaCostosReproduccion",
            {},
            function (pagina) {


                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);
            });
}

function transDifTecnicas() {

    $.post(
            base_url + "Welcome/vistaDificultades",
            {},
            function (pagina) {


                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);
            });
}




//function transDirUnidades() {
//
//    $.post(
//            base_url + "Welcome/vistaDireccionUnidad",
//            {},
//            function (pagina) {
//
//
//                $("#ContenidoTrasparencia").hide();
//                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
//                $("#ContenidoTrasparencia").html(pagina);
//            });
//}
//

//function transJefeDepto() {
//
//    $.post(
//            base_url + "Welcome/vistajefeDepto",
//            {},
//            function (pagina) {
//
//
//                $("#ContenidoTrasparencia").hide();
//                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
//                $("#ContenidoTrasparencia").html(pagina);
//            });
//}
//

//function transReDeportivo() {
//
//    $.post(
//            base_url + "Welcome/vistaDeporte",
//            {},
//            function (pagina) {
//
//
//                $("#ContenidoTrasparencia").hide();
//                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
//                $("#ContenidoTrasparencia").html(pagina);
//            });
//}
//

function transPersonalRemun() {

    $.post(
            base_url + "Welcome/vistaPersonalRemun",
            {},
            function (pagina) {


                $("#sidebar").hide();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(pagina);
            });
}


//function transMe3UTM() {
//
//    $.post(
//            base_url + "Welcome/vistaMe3utm",
//            {},
//            function (pagina) {
//
//
//                $("#ContenidoTrasparencia").hide();
//                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
//                $("#ContenidoTrasparencia").html(pagina);
//            });
//}


//function transMa3UTM() {
//
//    $.post(
//            base_url + "Welcome/vistaMa3utm",
//            {},
//            function (pagina) {
//
//
//                $("#ContenidoTrasparencia").hide();
//                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
//                $("#ContenidoTrasparencia").html(pagina);
//            });
//}


//function transAntePreparatorios() {
//
//    $.post(
//            base_url + "Welcome/vistaAntePreparatorios",
//            {},
//            function (pagina) {
//
//
//                $("#ContenidoTrasparencia").hide();
//                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
//                $("#ContenidoTrasparencia").html(pagina);
//            });
//}



//function transVideoSenias() {
//
//    $.post(
//            base_url + "Welcome/vistaVideoSenias",
//            {},
//            function (pagina) {
//
//
//                $("#ContenidoTrasparencia").hide();
//                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
//                $("#ContenidoTrasparencia").html(pagina);
//            });
//}
//


//function transInfoPTrimestral() {
//
//    $.post(
//            base_url + "Welcome/vistaInfoPTrimestral",
//            {},
//            function (pagina) {
//
//
//                $("#ContenidoTrasparencia").hide();
//                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
//                $("#ContenidoTrasparencia").html(pagina);
//            });
//}
//
//// fondos comun Municipal
//function transModPresupuestaria() {
//
//    $.post(
//            base_url + "Welcome/vistaModPresupuestaria",
//            {},
//            function (pagina) {
//
//
//                $("#ContenidoTrasparencia").hide();
//                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
//                $("#ContenidoTrasparencia").html(pagina);
//            });
//}
//

//function transBPreAreasPresup() {
//
//    $.post(
//            base_url + "Welcome/vistaBPreAreasPresup",
//            {},
//            function (pagina) {
//
//
//                $("#ContenidoTrasparencia").hide();
//                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
//                $("#ContenidoTrasparencia").html(pagina);
//            });
//}

//function transEstadosFinan() {
//
//    $.post(
//            base_url + "Welcome/vistaEstadosFinan",
//            {},
//            function (pagina) {
//
//
//                $("#ContenidoTrasparencia").hide();
//                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
//                $("#ContenidoTrasparencia").html(pagina);
//            });
//}
//



