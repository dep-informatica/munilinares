
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
    $("#actualizarperfil").button({icons: {primary: "ui-icon-disk"}}).click(function () {
        actualizarperfil();
    });
    $("#ingreactividad").button({icons: {primary: "ui-icon-disk"}}).click(function () {
        ingreactividad();
    });
    $("#verreporteacti").button({icons: {primary: "ui-icon-círculo-triángulo-s"}}).click(function () {
      verreporteacti();
    });
    $(function () {
        $("#fotonuevaconcejal").on("change", function () {
            //sabiduriaaaa
            $('#vistaa').remove();
            document.getElementById("vis2").innerHTML = "<div id='vistaa'>:</div>";

            var archivos = document.getElementById('fotonuevaconcejal').files;
            var navegator = window.URL || window.webkitURL;
            var error = 1;
            if (archivos.length <= 1) {
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
                            alertify.error("El formato de las Imagene no es permitido");
                            $('input[type=file]').val('');

                        } else {
                            var objeto_url = navegator.createObjectURL(archivos[i]);
                            $("#vistaa").after("<img src=" + objeto_url + " width='200' height='200'>");
                        }
                    }
                }
            } else {
                alertify.error("Maximo 1 imagenes para la Galeria");
                $('input[type=file]').val('');
            }
            if (error === 0) {

                $('input[type=file]').val('');

            }
        });
    });
        $(function () {
        $("#fotoactividad").on("change", function () {
            //sabiduriaaaa
            $('#vistaa3').remove();
            document.getElementById("vis3").innerHTML = "<div id='vistaa3'>:</div>";

            var archivos = document.getElementById('fotoactividad').files;
            var navegator = window.URL || window.webkitURL;
            var error = 1;
            if (archivos.length <= 1) {
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
                            alertify.error("El formato de las Imagene no es permitido");
                            $('input[type=file]').val('');

                        } else {
                            var objeto_url = navegator.createObjectURL(archivos[i]);
                            $("#vistaa3").after("<img src=" + objeto_url + " width='200' height='200'>");
                        }
                    }
                }
            } else {
                alertify.error("Maximo 1 imagenes para la Galeria");
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
        <legend><h2>Concejales</h2></legend>
        <div class="controlgroup">
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Mi Perfil </a></li>
                    <li><a href="#tabs-2">Ingesar Actividad </a></li>
                    <li><a href="#tabs-3">Administrar Actividad</a></li>
                    <li><a href="#tabs-4">Cerrar Sesion </a></li>
                </ul>
                <div id="tabs-1">
                    <?php foreach ($infoconcejal as $fila): ?>
                        <h3 style="align-content: center"><?= $fila->nombre; ?></h3>
                        <table >
                            <tr>
                                <td><b>Mi Foto de Presentacion: </b></td>
                                <td><img src="<?php echo base_url(); ?>../img/concejales/<?= $fila->fotoperfil; ?>" style="width: 180px; height: 200px; box-shadow: 2px 2px 5px #999;"></td>
                                <td><div id="vis2">
                                        <div id="vistaa">:</div>
                                    </div></td>
                            </tr>
                            <tr>
                                <td><b>Seleccion:</b></td>
                                <td style="height: 50px">  
                                    Conservar Imagen  <input onclick="chek1();" id="conserva" type="radio" name="multi3" checked="true" /> 
                                    Nueva Imagen  <input onclick="chek2();"id="nueva" type="radio" name="multi3"  />
                                    <input type ="hidden" id="oculto4" value="conserva">
                                </td>
                                <td><input  size="5"type="file" id="fotonuevaconcejal" hidden="true" name="fotonuevaconcejal" /></td>
                            </tr>
                        </table>
                        <table border="0">
                            <tr>
                                <td><b>Mi Mensaje de Propuesta : </b> Maximo 500 Caracteres</td>
                                <td><textarea id="txtpropuesta" maxlength="500" rows="15" cols="61">
                                        <?= $fila->propuesta; ?> </textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><div  id="actualizarperfil">Actualizar Perfil</div></td>
                            </tr>
                        </table>
                    <?php endforeach; ?>
                </div>
                <div id="tabs-2">
                    <h3 style="align-content: center">Nueva actividad</h3>
                    <table border="0">
                        <tr>
                            <td> Titulo Actividad:</td>
                            <td><input type="text" id="txttituloactividad" maxlength="100" size="31"/> </td>
                        </tr>
                        <tr>
                            <td> Parrafo Actividad:</td>
                            <td> <textarea maxlength="1000"id="txtparrafoactividad" rows="10" cols="30">
                                </textarea></td>
                        </tr>

                        <tr>
                            <td>Fotografia:</td>
                            <td style="height: 50px">  
                                si  <input onclick="chek3();" id="si" type="radio" name="multi5" /> 
                                no  <input onclick="chek4();"id="no" type="radio" name="multi5" checked="true" />
                                <input type ="hidden" id="oculto5" value="no">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="file" id="fotoactividad" hidden="true" size="10"name="fotoactividad"  /></td>
                            <td><div id="vis3">
                                        <div id="vistaa3"></div>
                                    </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><div id="ingreactividad">Ingresar Actividad</div></td>
                        </tr>
                    </table>

                </div>
                <div id="tabs-3">
                    <div id="verreporteacti">Ver Reporte de mis Actividades </div>
                    <tr></tr>
                    <div id="reporteacti"></div>
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