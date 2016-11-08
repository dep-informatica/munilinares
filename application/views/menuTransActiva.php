
<style type="text/css">


    button.accordion {
        background-color: #ffffff;
        color: gray;
        cursor: pointer;
        padding: 18px;
        width: 100%;        
        text-align: left;
        border: none;
        outline: none;
        transition: 0.4s; 
        font-size: 10px;
        border-bottom : #bbb groove;
        border-right : #bbb groove;
    }
    button.accordion:hover {
        color:white;
        font-weight: bold;
        border: #666 2px solid;
        font-size: 14px;

    }


    button.accordion.active, button.accordion:hover {
        background-color: #E67E22;
        color:white;
    }


    div.panel {
        padding: 5px 18px;
        background-color: white;
        display: none;
        font-size: 10px;        
    }


    div.panel.show {
        display: block;
    }

    a:link, a:visited { text-decoration: none }
    a:hover { text-decoration: underline; 
              font-weight: bold;
              color: #E13300;
              font-size: 11px;
    }

    .icon{
        width: 10%;
        height: 10%; 
        align: center;
    }
    .tdtable{
        border: 5px transparent solid;
        height: 100%;
        width: 50%;
        color: #666;

    }



    #menu {
        padding: 0;

    }
    #menu li {
        display: inline;        
    }


    #menu li a {
        font-family: Arial;
        font-size:10px;
        text-decoration: none;
        float:left;
        padding: 10px;
        background-color: #fff;
        color: #000;
    }


    #menu li a:hover {
        background-color: #2586d7;
        margin-top:-2px;
        padding-bottom:12px;
    }

    .menularg{
        width: 100%;   
        background-color: #fff; 

    }
</style>

<script type="text/javascript">

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function () {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }

</script>

<div style="border-bottom : #bbb groove; border-right : #bbb groove;">
    <table>
        <td class="menularg">
            <img src="<?php echo base_url(); ?>../trasparencia/transparencia-baner.jpg" width="100%"/>

            <ul id="menu">
                <li><a href="#" onclick="vistaMenuTransparenciaActiva();">INICIO</a></li>
                <li><a href="<?php echo base_url(); ?>../trasparencia/carta_al_ciudadano.pdf" target="_blank">CARTA DE DERECHOS<br> CIUDADANOS</a></li>
                <li><a href="http://www.bcn.cl/leyfacil/recurso/transparencia---acceso-a-la-informacion-publica" target="_blank">¿QUE ES LA LEY DE<br> TRASPARENCIA?</a></li>
                <li><a href="http://www.consejotransparencia.cl/consejo/site/edic/base/port/inicio.html" target="_blank">CONSEJO PARA LA <br>TRASPARENCIA</a></li>
                <li><a href="http://www.educatransparencia.cl/" target="_blank">EDUCA <br>TRASPARENCIA</a></li>
                <li><a href="<?php echo base_url(); ?>../trasparencia/reglamento_interno_transparencia.pdf">REGLAMENTO <br> INTERNO <br> TRANSPARENCIA</a></li>
            </ul>
        <td>
    </table>

