
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
    $("#fechaevento").datepicker({
        dateFormat: 'yy-mm-dd',
        duration: "fast",
        showAnim: "bounce",
        showOptions: {direction: "up"}
    });

    $(function () {
        var dateFormat = "mm-dd-yy",
                from = $("#fechadesde")
                .datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 3
                })
                .on("change", function () {
                    to.datepicker("option", "minDate", getDate(this));
                }),
                to = $("#fechahasta").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3
        })
                .on("change", function () {
                    from.datepicker("option", "maxDate", getDate(this));
                });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    });

    $("#cerrarSesion").button({icons: {primary: "ui-icon-power"}}).click(function () {
        cerrarSesion();
    });
    $("#actualizarperfil").button({icons: {primary: "ui-icon-disk"}}).click(function () {
        actualizarperfil();
    });
    $("#ingresaevento").button({icons: {primary: "ui-icon-disk"}}).click(function () {
        ingresaevento();
    });
    $("#verreporteacti").button({icons: {primary: "ui-icon-círculo-triángulo-s"}}).click(function () {
        verreporteacti();
    });

    $(function () {
        $("#fotoevento").on("change", function () {
            //sabiduriaaaa
            $('#vistaa').remove();
            document.getElementById("vis2").innerHTML = "<div id='vistaa'>:</div>";

            var archivos = document.getElementById('fotoevento').files;
            var navegator = window.URL || window.webkitURL;
            var error = 1;
            if (archivos.length <= 1) {
                for (var i = 0; i < archivos.length; i++) {
                    var size = archivos[i].size;
                    var type = archivos[i].type;
                    var namee = archivos[i].name;
                    if (size > 1024 * 1024) {
                        alertify.error("Cualquier Imagen No puede Superar 1MB de Almacenamiento.");
                        $('input[type=file]').val('');
                        error = 0;
                    } else {
                        if (type !== 'image/jpeg' && type !== 'image/jpg' && type !== 'image/png' && type !== 'image/gif') {
                            alertify.error("El formato de las Imagene no es permitido");
                            $('input[type=file]').val('');

                        } else {
                            var objeto_url = navegator.createObjectURL(archivos[i]);
                            $("#vistaa").after("<img src=" + objeto_url + " width='200' height='200'>");
                        }
                    }
                }
            } else {
                alertify.error("Maximo 1 imagenes par evento");
                $('input[type=file]').val('');
            }
            if (error === 0) {

                $('input[type=file]').val('');

            }
        });
    });

</script>

<div class="widget">
    <img src=""/>

    <h1>Panel De Control </h1>
    <fieldset>
        <legend><h2>Eventos</h2></legend>
        <div class="controlgroup">
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Ingresar Evento </a></li>
                    <li><a href="#tabs-2">Resporte Actividad </a></li>
                    <li><a href="#tabs-3">Administrar Actividad</a></li>
                    <li><a href="#tabs-4">Cerrar Sesion </a></li>
                </ul>
                <div id="tabs-1">
                    <h3 style="align-content: center">NUEVO EVENTO</h3>
                    <table   style="border-collapse: separate;
                             border-spacing:  0px 5px;" >
                        <tr>
                            <td> Titulo del evento o Actividad:</td>
                            <td><input type="text" id="tituloevento" maxlength="100" size="31"/> </td>
                        </tr>
                        <tr>
                            <td> Detalle: </td>
                            <td> <textarea maxlength="1000"id="detalleevento" rows="10" cols="30">
                                </textarea></td>
                        </tr>

                        <tr>
                            <td>Direccion del evento:</td>
                            <td>  
                                <input type="text" id="direccionevento" maxlength="100" size="31"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Fecha del evento: </td>
                            <td><input type="text" id="fechaevento">
                            </td>
                        </tr>
                        <tr>
                            <td>Tiempo de visibilidad:</td>
                            <td><label for="from">Desde</label>
                                <input type="text" id="fechadesde" name="from">
                                <label for="to">Hasta</label>
                                <input type="text" id="fechahasta" name="to">
                            </td>
                        </tr>
                        <tr>
                            <td>Seleccione Imagen del Evento</td>
                            <td style="background-color: #ffffcc"> 
                                <input type="file"  id="fotoevento">
                            </td>
                        </tr> 
                        <tr><td></td>
                            <td style="background-color: #ffffcc">Recuerde que para una buena  visualización su imagen debe ser en  proporcion debe ser :11</td>
                        </tr>
                        <tr style="padding: 10px"></tr>
                        <tr style="background: #efefef">
                            <td> VISTA PREVIA </td>
                            <td><div id="vis2">
                                    <div id="vistaa">:</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><div id="ingresaevento">Ingresar Evento</div></td>
                        </tr>
                    </table>

                </div>
                <div id="tabs-2">
                    <div id="verreporteacti">Reporte de eventos</div>
                    <tr></tr>
                    <div id="reporteacti"></div>
                </div>
                <div id="tabs-3">
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