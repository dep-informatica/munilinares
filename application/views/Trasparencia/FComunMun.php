<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Fondo Comun Municipal</p>  
</div>

<div class="datagrid">

    <?php if ($cantidad == 0): ?>
    <?php else: ?>
        <table id="tabal_bodega">   
            <thead>
                <tr>
                    <th>
                        <p align="center">Fondo Comun Municipal</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($resultado as $fila):
                    ?>
                    <tr>

                        <td><a href="<?php echo $fila->link ?>"><?php echo $fila->nombre ?></a></td>  
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
                elemPerPage: 20
            });
        });
    </script>

</div>