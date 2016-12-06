<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Organigrama Municipalidad</title>
    <link href="<?php echo base_url(); ?>../organigrama/Site.css" rel="stylesheet" type="text/css">


    <link href="<?php echo base_url(); ?>../organigrama/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>../organigrama/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>../organigrama/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>../organigrama/jquery-ui.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>../organigrama/jquery-1.9.1.min.js.descarga" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>../organigrama/bootstrap.min.js.descarga" type="text/javascript"></script>
</head>

<div class="sorgBodyContainer">

    <script src="<?php echo base_url(); ?>../organigrama/raphael-min.js.descarga" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>../organigrama/jsrender.js.descarga" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>../organigrama/lib_gg_orgchart_v043.js.descarga" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>../organigrama/jquery.scrollTo-1.4.3.1.js.descarga" type="text/javascript"></script>



    <script type="text/javascript">
        var oc_data = {
            title: "MINICIPALIDAD DE LINARES",
            root: {
                id: 'Alcalde', title: 'ALCALDE',
                subtitle: 'ROLANDO RENTERIA MOLLER'

                , children: [
                    {id: 'DireccinDeRelacionesPubliacas'
                        , title: 'DIRECCIÓN DE RELACIONES PUBLICAS'

                        , children: [
                            {id: 'DirectorRelacionesPubliacas'
                                , title: 'DIRECTOR'

                                , children: [
                                    {id: 'ComunicacionRelacionesPubliacas'
                                        , title: 'SECCION COMUNICACION SOCIAL'

                                    }
                                    , {id: 'AudiovisualRelacionesPubliacas'
                                        , title: 'SECCION AUDIOVISUAL'

                                    }
                                    , {id: 'SeremoYProtocolRelacionesPubliacas'
                                        , title: 'SECCION SEREMONIAL Y PROTOCOLO'

                                    }
                                ]

                            }
                        ]
                    }
                    , {id: 'DireccinDeSecplan'
                        , title: 'DIRECCIÓN DE SECPLAN'

                        , children: [
                            {id: 'DirectorSecplan'
                                , title: 'DIRECTOR'

                                , children: [
                                    {id: 'SectEstadSecplan'
                                        , title: 'DEPARTAMENTO SECTORIALISTAS ESTADISTICAS'
                                    }
                                    , {id: 'PlanYProySecplan'
                                        , title: 'DEPARTAMENTO POLANIFICACION Y PROYECTOS'
                                    }
                                ]
                            }
                        ]


                    }
                    , {id: 'DireccinDeAdministracionFinanzas'
                        , title: 'DIRECCIÓN DE ADMINISTRACION Y FINANZAS'

                        , children: [
                            {id: 'DirectorFinanzas'
                                , title: 'DIRECTOR'

                                , children: [
                                    {id: 'rrhhFinanzas'
                                        , title: 'DEPARTAMENTO DE RECURSOS HUMANOS'

                                        , children: [
                                            {id: 'PersonalFinanzas'
                                                , title: 'SECCION PERSONAL'
                                            }
                                            , {id: 'BienestarFinanzas'
                                                , title: 'SECCION BIENESTAR'
                                            }
                                            , {id: 'RemuneracionesFinanzas'
                                                , title: 'SECCION REMUNERACIONES'
                                            }

                                        ]
                                    }
                                    , {id: 'FinanzasFinanzas'
                                        , title: 'DEPARTAMENTO DE FINANZAS'
                                        , children: [
                                            {id: 'TesoreriaFinanzas'
                                                , title: 'SECCION TESORERIA'
                                            }
                                            , {id: 'RentasFinanzas'
                                                , title: 'SECCION RENTAS'
                                            }
                                            , {id: 'ContYppttoFinanzas'
                                                , title: 'SECCION CONTABILIDAD Y PRESUPUESTO'
                                            }
                                        ]
                                    }
                                    , {id: 'AdministracionFinanzas'
                                        , title: 'DEPARTAMENTO DE ADMINISTRACION'
                                        , children: [
                                            {id: 'AdquisicionesFinanzas'
                                                , title: 'SECCION ADQUISICIONES'
                                                , children: [
                                                    {id: 'BodegaFinanzas'
                                                        , title: 'OFICINA BODEGA'
                                                    }
                                                    , {id: 'InventariosFinanzas'
                                                        , title: 'OFICINA INVENTARIOS'
                                                    }
                                                ]
                                            }
                                            , {id: 'ComputacionFinanzas'
                                                , title: 'SECCION COMPUTACION'
                                            }
                                            , {id: 'DeportivosFinanzas'
                                                , title: 'SECCION RECINTOS DEPORTIVOS'
                                            }
                                            , {id: 'InspectoresFinanzas'
                                                , title: 'SECCION INSPECTORES'
                                            }
                                        ]
                                    }

                                ]
                            }
                        ]

                    }
                    , {id: 'DireccinDeTransito'
                        , title: 'DIRECCIÓN DE TRANSITO'
                        , children: [
                            {id: 'DirectorTransito'
                                , title: 'DIRECTOR'

                                , children: [
                                    {id: 'LicenciaConducirTransito'
                                        , title: 'DEPARTAMENTO LICENCIA DE CONDUCIR'

                                    }
                                    , {id: 'PermisoCirculacionTransito'
                                        , title: 'DEPARTAMENTO PERMISOS DE CIRCULACION'

                                    }
                                    , {id: 'IngenieriaOperacionesTransito'
                                        , title: 'DEPARTAMENTO INGENIERIA Y OPERACIONES'

                                    }
                                ]

                            }
                        ]
                    }
                    , {id: 'DireccinDeObras'
                        , title: 'DIRECCIÓN DE OBRAS'
                        , children: [
                            {id: 'DirectorObras'
                                , title: 'DIRECTOR'

                                , children: [
                                    {id: 'TecnicoAdminObras'
                                        , title: 'DEPARTAMENTO TECNICO ADMINISTRACION'
                                        , children: [
                                            {id: 'CatastrosObras'
                                                , title: 'DEPARTAMENTO CATASTROS Y ARCHIVOS'

                                            }, {id: 'PermisosYRecepObras'
                                                , title: 'DEPARTAMENTO PERMISOS Y RECEPCIONES'

                                            }
                                        ]
                                    }
                                    , {id: 'InspeccionObras'
                                        , title: 'DEPARTAMENTO INSPECCION DE OBRAS'

                                    }
                                ]

                            }
                        ]
                    }
                    , {id: 'DireccinDeDideco'
                        , title: 'DIRECCIÓN DE DIDECO'
                        , children: [
                            {id: 'DirectorDideco'
                                , title: 'DIRECTOR'

                                , children: [
                                    {id: 'DesarrolloVeciDideco'
                                        , title: 'SECCION DESARROLLO VECINAL'

                                    }
                                    , {id: 'AccionSocialDideco'
                                        , title: 'DEPARTAMENTO ACCION SOCIAL'
                                        , children: [
                                            {id: 'AsistenSocialDideco'
                                                , title: 'SECCION ASISTENTE SOCIAL'

                                            }
                                            , {id: 'CasIISubsidiosDideco'
                                                , title: 'SECCION CAS II SUBSIDIOS'

                                            }
                                        ]
                                    }
                                    , {id: 'DeporteRecracionDideco'
                                        , title: 'DEPARTAMENTO DEPORTES Y RECREACION'

                                    }
                                    , {id: 'promocionSocialDideco'
                                        , title: 'DEPARTAMENTO PROMOCION SOCIAL'
                                        , children: [
                                            {id: 'ProgramasSocialDideco'
                                                , title: 'SECCION PROGRAMAS SOCIALES'

                                            }
                                            , {id: 'ConveniosSocDideco'
                                                , title: 'SECCION CONVENIOS SOCIALES'

                                            }
                                        ]
                                    }
                                    , {id: 'EconocmicoDideco'
                                        , title: 'DEPARTAMENTO DES. ECONOMICO LOCAL'
                                        , children: [
                                            {id: 'CapYEmpDideco'
                                                , title: 'SECCION CAPACITACION Y EMPLEO'

                                            }
                                            , {id: 'DesProducDideco'
                                                , title: 'SECCION DESARROLLO PRODUCTIVO'

                                            }
                                            , {id: 'TurismosDideco'
                                                , title: 'SECCION TURISMO'

                                            }
                                        ]
                                    }
                                ]

                            }
                        ]


                    }
                    , {id: 'DireccinDeServiciosGenerales'
                        , title: 'DIRECCIÓN DE SERVICIOS GENERALES'

                        , children: [
                            {id: 'DirectorServiciosGenerales'
                                , title: 'DIRECTOR'

                                , children: [
                                    {id: 'MovilizacionServiciosGenerales'
                                        , title: 'DEPARTAMENTO MOVILIZACION'

                                    }
                                    , {id: 'MantencionServiciosGenerales'
                                        , title: 'DEPARTAMENTO SERVICIOS DE MANTENCION'
                                        , children: [
                                            {id: 'Mantencion1ServiciosGenerales'
                                                , title: 'DEPARTAMENTO SERVICIOS DE MANTENCION'

                                            }
//                                            , {id: 'Mantencion2ServiciosGenerales'
//                                                , title: 'DEPARTAMENTO SERVICIOS DE MANTENCION'
//
//                                            }
                                        ]
                                    }
                                    , {id: 'AseoOrnatoServiciosGenerales'
                                        , title: 'DEPARTAMENTO ASEO Y ORNATO'

                                    }
                                ]

                            }
                        ]

                    }
                    , {id: 'DireccindeDeServiciosIncorporados'
                        , title: 'DIRECCIÓN DE SERVICIOS INCORPORADOS A LA GESTION'


                    }
                ]
            }
        };

        var forFixDim = [];
        var countForfixDim = 0;
        var windowWidth = window.screen.width; //obtiene el tamaño de la pantalla


        function resizeDiv() {
            var windowWidth = $(window).width() - 200;
            var windowHeight = $(window).height() - 100;

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

//relaciones publicas

                if (box.oc_id == 'DireccinDeRelacionesPubliacas')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeRelacionesPubliacasText');
                }




                if (box.oc_id == 'ComunicacionRelacionesPubliacas')
                {
                    classHide();
                    currentDiv = $('div#ComunicacionRelacionesPubliacasText');
                }




                if (box.oc_id == 'AudiovisualRelacionesPubliacas')
                {
                    classHide();
                    currentDiv = $('div#AudiovisualRelacionesPubliacasText');
                }




                if (box.oc_id == 'SeremoYProtocolRelacionesPubliacas')
                {
                    classHide();
                    currentDiv = $('div#SeremoYProtocolRelacionesPubliacasText');
                }


