<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Concursos Publicos</p>  
</div>

<div class="datagrid">

    <?php if ($cantidad == 0): ?>
    <h3>NO HAY DATOS ...</h3>
    <?php else: ?>
        <table id="tabal_a1" >   
            <thead>
            <th colspan="2">
                <p align="center">Concursos Publicos</p>
            </th>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($resultado as $fila):
                    ?>
                    <tr>
                        <td><?php echo $fila->nombre ?></td>
                        <td><a href="<?php echo $fila->link ?>"><?php echo $fila->formato ?></a></td>                      
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
            $("#tabal_a1").paginationTdA({
                elemPerPage: 10
            });
        });
    </script>

</div>