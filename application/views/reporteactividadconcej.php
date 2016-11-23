<?php if ($cantidad == 0): ?>
    <label>No existes Actividades !</label>
    <?else:?>
    <table  style="width: 800px; padding: auto">
        <?php foreach ($actividades as $fila): ?>
            <tr >
                <td ></td>
                <td><h3><?= $fila->titulo; ?></h3></td>
            </tr>
            <tr>
                <?php if ($fila->foto != ""): ?>
                    <td style=" box-shadow: 10px 5px 5px 5px #999; "><a href="#"><img src="<?php echo base_url(); ?>../img/concejales/actividad/<?= $fila->foto; ?>" style=" width: 200px; height:200px; max-width: max-content"></a> </td>
                    <td ><?= $fila->texto; ?></td>
                    <?else:?>
                    <td ></td>
                    <td ><?= $fila->texto; ?></td>
                <?php endif; ?>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
