<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:locale" content="es_ES" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="" />
        <meta name="description" property="og:description" content="" />
        <meta property="og:site_name" content="" />
        <script>
            var base_url = '<?php echo base_url(); ?>';
        </script>  
        <title> ILUSTRE MUNICIPALIDAD DE LINARES </title>
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>../img/favicon.png"/> 


        <link rel="stylesheet" href="<?php echo base_url(); ?>../css/main.css">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>../js/jquery-ui.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>../css/jquery-ui.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>../css/jquery-ui.structure.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>../js/alertify.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>../css/alertify.core.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>../css/alertify.default.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>../js/funciones.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>../js/upload.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>../js/lsb.min.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>../css/lsb.css"/>
        <!--nivo-->
        <script type="text/javascript" src="<?php echo base_url(); ?>../js/nivo.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>../css/nivo.css"/>
        <!--fin nivo-->

        <!--hechos municipales-->
        <script src="<?php echo base_url(); ?>../js/hechos-municipales.js" type="text/javascript"></script>
        <link href="<?php echo base_url(); ?>../css/tabla_info.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url(); ?>../js/transparencia.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>../js/pagination-tda-plugin.js" type="text/javascript"></script>

    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=454500034628078";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!--menu movil-->
        <div id="menu-movil">
            <div class="wrap">
                <nav id="menu-principal">
                    <ul id="menu-main-menu" class="menu-main">
                        <li><a href="<?php echo base_url(); ?>">Inicio</a></li>

                        <li><a href="#">Municipalidad </a>
                            <ul class="sub-menu">
                                <li><a href="#">Quienes somos</a></li>
                                <li><a href="#">Historia</a></li>
                                <li><a href="#">Mensaje del Alcalde</a></li>
                                <li><a href="#">Consejo Municio</a></li>
                                <li><a href="#">Estructura Organica</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Departamentos</a>
                            <ul class="sub-menu">
                                <li><a href="#">Salud</a></li>
                                <li><a href="#">Educacion</a></li>
                                <li><a href="#">Deporte</a></li>
                                <li><a href="#">Transito</a></li>
                                <li><a href="#">Salud</a></li>
                                <li><a href="#">Educacion</a></li>                      
                            </ul>
                        </li>
                        <li><a href="#">Tramites En Linea</a>
                            <ul class="sub-menu">
                                <li><a href="#">Permiso De Circulacion</a></li>
                                <li><a href="https://www.sem.gob.cl/pago/validacion/">Portal de servicios Municipales</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contacto</a>
                        </li>
                        <li><a id="loginm">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--slider principal y movil-->
        <header >
            <div  class="slider-wrapper theme-light">
                <div id="slider" class="nivoSlider">
                    <img src="<?php echo base_url(); ?>../img/slider/bg2.png"  />
                    <img src="<?php echo base_url(); ?>../img/slider/proyeccion2.png" />
                    <img src="<?php echo base_url(); ?>../img/slider/linares.png" />
                    <img src="<?php echo base_url(); ?>../img/slider/proyeccion2.png" />
                </div>
                <!--                <div id="caption1" style="display: none;">
                                <h3>Hola, esto es un caption HTML</h3>
                                <a href="www.audiolive.cl"><p>Link a AUDIOLIVE</p></a>
                                <ul>
                                    <li>text1.</li>
                                    <li>text2 li2</li>
                                </ul>
                            </div>-->
            </div>
            <script type="text/javascript">
                $(window).load(function () {
                    $('#slider').nivoSlider({
                    });
                });
            </script>
            <div class="wrap">
                <nav id="menu-principal">
                    <ul id="menu-main-menu" class="menu-main">
                        <li><a href="<?php echo base_url(); ?>">Inicio</a></li>

                        <li><a href="#">Municipalidad </a>
                            <ul class="sub-menu">
                                <li><a href="#" onclick="vistaquienessomos();">Quienes somos</a></li>
                                <li><a href="#" onclick="vistaHistoriaMuni();">Historia</a></li>
                                <li><a href="<?php echo base_url(); ?>../pdf/reglamento/reglamento_interno.pdf" target="_blank" >Reglamento</a></li>
                                <li><a href="#" onclick="vistaMSJealcalde();">Mensaje del Alcalde</a></li>
                                <li><a href="#" onclick="concejo();">Concejo Municipal</a></li>
                                <li><a href="#" onclick="vistaOrgrama();">Estructura Organica</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Departamentos</a>
                            <ul class="sub-menu">
                                <li><a href="#" onclick="vistaDirUnidad();">Direccion Unidades</a></li> 
                                <li><a href="#" onclick="vistaJefeDepartamentos();">Jefes de Departamentos</a></li>
                                <li><a href="#" onclick="vistaSaludd();">Salud</a></li>
                                <li><a href="http://www.daemlinares.cl" target="_blank">Educacion</a></li>
                                <li><a href="#" onclick="vistaCartografia();">Cartografia</a></li>
                                <li><a href="#" onclick="vistaDeportes();">Deporte</a></li>
                                <!--                                <li><a href="#">Transito</a></li>                           -->
                            </ul>
                        </li>                         
                        <li>                           
                            <a href="#">Bienestar</a>
                            <ul class="sub-menu">                            
                                <li><a href="<?php echo base_url(); ?>../bienestar/presentacion_servicio_bienestar.pdf" target="_blank">Presentacion</a></li>
                                <li><a href="<?php echo base_url(); ?>../bienestar/reglamento_interno.pdf" target="_blank">Reglamento Interno</a></li>
                                <li><a href="<?php echo base_url(); ?>../bienestar/formulario_de_prestamo_auxilio.pdf" target="_blank">Solicitud Online</a></li>
                                <li><a href="<?php echo base_url(); ?>../bienestar/camping_rari.pdf" target="_blank">Camping</a></li>
                                <li><a href="<?php echo base_url(); ?>../bienestar/convenios.pdf" target="_blank">Convenios</a></li>
                                <li><a href="<?php echo base_url(); ?>../bienestar/beneficios_bienestar_2014.pdf" target="_blank">Beneficios</a></li>
                            </ul>                              
                        </li>
                        <li><a href="#">Tramites En Linea</a>
                            <ul class="sub-menu">
                                <li><a href="https://www.sem.gob.cl/pcirc/index.php?inst_id=69130300&pago_id=22">Permiso De Circulacion</a></li>
                                <li><a href="https://www.sem.gob.cl/pago/validacion/">Portal de Servivios Municipales</a></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="contacto();">Contacto</a>
                        </li>
                        <li><a id="login" >Login</a>
                        </li>
                    </ul>
                </nav>

                <a href="#" id="menu-movil-trigger">Menú Principal</a>

            </div>
        </header>



        <div id="content">

            <div class="wrap">

                <div id="main">
                    <div id="dialog"  style="width: 300px" title="Control De Acceso" >
                        <table border="0.5" width="400" >

                            <tbody>
                                <tr>
                                    <td>Correo</td>
                                    <td><input type="text" id="correo"value="" /></td>
                                </tr>
                                <tr>
                                    <td>Contraseña</td>
                                    <td><input type="password" id="clave"value="" /></td>
                                </tr> 
                                <tr>
                                    <td></td>
                                    <td><button id="conectar">Ingresar</button>
                                </tr>
                            </tbody>


                        </table>
                    </div>
                    <!-- Normal -->
                    <div id="stream" class="stream" >
                    </div>
                    <div id="contenido" >
                    </div>
                    <!-- Fin Normal -->           
                    <!-- nel -->      

                    <!--                    <div class="buscar clearfix">
                                            <form action="">
                                                <label for="query">Busca en las noticias</label>
                                                <input type="text" id="query" placeholder="Ej.:“Lorem Ipsum“ ">
                                                <input type="submit" id="boton" value="Enviar">
                                            </form>
                                        </div>-->

                    <!--                    <div class="banner banner-foto">
                                            <a href="#">
                                                <div class="imagen">
                                                    <img src="http://placehold.it/660x130" alt="">
                                                </div>
                                                <div class="velo"></div>
                                                <div class="texto">
                                                    <span>Lorem Ipsum</span>
                                                    <span><strong>Dolor sit amet.</strong></span>
                                                </div>
                                            </a>
                                        </div>-->




                </div>
                <!--INICIO COLUMNA DERECHA-->
                <div id="sidebar">

                    <div  style="display: none"class="redes-lista">
                        <h5 class="titulo-seccion">Síguenos</h5>
                        <ul>
                            <li id="facebook">
                                <a class="clearfix" href="https://www.facebook.com/www.munilinares.cl" target="_blank">
                                    <span class="icono"></span>
                                    <div class="texto">
                                        <span class="red">Facebook</span>
                                        <span class="usuario">/www.munilinares.cl</span>
                                    </div>
                                </a>
                            </li>
                            <li id="twitter">
                                <a class="clearfix" href="https://twitter.com/munilinares2013">
                                    <span class="icono"></span>
                                    <div class="texto">
                                        <span class="red">Twitter</span>
                                        <span class="usuario">/munilinares2013</span>
                                    </div>
                                </a>
                            </li>
                            <li id="flickr">
                                <a class="clearfix" href="#">
                                    <span class="icono"></span>
                                    <div class="texto">
                                        <span class="red">Flickr</span>
                                        <span class="usuario">usuario</span>
                                    </div>


                                </a>
                            </li>
                            <li id="youtube">
                                <a class="clearfix" href="https://www.youtube.com/user/munilinares" target="_blank">
                                    <span class="icono"></span>
                                    <div class="texto">
                                        <span class="red">Youtube</span>
                                        <span class="usuario">/munilinares</span>
                                    </div>
                                </a>
                            </li>
                            <li id="instagram">
                                <a class="clearfix" href="#">
                                    <span class="icono"></span>
                                    <div class="texto">
                                        <span class="red">Instagram</span>
                                        <span class="usuario">usuario</span>
                                    </div>
                                </a>
                            </li>
                            <!--                            <li id="pinterest">
                                                            <a class="clearfix" href="#">
                                                                <span class="icono"></span>
                                                                <div class="texto">
                                                                    <span class="red">Pinterest</span>
                                                                    <span class="usuario">usuario</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li id="vimeo">
                                                            <a class="clearfix" href="#">
                                                                <span class="icono"></span>
                                                                <div class="texto">
                                                                    <span class="red">Vimeo</span>
                                                                    <span class="usuario">usuario</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li id="linkedin">
                                                            <a class="clearfix" href="#">
                                                                <span class="icono"></span>
                                                                <div class="texto">
                                                                    <span class="red">Linkedin</span>
                                                                    <span class="usuario">usuario</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li id="slideshare">
                                                            <a class="clearfix" href="#">
                                                                <span class="icono"></span>
                                                                <div class="texto">
                                                                    <span class="red">SlideShare</span>
                                                                    <span class="usuario">usuario</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li id="scribd">
                                                            <a class="clearfix" href="#">
                                                                <span class="icono"></span>
                                                                <div class="texto">
                                                                    <span class="red">Scribd</span>
                                                                    <span class="usuario">usuario</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li id="soundcloud">
                                                            <a class="clearfix" href="#">
                                                                <span class="icono"></span>
                                                                <div class="texto">
                                                                    <span class="red">SoundCloud</span>
                                                                    <span class="usuario">usuario</span>
                                                                </div>
                                                            </a>
                                                        </li>-->
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                    <h5 class="titulo-seccion">Cartelera de Eventos</h5>
                    <div class="fotodeldia">

                        <a href="#" class="foto">
                            <img src="http://placehold.it/320x210" alt="Foto Destacada">
                            <div class="clearfix"></div>
                            <h5>CINE </h5>
                            <p> Xmen En Teatro de Linares </p>
                        </a>
                    </div>

                    <div class="banners">
                        <div class="banner banner-corto">
                            <a  href="http://www.portaltransparencia.cl/PortalPdT/web/guest/directorio-de-organismos-regulados?p_p_id=pdtorganismos_WAR_pdtorganismosportlet&orgcode=8691dfce267db7cb63c54511ff105f64"><img src="<?php echo base_url(); ?>../img/solicitainformacion.png" alt="Banner 320x120"></a>
                        </div>

                        <div class="banner banner-corto">
                            <a href="#"onclick="menuTA();" id="ok"><img src="<?php echo base_url(); ?>../img/transparencia-activa.png" alt="Banner 320x120"></a>
                        </div>
                        <div class="banner banner-corto">
                            <a href="https://www.leylobby.gob.cl/instituciones/MU140"><img src="<?php echo base_url(); ?>../img/lobby2.png" alt="Banner 320x120"></a>
                        </div>
                        <div class="banner banner-corto">
                            <a href="#" onclick="cuentaspublicas()"><img src="<?php echo base_url(); ?>../img/cuenta-publica.png" alt="Banner 320x120"></a>
                        </div>

                        <div class="banner banner-corto">
                            <a href="#" onclick="vistahechosmunicipales();"><img src="<?php echo base_url(); ?>../img/hechos-municipal.PNG" alt="Banner 320x120"></a>
                        </div>

                        <div class="banner banner-corto">
                            <a href="#"><img src="<?php echo base_url(); ?>../img/decretos.png" alt="Banner 320x120"></a>
                        </div> 
                        <div class="banner banner-corto">
                            <a href="http://www.munilinares.cl/webmail/src/login.php"><img src="<?php echo base_url(); ?>../img/webmail.png" alt="Banner 320x120"></a>
                        </div>

                    </div>

                    <div class="clearfix"></div>

                </div>
                <!--FIN COLUMNA DERECHA-->
                <div class="clearfix"></div>

            </div>

        </div>

        <div id="prefooter">
            <div class="wrap">

                <div id="cita-destacada">
                    <div class="bicolor">
                        <span class="azul"></span>
                        <span class="amarillo"></span>
                        <span class="verde"></span>
                    </div>
                    <div class="left">
                        <div class="texto">
                            <span class="nombre">Autor de la Cita</span>
                            <span class="descripcion">Cargo del autor de la cita</span>
                            <span class="usuario">usuario</span>
                        </div>
                    </div>
                    <div class="right">
                        <div class="texto">
                            Nullam scelerisque ut tortor eu ullamcorper. Proin gravida dolor vitae sem semper feugiat. Ut at semper velit. Maecenas sit amet blandit sapien. Vivamus blandit diam.
                        </div>
                        <span class="fecha">15 de abril de 2014</span>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="banners banners-mosaico">

                    <div class="banner banner-corto">
                        <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/directorio-de-organismos-regulados?p_p_id=pdtorganismos_WAR_pdtorganismosportlet&orgcode=8691dfce267db7cb63c54511ff105f64"><img src="<?php echo base_url(); ?>../img/solitrasparencia.png" alt="Banner 320x120"></a>
                    </div>

                    <div class="banner banner-corto">
                        <a href="#"><img src="<?php echo base_url(); ?>../img/lobby.png" alt="Banner 320x120"></a>
                    </div>

                    <div class="banner banner-corto">
                        <a href="#"><img src="<?php echo base_url(); ?>../img/patente.png" alt="Banner 320x120"></a>
                    </div>

                    <div class="banner banner-corto">
                        <a href="#"><img src="<?php echo base_url(); ?>../img/proteccioncivil.png" alt="Banner 320x120"></a>
                    </div>

                    <div class="banner banner-corto">
                        <a href="#"><img src="http://placehold.it/320x100" alt="Banner 320x120"></a>
                    </div>

                    <div class="banner banner-corto">
                        <a href="#"><img src="http://placehold.it/320x100" alt="Banner 320x120"></a>
                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>
        </div>

        <div class="clearfix"></div>

        <footer>
            <div class="wrap">

                <div class="bicolor">
                    <span class="azul"></span>
                    <span class="amarillo"></span>
                    <span class="verde"></span>
                </div>

                <div class="top">

                    <div class="listas">

                        <div class="lista">
                            <h5>Trasnparencia</h5>  º
                            <ul>
                                <li><a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/directorio-de-organismos-regulados?p_p_id=pdtorganismos_WAR_pdtorganismosportlet&orgcode=8691dfce267db7cb63c54511ff105f64"">Transparencia</a></li>
                                <li><a href="http://www.bcn.cl/leyfacil/recurso/transparencia---acceso-a-la-informacion-publica">Que es la Transparencia</a></li>
                                <li><a href="http://www.portaltransparencia.cl/PortalPdT/ingreso-sai-v2?idOrg=580">Solicita Informacion</a></li>
                                <li><a href="#">Item 4</a></li>
                                <li><a href="#">Item 5</a></li>
                                <li><a href="#">Item 6</a></li>
                                <li><a href="#">Item 7</a></li>
                            </ul>
                        </div>

                        <div class="lista">
                            <h5>Ley del Lobby</h5>
                            <ul>
                                <li><a href="https://www.leylobby.gob.cl/instituciones/MU140">Plataforma Ley del Lobby</a></li>
                                <li><a href="https://www.youtube.com/watch?v=6cLz23GTw-4">Video Ley del Lobby</a></li>
                                <li><a href="#">Item 3</a></li>
                                <li><a href="#">Item 4</a></li>
                                <li><a href="#">Item 5</a></li>
                                <li><a href="http://www.infolobby.cl/">	Ir al Portal de Consolidación del Estado de La Ley del Lobby</a></li>
                                <li><a href="http://www.munilinares.cl/transparencia/ley_lobby/info_ley_del_lobby/buenas_practicas_lobistas/buenas_practicas_lobby.pdf">Buenas Practicas Para  Lobistas</a></li>
                            </ul>
                        </div>

                        <div class="lista">
                            <h5>Otros Enlaces </h5>
                            <ul>
                                <li><a href="#">Item 1</a></li>
                                <li><a href="#">Item 2</a></li>
                                <li><a href="#">Item 3</a></li>
                                <li><a href="#">Item 4</a></li>
                                <li><a href="#">Item 5</a></li>
                                <li><a href="#">Item 6</a></li>
                                <li><a href="#">Item 7</a></li>
                            </ul>
                        </div>


                    </div>

                    <div class="clearfix"></div>
                    <div class="sep"></div>

                </div>

                <div class="bottom">

                    <div class="left">
                        <span>Kurt Moller 391 - Teléfono: <a href="tel:+56 73 2 564600">+56 73 2 564600 +56 73 2 564700</a></span>
                    </div>

                    <nav>
                        <ul>
                            <li><a href="#">Equipo de desarrollo Dpt Informatica</a></li

                        </ul>
                    </nav>

                    <div class="clearfix"></div>

                    <div class="bicolor">
                        <span class="azul"></span>
                        <span class="amarillo"></span>
                        <span class="verde"></span>
                    </div>

                </div>

            </div>

        </footer>


        <script type="text/javascript" src="<?php echo base_url(); ?>../js/main.js" ></script>

        <script type="text/javascript">
                                window.___gcfg = {lang: 'es-419'};
                                (function () {
                                    var po = document.createElement('script');
                                    po.type = 'text/javascript';
                                    po.async = true;
                                    po.src = 'https://apis.google.com/js/platform.js';
                                    var s = document.getElementsByTagName('script')[0];
                                    s.parentNode.insertBefore(po, s);
                                })();
        </script>

        <script>!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + '://platform.twitter.com/widgets.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'twitter-wjs');</script>

    </body>
</html>