</div>     
<br>
<br>
<div id="ContenidoTrasparencia">
    <table>        
        <tr>
            <td class="tdtable">
                <button class="accordion">
                    <img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>01. Alcalde</button>
                <div class="panel">
                    <a href="#">Alcalde</a><br>  
                </div>
            </td>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>02. Concejo Municipal</button>
                <div class="panel">
                    <a href="#" onclick="transCosejo();">Concejo Municipal</a><br>  
                </div>

            </td>
        </tr>
        <tr>
            <td class="tdtable">
                <button class="accordion">
                    <img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>03. ##Publicaciones en Diario Oficial</button>
                <div class="panel">
                    <a href="#" onclick="transDirOficial();">Actos y documentos que han sido objeto de publicación en el Diario Oficial</a><br>  
                </div>

            </td>
            <td class="tdtable">
                <button class="accordion">
                    <img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>04. ##Potestades y Marco Normativo</button>
                <div class="panel">
                    <a href="#" onclick="transPotestades();">Potestades, competencias, responsabilidades, funciones, atribuciones y/o tareas</a><br>  
                    <a href="#" onclick="transMNarrativo();">Marco Normativo</a>
                </div>

            </td>
        </tr>
        <tr>
            <td class="tdtable">
                <button class="accordion">
                    <img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>05. Estructura Orgánica</button>


                <div class="panel">
                    <a href="#" onclick="vistaOrgrama();">Organigrama</a><br>
                    <a href="http://www.leychile.cl/Navegar?idNorma=251693" target="_blank">Ley 18.695 Orgánica Constitucional de Municipalidades</a><br>
                    <a href="<?php echo base_url(); ?>../pdf/reglamento/reglamento_interno.pdf" target="_blank">Reglamento Interno de la Municipalidad de Linares</a><br>
                    <a href="<?php echo base_url(); ?>../organigrama/funciones_atribuciones.pdf" target="_blank">Descripción de Funciones de las Unidades Internas de la Municipalidad de Linares</a><br>
                    <a href="#" onclick="transDirUnidades();">Directores de Unidad</a><br>
                    <a href="#" onclick="transJefeDepto();">Jefes de Departamento</a><br>
                    <a href="#" onclick="transReDeportivo();">Recintos Deportivos</a><br>                       
                    <a href="<?php echo base_url(); ?>../trasparencia/estrucOrganic/reglamento_interno_transparencia.pdf" target="_blank">Manual Interno de Transparencia Municipal</a><br>
                </div>
            </td>    
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>06. ##Personal y Remuneraciones</button>
                <div class="panel">
                    <a href="http://www.munilinares.cl/ley20285/info.php?anoana=2016&Submit=Procesar&file=4_1" target="_blank">Personal y Remuneraciones</a><br>  
                    <a href="<?php echo base_url(); ?>../trasparencia/persoRemun/tabla_grados_2014_municipal.pdf" target="_blank">Escala Municipal</a><br>  
                    <a href="<?php echo base_url(); ?>../trasparencia/persoRemun/escala_remuneraciones_2014_salud.pdf" target="_blank">Escala Salud</a><br> 
                    <a>Escala Educacion (NO APLICA)</a><br>
                </div>
            </td>
        </tr>
        <tr>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>07. Actos y Resoluciones</button>
                <div class="panel">                   
                    <a href="<?php echo base_url(); ?>../trasparencia/actosResulu/descargas_microempresas.pdf" target="_blank">Fondo Concursables Microempresarios 2015</a><br>
                    <a href="#" onclick="transEmprendedores();">Emprendedores</a><br>
                    <a href="#" onclick="transPostulacionFondeve();">Postulación Proyectos Fondeve</a><br>
                    <a href="#" onclick="transConcursoPublicos();">Concursos Públicos para Trabajo</a><br>                   
                    <a href="<?php echo base_url(); ?>../trasparencia/actosResulu/espacio_publico.pdf">Ocupación de Espacio Público</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/actosResulu/plano_semaforos.pdf">Plano Ubicación Semáforos</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/actosResulu/plano_areas_verdes.pdf">Plano Áreas Verdes Digitalizado</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/actosResulu/plano_linares_urbano.pdf">Plano Urbano de Linares</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/actosResulu/plano_unidades_vecinales.pdf">Plano Unidades Vecinales Digitalizado</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/actosResulu/plan_regulador_dom.pdf">Mapa Plan Regulador de Linares</a><br>
                    <a href="#" onclick="transPatenteComerc();">Patentes Comerciales</a><br>
                    <a href="#" onclick="transPermisoEdif();">Permisos de Edificación</a><br>
                    <a href="#" onclick="transDecretoMunicipales();">####Decretos Municipales</a><br>
                    <a href="#" onclick="transOrdenanzas();">Ordenanzas</a><br>
                    <a href="http://www.munilinares.cl/ley20285/info.php?file=7_1">Actas de Concejo Municipal</a><br>
                    <a href="#">####Sumarios</a><br>
                    <a href="#" onclick="transConvenios();">Convenios</a><br>
                </div>
            </td>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>08. Compras y Adquisiciones</button>
                <div class="panel">                   
                    <a href="../trasparencia/comprasContrataciones/manual_de_procedimientos_adquisiciones.pdf" target="_blank">Manual de Procedimientos de Adqusiciones</a><br> 
                    <a href="http://www.mercadopublico.cl/Portal/Modules/Site/Busquedas/ResultadoBusqueda.aspx?qs=1&IdEmpresa=pwsdFGywfj4=" target="_blank">Compras dentro de Mercado Público</a><br> 
                    <a href="<?php echo base_url(); ?>../trasparencia/comprasContrataciones/compras_contrataciones.pdf" target="_blank">####Contrato de Bienes Inmuebles</a><br> 
                    <a href="#" onclick="transMe3UTM();">####Compras Menores a 3 U.T.M.</a><br> 
                    <a href="#" onclick="transMa3UTM();">####Compras Mayores a 3 U.T.M.</a><br> 
                    <a href="<?php echo base_url(); ?>../trasparencia/comprasContrataciones/objetivo_colectivo.pdf" target="_blank">Estudios y Proyectos Adjudicados 2016</a><br> 
                </div>
            </td>
        </tr>
        <tr>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>09. Transferencias y Fondos Publicos</button>
                <div class="panel">
                    <a href="#">####Otras Transferencias</a><br>
                    <a href="https://www.registros19862.cl/normativas" >Normativas</a><br>
                    <a href="https://www.registros19862.cl/manuales">Manuales y Videos</a><br>
                    <a href="https://www.registros19862.cl/preguntasfrecuentes">Preguntas Frecuentes</a><br>
                    <a href="https://www.registros19862.cl/reportes/transferencias/reporte/ingresadas?pagina=3&WHERE%5Btransferencia%5D%5Btipo_fecha%5D=0&WHERE%5Btransferencia%5D%5Bfecha_desde%5D=01%2F01%2F2009&WHERE%5Btransferencia%5D%5Bfecha_hasta%5D=31%2F12%2F2014&WHERE%5Btransferencia%5D%5Brut_donante%5D=69.130.300-4&WHERE%5Btransferencia%5D%5Bnombre_donante%5D=&WHERE%5Btransferencia%5D%5Brut_receptor%5D=&WHERE%5Btransfere">Registro de Transferencias de Fondos Públicos Ley 19.862</a><br>
                </div>
            </td>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>10. Trámites y Requisitos</button>
                <div class="panel">

                    <a href="<?php echo base_url(); ?>../trasparencia/tramitesServicios/solicitud_de_certificados.pdf" target="_blank">####Documentos Dirección de Obras: Certificados, Formularios, Permisos de Edificación, Solicitudes de Aprobación, Solicitudes de Copropiedad, Permisos de Obra Menor, Solicitudes de Recepción, etc.,</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/tramitesServicios/tramites_dom.pdf" target="_blank">Trámites Dirección de Obras</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/tramitesServicios/tramites_patentes_comerciales.pdf" target="_blank">Tramites Patentes Comerciales</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/tramitesServicios/tramites_permisos_circulacion.pdf" target="_blank">Tramites Permisos de Circulación</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/tramitesServicios/tramites_jpl.pdf" target="_blank">Trámites Juzgado de Policía Local</a><br>
                    <a href="https://www.chileatiende.gob.cl/fichas/ver/12305">Chile Atiende</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/tramitesServicios/tramites_ssgg.pdf" target="_blank">Tramite Servicios Generales</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/tramitesServicios/tramites_transparencia.pdf" target="_blank">Trámites Solicitud de Información Ley 20.285</a><br>
                </div>
            </td>
        </tr>
        <tr>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>11. Ley del Lobby</button>
                <div class="panel">     
                    <a href="https://www.leylobby.gob.cl/instituciones/MU140">Ir al Portal Ley del Lobby de la Municipalidad de Linares</a><br> 
                    <a href="<?php echo base_url(); ?>../trasparencia/LeyLobby/001_formulario_solicitud_audiencia.pdf" target="_blank">Formulario Solicitud de Audiencia Manual para ser entregado Presencialmente</a><br> 
                    <a href="<?php echo base_url(); ?>../trasparencia/LeyLobby/003_formulario_inscripcion_previa_persona_juridica.pdf" target="_blank">Formulario Inscripción Previa para una Audiencia de una Persona Jurídica</a><br> 
                    <a href="<?php echo base_url(); ?>../trasparencia/LeyLobby/004_formulario_inscripcion_previa_persona_natural.pdf" target="_blank">Formulario Inscripción Previa para una Audiencia de una Persona Natural</a><br> 
                    <a href="https://www.youtube.com/watch?v=6cLz23GTw-4">####Video informativo Ley del Lobby</a><br> 
                    <a href="http://www.infolobby.cl/">Ir al Portal de Consolidación del Estado de La Ley del Lobby</a><br> 
                    <a href="<?php echo base_url(); ?>../trasparencia/LeyLobby/buenas_practicas_lobby.pdf" target="_blank">Código de Buenas Prácticas para Lobbistas</a><br> 
                </div>
            </td>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>12. Mecanismos de Participación Ciudadana</button>
                <div class="panel">                    
                    <a href="#" onclick="transMparticipacionCiudad();">####Mecanismos de Participación Ciudadana</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/MPartCiudadana/ordenanza_participacion.pdf" target="_blank">Ordenanza de Participación Ciudadana</a><br>
                    <a href="#" onclick="transConsejeros();">####Nómina de Consejeros</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/MPartCiudadana/Nuevo_Reglamentos_CCOSC.pdf" target="_blank">Nuevo Reglamento del Consejo Comunal de Organizaciones de la Sociedad Civil</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/MPartCiudadana/Nuevo_Reglamentos_CCOSC.pdf" target="_blank">####Convocatoria a Elección de Consejeros para Integrar el CCOSC</a><br>
                    <a href="#" onclick="transActasConsejos();">####Actas Consejo Comunal</a><br>
                    <a href="#" onclick="transCuentasPublicas();">####Cuentas Públicas</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/MPartCiudadana/pladeco_linares_2014_2018.pdf" target="_blank">PLADECO - Plan de Desarrollo Comunal</a><br>
                </div>
            </td>
        </tr>
        <tr>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>13. Subsidios y Programas Municipales</button>
                <div class="panel">

                    <a href="<?php echo base_url(); ?>../trasparencia/SubyProg/ProgSubsidios.pdf" target="_blank">Requisitos Subsidio Agua Potable</a><br> 
                    <a href="<?php echo base_url(); ?>../trasparencia/SubyProg/sap_r.pdf" target="_blank">Actualización Beneficiarios Subsidio Agua Potable Rural</a><br> 
                    <a href="<?php echo base_url(); ?>../trasparencia/SubyProg/sap_u.pdf" target="_blank">Actualizacion Beneficiarios Subsidio Agua Potable Urbano</a><br> 
                    <a href="<?php echo base_url(); ?>../trasparencia/SubyProg/suf.pdf" target="_blank">Beneficiarios Subsidio Unico Familiar</a><br> 
                    <a href="#">####Requisitos Programa Subsidio Familiar</a><br> 
                    <a href="http://www.leychile.cl/Navegar?idNorma=30157" target="_blank">Ley 18.878 de Fecha 2 de Febrero de 1989</a><br> 
                    <a href="http://www.siss.gob.cl/577/w3-propertyvalue-3556.html" target="_blank">Ley de Subsidio de Agua Potable</a><br> 
                </div>
            </td>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>14. Participación en otras Entidades</button>
                <div class="panel">
                    <a href="#" onclick="transOtrasEntidades();">####Vínculos con Entidades con Participación Municipal</a><br>
                    <a href="http://www.leychile.cl/Navegar?idNorma=1029298" target="_blank">Ver Ley Nº 20.527 - MODIFICA LA LEY Nº 18.695, ORGÁNICA CONSTITUCIONAL DE MUNICIPALIDADES Y REGULA LAS ASOCIACIONES MUNICIPALES</a><br>
                    <a href="<?php echo base_url(); ?>../trasparencia/OtraEntidades/asociatividad.pdf" target="_blank">Reglamento para la Aplicación de las Normas de la Ley 18.695</a><br>
                </div>
            </td>
        </tr>
        <tr>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>15. Documentos Reservados</button>
                <div class="panel">
                    <a href="#" onclick="transDocReservados();">####Índice de actos o documentos calificados como secretos o reservados</a><br> 
                </div>
            </td>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>16. Videos y Tutoriales de Informacion y Derechos</button>
                <div class="panel">
                    <a href="#" onclick="transVideoSenias();">Videos lenguajes de señas de Informacion y Derechos</a><br>
                    <a href="http://www.educatransparencia.cl/">Tutorial Derechos A la informacion Publica</a><br> 
                </div>
            </td>
        </tr>
        <tr>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>17. Antecedentes preparatorios de normas jurídicas que afecten a empresas de menor tamaño</button>
                <div class="panel">
                    <a href="#" onclick="transAntePreparatorios();">####Antecedentes preparatorios de normas jurídicas que afecten a empresas de menor tamaño</a><br> 
                </div>
            </td>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>18. Auditorias</button>
                <div class="panel">
                    <a href="#" onclick="transResAuditorias();">####Resumen de Auditorías</a><br> 
                    <a href="#" onclick="transInfoTrimestral();">####Informes Trimestrales</a><br>
                    <a href="http://www.contraloria.cl/SicaProd/SICAv3-BIFAPortalCGR/faces/buscadorBifa?_adf.ctrl-state=12158idkwf_39" target="_blank">Enlace a Contraloría</a><br>
                </div>
            </td>
        </tr>
        <tr>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>19. Presupuesto Municipal, Salud Y Educacion</button>
                <div class="panel">
                    <a href="#" onclick="transFComunMuni();">####Fondo Común Municipal</a><br> 
                    <a href="#" onclick="transInfoPTrimestral();">####Informe de Pasivos Trimestrales Areas Municipales</a><br> 
                    <a href="#" onclick="transModPresupuestaria();">####Modificaciones Presupuestarias Areas Municipales</a><br> 
                    <a href="#" onclick="transBPreAreasPresup();">####Balances de Ejecución Presupuestaria Areas Municipales</a><br> 
                    <a href="#" onclick="transPrepAreaMuni();">####Presupuesto Areas Municipales</a><br> 
                    <a href="#" onclick="transEstadosFinan();">####Estados Financieros</a><br> 
                </div>
            </td>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>20. Solicitudes de Transparencia Respondidas por Nuestro Municipio</button>
                <div class="panel">
                    <a href="<?php echo base_url(); ?>../trasparencia/soliciTranparen/solicitudes_transparencia.pdf" target="_blank">Solicitudes de Transparencia Respondidas por Nuestro Municipio</a><br> 
                </div>
            </td>
        </tr>
        <tr>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>21. Costros De Reproduccion</button>
                <div class="panel">
                    <a href="#" onclick="transCostosReproduccion();">Costros De Reproduccion</a><br>
                </div>
            </td>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>22. Antecedentes preparatorios que afectan a Empresas de menor Tamaño</button>
                <div class="panel">
                    <a href="#" onclick="transAnteMernorTaman();">Antecedentes preparatorios que afectan a Empresas de menor Tamaño</a><br> 
                </div>
            </td>
        </tr>
        <tr>           
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>23. Ideas Para Trasparencia</button>
                <div class="panel">
                    <a href="http://extranet.consejotransparencia.cl/Web_IdeasInfo/Peticion/Reglas.aspx" target="_blank">Ideas Para Trasparencia Danos Las Tuyas</a><br> 
                </div>
            </td>
            <td class="tdtable">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>24. Encuesta De satisfaccion</button>
                <div class="panel">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSf0gAMEwlYQuIY1LuGWy_po3KJ89yYZav366nfr6kI9iH99Ag/viewform?c=0&w=1" target="_blank">Encuesta De satisfaccion</a><br> 
                </div>
            </td>
        </tr>

        <tr>           
            <td class="tdtable" colspan="2">
                <button class="accordion"><img src="<?php echo base_url(); ?>../trasparencia/iconoFLEC.png" class="icon" align="right"/>Dificutades Técnicas y Descargas Tecnológicas</button>
                <div class="panel">
                    <a href="#" onclick="transDifTecnicas();">Dificutades Técnicas y Descargas Tecnológicas</a><br> 
                </div>
            </td>
        </tr>
    </table>    
