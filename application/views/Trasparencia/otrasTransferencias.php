<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Transferencias Otras Personas Jurídicas Privadas</p>  
</div>


<div class="datagrid">
    <?php if ($cantidad1 == 0): ?>
    <h3>NO HAY DATOS...</h3>
    <?php else: ?>
        <table id="tabal_a1" >   
            <thead>
            <th colspan="2">
                <p align="center">Transferencias Otras Personas Jurídicas Privadas</p>
            </th>
            </thead>
            <tbody>
                <?php
                $ia = 0;
                foreach ($resultado1 as $fila1):
                    ?>
                    <tr>
                        <td><?php echo $fila1->nombre ?></td>
                        <td><a href="<?php echo $fila1->link ?>">Documento</a></td>                      
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
    <h3>NO HAY DATOS...</h3>
    <?php else: ?>
        <table id="tabal_b2">   
            <thead>
            <th colspan="2">
                <p align="center"> Transferencia Voluntariado</p>
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