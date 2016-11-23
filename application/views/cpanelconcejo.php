
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
    $("#boton_subir").button({icons: {primary: "ui-icon-disk"}}).click(function () {
        ingresarHM();
    });
    $("#reportenoti").button({icons: {primary: "ui-icon-círculo-triángulo-s"}}).click(function () {
        reportenoti();
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
                                <td ><b>Mi Foto de Presentacion: </b> </td>
                                <td ><img src="<?php echo base_url(); ?>../img/concejales/<?= $fila->fotoperfil; ?>" style="width: 200px; height: 200px"></td>
                                <td ><input type="file" name="newfotoperfil" value="" width="4" /></td>
                            </tr>
                            <tr>
                                <td><b>Seleccion:</b></td>
                                <td>  <input  id="conserva"type="radio" name="multi3" checked="true" /> Conservar Imagen<tr></tr>
                                    <inpu id="nueva"type="radio" name="multi3"  />Nueva Imagen <tr></tr>
                                    <input type="hidden" id="oculto2" value="conserva"/> </td>
                                <td></td>
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
                            <td> Mes:</td>
                            <td><input id="datepicker">
                                <script>
                                    $('#datepicker').datepicker({
                                        dateFormat: 'mm-yy',
                                        duration: "fast",
                                        showAnim: "drop",
                                        showOptions: {direction: "up"}
                                    });

                                </script> 
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Selecciones Archivo PDF:</td>
                            <td><input type="file" name="archivopdf" id="archivopdf"/></td>
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
                            <td><div id="boton_subir">Ingresar Actividad</div></td>
                        </tr>
                    </table>

                </div>
                <div id="tabs-3">
                    <div id="reportenoti">Ver Reporte de mis Actividades </div>
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