</div>

<!--<style type="text/css">

    /* Tact: Portada
-----------------------------------------------------------*/
    .columna
    {
        float: left;
        width: auto;
        max-width: 33%;
        min-width: 33%;

    }

    .columna ul
    {
        list-style-type: none;
        margin: 0 0 20px 0;
        padding: 0 0 0 15px;   
    }

    .columna ul li a
    {
        font-size: 14px;
        text-decoration: none;
        font-family: 'Droid Serif',arial,serif;
        color: #1F3370;
        font-weight: bold;

    }

    .columna ul li ul
    {
        list-style-image: url(images/flecha.gif);
        list-style-position: outside;
        padding: 5px 0 0 17px;
        border-top: 1px solid #EBEBEB;    
    }

    .columna ul li a:hover
    {
        text-decoration: underline;
    }

    .columna ul li ul li a
    {
        font-size: 12px;
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
        color: black;
        font-weight: normal;
    }

    .columna ul li ul li a:hover
    {
        text-decoration: underline;
    }

    .tpasiva
    {
        background-color: #F5F5F5;
        margin: 20px 10px 50px 10px;
        border: 1px solid #E6E6E6;
        padding: 20px 0 0 0;
    }

    .tpasiva_top
    {
        margin: auto;

    }

    .tpasiva_top_cont
    {
        width: auto;
        min-width: 50%;
        max-width: 50%;
        float: left;
    }

    .tp_banner
    {
        background-color: White;
        border: 1px solid #59B5E5;
        color: #1F3370;
        width: 411px;
        margin: auto;
        padding: 20px 10px 10px 20px;
        height: 45px;
    }

    .tp_banner:hover
    {
        background-color: #E8F7FF;
        cursor: pointer;
    }

    .plazo
    {    
        padding: 20px;
        text-align: justify;
        font-size: 12px;

    }
    .conte{
        background-color: #ffffff;
    }
