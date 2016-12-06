<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Resumen de Auditorías</p>  
</div>


<div class="datagrid">
<?php if ($cantidad == 0): ?>
    <h3>NO HAY DATOS...</h3>
<?php else: ?>
    <table id="tabal_bodega" class="tabl">   
        <thead>
            <tr>
                <th colspan="9">
                    <p align="center">Resumen de Auditorías</p>
                </th>
            </tr>
            <tr>
                <th>Título de Auditoría</th>
                <th>Entidad que efectuó la Auditoría</th>
                <th>Materia</th>
                <th>Fecha de Inicio de la Auditoría</th>
                <th>Fecha de Término de la Auditoría</th>
                <th>Periodo Auditado</th>
                <th>Fecha Publicación Informe</th>
                <th>Respuesta al Servicio</th>
                <th>Enlace</th>


            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($resultado as $fila):
                ?>
                <tr>

                    <td><?php echo $fila->titulo ?></td>
                    <td><?php echo $fila->entidad ?></td>
                    <td><?php echo $fila->materia ?></td>
                    <td><?php echo $fila->fechaInicio ?></td>
                    <td><?php echo $fila->fechaTermino ?></td>
                    <td><?php echo $fila->periodo ?></td>
                    <td><?php echo $fila->fechaPublicacion ?></td>
                    <td><?php echo $fila->respuesta ?></td>                                                          
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
        $("#tabal_bodega").paginationTdA({
            elemPerPage: 10
        });
    });
</script>

</div>