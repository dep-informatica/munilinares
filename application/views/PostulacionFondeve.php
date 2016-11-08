<h2>Postulación Proyectos Fondeve</h2>

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
            </tr>
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
<input type="hidden" id='oculto' value="<?php echo $i ?>"/>

<script>
    $(document).ready(function () {
        $("#tabal_bodega").paginationTdA({
            elemPerPage: 10
        });
    });
</script>