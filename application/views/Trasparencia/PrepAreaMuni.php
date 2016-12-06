<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Presupuesto Areas Municipal</p>  
</div>


<style>

    .letra{  
        color: red;
    }

</style>


<div class="datagrid">
    <?php if ($cantidad == 0): ?>
        <h3>NO HAY DATOS...</h3>
    <?php else: ?>
        <table id="tabal">   
            <thead>
                <tr>
                    <th>
                        <p align="center">Presupuesto Areas Municipal</p>
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


    <script>
        $(document).ready(function () {
            $("#tabal").paginationTdA({
                elemPerPage: 20
            });
        });
    </script>

</div>