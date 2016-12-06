<div class="Direccionamiento">
    <p>USTED SE ECUENTRA EN: <a href="#" onclick="menuTA();">Transparencia</a> -> Potestades, competencias, responsabilidades, funciones, atribuciones y/o tareas</p>  
</div>


<div class="datagrid">
    <?php if ($cantidad == 0): ?>
    <h3>NO HAY DATOS...</h3>
    <?php else: ?>
        <table id="tabal_bodega">   
            <thead>
                <tr>
                    <th colspan="4">
                        <p align="center" >Potestades, competencias, responsabilidades, funciones, atribuciones y/o tareas</p><br>
                    </th>
                </tr>

                <tr>
                    <th>Denominacion</th>
                    <th>Potestades</th>
                    <th>Fuente Legal</th>
                    <th>Enlace</th>                    
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($resultado as $fila):
                    ?>
                    <tr>
                                              
                        <td><?php echo $fila->Denominacion ?></td>
                        <td><?php echo $fila->Potestades ?></td>
                        <td><?php echo $fila->FuenteLegal ?></td>
                        <td><a href="<?php echo $fila->link ?>">Link</a></td>                      

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
            $("#tabal_bodega").paginationTdA({
                elemPerPage: 10
            });
        });
    </script>

</div>