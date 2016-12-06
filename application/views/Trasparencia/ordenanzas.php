<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Ordenanzaz</p>  
</div>

<div class="datagrid">

    <?php if ($cantidad == 0): ?>
        <h3>NO HAY DATOS...</h3>
    <?php else: ?>
        <table id="tabal_a1" >   
            <thead>
                <tr>
                    <th colspan="13">
                        <p align="center">Ordenanzaz</p>
                    </th>
                </tr>
                <tr>  
                    <th>Año</th>
                    <th>Mes</th>
                    <th>Tipología del Acto</th>
                    <th>Tipol de Acto</th>
                    <th>Denominación del Acto</th>
                    <th>Número del Acto</th>
                    <th>Fecha</th>	
                    <th>Indicación del medio y forma de publicidad (según Art.45 y siguientes Ley 19.880)</th>
                    <th>Tiene efectos generales</th>
                    <th>Fecha última actualización (dd/mm/aaaa),si corresponde a actos y resoluciones con efectos generales</th>
                    <th>Breve descripción del objeto del acto</th>
                    <th>Enlace a la Publicación o Archivo correspondiente</th>
                    <th>Enlace a la modificación o archivo correspondiente</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($resultado as $fila):
                    ?>
                    <tr>    
                        <td><?php echo $fila->anio ?></td>
                        <td><?php echo $fila->mes ?></td>
                        <td><?php echo $fila->topologia ?></td>
                        <td><?php echo $fila->tipo ?></td>
                        <td><?php echo $fila->denominacion ?></td>
                        <td><?php echo $fila->numero ?></td>
                        <td><?php echo $fila->fecha ?></td>
                        <td><?php echo $fila->formaPublicidad ?></td>
                        <td><?php echo $fila->efectos ?></td>
                        <td><?php echo $fila->fechaActualizacion ?></td>
                        <td><?php echo $fila->descripcion ?></td>
                        <td><a href="<?php echo $fila->link ?>">Link de Acceso</a></td>
                        <td><a href="<?php echo $fila->linkModificacion ?>">Link de Acceso</a></td> 
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

