<script>
    $(function () {
        $("#tabs2").tabs().addClass("ui-tabs-vertical ui-helper-clearfix");
        $("#tabs2 li").removeClass("ui-corner-top").addClass("ui-corner-left");
    });
</script>
<style>
    .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
</style>
<h5 class="titulo-seccion">Concejo Municipal:</h5>

<?if($cantidad == 0):?>
<label>No existes concejales !</label>
<? else: ?>
<div id="tabs2">

    <ul>
        <?  foreach($actividades as $fila):?>
        <li><a href="#<?= $fila->id_usuario; ?>"><?= $fila->nombre; ?></a></li>
        <?  endforeach;?>    
    </ul> 
    <?  foreach($actividades as $fila):?>
    <div id="<?= $fila->id_usuario;?>">
       <h2><?= $fila->nombre; ?></h2>
        <a href="#"><img src="<?php echo base_url(); ?>../img/concejales/<?= $fila->fotoperfil; ?>" style="width: 150px; height: 200px; padding-right: 10px"></a> 
        <p><?= $fila->propuesta; ?></p>
        <table border="0">
            <tr>
                <td><img src="<?php echo base_url(); ?>../img/contacto.png" style="width: 55px; height: 40px"></td>
                <td> <?= $fila->correo; ?> </td>
                <td> <a href="#" onclick="actividadconcejal(<?= $fila->id_usuario; ?>)" ><img src="<?php echo base_url(); ?>../img/actividades.png"style="width: 70%; height: 70%"></a></td>
            </tr>
        </table>
    </div>
    <?  endforeach;?>
</div>
<? endif; ?>
<script>
  $( function() {
     $("#dialogconcejal").dialog({width: 1000, autoOpen: false});
  } );
  </script>
  <div id="dialogconcejal" title="ACTIVIDADES">
      <div id="activitiesconcejales"></div>
</div>