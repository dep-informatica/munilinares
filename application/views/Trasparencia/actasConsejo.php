<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Actas consejo municipal</p>  
</div>
<div class="datagrid">

<?php if ($cantidad == 0): ?>
    <h3>NO HAY DATOS...</h3>
<?php else: ?>
    <table id="tabal_bodega">   
        <thead>
            <tr>
                <th colspan="4">
                    <p align="center">Actas consejo municipal</p>
                </th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Descripción</th>
                <th>Número</th>
                <th>Enlace</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($resultado as $fila):
                ?>
                <tr>
                    <td><?php echo $fila->fecha ?></td>
                    <td><?php echo $fila->descripcion ?></td>
                    <td><?php echo $fila->numero ?></td>
                    <td><a href="<?php echo $fila->link ?>"> Enlace al Acta</a></td>    
                                   
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
        $("#tabal_bodega").paginationTdA({
            elemPerPage: 20
        });
    });
</script>

</div>