</style>

<div class="conte">
    <div class="columna">
        <ul>
            <li>
                <a href="/tact/Carpeta/Listado/22898">Alcaldesa</a>                    <ul>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/22679">Concejo Municipal</a>                    <ul>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/1">Publicaciones en Diario Oficial</a>                    <ul>
                    <li>
                        <a href="/tact/Carpeta/Listado/15">Actos y documentos que han sido objeto de publicación en el Diario Oficial</a>                                </li>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/2">Potestades y Marco Normativo</a>                    <ul>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/16">Potestades, competencias, responsabilidades, funciones, atribuciones y/o tareas</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/17">Marco Normativo</a>                                </li>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/3">Estructura Orgánica</a>                    <ul>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/18">Facultades, funciones y atribuciones de sus unidades</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/19">Organigrama</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/20">Reglamento Interno</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/22">Listado de Directivos y Jefaturas de Departamentos, Secciones y Oficinas</a>                                </li>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/4">Personal y Remuneraciones</a>                    <ul>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/23">Personal de Planta</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/24">Personal a Contrata</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/25">Personal sujeto al Código del Trabajo</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/26">Personas naturales contratadas a honorarios</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/22487">Escala de Remuneraciones</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/27">Otras autoridades</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/22847">Honorarios de Programas Sociales</a>                                </li>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/VerEnlace/22959" target="_blank">Tutoriales Derecho Acceso a la Información Pública</a>                    <ul>
                </ul>
            </li>
        </ul>
    </div>
    <div class="columna">
        <ul>
            <li>
                <a href="/tact/Carpeta/Listado/100">Actos y Resoluciones</a>                    <ul>
                    <li>
                        <a href="/tact/Carpeta/Listado/101">Actos y resoluciones con efectos sobre terceros</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/106">Concesiones</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/23148">Comodatos</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/107">Dictámenes</a>                                </li>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/5">Compras y Adquisiciones</a>                    <ul>
                    <li>
                        <a href="/tact/Carpeta/VerEnlace/28" target="_blank">Compras Realizadas a través de Mercado Público</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/29">Otras compras</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/23238">Plan Anual de Compras</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/22482">Histórico de Compras</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/30">Contratos relativos a bienes  inmuebles</a>                                </li>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/6">Transferencias</a>                    <ul>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/31">Transferencias de fondos públicos (Ley 19.862)</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerEnlace/32" target="_blank">Transferencias reguladas por la Ley 19.862 www.registros19862.cl</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/33">Otras Transferencias </a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/22918">Rendiciones</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerEnlace/22483" target="_blank">Ordenanza de Registros de Personas Jurídicas Receptoras de Fondos Públicos</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/22848">Registro público de personas jurídicas receptoras de fondos públicos</a>                                </li>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/8">Trámites y Requisitos</a>                    <ul>
                    <li>
                        <a href="/tact/Carpeta/Listado/37">Trámites ante la Municipalidad de Providencia</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerEnlace/22960" target="_blank">Chile Atiende</a>                                </li>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/23204">Ley del Lobby</a>                    <ul>
                </ul>
            </li>
        </ul>
    </div>
    <div class="columna">
        <ul>
            <li>
                <a href="/tact/Carpeta/Listado/10">Mecanismos de Participación Ciudadana</a>                    <ul>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/23231">Audiencias Públicas</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/22560">Mecanismos de Participación Ciudadana</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/22567">Consejo Comunal de Organizaciones de la Sociedad Civil de Providencia</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/22580">Consejo Económico Social y Comunal ( vigente hasta  el 16/02/2011, fecha publicación Ley 20.500)</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/22572">Cuenta Pública</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/22574">Plan Regulador Comunal</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/22573">Plan de Desarrollo Comunal</a>                                </li>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/9">Subsidios y Beneficios</a>                    <ul>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/38">Programas de subsidios y otros beneficios</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/39">Nómina de beneficiarios</a>                                </li>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/11">Presupuesto y Auditorías</a>                    <ul>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/41">Presupuesto Municipal</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/42">Modificaciones Presupuestarias</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/43">Auditorías</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/22589">Informe de Pasivos Exigibles</a>                                </li>
                    <li>
                        <a href="/tact/Carpeta/Listado/22585">Otros relacionados</a>                                </li>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/12">Participación en otras Entidades</a>                    <ul>
                    <li>
                        <a href="/tact/Carpeta/Listado/44">Participación, representación e intervención en otras entidades</a>                                </li>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/13">Documentos Reservados</a>                    <ul>
                    <li>
                        <a href="/tact/Carpeta/VerTabla/45">Índice de actos o documentos calificados como secretos o reservados</a>                                </li>
                </ul>
            </li>
            <li>
                <a href="/tact/Carpeta/Listado/23044">Antecedentes preparatorios de normas jurídicas que afecten a empresas de menor tamaño</a>                    <ul>
                </ul>
            </li>
        </ul>
    </div>
</div>-->