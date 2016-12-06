<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Convenios</p>  
</div>

<div class="datagrid">

    <?php if ($cantidad == 0): ?>
        <h3>NO HAY DATOS...</h3>
    <?php else: ?>
        <table id="tabal_a1" >   
            <thead>
                <tr>
                    <th colspan="7">
                        <p align="center">Convenios</p>
                    </th>

                </tr>
                <tr>  
                    <th>Entidad con la que existen vínculos</th>
                    <th>Tipo de Vínculo</th>
                    <th>Descripción o detalle del vínculo</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Término</th>
                    <th>Vínculo indefinido</th>
                    <th>Enlace a la norma jurídica o convenio que justifica el vínculo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($resultado as $fila):
                    ?>
                    <tr>     
                        <td><?php echo $fila->entidades ?></td> 
                        <td><?php echo $fila->tipo ?></td> 
                        <td><?php echo $fila->descripcion ?></td>
                        <td><?php echo $fila->fechaInicio ?></td>
                        <td><?php echo $fila->fechaTermino ?></td>
                        <td><?php echo $fila->vinculo ?></td> 
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
            $("#tabal_a1").paginationTdA({
                elemPerPage: 10
            });
        });
    </script>
</div>





