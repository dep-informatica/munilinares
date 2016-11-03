
<div class="post">
    <?php foreach ($noticia as $clave => $fila): ?>
        <?php if ($fila->linkofoto === "video") { ?>
            <iframe width = "660" height = "441" src = "<?php echo $fila->ruta; ?>" frameborder = "0" allowfullscreen></iframe>

        <?php } else { ?>
            <div class="pic">
                <img  width="660"height="441" src = "<?php echo base_url(); ?>../Files/<?php echo $fila->ruta; ?>">
            </div>
        <?php } ?>

        <div class="clearfix"></div>

        <div class="social">
            <ul>
                <li>
                    <div class="fb-like fb_iframe_widget" data-href="http://www.munilinares.cl" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query=""><span style="vertical-align: bottom; width: 153px; height: 20px;"><iframe name="f346a4151b84728" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/plugins/like.php?action=like&amp;app_id=1398418293764663&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FP5DLcu0KGJB.js%3Fversion%3D42%23cb%3Dfe70bdb7dc289c%26domain%3Dwww.gob.cl%26origin%3Dhttp%253A%252F%252Fwww.gob.cl%252Ff82839c1dc826%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fwww.gob.cl%2Fgobierno-se-prepara-intensa-gestion-congreso-lograr-aprobacion-proyecto-ley-domicilios-electorales%2F&amp;layout=button_count&amp;locale=es_LA&amp;sdk=joey&amp;share=true&amp;show_faces=false" style="border: none; visibility: visible; width: 153px; height: 20px;" class=""></iframe></span></div>
                </li>
                <li>
                    <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="http://platficilios%20electorales&amp;time=1476714610071&amp;type=share&amp;url=http%3A%2F%2Fwww.munilinares.cl" style="position: static; visibility: visible; width: 71px; height: 20px;" data-url="http://www.gob.cl/gobierno-se-prepara-intensa-gestion-congreso-lograr-aprobacion-proyecto-ley-domicilios-electorales/"></iframe>
                </li>
            </ul>
        </div>

        <div class="fontsize">
            <ul>
                <li class="small"><a  data-size="10">-</a></li> 
            </ul>
            <ul>
                <li class="medium current"><a   data-size="20">+</a></li>

            </ul>
        </div>

        <div class="clearfix"></div>

        <div class="texto">
            <span class="meta">Fecha Publicacion: <?php echo $fila->fecha_registro; ?></span>
            <h2 class="title"><?php echo $fila->titulo; ?></h2>
            <div class="contenido">

                <h4><?php echo $fila->encabezado; ?></h4>
               <!--Tamaño de letra: <a href="javascript:void(0);" onclick="javascript:body.style.fontSize=&apos;10px&apos;"><span>10</span></a> <a href="javascript:void(0);" onclick="javascript:body.style.fontSize=&apos;12px&apos;"><span>12</span></a> <a href="javascript:void(0);" onclick="javascript:body.style.fontSize=&apos;14px&apos;"><span>14</span></a> <a href="javascript:void(0);" onclick="javascript:body.style.fontSize=&apos;16px&apos;"><span>16</span></a> <a href="javascript:void(0);" onclick="javascript:body.style.p.fontSize=&apos;18px&apos;"><span>18</span></a>-->
                <p> <?php echo $fila->texto; ?></p>
                <a href="javascript:decreaseFontSize();">-</a>
                <a href="javascript:increaseFontSize();">+</a>

            </div>

        </div>

        <a style="margin-bottom: 10px" href="#" id="mas-noticias" class="boton lsb-preview" data-lsb-group="<?php echo $fila->id_noticia; ?>">+ Ver Albun de <strong>Fotos</strong>  <img  hidden="true"src="<?php echo base_url(); ?>../Files/<?php echo $fila->foto1; ?>" alt="www.munilinares.cl"> </a>

        <table>
            <tr>
                <th style="width: 200px;height: 200px">
                    <a  href="<?php echo base_url(); ?>../Files/<?php echo $fila->foto1; ?>" class="lsb-preview" data-lsb-group="<?php echo $fila->id_noticia; ?>"> 
                        <img src="<?php echo base_url(); ?>../Files/<?php echo $fila->foto1; ?>" alt="www.munilinares.cl"> 
                    </a> 

                </th>
                <th style="width: 200px;height: 200px">
                    <a  href="<?php echo base_url(); ?>../Files/<?php echo $fila->foto2; ?>" class="lsb-preview" data-lsb-group="<?php echo $fila->id_noticia; ?>"> 
                        <img src="<?php echo base_url(); ?>../Files/<?php echo $fila->foto2; ?>" alt="www.munilinares.cl"> 
                    </a> 
                </th>
                <th style="width: 200px;height: 200px">

                    <a  href="<?php echo base_url(); ?>../Files/<?php echo $fila->foto3; ?>" class="lsb-preview" data-lsb-group="<?php echo $fila->id_noticia; ?>"> 
                        <img src="<?php echo base_url(); ?>../Files/<?php echo $fila->foto3; ?>" alt="www.munilinares.cl"> 
                    </a> 
                </th>
                <th style="width: 200px;height: 200px">
                    <a  href="<?php echo base_url(); ?>../Files/<?php echo $fila->foto4; ?>" class="lsb-preview" data-lsb-group="<?php echo $fila->id_noticia; ?>"> 
                        <img src="<?php echo base_url(); ?>../Files/<?php echo $fila->foto4; ?>" alt="www.munilinares.cl"> 
                    </a> 
                </th>
                <th style="width: 200px;height: 200px">

                    <a href="<?php echo base_url(); ?>../Files/<?php echo $fila->foto5; ?>" class="lsb-preview" data-lsb-group="<?php echo $fila->id_noticia; ?>"> 
                        <img src="<?php echo base_url(); ?>../Files/<?php echo $fila->foto5; ?>" alt="www.munilinares.cl"> 
                    </a> 
                </th>

            </tr>
        </table>


        <script>
            $(document).ready(function () {

                $.fn.lightspeedBox({
                    showImageTitle: true,
                    showImageCount: true,
                    showDownloadButton: true,
                    showAutoPlayButton: true,
                    autoPlayback: false,
                    playbackTiming: 3500,
                    zIndex: 30,
                    locale: {
                        nextButton: 'Next image',
                        prevButton: 'Previous image',
                        closeButton: 'Close',
                        downloadButton: 'Download image',
                        noImageFound: 'Sorry, no image found.',
                        autoplayButton: 'Enable autoplay'
                    }
                });


            });
        </script>


        <div class="clearfix"></div>
    <?php endforeach; ?>
</div>
