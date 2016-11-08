<h2>marco narrativo</h2>

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
    <table id="tabal_bodega" class="tabl">   
        <thead>
            <tr>
                <th>Tipo de Marco Normativo</th>
                <th>Tipo de Norma</th>
                <th>Nro.Norma</th>
                <th>Denominación Norma</th>
                <th>Fecha de Publicación en el Diario Oficial o Fecha de Dictación (mm/dd/aa)</th>
                <th>Enlace a la Publicación o Archivo Correspondiente</th>
                <th>Fecha de última modificación o derogación (dd/mm/aa)</th>
                <th>Enlace a la última modificación o derogación</th>


            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($resultado as $fila):
                ?>
                <tr>
                    <td><?php echo $fila->nombre ?></td>
                    <td><?php echo $fila->formato ?></td>
                    <td><?php echo $fila->carpeta ?></td>
                    <td><?php echo $fila->subcarpeta ?></td>
                    <td><?php echo $fila->archivo ?></td>
                    <td><a href="<?php echo $fila->mes ?>">Link de Acceso</a></td>
                    <td><?php echo $fila->area ?></td>
                    <td><a href="<?php echo $fila->calidad ?>">Link de Acceso</a></td>

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


