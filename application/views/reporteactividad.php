
<div>
    <? if($cantidad == 0):?>
    <label>No existen noticias para eliminar!</label>
    <?else:?>

    <table  border="0"  align="center">
        <thead style="background: #A4A4A4">
        <th>Actividad</th>
        <th>Eliminar</th>
        </thead>
        <tbody>
            <? foreach($noticias as $clave=>$fila):?>
            <tr 
            <?php if ($clave % 2 == 0) { ?>
                    style="background: #D8F6CE" 
                <?php } else { ?>
                    style="background: #F5D0A9"
                <?php } ?>
                >
                <td><?= $fila->titulo; ?></td>
                <td style="align-content: center"><a href="#"
                        ><img onclick="eliminaractividad(<?= $fila->id_actividad_concejal ?>)" src="<?php echo base_url(); ?>../img/borrar.png" width="30" height="30" title="ELIMINAR NOTICIA" /></a></td>
            </tr >

            <? endforeach;?>
        </tbody>
    </table>
    <? endif; ?>

</div