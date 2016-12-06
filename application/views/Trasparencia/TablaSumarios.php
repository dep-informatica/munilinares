<div class="datagrid">
    <?php if ($cantidad == 0): ?>
        <h3>NO HAY DATOS...</h3>
    <?php else: ?> 
        <table id="tableUserList">
            <thead>
                <tr>
                    <th>Tipo norma</th>
                    <th>Denominacion</th>	
                    <th>Numero</th>
                    <th>Fecha</th>	
                    <th>Fecha de publicacion en el DIARIO OFICIAL</th>	
                    <th>Efectos Generales</th>	
                    <th>Fecha de Actualizacion</th>	
                    <th>Descripcion acto</th>	
                    <th>Enlace</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($resultado as $fila):
                    ?>
                    <tr>
                        <td style="text-align: center"><?= $fila->TipoNorma; ?></td>
                        <td style="text-align: center"><?= $fila->denominacion; ?></td>
                        <td style="text-align: center"><?= $fila->numero; ?></td>
                        <td style="text-align: center"><?= $fila->fecha; ?></td>
                        <td style="text-align: center"><?= $fila->publicDiarioOfi; ?></td>
                        <td style="text-align: center"><?= $fila->efectosGenerales; ?></td>
                        <td style="text-align: center"><?= $fila->fechaModificacion; ?></td>
                        <td style="text-align: center"><?= $fila->descripcion; ?></td>
                        <td style="text-align: center"><a href="<?= $fila->link; ?>" target="_blank">Link</a></td>

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
            $("#tableUserList").paginationTdA({
                elemPerPage: 10
            });
        });
    </script>
</div>