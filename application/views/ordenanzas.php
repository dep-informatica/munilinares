
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
                    <td><?php echo $fila->nombre ?></td>	
                    <td><?php echo $fila->link ?></td>	
                    <td><?php echo $fila->formato ?></td>	
                    <td><?php echo $fila->carpeta ?></td>	
                    <td><?php echo $fila->subcarpeta ?></td>	
                    <td><?php echo $fila->archivo ?></td>	
                    <td><?php echo $fila->mes ?></td>	
                    <td><?php echo $fila->periodo ?></td>	
                    <td><?php echo $fila->area ?></td>	
                    <td><?php echo $fila->calidad ?></td>	
                  
                    <td><?php echo $fila->campo12 ?></td>	
                    <td><a href="<?php echo $fila->campo13 ?>">Link de Acceso</a></td>
                    <td><a href="<?php echo $fila->campo14 ?>">Link de Acceso</a></td>                    

                                         
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



