<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Emprendedores Rurales y Urbanos</p>  
</div>

<div class="datagrid">
    <?php if ($cantidad1 == 0): ?>
    <h3>No HAY DATOS...</h3>
    <?php else: ?>
        <table id="tabal_a1" class="tabl">   
            <thead>
            <th colspan="2">
                <p align="center">Emprendedores Rurales y Urbanos</p>
            </th>
            </thead>
            <tbody>
                <?php
                $ia = 0;
                foreach ($resultado1 as $fila1):
                    ?>
                    <tr>
                        <td><?php echo $fila1->nombre ?></td>
                        <td><a href="<?php echo $fila1->link ?>">Documentos</a></td>                      
                    </tr>
                    <?php
                    $ia ++;
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
<br>
<div class="datagrid">
    <?php if ($cantidad2 == 0): ?>
    <h3>No HAY DATOS...</h3>
    <?php else: ?>
        <table id="tabal_b2">   
            <thead>
            <th colspan="2">
                <p align="center"> Emprendedores Turísticos</p>     
            </th>      
            </thead>
            <tbody>
                <?php
                $ib = 0;
                foreach ($resultado2 as $fila2):
                    ?>
                    <tr>

                        <td><?php echo $fila2->nombre ?></td>
                        <td><a href="<?php echo $fila2->link ?>">Documento</a></td>                      

                    </tr>
                    <?php
                    $ib ++;
                endforeach;
                ?>
            </tbody>
        </table>
    <?php endif; ?>
   
    <script>
        $(document).ready(function () {
            $("#tabal_b2").paginationTdA({
                elemPerPage: 10
            });
        });
    </script>

</div>

