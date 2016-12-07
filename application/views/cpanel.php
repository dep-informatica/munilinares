
<script>
    $(function () {
        var tabs = $("#tabs").tabs();
        tabs.find(".ui-tabs-nav").sortable({
            axis: "x",
            stop: function () {
                tabs.tabs("refresh");
            }
        });
    });

    $("#cerrarSesion").button({icons: {primary: "ui-icon-power"}}).click(function () {
        cerrarSesion();
    });
    $("#ingresarnoticia").button({icons: {primary: "ui-icon-disk"}}).click(function () {
        ingresarnoticia();
    });
    $("#boton_subir").button({icons: {primary: "ui-icon-disk"}}).click(function () {
        ingresarHM();
    });
    $("#reportenoti").button({icons: {primary: "ui-icon-círculo-triángulo-s"}}).click(function () {
        reportenoti();
    });
    $(function () {
        $("#archivos").on("change", function () {
//            $("#vistaa").html("");

            var archivos = document.getElementById('archivos').files;
            var navegator = window.URL || window.webkitURL;
            var error = 1;
            if (archivos.length <= 5) {
                for (var i = 0; i < archivos.length; i++) {
                    var size = archivos[i].size;
                    var type = archivos[i].type;
                    var namee = archivos[i].name;
                    if (size > 1024 * 1024) {
                        alertify.error("Cualquier Imagen No puede Superar 1MB de Memoria de Almacenamiento.");
                        $('input[type=file]').val('');
                        error = 0;

                    } else {
                        if (type !== 'image/jpeg' && type !== 'image/jpg' && type !== 'image/png' && type !== 'image/gif') {
                            alertify.error("El formato de las Imagenes no es permitido");
                            $('input[type=file]').val('');

                        } else {
                            var objeto_url = navegator.createObjectURL(archivos[i]);
                            $("#vistaa").after("<img src=" + objeto_url + " width='100' height='100'>");
                        }
                    }
                }

            } else {
                alertify.error("Maximo 5 imagenes para la Galeria");
                $('input[type=file]').val('');
            }
            if (error === 0) {

                $('input[type=file]').val('');

            }
        });


        $("#archivos2").on("change", function () {
//            $("#vistaa").html("");
            var archivos = document.getElementById('archivos2').files;
            var navegator = window.URL || window.webkitURL;
            var error = 1;
            if (archivos.length <= 5) {
                for (var i = 0; i < archivos.length; i++) {
                    var size = archivos[i].size;
                    var type = archivos[i].type;
                    var namee = archivos[i].name;
                    if (size > 1024 * 1024) {
                        alertify.error("Cualquier Imagen No puede Superar 1MB de Memoria de Almacenamiento.");
                        $('input[type=file]').val('');
                        error = 0;
                    } else {
                        if (type !== 'image/jpeg' && type !== 'image/jpg' && type !== 'image/png' && type !== 'image/gif') {
                            alertify.error("El formato de las Imagenes no es permitido");
                            $('input[type=file]').val('');
                        } else {
                            var objeto_url = navegator.createObjectURL(archivos[i]);
                            $("#vistaa").after("<img src=" + objeto_url + " width='100' height='100'>");
                        }
                    }
                }
            } else {
                alertify.error("Maximo 5 imagenes para la Galeria");
                $('input[type=file]').val('');
            }
            if (error === 0) {
                $('input[type=file]').val('');
            }
        });



        $("#archFotoHM").on("change", function () {

            $("#vis22").html("");
            $("#vis22").html("<div id='vistaa2'>:</div>");

            var archivos = document.getElementById('archFotoHM').files;
            var navegator = window.URL || window.webkitURL;
            var error = 1;
            if (archivos.length <= 5) {
                for (var i = 0; i < archivos.length; i++) {
                    var size = archivos[i].size;
                    var type = archivos[i].type;
                    var namee = archivos[i].name;
                    if (size > 1024 * 1024) {
                        alertify.error("Cualquier Imagen No puede Superar 1MB de Memoria de Almacenamiento.");
                        $('input[type=file]').val('');
                        error = 0;

                    } else {
                        if (type !== 'image/jpeg' && type !== 'image/jpg' && type !== 'image/png' && type !== 'image/gif') {
                            alertify.error("El formato de las Imagenes no es permitido");
                            $('input[type=file]').val('');

                        } else {
                            var objeto_url = navegator.createObjectURL(archivos[i]);

                            $("#vistaa2").after("<img src=" + objeto_url + " width='100' height='100'>");
                        }
                    }
                }

            } else {
                alertify.error("Maximo 5 imagenes para la Galeria");
                $('input[type=file]').val('');
            }
            if (error === 0) {

                $('input[type=file]').val('');

            }
        });

        $("#archivopdf").on("change", function () {


            var archivos = document.getElementById('archivopdf').files;
            var navegator = window.URL || window.webkitURL;
            var error = 1;
            if (archivos.length >= 1) {
                for (var i = 0; i < archivos.length; i++) {
                    var size = archivos[i].size;
                    var type = archivos[i].type;
                    var namee = archivos[i].name;

                    if (type !== 'application/pdf') {
                        alertify.error("El formato permitido es PDF");
                        $("#archivopdf").val("");

                    } 

                }

            } else {
                alertify.error("Maximo 1 archivo PDF");
               $("#archivopdf").val("");
            }
            if (error === 0) {

               $("#archivopdf").val("");

            }
        });



    });

