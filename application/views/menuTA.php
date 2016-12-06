




<link href="<?php echo base_url(); ?>../css/trasparencia.css" rel="stylesheet" type="text/css"/>

<?php
require_once 'Menu.php';
require_once 'Database.php';
?>
<?php $menu = new menu(); ?>

<div  class="menu">
    <ul class="columna"> 
        <?php foreach ($menu->getMenu() as $n): ?>
            <div class="columnadiv">    
                <li class="columnali1">
                    <span href="<?php echo $n['linkM1']; ?>"><?php echo $n['nombreM1']; ?></span>
                    <ul class="columna2">
                        <?php foreach ($menu->getSubMenu($n['ID_menu1']) as $s): ?>
                            <li class="columnali2">                                        
                                <a  <?php echo $s['linkM2']; ?>><?php echo $s['nombreM2']; ?></a>
                                <ul>
                                    <?php foreach ($menu->getSub2Menu($s['ID_menu2']) as $f): ?>
                                        <li class="columnali3">
                                            <a <?php echo $f['linkM3']; ?> ><?php echo $f['nombreM3']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <br><br>                          
                        <?php endforeach; ?>
                    </ul>
                </li>
            </div>
            <br>
        <?php endforeach; ?>
    </ul>
</div>






<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 saved from url=(0068)http://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=MU283 
<html class="ltr yui3-js-enabled webkit ltr js chrome chrome53 chrome53-0 win" dir="ltr" lang="es-ES">
    <head profile="http://www.w3.org/2005/10/profile">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Transparencia Activa de Organismos - Portal de Transparencia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/reset.min.css"> 
        <meta content="Transparencia Activa de Organismos" lang="es-ES" name="description">
        <meta content="transparencia, activa, transparencia activa, organismos" lang="es-ES" name="keywords">
        <link href="http://www.portaltransparencia.cl/pdt-theme/images/favicon.ico" rel="Shortcut Icon">
        <link href="http://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=MU283" rel="canonical">
        <link href="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/main.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/main(1).css" rel="stylesheet" type="text/css">
        <script type="text/javascript" async="" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/analytics.js.descarga"></script>
        <script type="text/javascript" async="" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/analytics.js.descarga"></script>
        <script async="" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/gtm.js.descarga"></script>
        <script async="" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/gtm.js.descarga"></script>
        <script type="text/javascript">
            /*<![CDATA[*/var Liferay = {Browser:{acceptsGzip:function(){return true}, getMajorVersion:function(){return 53}, getRevision:function(){return"537.36"}, getVersion:function(){return"53.0.2785.143"}, isAir:function(){return false}, isChrome:function(){return true}, isFirefox:function(){return false}, isGecko:function(){return true}, isIe:function(){return false}, isIphone:function(){return false}, isLinux:function(){return false}, isMac:function(){return false}, isMobile:function(){return false}, isMozilla:function(){return false}, isOpera:function(){return false}, isRtf:function(){return true}, isSafari:function(){return true}, isSun:function(){return false}, isWap:function(){return false}, isWapXhtml:function(){return false}, isWebKit:function(){return true}, isWindows:function(){return true}, isWml:function(){return false}}, Data:{isCustomizationView:function(){return false}, notices:[null]}, ThemeDisplay:{getCDNDynamicResourcesHost:function(){return""}, getCDNHost:function(){return""}, getCompanyId:function(){return"10153"}, getCompanyGroupId:function(){return"10191"}, getUserId:function(){return"10157"}, getDoAsUserIdEncoded:function(){return""}, getPlid:function(){return"58203"}, getLayoutId:function(){return"48"}, getLayoutURL:function(){return"/PortalPdT/web/guest/pdtta"}, isPrivateLayout:function(){return"false"}, getParentLayoutId:function(){return"0"}, getScopeGroupId:function(){return"10179"}, getScopeGroupIdOrLiveGroupId:function(){return"10179"}, getParentGroupId:function(){return"10179"}, isImpersonated:function(){return false}, isSignedIn:function(){return false}, getDefaultLanguageId:function(){return"es_ES"}, getLanguageId:function(){return"es_ES"}, isAddSessionIdToURL:function(){return false}, isFreeformLayout:function(){return false}, isStateExclusive:function(){return false}, isStateMaximized:function(){return false}, isStatePopUp:function(){return false}, getPathContext:function(){return"/PortalPdT"}, getPathImage:function(){return"/PortalPdT/image"}, getPathJavaScript:function(){return"/PortalPdT/html/js"}, getPathMain:function(){return"/PortalPdT/c"}, getPathThemeImages:function(){return"http://www.portaltransparencia.cl/pdt-theme/images"}, getPathThemeRoot:function(){return"/pdt-theme/"}, getURLControlPanel:function(){return"/PortalPdT/group/control_panel?doAsGroupId=10179&refererPlid=58203"}, getURLHome:function(){return"http://www.portaltransparencia.cl/PortalPdT/web/guest"}, getSessionId:function(){return""}, getPortletSetupShowBordersDefault:function(){return true}}, PropsValues:{NTLM_AUTH_ENABLED:false}}; var themeDisplay = Liferay.ThemeDisplay; Liferay.AUI = {getBaseURL:function(){return"http://www.portaltransparencia.cl/PortalPdT/html/js/aui/"}, getCombine:function(){return true}, getComboPath:function(){return"/PortalPdT/combo/?browserId=other&minifierType=&languageId=es_ES&b=6101&t=1364924014000&p=/PortalPdT/html/js&"}, getFilter:function(){return{replaceStr:function(c, b, a){return b + "m=" + (c.split("/PortalPdT/html/js")[1] || "")}, searchExp:"(\\?|&)/([^&]+)"}}, getJavaScriptRootPath:function(){return"/PortalPdT/html/js"}, getLangPath:function(){return"aui_lang.jsp?browserId=other&themeId=pdt_WAR_pdttheme&colorSchemeId=01&minifierType=js&languageId=es_ES&b=6101&t=1364924014000"}, getRootPath:function(){return"/PortalPdT/html/js/aui/"}}; window.YUI_config = {base:Liferay.AUI.getBaseURL(), comboBase:Liferay.AUI.getComboPath(), fetchCSS:true, filter:Liferay.AUI.getFilter(), root:Liferay.AUI.getRootPath(), useBrowserConsole:false}; Liferay.authToken = "pGplndT6"; Liferay.currentURL = "\x2fPortalPdT\x2fpdtta\x3fcodOrganismo\x3dMU283"; Liferay.currentURLEncoded = "%2FPortalPdT%2Fpdtta%3FcodOrganismo%3DMU283"; /*]]>*/</script> <script src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/barebone.jsp" type="text/javascript"></script> <script type="text/javascript">/*<![CDATA[*/Liferay.Portlet.list = ["pdtescritoriotaportlet_WAR_pdtescritoriotaportlet"]; /*]]>*/</script> <script type="text/javascript">/*<![CDATA[*/var _gaq = _gaq || []; _gaq.push(["_setAccount", "UA-40413011-1"]); _gaq.push(["_trackPageview"]); (function(){var a = document.createElement("script"); a.src = ("https:" == document.location.protocol?"https://ssl":"http://www") + ".google-analytics.com/ga.js"; a.setAttribute("async", "true"); document.documentElement.firstChild.appendChild(a)})(); /*]]>*/</script><script src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/ga.js.descarga" async="true"></script> <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/pdtta"><link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/pdtta(1)"><script src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/pdtta(2)" type="text/javascript"></script><script src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/pdtta(3)" type="text/javascript"></script> <link class="lfr-css-file" href="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/main(2).css" rel="stylesheet" type="text/css"> <style type="text/css"></style> <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/text.min.css"> <link rel="stylesheet" type="text/css" media="screen and (min-width:0px) and (max-width:1020px)" href="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/tablet.min.css"> <link rel="stylesheet" type="text/css" media="screen and (min-width:0px) and (max-width:1020px)" href="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/bootstrap.min.css"> <link rel="stylesheet" type="text/css" media="screen and (min-width:0px) and (max-width:641px)" href="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/custom_mobile_phone.min.css"> Big landscape tablets, laptops, and desktops <link rel="stylesheet" type="text/css" media="all and (min-width:1021px)" href="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/escritorio.min.css"> <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/jquery_complete.min.css"> <script type="text/javascript" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/jquery-1.8.2.min.js.descarga"></script> <script type="text/javascript" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/jquery-ui-1.9.1.custom.min.js.descarga"></script> <script type="text/javascript" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/bootstrap.min.js.descarga"></script> <script type="text/javascript" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/jquery.tipTip.minified.js.descarga"></script> <script type="text/javascript"> var $jq = jQuery.noConflict(true);</script> <script type="text/javascript" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/pdt_functions.min.js.descarga"></script> <link id="aui_3_4_0_1_58" type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/saved_resource" charset="utf-8"><script id="aui_3_4_0_1_59" type="text/javascript" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/saved_resource(1)" charset="utf-8"></script></head> <body class=" yui3-skin-sam controls-visible guest-site signed-out public-page site">  Google Tag Manager  <noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-P5SCPH" height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript> <script>/*<![CDATA[*/(function(b, m, h, a, g){b[a] = b[a] || []; b[a].push({"gtm.start":new Date().getTime(), event:"gtm.js"}); var k = m.getElementsByTagName(h)[0], e = m.createElement(h), c = a != "dataLayer"?"&l=" + a:""; e.async = true; e.src = "//www.googletagmanager.com/gtm.js?id=" + g + c; k.parentNode.insertBefore(e, k)})(window, document, "script", "dataLayer", "GTM-P5SCPH"); /*]]>*/</script>  End Google Tag Manager  <script type="text/javascript">/*<![CDATA[*/var locationStr = window.location.href; if (locationStr.indexOf("p_p_id=115") != - 1 && locationStr.indexOf("/home?") != - 1 && locationStr.indexOf("p_p_state=normal") != - 1){locationStr = locationStr.replace(/p_p_state%3Dnormal/g, "p_p_state%3Dmaximized"); locationStr = locationStr.replace(/p_p_state=normal/g, "p_p_state=maximized"); window.location = locationStr}; /*]]>*/</script>
        <div id="wrapper">
            <header id="banner" role="banner"> 
                <a href="http://www.portaltransparencia.cl/PortalPdT/c/portal/login?p_l_id=58203" id="sign-in" rel="nofollow" class="hidden">Acceder</a>
                <div class="barratransversal"> 
                    <div class="navegacionSuperior">
                        <div class="centrador">
                            <div class="fl_right"> 
                                <div id="acceso" class="fl_left navOption userLoginTrigger"> 
                                    <a href="http://www.portaltransparencia.cl/PortalPdT/c/portal/login" id="access-form-trigger" class="hidden_user">Iniciar sesión</a> 
                                    <a href="javascript:void(0);" id="login_user_phone" class="hidden"> 
                                        <img class="ancho_img_login" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/userlogin.png"> 
                                    </a>
                                    <div id="login_form_phone" class="hidden"> 
                                        <ul class="jqmenu ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" role="menu" tabindex="0">
                                            <li class="ui-menu-item" role="presentation">
                                                <a href="http://www.portaltransparencia.cl/PortalPdT/c/portal/login" id="access-form-trigger" class="ui-corner-all" tabindex="-1" role="menuitem">Iniciar sesión</a>
                                            </li>
                                            <li class="ui-menu-item" role="presentation">
                                                <a href="http://www.portaltransparencia.cl/PortalPdT/registro-de-usuario" title="Nuevo usuario" id="ui-id-2" class="ui-corner-all" tabindex="-1" role="menuitem">Nuevo usuario</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fl_left navOption hidden_user">
                                    <a href="http://www.portaltransparencia.cl/PortalPdT/registro-de-usuario" title="Nuevo usuario">Nuevo usuario</a>
                                </div>
                            </div> 
                            <div id="logo-portal" class="fl_left">
                                <a id="logo-desktop" href="http://www.portaltransparencia.cl/PortalPdT/" title="Portal de Transparencia de Chile">
                                    <img src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/logo_superior.png" alt="Portal para la Transparencia">
                                </a> 

                                <div id="logo-mobile" class="hidden">
                                    <a href="http://www.portaltransparencia.cl/PortalPdT/" title="Portal de Transparencia de Chile"> 
                                        <img class="imagen_logo" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/logo_mobile.png" alt="Portal para la Transparencia" title="Portal para la Transparencia"> 
                                        <span class="negrita">Portal Transparencia</span> Chile </a>
                                </div> 
                            </div> <div class="fl_left"> <div id="menu-organismos" class="navOption organismosMenuTrigger"> <a id="menu-organismos-trigger" href="javascript:void(0);">Organismos</a> <div id="menu-organismos-content"> </div> </div> </div> </div> </div>  Cierre del centrador  </div>  Cierre del barratransversal   PRIMER BLOQUE  
                            <div id="primerbloque"> 
                                <div class="contenidoprimerbloque centrador"> 
                                    <div id="contenedortitulo"> 
                                        <a href="http://www.portaltransparencia.cl/PortalPdT/">
                                            <img src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/logo.png" alt="Portal para la Transparencia">
                            </a> 
                        </div> 
                        <form id="search_box" action="javascript:busquedaPortal(&#39;http://www.portaltransparencia.cl/PortalPdT/web/guest/home?p_p_id=3&amp;p_p_lifecycle=0&amp;p_p_state=maximized&amp;p_p_mode=view&amp;_3_struts_action=%2Fsearch%2Fsearch&amp;_3_redirect=%2FPortalPdT%2Fweb%2Fguest%2Fhome%3Fp_auth%3DgVKA8DxS%26p_p_id%3D3%26p_p_lifecycle%3D1%26p_p_state%3Dnormal%26p_p_state_rcv%3D1&amp;_3_groupId=0&amp;x=0&amp;y=0&amp;_3_keywords=&#39;);">
                            <div class="wrapper"> 
                                <input type="text" name="_3_keywords" id="cuadroBusqueda" placeholder="Buscar..">
                                <button type="submit" class="search_btn" onclick="busquedaPortal( & #39; http://www.portaltransparencia.cl/PortalPdT/web/guest/home?p_p_id=3&amp;p_p_lifecycle=0&amp;p_p_state=maximized&amp;p_p_mode=view&amp;_3_struts_action=%2Fsearch%2Fsearch&amp;_3_redirect=%2FPortalPdT%2Fweb%2Fguest%2Fhome%3Fp_auth%3DgVKA8DxS%26p_p_id%3D3%26p_p_lifecycle%3D1%26p_p_state%3Dnormal%26p_p_state_rcv%3D1&amp;_3_groupId=0&amp;x=0&amp;y=0&amp;_3_keywords=&#39;);">
                                    <img src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/boton-search.png" title="Buscar" alt="Buscar">
                                </button> 
                            </div> <a href="http://www.portaltransparencia.cl/PortalPdT/busqueda-avanzada" style="color: #FF6600;">B&uacute;squeda Avanzada</a> 
                        </form> 
                         Navegacion  
                        <nav class="sort-pages modify-pages" id="navigation"> 
                            <ul id="menutab" class="menutab"> 
                                <li id="1" class="selected currentParent"> 
                                    <a id="1" title="Portada" href="http://www.portaltransparencia.cl/PortalPdT/web/guest/home"><span>Portada</span>
                                    </a> 
                                </li> 
                                <li id="2">
                                    <a id="2" title="Qué es transparencia" href="http://www.portaltransparencia.cl/PortalPdT/web/guest/que-es-transparencia"><span>Qué es transparencia</span></a> 
                                </li> 
                                <li id="3">
                                    <a id="3" title="Directorio de Organismos" href="http://www.portaltransparencia.cl/PortalPdT/web/guest/directorio-de-organismos-regulados">
                                        <span>Directorio de Organismos</span>
                                    </a> 
                                </li> 
                                <li id="4"> 
                                    <a id="4" title="Datos y analítico" href="http://www.portaltransparencia.cl/PortalPdT/web/guest/opendata-y-analisis">
                                        <span>Datos y analítico</span>
                                    </a>
                                </li> 
                                <li id="5">
                                    <a id="5" title="Acerca de" href="http://www.portaltransparencia.cl/PortalPdT/web/guest/acerca">
                                        <span>Acerca de</span>
                                    </a> 
                                </li> 
                            </ul> 
                            <div id="submenus" style=""> 
                                <div id="submenu_2" class="submenu" style="display: none;"> 
                                    <div> <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/ley-de-transparencia">Ley de Transparencia</a>
                                    </div>
                                    <div> 
                                        <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/solicitud-de-acceso-a-la-informacion">Solicitud de Acceso a la Información</a>
                                    </div>
                                    <div> 
                                        <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/transparencia-activa">Transparencia Activa</a> 
                                    </div>
                                    <div>
                                        <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/jurisprudencia-del-consejo">Jurisprudencia del Consejo</a>
                                    </div>
                                </div>
                                <div id="submenu_5" class="submenu" style="display: none;"> 
                                    <div> <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/quienes-somos">¿Quiénes somos?</a>
                                    </div> 
                                    <div>
                                        <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/objetivos">Objetivos</a> 
                                    </div> 
                                    <div> 
                                        <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/que-organismos-estan">Qué organismos están</a> 
                                    </div>
                                    <div> 
                                        <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/reclamacion-organismos-autonomos">Reclamacion Organismos Autónomos</a>
                                    </div> 
                                    <div> 
                                        <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/documentos-portal">Documentos</a>
                                    </div> 
                                </div>
                            </div> 
                        </nav> 
                        <nav id="navigation-mobile">
                            <div class="dropdown"> 
                                <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="http://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=MU283#"> Inicio <span class="caret">
                                    </span>
                                </a> 
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel"> 
                                    <li> 
                                        <a title="Portada" href="http://www.portaltransparencia.cl/PortalPdT/web/guest/home">
                                            <span>Portada</span>
                                        </a> 
                                    </li> 
                                    <li>
                                        <a title="Qué es transparencia" href="http://www.portaltransparencia.cl/PortalPdT/web/guest/que-es-transparencia">
                                            <span>Qué es transparencia</span>
                                        </a> 
                                        <ul role="menu" aria-labelledby="dLabel"> 
                                            <li> 
                                                <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/ley-de-transparencia">Ley de Transparencia</a>
                                            </li>
                                            <li> 
                                                <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/solicitud-de-acceso-a-la-informacion">Solicitud de Acceso a la Información</a>
                                            </li>
                                            <li> 
                                                <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/transparencia-activa">Transparencia Activa</a>
                                            </li> 
                                            <li> 
                                                <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/jurisprudencia-del-consejo">Jurisprudencia del Consejo</a> 
                                            </li> 
                                        </ul>
                                    </li> 
                                    <li> 
                                        <a title="Directorio de Organismos" href="http://www.portaltransparencia.cl/PortalPdT/web/guest/directorio-de-organismos-regulados">
                                            <span>Directorio de Organismos</span>
                                        </a> 
                                    </li>
                                    <li>
                                        <a title="Datos y analítico" href="http://www.portaltransparencia.cl/PortalPdT/web/guest/opendata-y-analisis">
                                            <span>Datos y analítico</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Acerca de" href="http://www.portaltransparencia.cl/PortalPdT/web/guest/acerca">
                                            <span>Acerca de</span>
                                        </a>
                                        <ul role="menu" aria-labelledby="dLabel"> 
                                            <li> 
                                                <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/quienes-somos">¿Quiénes somos?</a> 
                                            </li> 
                                            <li> 
                                                <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/objetivos">Objetivos</a>
                                            </li>
                                            <li>
                                                <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/que-organismos-estan">Qué organismos están</a> 
                                            </li> 
                                            <li> 
                                                <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/reclamacion-organismos-autonomos">Reclamacion Organismos Autónomos</a>
                                            </li>
                                            <li>
                                                <a href="http://www.portaltransparencia.cl/PortalPdT/web/guest/documentos-portal">Documentos</a>
                                            </li> 
                                        </ul>
                                    </li> 
                                </ul> 
                            </div>
                        </nav> 
                    </div>
                </div>
            </header>
            <div id="content" class="main" style="width: 85%;"> 
                <div class="portlet-boundary portlet-boundary_103_ portlet-static portlet-static-end " id="p_p_id_103_">
                    <span id="p_103"></span>
                    <div class="portlet-body"> </div>
                </div> 
                <div class="columns-1" id="main-content" role="main">
                    <div class="portlet-layout">
                        <div class="portlet-column portlet-column-only" id="column-1"> 
                            <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-1"> 
                                <div class="portlet-boundary portlet-boundary_pdtescritoriotaportlet_WAR_pdtescritoriotaportlet_ portlet-static portlet-static-end portlet-borderless " id="p_p_id_pdtescritoriotaportlet_WAR_pdtescritoriotaportlet_"> 
                                    <span id="p_pdtescritoriotaportlet_WAR_pdtescritoriotaportlet"></span> 
                                    <div class="portlet-body"> 
                                        <div class="portlet-borderless-container" style="">
                                            <div class="portlet-body">
                                                <style> .ui-picklist .ui-picklist-list { height: 200px; list-style-type: none; margin: 0; overflow: auto; padding: 0; width: 350px; } .ui-picklist .ui-picklist-button-add,.ui-picklist .ui-picklist-button-add-all,.ui-picklist .ui-picklist-button-remove,.ui-picklist .ui-picklist-button-remove-all { display: block; } .portal_picklist td { vertical-align: middle; text-align: left; margin: 0 auto 0 auto; text-align-last: left; } .portal_picklist_alarm td { width: 150px; height: 150px; } .files td { vertical-align: middle; text-align: left; margin: 0 auto 0 auto; text-align-last: left; } .prime-portlet .ui-widget-overlay { position: absolute; } .ui-datatable .ui-column-filter { display: block; margin: auto; width: 90%; } .ui-dialog .ui-dialog-titlebar-close,.ui-dialog .ui-dialog-titlebar-minimize,.ui-dialog .ui-dialog-titlebar-maximize { cursor: pointer; float: right; margin: 0; margin-right: 15px; padding: 1px; top: 0; } .prime-portlet .ui-state-active a { background: repeat-x scroll 50% 50% #CCCCCC; color: #212121; font-weight: bold; } .prime-portlet .ui-state-default a { background: repeat-x scroll 50% 50% #CCCCCC; color: #212121; font-weight: bold; } .ui-chkbox .ui-chkbox-box { display: inline-block; vertical-align: middle; } .prime-portlet .ui-widget-content a { font-family: inherit; } .ui-fileupload-buttonbar .ui-fileupload-choose input{ border-color: rgba(0, 0, 0, 0); border-image: none; border-style: solid; border-width: 0 0 0 0; cursor: pointer; direction: ltr; margin: 0; opacity: 0; position: absolute; right: 0; top: 0; z-index: 5000; transform: none; } .fileupload-buttonbar .ui-button input { border-color: rgba(0, 0, 0, 0); border-image: none; border-style: solid; border-width: 0 0 0 0; cursor: pointer; direction: ltr; margin: 0; opacity: 0; position: absolute; right: 0; top: 0; z-index: 5000; } .prime-portlet .ui-menu .ui-icon { position: relative; } .link_tunner_button:HOVER { background: #e6e6e6 url("ui-smoothness/images/ui-bg_glass_75_e6e6e6_1x400.png") repeat-x scroll 50% 50%; border: 1px solid #999; color: #212121; font-weight: normal; } .link_tunner_button:ACTIVE { background: white url("ui-smoothness/images/ui-bg_glass_65_ffffff_1x400.png") repeat-x scroll 50% 50%; border: 1px solid #999; color: #212121; font-weight: normal; } .table_modOdd table tbody .ui-datatable-odd { background: #dee0e3 none repeat scroll 0 0; } .prime-portlet .ui-state-highlight, .prime-portlet .ui-widget-content .ui-state-highlight, .prime-portlet .ui-widget-header .ui-state-highlight .selected_node { background: #fbf9ee none repeat scroll 0 0 !important; border: 2px solid #f60 !important; color: #363636 !important; } .ui-tree .ui-icon-triangle-1-s { background: white url("/pdt-theme/images/application/panel_header_toggler_close.png") no-repeat scroll 0 0 !important; height: 21px; transform: scale(0.7); width: 20px; } .ui-tree .ui-icon-triangle-1-e { background: white url("/pdt-theme/images/application/panel_header_toggler_open.png") no-repeat scroll 0 0 !important; height: 21px; transform: scale(0.7); width: 20px; } .ui-tree .ui-treenode-leaf-icon { display: inline-block; height: 16px; width: 20px !important; } </style> <script type="text/javascript">/*<![CDATA[*/function estaPulsadoShift(b, a){if (b.shiftKey == 1 || b.ctrlKey || b.button == 1){bPagUi.hide()} else{if (!a){bPagUi.show()}}}var nav = navigator.userAgent.toLowerCase(); if (nav.indexOf("safari") != - 1){if ((nav.indexOf("chrome") == - 1)){history.pushState(null, null, location.href); window.onpopstate = function(a){history.go(1)}}}; /*]]>*/</script>
                                                <div id="A2248" class="liferay-faces-bridge-body"> 
                                                    <script>/*<![CDATA[*/$jq(".main").css("width", "85%"); /*]]>*/</script>
                                                    <div class="fl_right" style="position:absolute;z-index:10000;right:0">
                                                        <div id="TAToSAI" class="hidden_mobile"> <form id="A2248:init-form-saiFromTA" name="A2248:init-form-saiFromTA" method="post" action="http://www.portaltransparencia.cl/PortalPdT/web/guest/pdtta?p_auth=pGplndT6&amp;p_p_id=pdtescritoriotaportlet_WAR_pdtescritoriotaportlet&amp;p_p_lifecycle=1&amp;p_p_state=normal&amp;p_p_mode=view&amp;p_p_col_id=column-1&amp;p_p_col_count=1&amp;_pdtescritoriotaportlet_WAR_pdtescritoriotaportlet__facesViewIdRender=%2Fviews%2Fta-view.xhtml" enctype="application/x-www-form-urlencoded">
                                                                <input type="hidden" name="A2248:init-form-saiFromTA" value="A2248:init-form-saiFromTA">
                                                                <input type="hidden" name="javax.faces.encodedURL" value="http://www.portaltransparencia.cl/PortalPdT/web/guest/pdtta?p_p_id=pdtescritoriotaportlet_WAR_pdtescritoriotaportlet&amp;p_p_lifecycle=2&amp;p_p_state=normal&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;p_p_col_id=column-1&amp;p_p_col_count=1&amp;_pdtescritoriotaportlet_WAR_pdtescritoriotaportlet__jsfBridgeAjax=true&amp;_pdtescritoriotaportlet_WAR_pdtescritoriotaportlet__facesViewIdResource=%2Fviews%2Fta-view.xhtml">
                                                                <div>
                                                                    <div class="accesosDer solicitud">
                                                                        <input id="hiddenOrgTa" class="hiddenOrgTa" name="idOrgTa" type="hidden">
                                                                        <a href="http://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=MU283#" onclick="javascript:window.location.href = & #39; http://www.portaltransparencia.cl/PortalPdT/ingreso-sai-v2?idOrgTa=&#39;+$jq(&#39;#j_organismo_ta&#39;).val();return false;">Solicitar información </a> 
                                                                    </div> 
                                                                    <div class="accesosDer reclamo">
                                                                        <a href="http://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=MU283#" onclick="javascript:window.location.href = & #39; http://www.portaltransparencia.cl/PortalPdT/reclamos-funcionario&#39;">Reclamar </a>
                                                                    </div> 
                                                                </div>
                                                                <input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="-5456323802289957836:-8203765231833124776" autocomplete="off"> 
                                                            </form>
                                                        </div> 
                                                    </div>
                                                    <div id="A2248:imagen_ta_org" class="fl_left">
                                                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAEsAMgDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD3+iiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKM0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" alt="Logo" title="Logo" class="estilo_imagen_ta_org">
                                                    </div> 
                                                    <div class="fl_left detalles_OR"> 
                                                        <div class="OR_cabecera_detalles"> <div class="fl_left">
                                                                <h3>
                                                                    <label> Municipalidad de Linares</label>
                                                                </h3>
                                                                <span style="font-size: 18px;">Transparencia Activa</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="A2248:escritorio-ta-main-portlet" class="ui-outputpanel ui-widget" style="position: relative;">
                                                        <form id="A2248:form" name="A2248:form" method="post" action="http://www.portaltransparencia.cl/PortalPdT/web/guest/pdtta?p_auth=pGplndT6&amp;p_p_id=pdtescritoriotaportlet_WAR_pdtescritoriotaportlet&amp;p_p_lifecycle=1&amp;p_p_state=normal&amp;p_p_mode=view&amp;p_p_col_id=column-1&amp;p_p_col_count=1&amp;_pdtescritoriotaportlet_WAR_pdtescritoriotaportlet__facesViewIdRender=%2Fviews%2Fta-view.xhtml" enctype="application/x-www-form-urlencoded"> <input type="hidden" name="A2248:form" value="A2248:form"> <input type="hidden" name="javax.faces.encodedURL" value="http://www.portaltransparencia.cl/PortalPdT/web/guest/pdtta?p_p_id=pdtescritoriotaportlet_WAR_pdtescritoriotaportlet&amp;p_p_lifecycle=2&amp;p_p_state=normal&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;p_p_col_id=column-1&amp;p_p_col_count=1&amp;_pdtescritoriotaportlet_WAR_pdtescritoriotaportlet__jsfBridgeAjax=true&amp;_pdtescritoriotaportlet_WAR_pdtescritoriotaportlet__facesViewIdResource=%2Fviews%2Fta-view.xhtml"> <input type="hidden" id="j_organismo_ta" value="MU283"> <div class="prime-portlet"><div id="A2248:form:j_idt18"><div id="A2248:form:j_idt18_start" style="display:none"> <div class="loading"><img id="A2248:form:j_idt20" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/loading.gif" alt=""> </div></div><div id="A2248:form:j_idt18_complete" style="display:none"></div></div> <div id="escritorio_ta_content"><div id="A2248:form:j_idt24" class="ui-outputpanel ui-widget"><hr id="A2248:form:j_idt25" class="ui-separator ui-state-default ui-corner-all"><div id="A2248:form:info_fecha_ta" class="info_fecha">Última actualización: 21/10/2016</div><div id="A2248:form:j_idt28" class="ui-outputpanel ui-widget"> <div style="margin-left: 0%; margin-right: 0%;"> 
                                                                                <div class="estilos_materias_ta" style="width:33.333333333333336%;max-width:33.333333333333336%;">
                                                                                    inicio menu
                                                                                    <div id="A2248:form:j_idt30:0:datalist" class="ui-datalist ui-widget lista_preview">

                                                                                        <div id="A2248:form:j_idt30:0:datalist_content" class="ui-datalist-content ui-widget-content">
                                                                                            <ul id="A2248:form:j_idt30:0:datalist_list" class="ui-datalist-data">


<?php foreach ($menu->getMenu() as $n): ?>
                                                
                                                                                                                                                    <li class="ui-datalist-item">
                                                                                                                                                        <span class="tema_title" <?php echo $n['linkM1']; ?>><?php echo $n['nombreM1']; ?></span>
                                                                                                                                                        <div id="A2248:form:j_idt30:0:datalist:1:j_idt33" class="colu ui-tree ui-widget ui-widget-content ui-corner-all lista_preview" role="tree" aria-multiselectable="false">
                                                                                                                                                            <ul class="ui-tree-container">
    <?php foreach ($menu->getSubMenu($n['ID_menu1']) as $s): ?>
                                                                                                                                                                                                                    <li id="A2248:form:j_idt30:0:datalist:1:j_idt33:0" data-rowkey="0" data-nodetype="default" class="ui-treenode ui-treenode-leaf ui-treenode-unselected" role="treeitem">
                                                                                                                                                                                                                        <span class="ui-treenode-content ui-tree-selectable" aria-expanded="true" aria-selected="false">
                                                                                                                                                                                                                            <span class="ui-treenode-leaf-icon"></span>
                                                                                                                                                                                                                            <span></span>
                                                                                                                                                                                                                            <span class="ui-treenode-label ui-corner-all">
                                                                                                                                                                                                                                <a id="A2248:form:j_idt30:0:datalist:1:j_idt33:0:ta-link" name="A2248:form:j_idt30:0:datalist:1:j_idt33:0:ta-link" <?php echo $s['linkM2']; ?>  title="Marco Normativo" target="_self"><?php echo $s['nombreM2']; ?></a>
                                                                                                                                                                                                                                <ul>
        <?php foreach ($menu->getSub2Menu($s['ID_menu2']) as $f): ?>
                                                                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                                                                            <a <?php echo $f['linkM3']; ?> ><?php echo $f['nombreM3']; ?></a>
                                                                                                                                                                                                                                                                                        </li>
        <?php endforeach; ?>
                                                                                                                                                                                                                                </ul>
                                                                                                                                                                                                                            </span>
                                                                                                                                                                                                                        </span>
                                                                                                                                                                                                                        <ul class="ui-treenode-children"></ul>
                                                                                                                                                                                                                    </li>
    <?php endforeach; ?>
                                                                                                                                                            </ul>
                                                                                                                                                        </div>
                                                                                                                                                    </li>
                                                
                                                
<?php endforeach; ?>

                                                                                            </ul>
                                                                                        </div>

                                                                                    </div> 

                                                                                </div> 
                                                                                fin menu

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="-5456323802289957836:-8203765231833124776" autocomplete="off"> 
                                                        </form>
                                                        <div id="A2248:form:bPagUi_blocker" class="ui-blockui ui-widget-overlay ui-helper-hidden"></div>
                                                        <div id="A2248:form:bPagUi" class="ui-blockui-content ui-widget ui-widget-content ui-corner-all ui-helper-hidden ui-shadow">
                                                            <img id="A2248:form:j_idt16" src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/ajax-loader.gif" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="hidden" id="saiFromTA">
                                                        <form id="A2248:init-form-saiFromTA" name="A2248:init-form-saiFromTA" method="post" action="http://www.portaltransparencia.cl/PortalPdT/web/guest/pdtta?p_auth=pGplndT6&amp;p_p_id=pdtescritoriotaportlet_WAR_pdtescritoriotaportlet&amp;p_p_lifecycle=1&amp;p_p_state=normal&amp;p_p_mode=view&amp;p_p_col_id=column-1&amp;p_p_col_count=1&amp;_pdtescritoriotaportlet_WAR_pdtescritoriotaportlet__facesViewIdRender=%2Fviews%2Fta-view.xhtml" enctype="application/x-www-form-urlencoded">
                                                            <input type="hidden" name="A2248:init-form-saiFromTA" value="A2248:init-form-saiFromTA">
                                                            <input type="hidden" name="javax.faces.encodedURL" value="http://www.portaltransparencia.cl/PortalPdT/web/guest/pdtta?p_p_id=pdtescritoriotaportlet_WAR_pdtescritoriotaportlet&amp;p_p_lifecycle=2&amp;p_p_state=normal&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;p_p_col_id=column-1&amp;p_p_col_count=1&amp;_pdtescritoriotaportlet_WAR_pdtescritoriotaportlet__jsfBridgeAjax=true&amp;_pdtescritoriotaportlet_WAR_pdtescritoriotaportlet__facesViewIdResource=%2Fviews%2Fta-view.xhtml">
                                                            <div>
                                                                <div class="accesosDer solicitud">
                                                                    <script type="text/javascript">/*<![CDATA[*/function cargaIdOrgHidden(){var a; var b = document.getElementById("j_organismo_ta"); if (b != null){a = b.value; $jq(".hiddenOrgTa").val(a)} else{}}; /*]]>*/</script>
                                                                    <input id="hiddenOrgTa" class="hiddenOrgTa" name="idOrgTa" type="hidden">
                                                                    <a href="http://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=MU283#" onclick="javascript:window.location.href = & #39; http://www.portaltransparencia.cl/PortalPdT/ingreso-sai-v2?idOrgTa=&#39;+$jq(&#39;#j_organismo_ta&#39;).val();return false;">Solicitar información </a>
                                                                </div>
                                                                <div class="accesosDer reclamo"> 
                                                                    <a href="http://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=MU283#" onclick="javascript:window.location.href = & #39; http://www.portaltransparencia.cl/PortalPdT/reclamos-funcionario&#39;">Reclamar </a>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="-5456323802289957836:-8203765231833124776" autocomplete="off"> 
                                                        </form>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div> 
                                    </div> 
                                </div>
                            </div> 
                        </div> 
                    </div> 
                </div> 
                <form action="http://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=MU283#" id="hrefFm" method="post" name="hrefFm"> 
                    <span></span> 
                </form> 
            </div> 
            <footer id="footer" role="contentinfo"> 
                <div class="contenidoprimerbloque centrador"> 
                    <div class="g960" id="footer"> 
                        <div id="portal" class="g320"> 
                            <a href="http://www.portaltransparencia.cl/PortalPdT/">
                                <img src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/logo_inferior.png" alt="Portal para la Transparencia">
                            </a>
                            <div id="sharers"> </div>
                        </div> 
                        <ul id="infocontacto" class="g240 hidden">
                            <li class="direccion">
                                <a href="http://goo.gl/maps/79EfH" target="_blank">
                                    <img src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/localizacion.png"> Morandé 360 piso 7, Santiago </a>
                            </li>
                            <li class="telefono"> 
                                <p>800 361 012</p> 
                            </li>
                            <li class="mail">
                                <a id="enlace_correo" href="mailto:soporte@portaltransparencia.cl">
                                    <img src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/mail.png"> soporte[at]portaltransparencia.cl </a>
                                <a id="enlace_correo_mobile" href="mailto:soporte@portaltransparencia.cl">
                                    <img src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/mail.png"> Email </a> 
                            </li> 
                        </ul> 
                        <ul id="menufooter" class="g400">
                            <li class="menufooter_mobile">
                                <a href="http://www.portaltransparencia.cl/PortalPdT/mapa-de-sitio">Mapa de sitio</a>

                            </li>
                            <li class="menufooter_mobile"><a href="http://www.portaltransparencia.cl/PortalPdT/visualizadores">Visualizadores &amp; plug-ins</a>
                                |
                            </li>
                            <li id="politica_normal">
                                <a href="http://www.portaltransparencia.cl/PortalPdT/politicas-de-privacidad">Politicas de privacidad</a> 
                                |
                            </li>
                            <li id="politica_mobile">
                                <a href="http://www.portaltransparencia.cl/PortalPdT/politicas-de-privacidad">Politicas de privacidad</a>
                                <hr>
                            </li> 
                            <li>
                                <a id="faqLink" href="http://www.portaltransparencia.cl/PortalPdT/preguntas-frecuentes">Preguntas Frecuentes</a>
                            </li> 
                        </ul>
                    </div>
                </div> 
            </footer> 
        </div> 
        <script type="text/javascript">
            /*<![CDATA[*/function busquedaPortal(a){window.location.href = a + normalize(document.getElementById("cuadroBusqueda").value) + "&search_term=" + document.getElementById("cuadroBusqueda").value}var normalize = (function(){var e = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüû", d = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuu", b = {}; for (var c = 0, a = e.length; c < a; c++){b[e.charAt(c)] = d.charAt(c)}return function(k){var g = []; for (var h = 0, f = k.length; h < f; h++){var l = k.charAt(h); if (b.hasOwnProperty(k.charAt(h))){g.push(b[l])} else{g.push(l)}}return g.join("")}})(); /*]]>*/</script>  <script type="text/javascript">/*<![CDATA[*/Liferay.Util.addInputFocus(); Liferay.Portlet.runtimePortletIds = ["103"]; /*]]>*/</script> <script type="text/javascript">/*<![CDATA[*/Liferay.Portlet.onLoad({canEditTitle:false, columnPos:0, isStatic:"end", namespacedId:"p_p_id_103_", portletId:"103", refreshURL:"\x2fPortalPdT\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d58203\x26p_p_id\x3d103\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3d\x26p_p_col_pos\x3d0\x26p_p_col_count\x3d0\x26p_p_isolated\x3d1\x26currentURL\x3d\x252FPortalPdT\x252Fpdtta\x253FcodOrganismo\x253DMU283"}); Liferay.Portlet.onLoad({canEditTitle:false, columnPos:0, isStatic:"end", namespacedId:"p_p_id_pdtescritoriotaportlet_WAR_pdtescritoriotaportlet_", portletId:"pdtescritoriotaportlet_WAR_pdtescritoriotaportlet", refreshURL:"\x2fPortalPdT\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d58203\x26p_p_id\x3dpdtescritoriotaportlet_WAR_pdtescritoriotaportlet\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3dcolumn-1\x26p_p_col_pos\x3d0\x26p_p_col_count\x3d1\x26p_p_isolated\x3d1\x26currentURL\x3d\x252FPortalPdT\x252Fpdtta\x253FcodOrganismo\x253DMU283"}); AUI().use("aui-base", "liferay-menu", "liferay-notice", "liferay-poller", function(a){(function(){Liferay.Util.addInputType(); Liferay.Portlet.ready(function(b, c){Liferay.Util.addInputType(c)})})(); (function(){new Liferay.Menu(); var b = Liferay.Data.notices; for (var c = 1; c < b.length; c++){new Liferay.Notice(b[c])}})()}); /*]]>*/</script> <script src="<?php echo base_url(); ?>../Transparencia Activa de Organismos - Portal de Transparencia_files/main.js.descarga" type="text/javascript"></script> <script type="text/javascript">/*<![CDATA[*/(function(b, m, h, a, g){b[a] = b[a] || []; b[a].push({"gtm.start":new Date().getTime(), event:"gtm.js"}); var k = m.getElementsByTagName(h)[0], e = m.createElement(h), c = a != "dataLayer"?"&l=" + a:""; e.async = true; e.src = "//www.googletagmanager.com/gtm.js?id=" + g + c; k.parentNode.insertBefore(e, k)})(window, document, "script", "dataLayer", "GTM-P5SCPH"); /*]]>*/</script>  <div id="tiptip_holder" style="max-width:200px;"><div id="tiptip_arrow">
                <div id="tiptip_arrow_inner">

                </div>

            </div>
            <div id="tiptip_content">


            </div>

        </div>
    </body>
</html>-->
