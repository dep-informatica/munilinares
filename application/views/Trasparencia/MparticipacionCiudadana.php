<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Mecanismo de Participación Ciudadana</p>  
</div>

<div class="datagrid">
    <?php if ($cantidad == 0): ?>
        <h3>NO HAY DATOS...</h3>
    <?php else: ?>
        <table id="tabal_bodega" >   
            <thead>
                <tr>
                    <th colspan="4">
                        <p align="center">Mecanismo de Participación Ciudadana</p>
                    </th>
                </tr>
                <tr>
                    <th>Nombre del Mecanismo de Participación Ciudadana</th>
                    <th>Breve Descripción de su Objetivo</th>
                    <th>Requisitos para Participar</th>
                    <th>Enlace a mayor información</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($resultado as $fila):
                    ?>
                    <tr>
                        <td><?php echo $fila->nombre ?></td>
                        <td><?php echo $fila->objetivo ?></td>
                        <td><?php echo $fila->requisitos ?></td>
                        <td><a href="<?php echo $fila->link ?>">Enlace al Acta</a></td>
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