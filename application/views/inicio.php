<!-- INICIO Noticia destacada -->
<h5 class="titulo-seccion">Últimas Noticias</h5>
<?php foreach ($noticia as $clave => $fila): ?>
    <?php if ($clave === 0) { ?>
        <div class="post tarjeta destacado">
            <div class="pic">
                <a href="#">

                    <?php if ($fila->linkofoto === "video") { ?>
                        <iframe width = "660" height = "250" src = "<?php echo $fila->ruta; ?>" frameborder = "0" allowfullscreen></iframe>

                    <?php } else { ?>
                        <img onclick="vernoticia(<?= $fila->id_noticia ?>)" width="660"height="250" src = "<?php echo base_url(); ?>../Files/<?php echo $fila->ruta; ?>">
                    <?php } ?>
                </a>
            </div>
            <div class="texto">
                <div class="left">
                    <h4 class="title"><a href="#" onclick="vernoticia(<?= $fila->id_noticia ?>)"><?php echo $fila->titulo; ?></a></h4>
                </div>
                <div class="right">
                    <span class="meta">Fecha Publicacion: <?php echo $fila->fecha_registro; ?> </span>
                    <a href="#"> <p onclick="vernoticia(<?= $fila->id_noticia ?>)"> <?php echo $fila->encabezado; ?> </p>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="social">
                <ul>
                    <li>
                        <div class="fb-like" data-href="http://www.munilinares.cl" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                    </li>
                    <li>
                        <div class="g-plus" data-action="share" data-annotation="bubble"></div>
                    </li>
                    <li>
                        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="es">Twittear</a>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>
    <?php } else { ?>

        <!-- FIN Noticia destacada -->
        <!--INICIONoticia Chica -->
        <div class="post tarjeta">
            <div class="pic">
                <a href="#" onclick="vernoticia(<?= $fila->id_noticia ?>)" >

                    <?php if ($fila->linkofoto === "video") { ?>
                        <iframe width ="320" height="210" src = "<?php echo $fila->ruta; ?>" frameborder = "0" allowfullscreen></iframe>
                    <?php } else { ?>
                        <img  width="320" height="210" src = "<?php echo base_url(); ?>../Files/<?php echo $fila->ruta; ?>">
                    <?php } ?>
                </a>
            </div>
            <div class="texto">
                <span class="meta">Fecha Publicacion: <?php echo $fila->fecha_registro; ?> </span>
                <h4 class="title"><a href="#" onclick="vernoticia(<?= $fila->id_noticia ?>)" ><?php echo $fila->titulo; ?></a></h4>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--INICIONoticia Chica -->
    <?php } ?>
<?php endforeach; ?>
<a href="#" id="mas-noticias" class="boton">+ Ver más <strong>Noticias</strong></a>

