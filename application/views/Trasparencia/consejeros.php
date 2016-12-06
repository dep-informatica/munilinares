<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Nomina De Consejeros</p>  
</div>

<div class="datagrid">
<?php if ($cantidad == 0): ?>
    <h3>NO HAY DATOS...</h3>
<?php else: ?>
    <table id="tabal" >   
        <thead>
            <tr>
                <th colspan="3">
                    <p align="center">Nomina De Consejeros</p>
                </th>
            </tr>
            <tr>
                <th>Estamento</th>
                <th>Nombre Consejero</th>
                <th>Correo Electrónico</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($resultado as $fila):
                ?>
                <tr>
                    <td><?php echo $fila->nombre ?></td>
                    <td><?php echo $fila->estamento ?></td>
                    <td><?php echo $fila->correo ?></td>
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
