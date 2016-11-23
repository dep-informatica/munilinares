
<div>
    <? if($cantidad == 0):?>
    <label>No existen noticias para eliminar!</label>
    <?else:?>
    
    <table  border="0"  align="center">
        <thead style="background: #A4A4A4">
        <th>Noticia</th>
        <th>Eliminar</th>
        </thead>
        <tbody>
            <? foreach($noticias as $clave=>$fila):?>
            <tr 
                <?php if ($clave%2==0){  ?>
                style="background: #D8F6CE" 
                    <?php   }else{?>
                        style="background: #F5D0A9"
                   <?php  }    ?>
                >
                <td><?= $fila->titulo; ?></td>
                <td style="align-content: center"><img onclick="eliminarnoticia(<?= $fila->id_noticia ?>)" src="<?php echo base_url(); ?>../img/borrar.png" width="30" height="30" title="ELIMINAR NOTICIA" /></td>
            </tr >

            <? endforeach;?>
        </tbody>
    </table>
    <? endif; ?>

</div>