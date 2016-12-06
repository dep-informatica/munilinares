<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> vinculos otras entidades</p>  
</div>

<div class="datagrid">
<?php if ($cantidad == 0): ?>
    <h3>NO HAY DATOS...</h3>
<?php else: ?>
    <table id="tabal_bodega" class="tabl">   
        <thead>
            <tr>
                <th colspan="6">
                    <p align="center">vinculos otras entidades</p>
                </th>
            </tr>
            <tr>
                <th>Entidad con la que existen vínculos</th>
                <th>Tipo de Vínculo</th>
                <th>Descripción o detalle del vínculo</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Término</th>
                <th>Enlace</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($resultado as $fila):
                ?>
                <tr>
                                     
                    <td><?php echo $fila->entidad?></td>
                    <td><?php echo $fila->tipo?></td>
                    <td><?php echo $fila->descripcion?></td> 
                    <td><?php echo $fila->fechaInicio?></td>
                    <td><?php echo $fila->fechaTermino?></td> 
                    <td><a href="<?php echo $fila->link?>">Link de Acceso</a></td>  
                                
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
