
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



<h2>diario oficial</h2>
    <?php if ($cantidad == 0): ?>
    <?php else: ?>
<table id="tabal_bodega" class="tabl">   
    <thead>
                <tr>
                    <th>Tipo de Norma</th>
                    <th>Número Norma</th>
                    <th>Denominación Norma</th>
                    <th>Fecha Publicación en el Diario Oficial</th>
                    <th>Enlace a la Publicación o Archivo Correspondiente</th>
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
                        <td><?php echo $fila->nombre ?></td>
                        <td><?php echo $fila->link ?></td>
                        <td><?php echo $fila->formato ?></td>
                        <td><?php echo $fila->carpeta ?></td>
                        <td><a href="<?php echo $fila->archivo ?>"><?php echo $fila->subcarpeta ?></a></td>                      
                        <td><?php echo $fila->mes ?></td>
                        <td><?php echo $fila->periodo ?></td>
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
            $("#tabal_bodega").paginationTdA({
                elemPerPage: 10
            });
        });
    </script>
