
<h2>Emprendedores</h2>

<div class="container">
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

<?php if ($cantidad1 == 0): ?>
<?php else: ?>
    <table id="tabal_a1" class="tabl">   
        <thead>
            <tr>
        <h1>Emprendedores Rurales y Urbanos</h1>
    </tr>
    </thead>
    <tbody>
        <?php
        $ia = 0;
        foreach ($resultado1 as $fila1):
            ?>
            <tr>
                <td><?php echo $fila1->nombre ?></td>
                <td><a href="<?php echo $fila1->link ?>"><?php echo $fila1->formato ?></a></td>                      
            </tr>
            <?php
            $ia ++;
        endforeach;
        ?>
    </tbody>
    </table>
<?php endif; ?>
<input type="hidden" id='oculto' value="<?php echo $ia ?>"/>

<script>
    $(document).ready(function () {
        $("#tabal_a1").paginationTdA({
            elemPerPage: 10
        });
    });
</script>

</div>

<div class="container">
<?php if ($cantidad2 == 0): ?>
<?php else: ?>
    <table id="tabal_b2" class="tabl">   
        <thead>
            <tr>
        <h1> Emprendedores Turísticos</h1>
    </tr>
    </thead>
    <tbody>
        <?php
        $ib = 0;
        foreach ($resultado2 as $fila2):
            ?>
            <tr>

                <td><?php echo $fila2->nombre ?></td>
                <td><a href="<?php echo $fila2->link ?>"><?php echo $fila2->formato ?></a></td>                      

            </tr>
            <?php
            $ib ++;
        endforeach;
        ?>
    </tbody>
    </table>
<?php endif; ?>
<input type="hidden" id='oculto' value="<?php echo $ib ?>"/>

<script>
    $(document).ready(function () {
        $("#tabal_b2").paginationTdA({
            elemPerPage: 10
        });
    });
</script>

</div>