//secplan

                if (box.oc_id == 'DireccinDeSecplan')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeSecplanText');
                }




                if (box.oc_id == 'DirectorSecplan')
                {
                    classHide();
                    currentDiv = $('div#DirectorSecplanText');
                }


                if (box.oc_id == 'SectEstadSecplan')
                {
                    classHide();
                    currentDiv = $('div#SectEstadSecplanText');
                }

                if (box.oc_id == 'PlanYProySecplan')
                {
                    classHide();
                    currentDiv = $('div#PlanYProySecplanText');
                }

                //direccion de administracion finanzas
                if (box.oc_id == 'DireccinDeAdministracionFinanzas')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeAdministracionFinanzasText');
                }

                if (box.oc_id == 'DirectorFinanzas')
                {
                    classHide();
                    currentDiv = $('div#DirectorFinanzasText');
                }
                if (box.oc_id == 'rrhhFinanzas')
                {
                    classHide();
                    currentDiv = $('div#rrhhFinanzasText');
                }



                if (box.oc_id == 'PersonalFinanzas')
                {
                    classHide();
                    currentDiv = $('div#PersonalFinanzasText');
                }




                if (box.oc_id == 'BienestarFinanzas')
                {
                    classHide();
                    currentDiv = $('div#BienestarFinanzasText');
                }




                if (box.oc_id == 'RemuneracionesFinanzas')
                {
                    classHide();
                    currentDiv = $('div#RemuneracionesFinanzasText');
                }




                if (box.oc_id == 'FinanzasFinanzas')
                {
                    classHide();
                    currentDiv = $('div#FinanzasFinanzasText');
                }




                if (box.oc_id == 'TesoreriaFinanzas')
                {
                    classHide();
                    currentDiv = $('div#TesoreriaFinanzasText');
                }


                if (box.oc_id == 'RentasFinanzas')
                {
                    classHide();
                    currentDiv = $('div#RentasFinanzasText');
                }




                if (box.oc_id == 'ContYppttoFinanzas')
                {
                    classHide();
                    currentDiv = $('div#ContYppttoFinanzasText');
                }

                if (box.oc_id == 'AdministracionFinanzas')
                {
                    classHide();
                    currentDiv = $('div#AdministracionFinanzasText');
                }

                if (box.oc_id == 'AdquisicionesFinanzas')
                {
                    classHide();
                    currentDiv = $('div#AdquisicionesFinanzasText');
                }
                if (box.oc_id == 'BodegaFinanzas')
                {
                    classHide();
                    currentDiv = $('div#BodegaFinanzasText');
                }
                if (box.oc_id == 'InventariosFinanzas')
                {
                    classHide();
                    currentDiv = $('div#InventariosFinanzasText');
                }
                if (box.oc_id == 'ComputacionFinanzas')
                {
                    classHide();
                    currentDiv = $('div#ComputacionFinanzasText');
                }
                if (box.oc_id == 'DeportivosFinanzas')
                {
                    classHide();
                    currentDiv = $('div#DeportivosFinanzasText');
                }
                if (box.oc_id == 'InspectoresFinanzas')
                {
                    classHide();
                    currentDiv = $('div#InspectoresFinanzasText');
                }
                
                // direccion transito
                
                if (box.oc_id == 'DireccinDeTransito')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeTransitoText');
                }
                if (box.oc_id == 'DirectorTransito')
                {
                    classHide();
                    currentDiv = $('div#DirectorTransitoText');
                }
                if (box.oc_id == 'LicenciaConducirTransito')
                {
                    classHide();
                    currentDiv = $('div#LicenciaConducirTransitoText');
                }
                if (box.oc_id == 'PermisoCirculacionTransito')
                {
                    classHide();
                    currentDiv = $('div#PermisoCirculacionTransitoText');
                }
                if (box.oc_id == 'IngenieriaOperacionesTransito')
                {
                    classHide();
                    currentDiv = $('div#IngenieriaOperacionesTransitoText');
                }
                
               // direccion obras 
                if (box.oc_id == 'DireccinDeObras')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeObrasText');
                }
                if (box.oc_id == 'DirectorObras')
                {
                    classHide();
                    currentDiv = $('div#DirectorObrasText');
                }
                if (box.oc_id == 'TecnicoAdminObras')
                {
                    classHide();
                    currentDiv = $('div#TecnicoAdminObrasText');
                }
                if (box.oc_id == 'CatastrosObras')
                {
                    classHide();
                    currentDiv = $('div#CatastrosObrasText');
                }
                if (box.oc_id == 'PermisosYRecepObras')
                {
                    classHide();
                    currentDiv = $('div#PermisosYRecepObrasText');
                }
                if (box.oc_id == 'InspeccionObras')
                {
                    classHide();
                    currentDiv = $('div#InspeccionObrasText');
                }
                
                // dideco
                if (box.oc_id == 'DireccinDeDideco')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeDidecoText');
                }
                if (box.oc_id == 'DirectorDideco')
                {
                    classHide();
                    currentDiv = $('div#DirectorDidecoText');
                }
                if (box.oc_id == 'DesarrolloVeciDideco')
                {
                    classHide();
                    currentDiv = $('div#DesarrolloVeciDidecoText');
                }
                if (box.oc_id == 'AccionSocialDideco')
                {
                    classHide();
                    currentDiv = $('div#AccionSocialDidecoText');
                }
                if (box.oc_id == 'AsistenSocialDideco')
                {
                    classHide();
                    currentDiv = $('div#AsistenSocialDidecoText');
                }
                if (box.oc_id == 'CasIISubsidiosDideco')
                {
                    classHide();
                    currentDiv = $('div#CasIISubsidiosDidecoText');
                }
                if (box.oc_id == 'DeporteRecracionDideco')
                {
                    classHide();
                    currentDiv = $('div#DeporteRecracionDidecoText');
                }
                if (box.oc_id == 'promocionSocialDideco')
                {
                    classHide();
                    currentDiv = $('div#promocionSocialDidecoText');
                }
                if (box.oc_id == 'ProgramasSocialDideco')
                {
                    classHide();
                    currentDiv = $('div#ProgramasSocialDidecoText');
                }
                if (box.oc_id == 'ConveniosSocDideco')
                {
                    classHide();
                    currentDiv = $('div#ConveniosSocDidecoText');
                }
                if (box.oc_id == 'EconocmicoDideco')
                {
                    classHide();
                    currentDiv = $('div#EconocmicoDidecoText');
                }
                if (box.oc_id == 'CapYEmpDideco')
                {
                    classHide();
                    currentDiv = $('div#CapYEmpDidecoText');
                }
                if (box.oc_id == 'DesProducDideco')
                {
                    classHide();
                    currentDiv = $('div#DesProducDidecoText');
                }
                if (box.oc_id == 'TurismosDideco')
                {
                    classHide();
                    currentDiv = $('div#TurismosDidecoText');
                }
                
                // servicios generales
                
                if (box.oc_id == 'DireccinDeServiciosGenerales')
                {
                    classHide();
                    currentDiv = $('div#DireccinDeServiciosGeneralesText');
                }
                if (box.oc_id == 'DirectorServiciosGenerales')
                {
                    classHide();
                    currentDiv = $('div#DirectorServiciosGeneralesText');
                }
                if (box.oc_id == 'MovilizacionServiciosGenerales')
                {
                    classHide();
                    currentDiv = $('div#MovilizacionServiciosGeneralesText');
                }
                if (box.oc_id == 'MantencionServiciosGenerales')
                {
                    classHide();
                    currentDiv = $('div#MantencionServiciosGeneralesText');
                }
                if (box.oc_id == 'Mantencion1ServiciosGenerales')
                {
                    classHide();
                    currentDiv = $('div#Mantencion1ServiciosGeneralesText');
                }
