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


});

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
function reportenoti() {
    $.post(
            base_url + "welcome/reportenoti",
            {},
            function (ruta, datos) {
                $("#reportenoticias").html(ruta, datos);
            });
}
function ingresarHM() {
    var fecha = $("#datepicker").val();
    var archivos = document.getElementById("archivopdf").files;//Creamos un objeto con el elemento que contiene los archivos: el campo input file, que tiene el id = 'archivos'

    if (archivos.length !== 1) {
        alertify.error(" revise la entrada de su archivo PDF");
    } else {
        if (fecha == '' || fecha == null) {
            alertify.error("Revise los Campos");
        } else {
            $("#carg2").show();
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
                                fecha: fecha,
                                p1: p1
                            },
                            function (datos) {

                                if (datos.valor == 1) {
                                    alertify.success("Guardado Correctamente");
                                } else {
                                    alertify.error("Verifique la Fecha y vuelva a Subir");
                                }
                            }, 'json'
                            );
                    $("#datepicker").val(" ");
                    $("#archivopdf").val("");

                } else {
                    alertify.error("Error en la subida de archivos VERIFIQUE");
                    $("#datepicker").val(" ");
                    $("#archivopdf").val("");
                }
            });

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
        var archivos = document.getElementById("archivos");//Creamos un objeto con el elemento que contiene los archivos: el campo input file, que tiene el id = 'archivos'
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
            var archivos2 = document.getElementById("archivos2");//Creamos un objeto con el elemento que contiene los archivos: el campo input file, que tiene el id = 'archivos'
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
    $('.mensage').html(msg);//A el div con la clase msg, le insertamos el mensaje en formato  thml
    $('.mensage').show('slow');//Mostramos el div.
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
