<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Diario Oficial</p>  
</div>

<div class="datagrid">
    <?php if ($cantidad == 0): ?>
    <h3>NO HAY DATOS...</h3>
    <?php else: ?>
        <table id="tabal_bodega">   
            <thead>
                <tr>
                    <th colspan="7">
                        <P align="center" >Diario Oficial</P><br> 
                    </th>
                </tr>
                <tr>
                    <th>Tipo de Norma</th>
                    <th>Número Norma</th>
                    <th>Denominación Norma</th>
                    <th>Fecha Publicación en el Diario Oficial</th>
                    <th>Enlace o Archivo Correspondiente</th>
                    <th>Fecha última modificación o derogación</th>
                    <th>Enlace última modificación o derogación</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($resultado as $fila):
                    ?>
                    <tr>
                       
                        <td><?php echo $fila->TipoNorma ?></td>
                        <td><?php echo $fila->NumeroNorma ?></td>
                        <td><?php echo $fila->Denominacion ?></td>
                        <td><?php echo $fila->FechaPublicacion ?></td>
                        <td><a href="<?php echo $fila->LinkPublicacion ?>">LINK</a></td>                      
                        <td><?php echo $fila->FechaModificacion ?></td>
                        <td><a href="<?php echo $fila->LinkModificacion ?>">LINK</a></td>      
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