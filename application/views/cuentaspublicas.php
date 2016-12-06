<h2>Reporte de Cuentas Publicas Ilustre Municipalidad de Linares</h2>
<div class="datagrid">
    <? if($cantidad == 0):?>
    <label>No existen reportes de cuentas Publicas para Visualizar!</label>
    <?else:?>

    <table  border="0"  align="center">
        <tbody>
            <? foreach($cuentaspublicas as $fila):?>
            <tr >  <td><?= $fila->nombre; ?></td>
                <td style="align-content: center"><a href="<?php echo  base_url()?>../cuentaspublicas/<?=$fila->link?>"
                 ><img src="<?php echo base_url(); ?>../img/pdf.png" width="30" height="30" title="Cuenta Publica" /></a></td>
            </tr >

            <? endforeach;?>
        </tbody>
    </table>
    <? endif; ?>

</div