<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Marco Normativo</p>  
</div>

<div class="datagrid">

<?php if ($cantidad == 0): ?>
    <H3>no hay datos...</H3>
<?php else: ?>
    <table id="tabal_bodega" >   
        <thead>
            <tr>
                <th colspan="8">
                    <p align="center">Marco Normativo</p> <br> 
                </th>
            </tr>
            
            <tr>
                <th>Tipo de Marco Normativo</th>
                <th>Tipo de Norma</th>
                <th>Nro.Norma</th>
                <th>Denominación Norma</th>
                <th>Fecha de Publicación o Dictación en el Diario Oficial</th>
                <th>Enlace a la Publicación o Archivo Correspondiente</th>
                <th>Fecha de última modificación o derogación </th>
                <th>Enlace a la última modificación o derogación</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($resultado as $fila):
                ?>
                <tr>                                    
                    <td><?php echo $fila->tipoMarco ?></td>
                    <td><?php echo $fila->tipoNorma ?></td>
                    <td><?php echo $fila->N_norma ?></td>
                    <td><?php echo $fila->denominacion ?></td>
                    <td><?php echo $fila->F_Publicacion ?></td>
                    <td><a href="<?php echo $fila->link_Public ?>">Link</a></td>
                    <td><?php echo $fila->F_modific ?></td>
                    <td><a href="<?php echo $fila->link_modificacion ?>">Link</a></td>

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
