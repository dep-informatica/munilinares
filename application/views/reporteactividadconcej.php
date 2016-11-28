<?php if ($cantidad == 0): ?>
    <label>No existes Actividades !</label>
    <?else:?>

    <?php foreach ($actividades as $fila): ?>

        <table>
            <tr >
                <td ></td>
                <td><h3><?= $fila->titulo; ?></h3></td>
            </tr>
            <tr>
                <?php if ($fila->foto != ""): ?>
                    <td style=" box-shadow: 5px 5px 5px 5px #999; "><a href="#"><img aling="left" style=" max-width:inherit; width: 250px; height: 250px;" src="<?php echo base_url(); ?>../img/concejales/actividad/<?= $fila->foto; ?>"></a> </td>
                    <td aling="right" style="padding: 20px"><?= $fila->texto; ?></td>
                    <?else:?>
                    <td ></td>
                    <td ><?= $fila->texto; ?></td>
                <?php endif; ?>
            </tr>
            <tr>
                <td><hr></td>
                <td><hr></td>
            </tr>

        <?php endforeach; ?>
    </table>
<?php endif; ?>
