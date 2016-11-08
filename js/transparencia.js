//trasparencia

function vistaMenuTransparenciaActiva() {

    $.post(
            base_url + "Welcome/vistaMenuTransActiva",
            {},
            function (pagina) {

                $("#contenido").hide();
                $("#main").hide();
                $("#main").fadeIn(1000).delay(1000);
                $("#main").html(pagina);

            });
}

//diario oficial
function transCosejo() {

    $.post(
            base_url + "Welcome/vistaConsejoMunicipal",
            {},
            function (pagina) {

                
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}


//diario oficial
function transDirOficial() {

    $.post(
            base_url + "Welcome/vistaDiarioOficial",
            {},
            function (pagina, datos) {

              
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina, datos);
            });
}

//potestades
function transPotestades() {

    $.post(
            base_url + "Welcome/vistaPotestad",
            {},
            function (pagina, datos) {

            
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina, datos);
            }); 
}
//marco narrativo
function transMNarrativo() {

    $.post(
            base_url + "Welcome/vistaMarcoNarrat",
            {},
             function (pagina, datos) {

            
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina, datos);
            });
}

//director unidades
function transDirUnidades() {

    $.post(
            base_url + "Welcome/vistaDireccionUnidad",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

//jefe depto
function transJefeDepto() {

    $.post(
            base_url + "Welcome/vistajefeDepto",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

//recinto deportivo
function transReDeportivo() {

    $.post(
            base_url + "Welcome/vistaDeporte",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

//personal remuneracion
function transPersonalRemun() {

    $.post(
            base_url + "Welcome/vistaPersonalRemun",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

function transEmprendedores() {

    $.post(
            base_url + "Welcome/vistaEmprendedores",
            {},
             function (pagina, datos) {

            
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina, datos);
            });
}

function transPostulacionFondeve() {

    $.post(
            base_url + "Welcome/vistaPostulacionFondeve",
            {},
           function (pagina, datos) {

            
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina, datos);
            });
}

function transConcursoPublicos() {

    $.post(
            base_url + "Welcome/vistaConcursoPublicos",
            {},
           function (pagina, datos) {

            
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina, datos);
            });
}

function transPermisoEdif() {

    $.post(
            base_url + "Welcome/vistaPermisoEdif",
            {},
           function (pagina, datos) {
            
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina, datos);
            });
}


function transDecretoMunicipales() {

    $.post(
            base_url + "Welcome/vistaDecretoMunicipales",
            {},
           function (pagina, datos) {
            
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina, datos);
            });
}

function transOrdenanzas() {

    $.post(
            base_url + "Welcome/vistaOrdenanzas",
            {},
           function (pagina, datos) {
            
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina, datos);
            });
}

function transConvenios() {

    $.post(
            base_url + "Welcome/vistaConvenios",
            {},
           function (pagina, datos) {
            
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina, datos);
            });
}


//menor 3 utm
function transMe3UTM() {

    $.post(
            base_url + "Welcome/vistaMe3utm",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}


//mayor 3 utm
function transMa3UTM() {

    $.post(
            base_url + "Welcome/vistaMa3utm",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

//mecanismos participacion ciudadana
function transMparticipacionCiudad() {

    $.post(
            base_url + "Welcome/vistaMpartCiudadana",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

//consejeros
function transConsejeros() {

    $.post(
            base_url + "Welcome/vistaConsejeros",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

//actas consejos
function transActasConsejos() {

    $.post(
            base_url + "Welcome/vistaActasConsejos",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

//actas consejos
function transCuentasPublicas() {

    $.post(
            base_url + "Welcome/vistaCpublicas",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

//Otras Entidades Municipales
function transOtrasEntidades() {

    $.post(
            base_url + "Welcome/vistaEntiMunicipales",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

//documentos reservados
function transDocReservados() {

    $.post(
            base_url + "Welcome/vistaDocReservados",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}
//antecedentes preparatodios
function transAntePreparatorios() {

    $.post(
            base_url + "Welcome/vistaAntePreparatorios",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}
//antecedentes preparatodios
function transDifTecnicas() {

    $.post(
            base_url + "Welcome/vistaDificultades",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

// Resumen Auditorias
function transResAuditorias() {

    $.post(
            base_url + "Welcome/vistaResAuditorias",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

// informacion trimestral
function transInfoTrimestral() {

    $.post(
            base_url + "Welcome/vistaInfoTrimestral",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

// videos de señas informacion
function transVideoSenias() {

    $.post(
            base_url + "Welcome/vistaVideoSenias",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

// fondos comun Municipal
function transInfoPTrimestral() {

    $.post(
            base_url + "Welcome/vistaInfoPTrimestral",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

// fondos comun Municipal
function transModPresupuestaria() {

    $.post(
            base_url + "Welcome/vistaModPresupuestaria",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

// balance presupuestraio 
function transBPreAreasPresup() {

    $.post(
            base_url + "Welcome/vistaBPreAreasPresup",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

// balance presupuestraio 
function transPrepAreaMuni() {

    $.post(
            base_url + "Welcome/vistaPrepAreaMuni",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

// balance presupuestraio 
function transEstadosFinan() {

    $.post(
            base_url + "Welcome/vistaEstadosFinan",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

// balance presupuestraio 
function transCostosReproduccion() {

    $.post(
            base_url + "Welcome/vistaCostosReproduccion",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}

// Antecedentes preparatorios que afectan a Empresas de menor Tamaño
function transAnteMernorTaman() {

    $.post(
            base_url + "Welcome/vistaAnteMernorTaman",
            {},
            function (pagina) {

        
                $("#ContenidoTrasparencia").hide();
                $("#ContenidoTrasparencia").fadeIn(1000).delay(1000);
                $("#ContenidoTrasparencia").html(pagina);
            });
}



