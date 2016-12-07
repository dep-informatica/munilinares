<h2>Ebook Hechos Municipales</h2>
<div>
    <?php if ($cantidad == 0): ?>
        <label>No existen Ebook para Visualizar</label>
        <?else:?>

        <?php foreach ($reporte as $fila): ?>

            <div class="post tarjeta">
                <div class="pic">
                    <a href="#">
                        <img  onclick="vistamebePDF(<?= $fila->id_hm; ?>)" id="propro" width="180px" height="200px" src="<?php echo base_url(); ?>../hechosmunicipales/portadas/<?= $fila->ruta_img; ?>">
                    </a>
                </div>
                <div class="texto">
                    <span  onclick="vistamebePDF(<?= $fila->id_hm; ?>)" style=" padding-left:15px" class="meta"> Fecha Publicacion: <?= $fila->fecha_publicacion; ?> </span>
                    <h4 style=" padding-left:15px" class="title"><a href="#"> <?= $fila->mencion; ?> </a></h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div style="padding: 20px"></div>
        <?php endforeach; ?>

    <?php endif; ?>
</div>
<script>
    $(function () {
        $("#dialog555").dialog({width: 1300, autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            }, hide: {
                effect: "explode",
                duration: 1000
            }}).css("background", "rgba(158, 158, 158, 0.18)");
    });
</script>
<div id="dialog555"  style="width: 300px" title="Ebook">
    <div id="verPDF"></div>
</div>
<script src="<?php echo base_url(); ?>../pdf/pdf.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>../pdf/turn.js" type="text/javascript"></script>


