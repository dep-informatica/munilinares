$(document).ready(function () {
    $("#conectar").button().click(function () {
        conectar();
    });
//    $("#areacliente").tabs();
//    $("#areaadministrador").tabs();
//    $("#areatecnico").tabs();
//    verifaLogin();
    $("#dialog").dialog({width: 400, autoOpen: false});
    $("#dialog").dialog({width: 400, autoOpen: false});
    $("#login").click(function () {
        $("#dialog").dialog("open");
    });
    $("#loginm").click(function () {
        $("#dialog").dialog("open");
    });

    verifaLogin();
    var p1 = "";
});
function vistamebePDF(id_hm) {

    $.post(
            base_url + "Welcome/vistaembepdf",
            {id_hm},
            function (pagina) {

                $("#dialog555").dialog("open");
                $("#stream").hide();
                $("#verPDF").hide();
                $("#verPDF").fadeIn(1000).delay(1000);
                $("#verPDF").html(pagina);
            });
}
function vistahechosmunicipales() {

    $.post(
            base_url + "Welcome/vistahechosmunicipales",
            {},
            function (ruta, datos) {

                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(ruta, datos);

            });
}
function conectar() {
    var correo = $("#correo").val();
    var clave = $("#clave").val();
    if (correo !== "" && clave !== "") {
        $.post(
                base_url + "welcome/conectar",
                {
                    correo: correo,
                    clave: clave
                },
                function (datos) {

                    if (datos.valor == 0) {

                        $("#stream").show();
//                        $("#contenido").hide();
                        alertify.error("Acceso Denegado");
                    } else {

                        $("#dialog").dialog("close");
                        if (datos.permiso == 1) {
                            $("#contenido").show();
                            cargacpanel();
                        }
                        if (datos.permiso == 2) {
                            $("#contenido").show();
                            cargacpanelconcejo();
                        }
                        verifaLogin();
                    }
                }, 'json'
                );
    } else {
        alertify.error("Revise Usuario y Contraseña");
    }
}
function cerrarSesion() {
    $.post(base_url + "welcome/cerrar",
            {
            }, function () {

        verifaLogin();
        alertify.success("Session Cerrada Correctamente");
    });
}
function verifaLogin() {
    $.post(
            base_url + "welcome/verifaLogin",
            {},
            function (datos) {

                if (datos.valor == 0) {

                    $("#contenido").hide();
                    cargarnoticias();
                } else {


                    if (datos.permiso == 1) {
                        $("#contenido").show();
                        cargacpanel();
                    }
                    if (datos.permiso == 2) {
                        $("#contenido").show();
                        cargacpanelconcejo();
                    }
                }
            }, 'json'
            );
}
function cargacpanel() {
    $.post(
            base_url + "welcome/cargacpanel",
            {},
            function (ruta, datos) {
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").html(ruta, datos);
                $("#contenido").show('fast');
            });
}
function cargacpanelconcejo() {
    $.post(
            base_url + "welcome/cargacpanelconcejo",
            {},
            function (ruta) {
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").html(ruta);
                $("#contenido").show('fast');
            });
}
function cargarnoticias() {
    $.post(
            base_url + "welcome/cargarnoticias",
            {},
            function (ruta, datos) {
                $("#stream").html(ruta, datos);
                $("#stream").show();
            });
}
function opcionvideo() {
    document.getElementById('archivos2').hidden = true;
    document.getElementById('ivideo').hidden = false;
    $("#oculto").val("video");
}
function opcionimagen() {
    document.getElementById('archivos2').hidden = false;
    document.getElementById('ivideo').hidden = true;
    $("#oculto").val("imagen");
}
function chek1() {
    document.getElementById('fotonuevaconcejal').hidden = true;
    $("#oculto4").val("conserva");
}
function chek2() {
    document.getElementById('fotonuevaconcejal').hidden = false;
    $("#oculto4").val("nueva");
}
function chek3() {
    document.getElementById('fotoactividad').hidden = false;
    $("#oculto5").val("si");
}
function chek4() {
    document.getElementById('fotoactividad').hidden = true;
    $("#oculto5").val("no");
}
function ingreactividad() {
    var txttituloactividad = $("#txttituloactividad").val();
    var txtparrafoactividad = $("#txtparrafoactividad").val();
    var oculto5 = $("#oculto5").val();
    if (txttituloactividad == '' || txtparrafoactividad == '') {
        alertify.error("Revise los campos");
    } else {
        if (oculto5 === "no") {
            $.post(
                    base_url + "welcome/ingreactividad",
                    {txttituloactividad: txttituloactividad,
                        txtparrafoactividad: txtparrafoactividad
                    },
                    function (valor) {
                        if (valor.valor == 1) {
                            alertify.success("Actividad Ingresada Correctamente");
                            $("#txttituloactividad").val("");
                            $("#txtparrafoactividad").val("");
                        } else {
                            alertify.error("Datos Fallidos Verifique los Campos");
                        }
                    }, 'json');
        }
        if (oculto5 === "si") {
            var archivos = document.getElementById("fotoactividad");
            var a = $("#fotoactividad").val();
            if (archivos === "" || archivos === null || archivos.length < 1 || a === "") {
                alertify.error("Verifique la entrada de la fotografia");
            } else {

                var archivo = archivos.files; //Obtenemos los archivos seleccionados en el imput
                //Creamos una instancia del Objeto FormDara.
                var archivos = new FormData();


                /* Como son multiples archivos creamos un ciclo for que recorra la el arreglo de los archivos seleccionados en el input
                 Este y añadimos cada elemento al formulario FormData en forma de arreglo, utilizando la variable i (autoincremental) como 
                 indice para cada archivo, si no hacemos esto, los valores del arreglo se sobre escriben*/
                for (i = 0; i < archivo.length; i++) {
                    archivos.append('archivo' + i, archivo[i]); //Añadimos cada archivo a el arreglo con un indice direfente
                    if (i == 0) {
                        var p1 = archivo[i].name;
                    }
                }
                /*Ejecutamos la función ajax de jQuery*/
                $.ajax({
                    url: base_url + "welcome/actividadfoto", //Url a donde la enviaremos
                    type: 'POST', //Metodo que usaremos
                    contentType: false, //Debe estar en false para que pase el objeto sin procesar
                    data: archivos, //Le pasamos el objeto que creamos con los archivos
                    processData: false, //Debe estar en false para que JQuery no procese los datos a enviar
                    cache: false //Para que el formulario no guarde cache
                }).done(function (valor) {//Escuchamos la respuesta y capturamos el mensaje msg

                    if (valor == "1") {
                        alertify.success("Foto subidos correctamente");
                    } else {
                        alertify.error("Error en la subida de Fotografia VERIFIQUE");
                    }
                });
                $.post(
                        base_url + "welcome/ingreactividadconfoto",
                        {
                            txttituloactividad: txttituloactividad,
                            txtparrafoactividad: txtparrafoactividad,
                            p1: p1
                        },
                        function (valor) {
                            if (valor.valor == 1) {
                                alertify.error("Datos Fallidos Verifique!");
                            } else {
                                alertify.success("Datos guardados Correctamente");
                                verifaLogin();
                            }
                        }, 'json');

            }
        }
    }
}
function zoommas() {
    var fontSize = 1;
    fontSize += 0.1;
//    document.post.texto.p.fontSize = fontSize + "em";
    document.getElementsByTagName("p").style.fontSize = fontSize + "em";
}
function masnoticias() {
    $.post(
            base_url + "welcome/masnoticias",
            {},
            function (ruta, datos) {
                $("#contenido").hide();
                $("#contenido").html(ruta, datos);
                $("#contenido").show('fast');
            });
}
function verifaLogin2no() {
    $.post(
            base_url + "welcome/verifaLogin",
            {},
            function (datos) {

                if (datos.valor == 0) {
                    $("#stream").show();
                    cargarnoticias();
                    $("#contenido").hide();
                } else {

                    if (datos.permiso == 1) {

                        $("#stream").hide();
                        $("#contenido").show();
                    }
                }
            }, 'json'
            );
}
function vernoticia(id) {

    $("#stream").hide();
    $.post(
            base_url + "welcome/vernoticia",
            {id: id},
            function (ruta, datos) {
                $("#stream").hide();
                $("#stream").html(ruta, datos);
                $("#stream").show();
            });
}
function verreporteacti() {
    $.post(
            base_url + "welcome/verreporteacti",
            {},
            function (ruta, datos) {
                $("#reporteacti").html(ruta, datos);
            });
}
function reportenoti() {
    $.post(
            base_url + "welcome/reportenoti",
            {},
            function (ruta, datos) {
                $("#reportenoticias").html(ruta, datos);
            });
}
function ingresarHM() {
    var txtmencion = $("#txtmencion").val();
    var fecha = $("#datepicker").val();
    var cantidadhojas = $("#cantidadhojas").val();

    var archivospor = document.getElementById("archFotoHM").files; //Creamos de la portada
    var archivos = document.getElementById("archivopdf").files; //Creamos un objeto con el elemento que contiene los archivos: el campo input file, que tiene el id = 'archivos'

    if (archivos.length !== 1 || archivospor.length !== 1) {
        alertify.error(" revise las entrada de sus archivos");
    } else {
        if (fecha == '' || fecha == null || txtmencion == '' || cantidadhojas == '') {
            alertify.error("Revise los Campos");
        } else {
            if (cantidadhojas < 2) {
                alertify.error("revise la Cantidad");
            } else {
                $("#carg2").show();
                var archivos2 = document.getElementById("archFotoHM");
                var archivo2 = archivos2.files;
                var archivos2 = new FormData();
                var p2 = "";
                for (i = 0; i < archivo2.length; i++) {
                    archivos2.append('archFotoHM' + i, archivo2[i]); //Añadimos cada archivo a el arreglo con un indice direfente
                    p2 = archivo2[i].name;
                }

                $.ajax({
                    url: base_url + "welcome/ingresarHMp", //Url a donde la enviaremos
                    type: 'POST', //Metodo que usaremos
                    contentType: false, //Debe estar en false para que pase el objeto sin procesar
                    data: archivos2, //Le pasamos el objeto que creamos con los archivos
                    processData: false, //Debe estar en false para que JQuery no procese los datos a enviar
                    cache: false //Para que el formulario no guarde cache
                }).done(function (valor) {//Escuchamos la respuesta y capturamos el mensaje msg
                    if (valor == "0") {
                        alertify.success(" Portada subida correctamente");

                    }
                });

                var archivos = document.getElementById("archivopdf");
                var archivo = archivos.files;
                var archivos = new FormData();
                var p1 = "";
                for (i = 0; i < archivo.length; i++) {
                    archivos.append('archivo' + i, archivo[i]); //Añadimos cada archivo a el arreglo con un indice direfente
                    p1 = archivo[i].name;
                }

                $.ajax({
                    url: base_url + "welcome/ingresarHM", //Url a donde la enviaremos
                    type: 'POST', //Metodo que usaremos
                    contentType: false, //Debe estar en false para que pase el objeto sin procesar
                    data: archivos, //Le pasamos el objeto que creamos con los archivos
                    processData: false, //Debe estar en false para que JQuery no procese los datos a enviar
                    cache: false //Para que el formulario no guarde cache
                }).done(function (valor) {//Escuchamos la respuesta y capturamos el mensaje msg
                    if (valor == "0") {
                        alertify.success("PDF subidos correctamente");
                        $("#carg2").hide();
                        $.post(
                                base_url + "welcome/ingresarHMf",
                                {
                                    txtmencion: txtmencion,
                                    fecha: fecha,
                                    p1: p1,
                                    p2: p2,
                                    cantidadhojas: cantidadhojas

                                },
                                function (datos) {

                                    if (datos.valor == 1) {
                                        alertify.success("Guardado Correctamente");
                                    } else {
                                        alertify.error("Verifique la Fecha y vuelva a Subir");
                                    }
                                }, 'json'
                                );
                        $("#datepicker").val("");
                        $("#archivopdf").val("");
                        $("#archFotoHM").val("");
                        $("#txtmencion").val("");
                        $("#cantidadhojas").val("");
                        $("#vis22").html("");
                        $("#vis22").html("<div id='vistaa2'>:</div>");
                    } else {
                        alertify.error("Error en la subida de archivos VERIFIQUE");
                        $("#datepicker").val(" ");
                        $("#archivopdf").val("");
                        $("#archFotoHM").val("");
                        $("#txtmencion").val("");
                        $("#cantidadhojas").val("");
                    }
                });
            }
        }
    }


}
function actualizarperfil() {

    var txtpropuesta = $("#txtpropuesta").val();
    var con = $("#oculto4").val();
    if (txtpropuesta === "" || txtpropuesta === ' ' || txtpropuesta === null) {
        alertify.error("Verifique Su Propuesta");
    } else {
        if (con === "conserva") {
            $.post(
                    base_url + "welcome/propuesta",
                    {
                        txtpropuesta: txtpropuesta
                    },
                    function (valor) {
                        if (valor.valor == 1) {
                            alertify.success("Datos Actualizados Correctamente");
                        } else {
                            alertify.error("Datos Fallidos Verifique!");
                        }
                    }, 'json');
        }
        if (con === "nueva") {
            var archivos = document.getElementById("fotonuevaconcejal");
            var a = $('input[type=file]').val();
            if (archivos === "" || archivos === null || archivos.length < 1 || a === "") {
                alertify.error("Verifique la entrada de la fotografia");
            } else {

                var archivo = archivos.files; //Obtenemos los archivos seleccionados en el imput
                //Creamos una instancia del Objeto FormDara.
                var archivos = new FormData();


                /* Como son multiples archivos creamos un ciclo for que recorra la el arreglo de los archivos seleccionados en el input
                 Este y añadimos cada elemento al formulario FormData en forma de arreglo, utilizando la variable i (autoincremental) como 
                 indice para cada archivo, si no hacemos esto, los valores del arreglo se sobre escriben*/
                for (i = 0; i < archivo.length; i++) {
                    archivos.append('archivo' + i, archivo[i]); //Añadimos cada archivo a el arreglo con un indice direfente
                    if (i == 0) {
                        var p1 = archivo[i].name;
                    }
                }
                /*Ejecutamos la función ajax de jQuery*/
                $.ajax({
                    url: base_url + "welcome/actualizarperfil", //Url a donde la enviaremos
                    type: 'POST', //Metodo que usaremos
                    contentType: false, //Debe estar en false para que pase el objeto sin procesar
                    data: archivos, //Le pasamos el objeto que creamos con los archivos
                    processData: false, //Debe estar en false para que JQuery no procese los datos a enviar
                    cache: false //Para que el formulario no guarde cache
                }).done(function (valor) {//Escuchamos la respuesta y capturamos el mensaje msg

                    if (valor == "1") {
                        alertify.success("Foto subidos correctamente");
                    } else {
                        alertify.error("Error en la subida de Fotografia VERIFIQUE");
                    }
                });
                $.post(
                        base_url + "welcome/actualizarperfil2",
                        {
                            txtpropuesta: txtpropuesta,
                            p1: p1
                        },
                        function (valor) {
                            if (valor.valor == 1) {
                                alertify.error("Datos Fallidos Verifique!");
                            } else {
                                alertify.success("Datos guardados Correctamente");
                                verifaLogin();
                            }
                        }, 'json');

            }
        }
    }
}
function ingresarnoticia() {
    var titulo = $("#txttituloo").val();
    var encabezado = $("#txtencabezado").val();
    var texto = $("#txttexto").val();
    var bibliografia = $("#txtbibliografia").val();
    var autor = $("#txtautor").val();
    var linkofoto = $("#oculto").val();
    var ruta = $("#ivideo").val();
    var fotoportada = "";
    if (titulo == '' || encabezado == '' || texto == '' || bibliografia == '' || autor == '') {
        alertify.error("Revise los campos! Minimo 3 caracteres");
    } else {
        $("#carg").show();
        var archivos = document.getElementById("archivos"); //Creamos un objeto con el elemento que contiene los archivos: el campo input file, que tiene el id = 'archivos'
        var archivo = archivos.files; //Obtenemos los archivos seleccionados en el imput
        //Creamos una instancia del Objeto FormDara.
        var archivos = new FormData();
        /* Como son multiples archivos creamos un ciclo for que recorra la el arreglo de los archivos seleccionados en el input
         Este y añadimos cada elemento al formulario FormData en forma de arreglo, utilizando la variable i (autoincremental) como 
         indice para cada archivo, si no hacemos esto, los valores del arreglo se sobre escriben*/
        for (i = 0; i < archivo.length; i++) {
            archivos.append('archivo' + i, archivo[i]); //Añadimos cada archivo a el arreglo con un indice direfente
            if (i == 0) {
                var p1 = archivo[i].name;
            }
            if (i == 1) {
                var p2 = archivo[i].name;
            }
            if (i == 2) {
                var p3 = archivo[i].name;
            }
            if (i == 3) {
                var p4 = archivo[i].name;
            }
            if (i == 4) {
                var p5 = archivo[i].name;
            }


        }

        /*Ejecutamos la función ajax de jQuery*/
        $.ajax({
            url: base_url + "welcome/ingresaralbun", //Url a donde la enviaremos
            type: 'POST', //Metodo que usaremos
            contentType: false, //Debe estar en false para que pase el objeto sin procesar
            data: archivos, //Le pasamos el objeto que creamos con los archivos
            processData: false, //Debe estar en false para que JQuery no procese los datos a enviar
            cache: false //Para que el formulario no guarde cache
        }).done(function (valor) {//Escuchamos la respuesta y capturamos el mensaje msg
            if (valor == "1") {
                alertify.success("archivos subidos correctamente");
            } else {
                alertify.error("Error en la subida de archivos VERIFIQUE");
            }
        });
        if (linkofoto == "video") {
            $.post(
                    base_url + "welcome/ingresarnoticia",
                    {
                        titulo: titulo,
                        encabezado: encabezado,
                        texto: texto,
                        bibliografia: bibliografia,
                        autor: autor,
                        linkofoto: linkofoto,
                        ruta: ruta,
                        p1: p1,
                        p2: p2,
                        p3: p3,
                        p4: p4,
                        p5: p5
                    },
                    function (valor) {
                        if (valor.valor == 1) {
                            alertify.error("Datos Fallidos Verifique!");
                        } else {
                            alertify.success("Datos guardados Correctamente");
                            $("#txttituloo").val("");
                            $("#txtencabezado").val("");
                            $("#txttexto").val("");
                            $("#txtbibliografia").val("");
                            $("#txtautor").val("");
                            $("#ivideo").val("");
                            $('input[type=file]').val('');
                            $("#vis2").html("");
                            $("#vis2").html("<div id='vistaa'>:</div>");
                        }
                    }, 'json');
        }
        if (linkofoto == "imagen") {
            var archivos2 = document.getElementById("archivos2"); //Creamos un objeto con el elemento que contiene los archivos: el campo input file, que tiene el id = 'archivos'
            var archivo = archivos2.files; //Obtenemos los archivos seleccionados en el imput
            //Creamos una instancia del Objeto FormDara.
            var archivos2 = new FormData();
            /* Como son multiples archivos creamos un ciclo for que recorra la el arreglo de los archivos seleccionados en el input
             Este y añadimos cada elemento al formulario FormData en forma de arreglo, utilizando la variable i (autoincremental) como 
             indice para cada archivo, si no hacemos esto, los valores del arreglo se sobre escriben*/
            for (i = 0; i < archivo.length; i++) {
                archivos2.append('archivo' + i, archivo[i]); //Añadimos cada archivo a el arreglo con un indice direfente
                var fotoportada = archivo[i].name;
            }
            $.ajax({
                url: base_url + "welcome/ingresportada", //Url a donde la enviaremos
                type: 'POST', //Metodo que usaremos
                contentType: false, //Debe estar en false para que pase el objeto sin procesar
                data: archivos2, //Le pasamos el objeto que creamos con los archivos
                processData: false, //Debe estar en false para que JQuery no procese los datos a enviar
                cache: false //Para que el formulario no guarde cache
            }).done(function (valor) {//Escuchamos la respuesta y capturamos el mensaje msg
                if (valor == "1") {
                    alertify.success("archivos subidos correctamente");
                } else {
                    alertify.error("Error en la subida de archivos VERIFIQUE");
                }
            });
            $.post(
                    base_url + "welcome/ingresarnoticia",
                    {
                        titulo: titulo,
                        encabezado: encabezado,
                        texto: texto,
                        bibliografia: bibliografia,
                        autor: autor,
                        linkofoto: linkofoto,
                        ruta: fotoportada,
                        p1: p1,
                        p2: p2,
                        p3: p3,
                        p4: p4,
                        p5: p5
                    },
                    function (valor) {
                        if (valor.valor == 1) {
                            alertify.error("Datos Fallidos Verifique!");
                        } else {
                            alertify.success("Datos guardados Correctamente");
                            $("#txttituloo").val("");
                            $("#txtencabezado").val("");
                            $("#txttexto").val("");
                            $("#txtbibliografia").val("");
                            $("#txtautor").val("");
                            $("#archivos").val("");
                            $('input[type=file]').val('');
                            $("#vis2").html("");
                            $("#vis2").html("<div id='vistaa'>:</div>");
                        }
                    }, 'json');
        }
        $("#carg").hide();
    }
}
function MensajeFinal(msg) {
    $('.mensage').html(msg); //A el div con la clase msg, le insertamos el mensaje en formato  thml
    $('.mensage').show('slow'); //Mostramos el div.
}
function EVAL(id_solicitud) {
    alert(id_solicitud);
    var s5 = document.getElementById("puntaje" + id_solicitud).value;
    $.post(
            base_url + "welcome/evaluar",
            {
                id: id_solicitud,
                puntaje: s5
            },
            function (valor) {
                if (valor.valor == 1) {
                    alertify.error("Datos Farridos Verifique!");
                } else {
                    alertify.success("EVALUACION ENVIADA CORRECTAMENTE");
                    reportecliente();
                    $("#dialog3" + id_solicitud).dialog("close");
                }
            }, 'json');
}
function guardarcambios() {

    var codig = $("#oculto").val();
    var comentariotecnico = $("#ComentarioTecnico").val();
    var fecha = $("#datepicker").val();
    if (comentariotecnico.length < 5 || comentariotecnico == '') {
        alertify.error("Ingrese comentario!");
    } else {
        $.post(
                base_url + "welcome/guardarcambios",
                {
                    id_solicitud: codig,
                    fecha: fecha,
                    comentariotecnico: comentariotecnico
                },
                function (valor) {
                    if (valor.valor == 1) {
                        alertify.error("Datos Fallidos Verifique!");
                    } else {
                        alertify.success("Datos guardados Correctamente");
                        $("#ComentarioTecnico").val("");
                        $("#dialog").dialog("close");
                    }
                }, 'json');
    }
}
function Terminar() {

    var codigo = $("#oculto").val();
    var coment = $("#ComentarioTecnico").val();
    if (coment.length == 0) {
        alertify.error("Antes de Terminar Con la Solicitud Debe Dejar una " + 'Aclaracion' + "");
    } else {
        alertify.confirm("<p>Seguro que desea terminar con la Solicitud?.<br><br><b>ENTER</b> o <b>ACEPTAR</b> Si <br>  <b>ESC</b> o <b>CANCELAR</b> No</p>", function (e) {
            if (e) {
                $.post(base_url + "welcome/Terminar", {
                    codigo: codigo
                }, function () {
                    alertify.success("Solicitud Terminada con Exito");
                }, 'json');
                $("#dialog").dialog("close");
                verifaLogin();
            } else {
                alertify.error("Solicitud aun en proceso");
            }
        });
    }
    return false;
}
function derivar(id_solicitud) {

    var s4 = document.getElementById("selectee" + id_solicitud).value;
    var s4 = document.getElementById("selectee" + id_solicitud).value;
    $.post(
            base_url + "welcome/derivar",
            {
                id_solicitud: id_solicitud,
                id_tecnico: s4
            },
            function (valor) {
                if (valor.valor == 1) {
                    alertify.error("Solicitud no puede ser Derivada!");
                } else {
                    alertify.success("Solicitud derivada Exitosamente");
                    reporte();
                }
            }, 'json'
            );
}
function eliminarnoticia(id_noticia) {
    alertify.confirm("<p>Seguro que desea Eliminar  la noticia .<br><br><b>ENTER</b> o <b>ACEPTAR</b> Si <br>  <b>ESC</b> o <b>CANCELAR</b> No</p>", function (e) {
        if (e) {
            $.post(base_url + "welcome/eliminarnoticia", {
                id_noticia: id_noticia
            }, function (valor) {
                if (valor.valor == 1) {
                    alertify.success("Noticia Eliminada con Exito");
                }
            }, 'json');
            $("#reportenoticias").val("");
            reportenoti();
        } else {
            alertify.error("Eliminacion cancelada " + " Noticia Aun  Visible" + "");
        }
    });
}
function eliminaractividad(id_actividad_concejal) {
    alertify.confirm("<p>Seguro que desea Eliminar  la Actividad .<br><br><b>ENTER</b> o <b>ACEPTAR</b> Si <br>  <b>ESC</b> o <b>CANCELAR</b> No</p>", function (e) {
        if (e) {
            $.post(base_url + "welcome/eliminaractividad", {
                id_actividad_concejal: id_actividad_concejal
            }, function (valor) {
                if (valor.valor == 1) {
                    alertify.success("Actividad Eliminada con Exito");
                }
            }, 'json');
            verreporteacti();
        } else {
            alertify.error("Eliminacion cancelada " + " Actividad Aun  Visible" + "");
        }
    });
}
function ingresosolicitud() {
    var categoria = $("#categorias").val();
    var comentario = $("#comentarios").val();
    if (comentario.length < 5 || comentario == "") {
        alertify.error("Revise los campos!");
    } else {
        $.post(
                base_url + "welcome/ingresosolicitud",
                {
                    categoria: categoria,
                    comentario: comentario
                },
                function (valor) {
                    if (valor.valor == 1) {
                        alertify.error("Datos fallidos ¡verifique!");
                    } else {
                        alertify.success("Datos Ingresados correctamente");
                        $("#comentarios").val("");
                        reportecliente();
                        enviarcorreo();
                    }
                }, 'json'
                );
    }
}
function ingresarcategoria() {
    var newcategoria = $("#newcategoria").val();
    var categorianueva = newcategoria.toUpperCase();
    if (categorianueva.length < 3 || categorianueva == "") {

        alertify.error("Revise el campos, minimo 3 caracteres");
    } else {
        $.post(
                base_url + "welcome/ingresarcategoria",
                {
                    categorianueva: categorianueva
                },
                function (valor) {
                    if (valor.valor == 1) {
                        alertify.error("La Categoria Ya existe!");
                    } else {
                        alertify.success("categoria ingresada correctamente");
                        $("#newcategoria").val("");
                        cargarCategorias2();
                    }
                }, 'json'
                );
    }
}
function modificarcategoria() {
    var newcategoria = $("#newcategoria").val();
    var categorianueva = newcategoria.toUpperCase();
    var actual = document.getElementById('reportecategorias').value;
    alertify.confirm("<p>¿Seguro que deseas modificar la categoria?.<br>\n\
Tenga en cuenta que se modificaran todas las categorias asociadas a la actual<br><br><b>ENTER</b> o <b>ACEPTAR</b> Si <br>  <b>ESC</b> o <b>CANCELAR</b> No</p>", function (e) {
        if (e) {
            if (categorianueva.length < 3 || categorianueva == "") {

                alertify.error("Revise el campos, minimo 3 caracteres");
            } else {
                $.post(
                        base_url + "welcome/modificarcategoria",
                        {
                            categorianueva: categorianueva,
                            actual: actual
                        },
                        function (valor) {
                            if (valor.valor == 1) {
                                alertify.error("La Categoria Ya existe!");
                            } else {
                                alertify.success("Categoria MODIFICADA correctamente");
                                $("#newcategoria").val("");
                                cargarCategorias2();
                            }
                        }, 'json'
                        );
            }

        } else {
            alertify.error("Categoria Actual No Modificada");
            $("#newcategoria").val("");
        }
    });
}
function cargarCategorias() {
    $.post(
            base_url + "welcome/cargarCategorias",
            {},
            function (ruta, datos) {
                $("#categorias").html(ruta, datos);
            });
}
function cargarCategorias2() {
    $.post(
            base_url + "welcome/cargarCategorias2",
            {},
            function (ruta, datos) {
                $("#reportecategorias").html(ruta, datos);
            });
}
function reportecliente() {
    $.post(
            base_url + "welcome/reportecliente",
            {},
            function (ruta, datos) {
                $("#CargaSolicitudesCliente").hide();
                $("#CargaSolicitudesCliente").html(ruta, datos);
                $("#CargaSolicitudesCliente").show('fast');
            });
}
function contacto() {
    $.post(
            base_url + "welcome/contacto",
            {},
            function (ruta) {
                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").html(ruta);
                $("#contenido").fadeIn(2000).delay(2000);
            });
}
function enviar() {

    var nombre = $("#txtnombre").val();
    var mail = $("#txtmail").val();
    var asunto = $("#txtasunto").val();
    var mensaje = $("#txtmensaje").val();
    var txtCaptcha = $("#txtCaptcha").val();
    var txtInput = $("#txtInput").val();
    var depart = $("#depart").val();
    if (nombre == '' || mail == '' || asunto == '' || mensaje == '' || txtInput == '') {
        alertify.error("Revise los campos");
    } else {
        if (txtInput != txtCaptcha) {
            alertify.error("Revise su codigo de verificacion");
        } else {
            var n = mail.indexOf("@");
            if (n == -1) {
                alertify.error("Revise su direccion de correo electronico");
            } else {
                alertify.confirm("<p>Seguro que desea enviar tu mensaje al " + j + " .<br><br><b>ENTER</b> o <b>ACEPTAR</b> Si <br>  <b>ESC</b> o <b>CANCELAR</b> No</p>", function (e) {
                    if (e) {
                        $.post(base_url + "welcome/enviar", {
                            nombre: nombre,
                            mail: mail,
                            asunto: asunto,
                            mensaje: mensaje,
                            depart: depart
                        }, function (valor) {
                            if (valor.valor == 1) {
                                alertify.success("Mail enviado  con Exito");
                                $("#txtnombre").val("");
                                $("#txtmail").val("");
                                $("#txtasunto").val("");
                                $("#txtmensaje").val("");
                                $("#txtInput").val("");
                            } else {
                                alertify.error("Revise su email y vuelva a enviarlo");
                            }

                        }, 'json');
                    } else {
                        alertify.error("Revise su email y vuelva a enviarlo");
                    }
                });
            }
        }
    }
}
function reportetecnico() {
    $.post(
            base_url + "welcome/reportetecnico",
            {},
            function (ruta, datos) {
                $("#reporte3").hide();
                $("#reporte3").html(ruta, datos);
                $("#reporte3").show('fast');
            });
}
function concejo() {
    $.post(
            base_url + "Welcome/concejo",
            {},
            function (ruta, datos) {



                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(ruta, datos);
            });
}
function cuentaspublicas() {
    $.post(
            base_url + "Welcome/cuentaspublicas",
            {},
            function (ruta, datos) {



                $("#sidebar").show();
                $("#stream").hide();
                $("#contenido").hide();
                $("#contenido").fadeIn(1000).delay(1000);
                $("#contenido").html(ruta, datos);
            });
}
function actividadconcejal(id) {

    $.post(
            base_url + "welcome/actividad",
            {id: id},
            function (ruta, datos) {
                $("#activitiesconcejales").hide();
                $("#activitiesconcejales").html(ruta, datos);
                $("#activitiesconcejales").show();
            });
    $("#dialogconcejal").dialog("open");
}