//                if (box.oc_id == 'Mantencion2ServiciosGenerales')
//                {
//                    classHide();
//                    currentDiv = $('div#Mantencion2ServiciosGeneralesText');
//                }
                
                if (box.oc_id == 'AseoOrnatoServiciosGenerales')
                {
                    classHide();
                    currentDiv = $('div#AseoOrnatoServiciosGeneralesText');
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
        var oc_options2 = {
            //subtitle_color: '#1A678D',               // color of subtitles
            title_font_size: 7, // size of font used for displaying titles inside boxes
            subtitle_font_size: 7, // size of font used for displaying subtitles inside boxes
            title_char_size: [1, 8], // size (x, y) of a char of the font used for displaying titles
            subtitle_char_size: [1, 6], // size (x, y) of a char of the font used for displaying subtitles

            box_fix_width: 90, // set fix width for boxes in pixels
            box_fix_height: 40, // set fix height for boxes in pixels
            box_root_node_width: 100, // override fix width and max text width
            box_root_node_height: 60, // override fix height and size defined by text length
            box_border_radius: 4, // border radius of boxes in pixels

            inner_padding: 10,
            max_text_width: 20,
            container: 'oc_container2',
            box_color: '#6daa33', // fill color of boxes
            box_color_hover: '#103F6D', // fill color of boxes when mouse is over them
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

            $("svg").width((oc_options2.box_fix_width + (oc_options2.inner_padding)) + may);
        }

        $(document).ready(function () {
            resizeDiv();
            $(window).resize(function () {
                resizeDiv();
            });

            ggOrgChart.render(oc_data, oc_options2);

            //corrige el tamaño del contenedor
            fixSvgSize();
            //centra el organigrama
            resizeDiv();

         
//automaticZoomOut();
        });
//         function automaticZoomOut() {
//            var svgWidth = $('svg').width();
//            if (windowWidth < svgWidth)
//            {
//                svgWidth = (windowWidth / svgWidth) - 0.05;
//                $('svg').animate({'zoom': svgWidth}, 4000);
//
//                //establece el porcentaje de zoom
//                windowWidth = svgWidth;
//            } else
//            {
//                windowWidth = 1;
//            }
//        }
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
        <div id="oc_container2" style="align-items:  center;">

            <div class="textoFuncionesUnidad" id="AlcaldesaText" style="display: none;">
                <span class="titleUnidad" style="display:none;">Alcaldesa</span>
                <div class="headTextoFunc">

                    <div class="imagenPerTextoFunc">
                        <img src="#" alt="">
                    </div>

                    <div class="infoPerTextoFunc">
                        <ul>
                            <span class="namePerTextFunc">Josefa Errázuriz Guilisasti</span><br>
                            <span class="nodoPerTextFunc">Alcaldesa</span>
                            <li>
                                <div class="nameItemTextFunc">Fono</div>
                                <div class="contItemTextFunc">+562 2654 3200</div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="nameItemTextFunc">E-Mail</div>
                                <div class="contItemTextFunc">municipalidad@providencia.cl</div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div>
                        <hr>
                    </div>
                </div>
                <div style="text-align: left;">El alcalde es la máxima autoridad de la Municipalidad y en tal calidad le corresponderá su dirección y administración superior y la supervigilancia de su funcionamiento.</div><div style="text-align: justify;"><br></div><div style="text-align: justify;"><font size="3"><i>Facultades, funciones y atribuciones del Alcalde</i></font></div><div style="text-align: justify;"><br></div><div style="text-align: justify;"><font color="#444444">a)</font> Representar judicial y extrajudicialmente a la municipalidad.</div><div style="text-align: justify;"><br></div><div style="text-align: justify;">b) Proponer al concejo la organización interna de la municipalidad.</div><div style="text-align: justify;"><br></div><div style="text-align: justify;">c) Nombrar y remover a los funcionarios de su dependencia de acuerdo con las normas estatutarias que los rijan.</div><div style="text-align: justify;"><br></div><div style="text-align: justify;">d) Velar por la observancia del principio de la probidad administrativa dentro del municipio y aplicar medidas disciplinarias al personal de su dependencia, en conformidad con las normas estatutarias que lo rijan.</div><div style="text-align: justify;"><br></div><div style="text-align: justify;">e) Administrar los recursos financieros de la municipalidad, de acuerdo con las normas sobre administración financiera del Estado, <a href="http://www.leychile.cl/Navegar?idNorma=251693"><i>...Ver más Art. 56, 63, 64, 65, 67 y 68 LEY N°18.695 ORGÁNICA CONSTITUCIONAL DE MUNICIPALIDADES.</i></a></div><div style="text-align: justify;"><br></div><div style="text-align: justify;"><br></div><div style="text-align: justify;">Podrá ordenar, a petición del Director de Obras Municipales, la demolición de los edificios existentes y el desalojo de sus ocupantes con el auxilio de la fuerza pública, con cargo al propietario, sin perjuicio de las demás sanciones que procedan, en aquellas propiedades que no cumplan con las disposiciones del plan regulador<i>, <a href="http://www.leychile.cl/Navegar?idNorma=13560&amp;idParte=&amp;idVersion">...&nbsp;Ver más Art. 123 y 124 LEY GENERAL DE URBANISMO Y CONSTRUCCIONES.</a></i></div><div style="text-align: justify;"><br></div>
            </div>

            <div class="textoFuncionesUnidad" id="ConcejoMunText" style="display: none;">
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
            </div>
        </div>

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