</script>

<div class="widget">
    <img src=""/>

    <h1>Panel De Control</h1>
    <fieldset>
        <legend><h2>Relaciones Publicas</h2></legend>
        <div class="controlgroup">
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Ingresar Noticia </a></li>
                    <li><a href="#tabs-2">Ingesar Boletin HM </a></li>
                    <li><a href="#tabs-3">Borrar Noticia</a></li>
                    <li><a href="#tabs-4">Cerrar Sesion </a></li>
                </ul>
                <div id="tabs-1">
                    <h3 style="align-content: center">Noticia</h3>
                    <table border="0">
                        <tr>
                            <td>Titulo</td>
                            <td><input id="txttituloo"type="text" id="txtTitulo" value=""  size="40"/></td>

                        </tr>
                        <tr>
                            <td>Encabezado</td>
                            <td><textarea id="txtencabezado" rows="5" cols="39"></textarea></td>

                        </tr>
                        <tr>
                            <td>Texto</td>
                            <td><textarea id="txttexto" rows="10" cols="39"></textarea></td>
                        </tr>
                        <tr>
                            <td>Bibliografia</td>
                            <td><input id="txtbibliografia" type="text" name="" value="" size="40" /></td>
                        </tr>
                        <tr>
                            <td>Autor</td>
                            <td><input id="txtautor" type="text" name="" value="" size="40"/></td>
                        </tr>
                        <tr>
                            <td>  Baner de Portada: </td>
                            <td> <input onchange="opcionvideo()"  id="rvideo"type="radio" name="multi" checked="true" />  Video  
                                <input onchange="opcionimagen()" id="rimagen"type="radio" name="multi"  /> Imagen :La Imagen o video tendra una dimencion de 660 x 250
                                <input type="hidden" id="oculto" value="video"/>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="text" id="ivideo" placeholder="https://www.youtube.com/watch?v=VDBN0xHD1Uc" /> - 
                                <input hidden="true" hidden="true" id="archivos2" type="file"  />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="background-color: #f44336; border-width: 3px; border-style: dashed; border-color: #72d38d"><h5>Albun de Noticia </h5> Las imagenes para el albun de la noticia no consideran una dimension especifica, Pero Si Un Formato (jpg-png) y no pueden superar 1MB(Recomendacion: Cargar todas las imagenes en una acción)</td>
                        </tr>
                        <tr>
                            <td>Selecciones 5 imagenes</td>
                            <td> 
                                <input type="file"  multiple="multiple" id="archivos">
                                <!--<input type="file" id="file" name="file[]" multiple="multiple"/>-->
                            </td>

                        </tr>
                        <tr style="background: #efefef">
                            <td> VISTA PREVIA </td>
                            <td><div id="vis2">
                                    <div id="vistaa">:</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><div class="mensage"> </div></td>
                            <td><div  id="carg" class="cssload-wraper">
                                    <div class="cssload-dots"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td><div  id="ingresarnoticia">INGRESAR NOTICIA</div></td>
                        </tr>
                    </table>

                </div>
                <div id="tabs-2">
                    <h3 style="align-content: center">HECHOS MUNICIPALES</h3>
                    <table border="0">
                        <tr>
                        <tr>
                            <td>Mencion:</td>
                            <td><input size="30" id="txtmencion" type="text" placeholder="extracto correspondiente al periodo ..."></td>

                        </tr>
                        <tr style="background-color: #f2f2f2">
                            <td>Imagen de Presentacion</td>
                            <td><input type="file" id="archFotoHM"><td style="background-color: #f44336; border-width: 3px; border-style: dashed; border-color: #72d38d"> Consideré  Un formato de imagen 1:2</td></td>
                        </tr>

                        <td> Fecha de Publicacion:</td>
                        <td><input id="datepicker" size="30">
                            <script>
                                $('#datepicker').datepicker({
                                    dateFormat: 'yy-mm-dd',
                                    duration: "fast",
                                    showAnim: "drop",
                                    showOptions: {direction: "up"}
                                });

                            </script> 
                        </td>

                        <tr>
                            <td>Selecciones Archivo PDF:</td>
                            <td><input type="file" placeholder=" archivo PDF"name="archivopdf" id="archivopdf"/></td>
                        </tr>
                        <tr>
                            <td>Cantidad De Paginas PDF</td>
                            <td><input type="number" id="cantidadhojas" name="cantidadhojas" placeholder="20"></td>
                        </tr>
                        <tr style="background: #efefef">
                            <td> VISTA PREVIA </td>
                            <td><div id="vis22">
                                    <div id="vistaa2">:</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><div  id="carg2" class="cssload-wraper">
                                    <div class="cssload-dots"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><div id="boton_subir">Ingresar Boletin</div></td>
                        </tr>
                    </table>
                </div>
                <div id="tabs-3">
                    <div id="reportenoti">Ver Reporte de Noticias </div>
                    <tr></tr>
                    <div id="reportenoticias"></div>

                </div>
                <div id="tabs-4">
                    <table>
                        <tr>
                            <td><h3>Cerrar sesion:</h3></td>
                            <td><div id="cerrarSesion">Cerrar Sesion</div></td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </fieldset>
    <br>

</div>