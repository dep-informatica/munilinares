<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Informes Trimestrales</p>  
</div>

<div class="datagrid">
<?php if ($cantidad == 0): ?>
    <h3>NO HAY DATOS...</h3>
<?php else: ?>
    <table id="tabal">  
        <thead>
            <tr>
                <th colspan="5">
                    <p align="center">Informes Trimestrales</p>
                </th>
            </tr>
            <tr>
                <th>Descripción</th>
                <th>Unidad que efectuó la Auditoría</th>
                <th>Nro. de Informe</th>
                <th>Fecha</th>
                <th>Enlace</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($resultado as $fila):
                ?>
                <tr>
                    <td><?php echo $fila->descripcion ?></td>
                    <td><?php echo $fila->unidad ?></td> 
                    <td><?php echo $fila->numero ?></td>
                     <td><?php echo $fila->fecha ?></td>                     
                    <td><a href="<?php echo $fila->link ?>">Link de Acceso</a></td>  

                </tr>
                <?php
                $i ++;
            endforeach;
            ?>
        </tbody>
    </table>
<?php endif; ?>


<script>
    $(document).ready(function () {
        $("#tabal").paginationTdA({
            elemPerPage: 20
        });
    });
</script>

</div>