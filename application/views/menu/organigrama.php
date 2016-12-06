<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Organigrama Municipalidad</title>
<link href="<?php echo base_url(); ?>../organigrama/Site.css" rel="stylesheet" type="text/css">


<link href="<?php echo base_url(); ?>../organigrama/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>../organigrama/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>../organigrama/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>../organigrama/jquery-ui.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>../organigrama/jquery-1.9.1.min.js.descarga" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>../organigrama/bootstrap.min.js.descarga" type="text/javascript"></script>


<div class="sorgBodyContainer">

    <script src="<?php echo base_url(); ?>../organigrama/raphael-min.js.descarga" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>../organigrama/jsrender.js.descarga" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>../organigrama/lib_gg_orgchart_v043.js.descarga" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>../organigrama/jquery.scrollTo-1.4.3.1.js.descarga" type="text/javascript"></script>



    <script type="text/javascript">

        var oc_data1 = {
            title: "MINICIPALIDAD DE LINARES",
            root: {
                //                        cabeza
                id: 'Alcalde', title: 'ALCALDE',
                subtitle: 'ROLANDO RENTERIA MOLLER'

                        //                        sub
                , children: [
                    {id: 'ConcejoMunicipal'
                        , title: 'CONCEJO MUNICIPAL'
                        , type: 'collateral'


                    }
                    , {id: 'null', title: '', subtitle: '', type: 'staff', visible: false}

                    //                            staff
                    , {id: 'SecretariaMunicipal'
                        , title: 'SECRETARIA MUNICIPAL'
                        , type: 'staff'


                        , children: [
                        ]

                    }
                    , {id: 'null', title: '', subtitle: '', type: 'staff', visible: false}
                    , {id: 'JuzgadosPoliciaLocal'
                        , title: 'JUZGADO POLICIA LOCAL'
                        , type: 'staff'


                        , children: [
                        ]

                    }
                    , {id: 'null', title: '', subtitle: '', type: 'staff', visible: false}

                    , {id: 'Administrador'
                        , title: 'ADMINISTRADOR'
                        , type: 'staff'


                    }
                    , {id: 'null', title: '', subtitle: '', type: 'staff', visible: false}

                    , {id: 'Aseriajuridica'
                        , title: 'ASESORIA JURIDICA'
                        , type: 'staff'


                        , children: [
                        ]

                    }

                    , {id: 'UnidadDeControl'
                        , title: 'UNIDAD DE CONTROL'
                        , type: 'staff'


                        , children: [
                        ]

                    }

                    //final lineal


                    , {id: 'DireccinDeRelacionesPubliacas'
                        , title: 'DIRECCIÓN DE RELACIONES PUBLICAS'
                    }

                    , {id: 'DireccinDeSecplan'
                        , title: 'DIRECCIÓN DE SECPLAN'

                    }
                    , {id: 'DireccinDeAdministracionFinanzas'
                        , title: 'DIRECCIÓN DE ADMINISTRACION Y FINANZAS'

                    }
                    , {id: 'DireccinDeTransito'
                        , title: 'DIRECCIÓN DE TRANSITO'

                    }
                    , {id: 'DireccinDeObras'
                        , title: 'DIRECCIÓN DE OBRAS'

                    }
                    , {id: 'DireccinDeDideco'
                        , title: 'DIRECCIÓN DE DIDECO'

                    }
                    , {id: 'DireccinDeServiciosGenerales'
                        , title: 'DIRECCIÓN DE SERVICIOS GENERALES'

                    }
                    , {id: 'DireccindeDeServiciosIncorporados'
                        , title: 'DIRECCIÓN DE SERVICIOS INCORPORADOS A LA GESTION'

                    }
                ]
            }
        }

        var forFixDim = [];
        var countForfixDim = 0;
        var windowWidth = window.screen.width; //obtiene el tamaño de la pantalla


        function resizeDiv() {
            var windowWidth = $(window).width() - 150;
            var windowHeight = $(window).height() - 135;

            var cont_ = $("#oc_container2");

            $(cont_).width(windowWidth);
            $(cont_).height(windowHeight);
            $(cont_).css({"overflow": "auto"});

            $(cont_).scrollTo('500%', {axis: 'x'});
        }


        function classHide() {
            $(".textoFuncionesUnidad").hide();
        }
        var x_, y_;
        var currentDiv;

        function showModal() {
            //muestra un modal con funcionalidades de unidad.
            if ($(currentDiv).length > 0)
            {
                var titulo = $(currentDiv).find("span").first().html();
                $("#titleTextUnidad").html(titulo);
                $("#contentTextUnidad").html($(currentDiv).html());
                $("#textUnidadDialog").modal({"show": true});
            }

            currentDiv = undefined;
        }

        function oc_box_click_handler(event, box) {
            if (box.oc_id !== undefined) {



                if (box.oc_id == 'Alcalde')
                {
                    classHide();
                    currentDiv = $('div#AlcaldeText');
                }




                if (box.oc_id == 'ConcejoMunicipal')
                {
                    classHide();
                    currentDiv = $('div#ConcejoMunicipalText');
                }




                if (box.oc_id == 'SecretariaMunicipal')
                {
                    classHide();
                    currentDiv = $('div#SecretariaMunicipalText');
                }




                if (box.oc_id == 'JuzgadosPoliciaLocal')
                {
                    classHide();
                    currentDiv = $('div#JuzgadosPoliciaLocalText');
                }




                if (box.oc_id == 'Administrador')
                {
                    classHide();
                    currentDiv = $('div#AdministradorText');
                }




                if (box.oc_id == 'Aseriajuridica')
                {
                    classHide();
                    currentDiv = $('div#AseriajuridicaText');
                }




                if (box.oc_id == 'UnidadDeControl')
                {
                    classHide();
                    currentDiv = $('div#UnidadDeControlText');
                }


                if (box.oc_id == 'DireccinDeRelacionesPubliacas')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeRelacionesPubliacasText');
                }


                if (box.oc_id == 'DireccinDeSecplan')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeSecplanText');
                }

                if (box.oc_id == 'DireccinDeAdministracionFinanzas')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeAdministracionFinanzasText');
                }

                if (box.oc_id == 'DireccinDeTransito')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeTransitoText');
                }

                if (box.oc_id == 'DireccinDeObras')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeObrasText');
                }



                if (box.oc_id == 'DireccinDeDideco')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeDidecoText');
                }


                if (box.oc_id == 'DireccinDeServiciosGenerales')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeServiciosGeneralesText');
                }


                if (box.oc_id == 'DireccindeDeServiciosIncorporados')
                {
                    classHide();
                    currentDiv = $('div#DireccindeDeServiciosIncorporadosText');
                }

                showModal();
            }
        }

        //
        /*opciones para desplegar en Admin*/
        var oc_options1 = {
            //subtitle_color: '#1A678D',               // color of subtitles
            title_font_size: 9, // size of font used for displaying titles inside boxes
            subtitle_font_size: 9, // size of font used for displaying subtitles inside boxes
            title_char_size: [1, 8], // size (x, y) of a char of the font used for displaying titles
            subtitle_char_size: [1, 6], // size (x, y) of a char of the font used for displaying subtitles

            box_fix_width: 110, // set fix width for boxes in pixels
            box_fix_height: 50, // set fix height for boxes in pixels
            box_root_node_width: 130, // override fix width and max text width
            box_root_node_height: 60, // override fix height and size defined by text length
            box_border_radius: 4, // border radius of boxes in pixels

            inner_padding: 10,
            max_text_width: 20,
            container: 'oc_container2',
            box_color: '#8c1515', // fill color of boxes
            box_color_hover: '#558e0b', // fill color of boxes when mouse is over them
            box_border_color: '#008', // stroke color of boxes
            line_color: '#000000', // color of connectors
            title_color: '#ffffff', // color of titles
            subtitle_color: '#aac4dc', // color of subtitles

            //text_font: 'Calibri',                    // font family to use (should be monospaced)
            text_font: 'Open Sans',
            //use_images: use_images,             // use images within boxes?
            box_click_handler: oc_box_click_handler, // handler (function) called on click on boxes (set to null if no handler)
            debug: false                   // set to true if you want to debug the library
        };

        function fixSvgSize() {
            var may = 0;
            $("rect").each(function (index) {
                var nmay = Math.abs($(this).attr("x"));
                if (Math.abs(nmay) > Math.abs(may))
                {
                    may = Math.abs(nmay);
                }
            });

            $("svg").width((oc_options1.box_fix_width + (oc_options1.inner_padding * 2)) + may);
        }

        $(document).ready(function () {
            resizeDiv();
            $(window).resize(function () {
                resizeDiv();
            });

            ggOrgChart.render(oc_data1, oc_options1);

            //corrige el tamaño del contenedor
            fixSvgSize();
            //centra el organigrama
            resizeDiv();


            automaticZoomOut();

        });

        function automaticZoomOut() {
            var svgWidth = $('svg').width();
            if (windowWidth < svgWidth)
            {
                svgWidth = (windowWidth / svgWidth) - 0.05;
                $('svg').animate({'zoom': svgWidth}, 150);

                //establece el porcentaje de zoom
                windowWidth = svgWidth;
            } else
            {
                windowWidth = 1;
            }
        }

    </script>

    <style type="text/css">
        #buttoni {
            padding: 0;
        }


        #buttoni li {
            display: inline;
        }

        #buttoni li a {
            font-family: Arial;
            font-size:10px;
            text-decoration: none;
            float:left;
            padding: 10px;
            background-color: #2175bc;
            color: #fff;
        }


        #buttoni li a:hover {
            background-color: #2586d7;
            margin-top:-2px;
            padding-bottom:12px;
        }


    </style>  


    <ul id="buttoni">                                      
        <li><a href="#" onclick="vistaOrgrama();">ORGANIGRAMA <br/>MUNICIPAL</a></li>
        <li><a href="#" onclick="vistaOrgramaDepartamentos();">ORGANIGRAMAS DIRECCIONES <br/>Y DEPARTAMENTOS</a></li>
        <li><a href="http://www.leychile.cl/Navegar?idNorma=251693" >Ley 18.695 Orgánica <br/> Constitucional de Municipalidades</a></li>
        <li><a href="<?php echo base_url(); ?>../organigrama/funciones_atribuciones.pdf" >Unidades Internas de la <br/>Municipalidad de Linares</a></li>
    </ul>               



    <div class="sorgContet" >
        <div id="oc_container2" class="sorgSVGContent" >

            <!--alcalde-->
            <div class="textoFuncionesUnidad" id="AlcaldeText" style="display: none;">
                <span class="titleUnidad" style="display:none;">Alcalde</span>
                <div class="headTextoFunc">

                    <div class="imagenPerTextoFunc">
                        <img src="#" alt="">
                    </div>

                    <div class="infoPerTextoFunc">
                        <ul>
                            <span class="namePerTextFunc">MOMBRE</span><br>
                            <span class="nodoPerTextFunc">Alcalde</span>
                            <li>
                                <div class="nameItemTextFunc">Fono :</div>
                                <div class="contItemTextFunc">+569 xxxx xxxx</div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="nameItemTextFunc">E-Mail :</div>
                                <div class="contItemTextFunc">Datos@munilinares.cl</div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div>
                        <hr>
                    </div>
                </div>                
            </div> 
            <!--fin alcalde-->
            <!--consejo-->
            <div class="textoFuncionesUnidad" id="ConcejoMunicipalText" style="display: none;">
                <span class="titleUnidad" style="display:none;">Concejo Municipal</span>
                <div style="text-align: justify;">   <div>
                        <br><table width="100%" style="text-align: center;">
                            <tbody>
                                <tr>
                                    <td width="50%">
                                        <img src="./Organigrama Municipalidad_files/concejal_4.jpg">
                                        <br>
                                        <font size="3">Manuel José Monckeberg</font><br>
                                        <b>mjmonckeberg@providencia.cl</b>
                                        <br>Fono:&nbsp;02-26543364<br><br>
                                    </td>			
                                    <td width="50%">
                                        <img src="./Organigrama Municipalidad_files/concejal_6.jpg">
                                        <br>
                                        <font size="3">Pilar Cruz Hurtado</font>
                                        <br><b>pcruz@providencia.cl</b>
                                        <br>Fono:&nbsp;02-26543361<br>
                                        <br>
                                    </td>		
                                </tr>		
                                <tr>		
                                    <td width="50%">
                                        <img src="./Organigrama Municipalidad_files/concejal_5.jpg">
                                        <br><font size="3">Nicolás Muñoz</font>
                                        <br>
                                        <b>nmunoz@providencia.cl</b>
                                        <br>Fono:&nbsp;02-26543367<br>
                                        <br>
                                    </td>		
                                    <td width="50%">
                                        <img src="./Organigrama Municipalidad_files/concejal_2.jpg">
                                        <br>
                                        <font size="3">Iván Noguera Phillips</font>
                                        <br>
                                        <b>inoguera@providencia.cl</b>
                                        <br>Fono:&nbsp;02-26543366<br>
                                        <br>
                                    </td>	
                                </tr>		
                                <tr>		
                                    <td width="50%">
                                        <img src="./Organigrama Municipalidad_files/concejal_3.jpg">
                                        <br>
                                        <font size="3">Jaime Parada Hoyl</font>
                                        <br>
                                        <b>jparada@providencia.cl</b>
                                        <br>Fono:&nbsp;02-26543365<br>
                                        <br>
                                    </td>		
                                    <td width="50%">
                                        <img src="./Organigrama Municipalidad_files/concejal_8.jpg">
                                        <br>
                                        <font size="3">Rodrigo García Márquez</font>
                                        <br>
                                        <b>rgarcia@providencia.cl</b>
                                        <br>Fono:&nbsp;02-26543363<br>
                                        <br>
                                    </td>	
                                </tr>		
                                <tr>		
                                    <td width="50%">
                                        <img src="./Organigrama Municipalidad_files/concejal_7.jpg">
                                        <br>
                                        <font size="3">Pedro Lizana Greve</font>
                                        <br>
                                        <b>plizana@providencia.cl</b>
                                        <br>Fono:&nbsp;02-26543362<br>
                                        <br>
                                    </td>		
                                    <td width="50%">
                                        <img src="./Organigrama Municipalidad_files/concejal_1.jpg">
                                        <br>
                                        <div>
                                            <span style="font-size: medium; line-height: 1.5; background-color: transparent;">David Silva</span>
                                        </div>
                                        <div>
                                            <b>dsilva@providencia.cl</b>
                                            <br>
                                        </div>
                                        <span style="line-height: 1.5; background-color: transparent;">Fono: 02-26543495</span>
                                        <br>
                                        <br>
                                    </td>
                                </tr>	
                            </tbody>
                        </table>
                    </div>
                </div>
                <div style="text-align: justify;">
                    <div style="text-align: center;">
                        <br>
                    </div>   
                    <div style="text-align: left;">Al Concejo le corresponderá:</div> 
                    <div><font size="3">
                        <i>
                            <br>
                        </i>
                        </font>
                    </div>  
                    <div>a) Elegir al alcalde, en caso de vacancia, de acuerdo con lo dispuesto en el artículo 62. Para este efecto el concejal deberá acreditar y cumplir con los requisitos especificados en el inciso segundo del artículo 57.</div>
                    <div>
                        <br>
                    </div>  
                    <div>b) Pronunciarse sobre las materias que enumera el artículo 65 de esta ley.</div>  
                    <div>
                        <br>
                    </div>  
                    <div>c) Fiscalizar el cumplimiento de los planes y programas de inversión municipales y la ejecución del presupuesto municipal y analizar el registro público mensual de gastos detallados que lleva la Dirección de Administración y Finanzas...&nbsp;<i>
                            <a href="http://www.leychile.cl/Navegar?idNorma=251693">Ver más Art. 79, 80, 81 y 87 LEY N°18.695 ORGÁNICA CONSTITUCIONAL DE MUNICIPALIDADES</a>
                            <span style="line-height: 1.5;">.</span>
                        </i>
                    </div>
                    <div>
                        <br>
                    </div>
                </div>
            </div><!--fin consejo-->



            <div class="textoFuncionesUnidad" id="DireccinDeRelacionesPubliacasText" style="display: none;">
                <div id="rel_public" class="sorgSVGContent" >
                </div>
            </div>
        </div><!--fin contenedor-->

        <!--inicio modal-->
        <div class="modal fade" id="textUnidadDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">

                        <div id="contentTextUnidad">

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


            </div>
        </div>

    </div>
</div>
