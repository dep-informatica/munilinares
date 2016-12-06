
<div class="datagrid">
    <?php if ($cantidad <= 0 && $cantidad == null): ?>
    <h1>No Existen Decretos...</h1>
    <?php else: ?>
            <table id="tableUserList">
            <thead>
                <tr>
                    <th>Tipo norma</th>
                    <th>Denominacion</th>
                    <th>Numero</th>
                    <th>Fecha</th>
                    <th>Fecha de publicacion</th>
                    <th>Efectos generales</th>
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
                                               
                        <td><?= $fila->TipoNorma; ?></td>	
                        <td><?= $fila->Denominacion; ?></td>
                        <td><?= $fila->Numero; ?></td>
                        <td><?= $fila->fecha; ?></td> 
                        <td><?= $fila->publicacion; ?></td> 
                        <td><?= $fila->efectosGenerales; ?></td>
                        <td><?= $fila->fechaModicicacion; ?></td>
                        <td><?= $fila->descripcion; ?></td>
                        <td><a href="<?= $fila->link; ?>" target="_Blank">link</a></td>
                    </tr>

                    <?php
                    $i ++;
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    <h4>* Las tildes se han omitido por configuracion</h4>
    <?php endif; ?>    

    <script>
        $(document).ready(function () {
            $("#tableUserList").paginationTdA({
                elemPerPage: 10
            });
        });
    </script>

