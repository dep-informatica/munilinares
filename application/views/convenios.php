
<style type="text/css">

    .tabl{
        border: black solid 1px;
        font-size: 10px;
        width: 100%;  
        table-layout: fixed;
        alignment-adjust: central;
    }

    .tabl tr th{
        border: black solid 1px;
    }
    .tabl tr td{
        border: black solid 1px;
    }

</style>

<?php if ($cantidad == 0): ?>
<?php else: ?>
    <table id="tabal_a1" class="tabl">   
        <thead>
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
<td><?php echo $fila->nombre ?></td> 
<td><?php echo $fila->link ?></td> 
<td><?php echo $fila->formato ?></td>
<td><?php echo $fila->carpeta ?></td>
<td><?php echo $fila->subcarpeta ?></td>
<td><?php echo $fila->archivo ?></td> 
<td><a href="<?php echo $fila->mes ?>">Link de Acceso</a></td>  

                	
              


                </tr>
                <?php
                $i ++;
            endforeach;
            ?>
        </tbody>
    </table>
<?php endif; ?>
<input type="hidden" id='oculto' value="<?php echo $i ?>"/>

<script>
    $(document).ready(function () {
        $("#tabal_a1").paginationTdA({
            elemPerPage: 10
        });
    });
</script>





