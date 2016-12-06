<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model("modelo");
    }

    public function index() {

        $this->load->view('index');
    }

    function Terminar() {
        $codigo = $this->input->post('codigo');
        $this->modelo->Terminar($codigo);
    }

    function eliminarnoticia() {
        $id_noticia = $this->input->post('id_noticia');
        $valor = $this->modelo->eliminarnoticia($id_noticia);
        echo json_encode(array("valor" => $valor));
    }

    function eliminaractividad() {
        $id_actividad_concejal = $this->input->post('id_actividad_concejal');
        $valor = $this->modelo->eliminaractividad($id_actividad_concejal);
        echo json_encode(array("valor" => $valor));
    }

    function vistahechosmunicipales() {

        $data = $this->modelo->vistahechosmunicipales();
        $datos['cantidad'] = $data->num_rows();
        $datos['reporte'] = $data->result();
        $this->load->view('vistahechosmunicipales.php', $datos);
    }

    function leer() {

        $codigo = $this->input->post('codigo');
        $data = $this->modelo->leer($codigo)->result();
        $fecha = "";
        $comentario = "";
        foreach ($data as $fila) {
            $fecha = $fila->fecha_estimada;
            $comentario = $fila->comentario_tecnico;
        }
        echo json_encode(array("comentario" => $comentario, "fecha" => $fecha));
    }

    function propuesta() {
        $valor = 0;
        $id_conectado = $this->session->userdata('id_conectado');
        $propuesta = $this->input->post('txtpropuesta');
        if ($this->modelo->propuesta($propuesta, $id_conectado) == 1) {
            $valor = 1;
        }
        echo json_encode(array("valor" => $valor));
    }

    function actualizarperfil2() {
        $id_conectado = $this->session->userdata('id_conectado');
        $propuesta = $this->input->post('txtpropuesta');
        $p1 = $this->input->post('p1');
        $p1 = date("Y-m-d-H") . $p1;

        $valor = 1;
        if ($this->modelo->actualizarperfil2($id_conectado, $propuesta, $p1) == 1) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function ingreactividadconfoto() {
        $id_conectado = $this->session->userdata('id_conectado');
        $txttituloactividad = $this->input->post('txttituloactividad');
        $txtparrafoactividad = $this->input->post('txtparrafoactividad');
        $p1 = $this->input->post('p1');
        $p1 = date("Y-m-d-H") . $p1;

        $valor = 1;
        if ($this->modelo->ingreactividadconfoto($id_conectado, $txttituloactividad, $txtparrafoactividad, $p1) == 1) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function ingreactividad() {
        $id_conectado = $this->session->userdata('id_conectado');
        $txttituloactividad = $this->input->post('txttituloactividad');
        $txtparrafoactividad = $this->input->post('txtparrafoactividad');
        $valor = 0;
        if ($this->modelo->ingreactividad($id_conectado, $txttituloactividad, $txtparrafoactividad) == 1) {
            $valor = 1;
        }
        echo json_encode(array("valor" => $valor));
    }

    function ingresarnoticia() {

        $titulo = $this->input->post('titulo');
        $encabezado = $this->input->post('encabezado');
        $texto = $this->input->post('texto');
        $bibliografia = $this->input->post('bibliografia');
        $autor = $this->input->post('autor');
        $linkofoto = $this->input->post('linkofoto');
        $ruta = $this->input->post('ruta');
        $p1 = $this->input->post('p1');
        $p2 = $this->input->post('p2');
        $p3 = $this->input->post('p3');
        $p4 = $this->input->post('p4');
        $p5 = $this->input->post('p5');
        if ($linkofoto == "imagen") {
            $ruta = date("Y-m-d-H") . $ruta;
        }
        $p1 = date("Y-m-d-H") . $p1;
        $p2 = date("Y-m-d-H") . $p2;
        $p3 = date("Y-m-d-H") . $p3;
        $p4 = date("Y-m-d-H") . $p4;
        $p5 = date("Y-m-d-H") . $p5;

        $valor = 1;
        if ($this->modelo->ingresarnoticia($titulo, $encabezado, $texto, $bibliografia, $autor, $linkofoto, $ruta, $p1, $p2, $p3, $p4, $p5) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function ingresaralbun() {

        $ruta = './Files/'; //Decalaramos una variable con la ruta en donde almacenaremos los archivos
        $mensage = ''; //Declaramos una variable mensaje quue almacenara el resultado de las operaciones.
        $valor = "0";
        foreach ($_FILES as $key) { //Iteramos el arreglo de archivos
            if ($key['error'] == UPLOAD_ERR_OK) {//Si el archivo se paso correctamente Ccontinuamos 
                $NombreOriginal = $key['name']; //Obtenemos el nombre original del archivo
                $temporal = $key['tmp_name']; //Obtenemos la ruta Original del archivo
                $Destino = $ruta . date("Y-m-d-H") . $NombreOriginal; //Creamos una ruta de destino con la variable ruta y el nombre original del archivo	
                move_uploaded_file($temporal, $Destino); //Movemos el archivo temporal a la ruta especificada	
            }
            if ($key['error'] == '') { //Si no existio ningun error, retornamos un mensaje por cada archivo subido
                $mensage .= '-> Archivo <b>' . $NombreOriginal . '</b> Subido correctamente. <br>';
                $valor = "1";
            }
            if ($key['error'] != '') {//Si existio algún error retornamos un el error por cada archivo.
                $mensage .= '-> No se pudo subir el archivo <b>' . $NombreOriginal . '</b> debido al siguiente Error: \n' . $key['error'];
                $valor = "0";
            }
        }
        echo ($valor); // Regresamos los mensajes generados al cliente
    }

    function actividadfoto() {

        $ruta = './img/concejales/actividad/'; //Decalaramos una variable con la ruta en donde almacenaremos los archivos
        $mensage = ''; //Declaramos una variable mensaje quue almacenara el resultado de las operaciones.
        $valor = "0";
        foreach ($_FILES as $key) { //Iteramos el arreglo de archivos
            if ($key['error'] == UPLOAD_ERR_OK) {//Si el archivo se paso correctamente Ccontinuamos 
                $NombreOriginal = $key['name']; //Obtenemos el nombre original del archivo
                $temporal = $key['tmp_name']; //Obtenemos la ruta Original del archivo
                $Destino = $ruta . date("Y-m-d-H") . $NombreOriginal; //Creamos una ruta de destino con la variable ruta y el nombre original del archivo	
                move_uploaded_file($temporal, $Destino); //Movemos el archivo temporal a la ruta especificada	
            }
            if ($key['error'] == '') { //Si no existio ningun error, retornamos un mensaje por cada archivo subido
                $mensage .= '-> Archivo <b>' . $NombreOriginal . '</b> Subido correctamente. <br>';
                $valor = "1";
            }
            if ($key['error'] != '') {//Si existio algún error retornamos un el error por cada archivo.
                $mensage .= '-> No se pudo subir el archivo <b>' . $NombreOriginal . '</b> debido al siguiente Error: \n' . $key['error'];
                $valor = "0";
            }
        }
        echo ($valor); // Regresamos los mensajes generados al cliente
    }

    function actualizarperfil() {

        $ruta = './img/concejales/'; //Decalaramos una variable con la ruta en donde almacenaremos los archivos
        $mensage = ''; //Declaramos una variable mensaje quue almacenara el resultado de las operaciones.
        $valor = "0";
        foreach ($_FILES as $key) { //Iteramos el arreglo de archivos
            if ($key['error'] == UPLOAD_ERR_OK) {//Si el archivo se paso correctamente Ccontinuamos 
                $NombreOriginal = $key['name']; //Obtenemos el nombre original del archivo
                $temporal = $key['tmp_name']; //Obtenemos la ruta Original del archivo
                $Destino = $ruta . date("Y-m-d-H") . $NombreOriginal; //Creamos una ruta de destino con la variable ruta y el nombre original del archivo	
                move_uploaded_file($temporal, $Destino); //Movemos el archivo temporal a la ruta especificada	
            }
            if ($key['error'] == '') { //Si no existio ningun error, retornamos un mensaje por cada archivo subido
                $mensage .= '-> Archivo <b>' . $NombreOriginal . '</b> Subido correctamente. <br>';
                $valor = "1";
            }
            if ($key['error'] != '') {//Si existio algún error retornamos un el error por cada archivo.
                $mensage .= '-> No se pudo subir el archivo <b>' . $NombreOriginal . '</b> debido al siguiente Error: \n' . $key['error'];
                $valor = "0";
            }
        }
        echo ($valor); // Regresamos los mensajes generados al cliente
    }

    function ingresportada() {

        $ruta = './Files/'; //Decalaramos una variable con la ruta en donde almacenaremos los archivos
        $mensage = ''; //Declaramos una variable mensaje quue almacenara el resultado de las operaciones.
        $valor = "0";
        foreach ($_FILES as $key) { //Iterzzamos el arreglo de archivos
            if ($key['error'] == UPLOAD_ERR_OK) {//Si el archivo se paso correctamente Ccontinuamos 
                $NombreOriginal = $key['name']; //Obtenemos el nombre original del archivo
                $temporal = $key['tmp_name']; //Obtenemos la ruta Original del archivo
                $Destino = $ruta . date("Y-m-d-H") . $NombreOriginal; //Creamos una ruta de destino con la variable ruta y el nombre original del archivo	
                move_uploaded_file($temporal, $Destino); //Movemos el archivo temporal a la ruta especificada	
            }
            if ($key['error'] == '') { //Si no existio ningun error, retornamos un mensaje por cada archivo subido
                $mensage .= '-> Archivo <b>' . $NombreOriginal . '</b> Subido correctamente. <br>';
                $valor = "1";
            }
            if ($key['error'] != '') {//Si existio algún error retornamos un el error por cada archivo.
                $mensage .= '-> No se pudo subir el archivo <b>' . $NombreOriginal . '</b> debido al siguiente Error: \n' . $key['error'];
                $valor = "0";
            }
        }
        echo ($valor); // Regresamos los mensajes generados al cliente
    }

    function ingresarHM() {

        $ruta = './hechosmunicipales/pdf/'; //Decalaramos una variable con la ruta en donde almacenaremos los archivos
        $mensage = ''; //Declaramos una variable mensaje quue almacenara el resultado de las operaciones.
        $valor = "0";
        foreach ($_FILES as $key) { //Iteramos el arreglo de archivos
            if ($key['error'] == UPLOAD_ERR_OK) {//Si el archivo se paso correctamente Ccontinuamos 
                $NombreOriginal = $key['name']; //Obtenemos el nombre original del archivo
                $temporal = $key['tmp_name']; //Obtenemos la ruta Original del archivo
                $Destino = $ruta . date("Y-m-d-H") . $NombreOriginal; //Creamos una ruta de destino con la variable ruta y el nombre original del archivo	
                move_uploaded_file($temporal, $Destino); //Movemos el archivo temporal a la ruta especificada	
            }
            if ($key['error'] == '') { //Si no existio ningun error, retornamos un mensaje por cada archivo subido
                $mensage .= '-> Archivo <b>' . $NombreOriginal . '</b> Subido correctamente. <br>';
                $valor = "0";
            }
            if ($key['error'] != '') {//Si existio algún error retornamos un el error por cada archivo.
                $mensage .= '-> No se pudo subir el archivo <b>' . $NombreOriginal . '</b> debido al siguiente Error: \n' . $key['error'];
                $valor = "1";
            }
        }
        echo ($valor); // Regresamos los mensajes generados al cliente
    }

    function ingresarHMp() {

        $ruta = './hechosmunicipales/portadas/'; //Decalaramos una variable con la ruta en donde almacenaremos los archivos
        $mensage = ''; //Declaramos una variable mensaje quue almacenara el resultado de las operaciones.
        $valor = "0";
        foreach ($_FILES as $key) { //Iteramos el arreglo de archivos
            if ($key['error'] == UPLOAD_ERR_OK) {//Si el archivo se paso correctamente Ccontinuamos 
                $NombreOriginal = $key['name']; //Obtenemos el nombre original del archivo
                $temporal = $key['tmp_name']; //Obtenemos la ruta Original del archivo
                $Destino = $ruta . date("Y-m-d-H") . $NombreOriginal; //Creamos una ruta de destino con la variable ruta y el nombre original del archivo	
                move_uploaded_file($temporal, $Destino); //Movemos el archivo temporal a la ruta especificada	
            }
            if ($key['error'] == '') { //Si no existio ningun error, retornamos un mensaje por cada archivo subido
                $mensage .= '-> Archivo <b>' . $NombreOriginal . '</b> Subido correctamente. <br>';
                $valor = "0";
            }
            if ($key['error'] != '') {//Si existio algún error retornamos un el error por cada archivo.
                $mensage .= '-> No se pudo subir el archivo <b>' . $NombreOriginal . '</b> debido al siguiente Error: \n' . $key['error'];
                $valor = "1";
            }
        }
        echo ($valor); // Regresamos los mensajes generados al cliente
    }

    function ingresarHMf() {
        $mencion = $this->input->post('txtmencion');
        $fe = $this->input->post('fecha');
        $p1 = $this->input->post('p1');
        $p2 = $this->input->post('p2');
        $p1 = date("Y-m-d-H") . $p1;
        $p2 = date("Y-m-d-H") . $p2;
        $valor = 1;
        if ($this->modelo->ingresarHMf($mencion, $fe, $p1, $p2) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function conectar() {

        $correo = $this->input->post('correo');
        $clave = $this->input->post('clave');
        $valor = 0;
        $permiso = 0;
        $nombre2 = "";
        $cookie = array('correo' => '', 'permiso' => '', 'esta_logeado' => false);
        if ($this->modelo->conectar($correo, $clave) == 1) {
            $permiso = $this->modelo->permiso($correo)->result();
            $nombre2 = "";
            $id_conectado = 0;
            foreach ($permiso as $fila) {
                $permiso = $fila->perfil;
                $nombre2 = $fila->nombre;
                $id_conectado = $fila->id_usuario;
            }
            $valor = 1;
            $cookie = array('id_conectado' => $id_conectado, 'nombre' => $nombre2, 'correo' => $correo, 'permiso' => $permiso, 'esta_logeado' => true);
        }
        $this->session->set_userdata($cookie);
        echo json_encode(array("valor" => $valor, "correo" => $correo, "permiso" => $permiso, "nombre2" => $nombre2));
    }

    function cerrar() {
        $this->session->sess_destroy();
    }

    function verifaLogin() {
        $valor = 0;
        $correo = '';
        if ($this->session->userdata('esta_logeado') == true) {
            $valor = 1;
            $correo = $this->session->userdata('correo');
        }
        $permiso = $this->session->userdata('permiso');
        echo json_encode(array("valor" => $valor, "correo" => $correo, "permiso" => $permiso));
    }

    function cargarnoticias() {

        $datos['noticia'] = $this->modelo->cargarnoticias()->result();
        $this->load->view('inicio', $datos);
    }

    function reportenoti() {
        $data = $this->modelo->reportenoti();
        $datos['cantidad'] = $data->num_rows();
        $datos['noticias'] = $data->result();
        $this->load->view('reportenoti', $datos);
    }

    function verreporteacti() {
        $id_conectado = $this->session->userdata('id_conectado');

        $data = $this->modelo->verreporteacti($id_conectado);
        $datos['cantidad'] = $data->num_rows();
        $datos['noticias'] = $data->result();
        $this->load->view('reporteactividad', $datos);
    }

    function vernoticia() {
        $id = $this->input->post('id');

        $datos['noticia'] = $this->modelo->vernoticia($id)->result();
        $this->load->view('noticia', $datos);
    }

    function cargarCategorias2() {
        $datos['categorias'] = $this->modelo->vernoticia()->result();
        $this->load->view('categorias2', $datos);
    }

    function ingresarcategoria() {
        $categorianueva = $this->input->post('categorianueva');

        $valor = 1;
        if ($this->modelo->ingresarcategoria($categorianueva) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function modificarcategoria() {
        $categorianueva = $this->input->post('categorianueva');
        $actual = $this->input->post('actual');
        $valor = 1;
        if ($this->modelo->modificarcategoria($categorianueva, $actual) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function evaluar() {

        $id = $this->input->post('id');
        $puntaje = $this->input->post('puntaje');
        $valor = 1;
        if ($this->modelo->evaluar($id, $puntaje) == 0) {

            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function guardarcambios() {

        $id = $this->input->post('id_solicitud');
        $fecha_estimada = $this->input->post('fecha');
        $comentario = $this->input->post('comentariotecnico');
        $valor = 1;
        if ($this->modelo->guardarcambios($id, $fecha_estimada, $comentario) == 0) {

            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function ingresosolicitud() {
        $comentario = $this->input->post('comentario');
        $categoria = $this->input->post('categoria');
//        $correo = $this->session->userdata('correo');
        $id_conectado = $this->session->userdata('id_conectado');


        $fechaactual = date('d-m-Y');
        $valor = 1;
        if ($this->modelo->ingresosolicitud($categoria, $comentario, $fechaactual, $id_conectado) == 0) {

            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function cargarsolicitudes() {
        $correo = $this->session->userdata('correo');
        $datos['solicitudes'] = $this->modelo->cargarsolicitudes($correo)->result();
        $this->load->view('ReporteSolicitudes', $datos);
    }

    function cargacpanel() {
        $this->load->view('cpanel');
    }

    function cargacpanelconcejo() {
        $id_conectado = $this->session->userdata('id_conectado');
        $data = $this->modelo->queconcejal($id_conectado);
        $datos['infoconcejal'] = $data->result();
        $this->load->view('cpanelconcejo', $datos);
    }

    function reportecliente() {
        $id_conectado = $this->session->userdata('id_conectado');
        $data = $this->modelo->reportecliente($id_conectado);
        $datos['cantidad'] = $data->num_rows();
        $datos['solicitudes'] = $data->result();
        $this->load->view('CARGASOLICITUDESCLIENTE', $datos);
    }

    function reportetecnico() {
        $correo = $this->session->userdata('correo');
        $data = $this->modelo->reportetecnico($correo);
        $datos['cantidad'] = $data->num_rows();
        $datos['solicitudes'] = $data->result();
        $this->load->view('reportesolicitudesTecnico', $datos);
    }

    function derivar() {

        $id_solicitud = $this->input->post('id_solicitud');
        $id_tecnico = $this->input->post('id_tecnico');
        $valor = 1;
        if ($this->modelo->derivar($id_solicitud, $id_tecnico) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

//aun no se termina esta funcion
    function enviarcorreo() {
        $correosAdmin = $this->modelo->rescataadmin();
        $destinatarios = "";
        foreach ($correosAdmin as $fila) {
            $aux = $fila->correo;
            $destinatarios.="<" . $aux . ">" . ", ";
        }
        $nombre = $this->session->userdata('nombre');
        $correo = $this->session->userdata('correo');
        $mensaje.="Se a ingresado una nueva Solicitud por parte de " . $nombre . ". \r\n " . "Favor ingresar al sistema para derivar Solicitud a Tecnico  o ponerce en contacto con " . $nombre . " al correo  " . $correo . " ";
// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
        $mensaje = wordwrap($mensaje, 70, "\r\n");
        $cabeceras .= 'From: SISTEMA DE SOLICITUD <info@munilinares.cl>' . "\r\n";
        if (mail($destinatarios, "ALERTA NUEVA SOLICITUD", $mensaje, $cabeceras)) {
            $valor = 1;
            echo json_encode(array("valor" => $valor));
        } else {
            $valor = 0;
            echo json_encode(array("valor" => $valor));
        }
    }

    function contacto() {
        $this->load->view('contacto');
    }

    function enviar() {
        $nombre = $this->input->post('nombre');
        $mail = $this->input->post('mail');
        $asunto = $this->input->post('asunto');
        $mensaje = $this->input->post('mensaje');
        $depart = $this->input->post('depart');
        $mensajee = "Se a envia un mail mediante el sistema web de parte de  " . $nombre . "  y su mail " . $mail . " \r\n " . $mensaje;
        // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
        $mensaj = wordwrap($mensajee, 70, "\r\n");
        $cabeceras = 'From: SISTEMA DE CORREOS <info@munilinares.cl>' . "\r\n";
        if (mail($depart, $asunto, $mensaj, $cabeceras)) {
            $valor = 1;
            echo json_encode(array("valor" => $valor));
        } else {
            $valor = 0;
            echo json_encode(array("valor" => $valor));
        }
    }

    function concejo() {
        $data = $this->modelo->consejo();
        $datos['actividades'] = $data->result();
        $datos['cantidad'] = $data->num_rows();
        $this->load->view('concejo', $datos);
    }

    function cuentaspublicas() {
        $data = $this->modelo->cuentaspublicas();
        $datos['cuentaspublicas'] = $data->result();
        $datos['cantidad'] = $data->num_rows();
        $this->load->view('cuentaspublicas', $datos);
    }

    function actividad() {
        $id = $this->input->post('id');
        $data = $this->modelo->actividad($id);
        $datos['cantidad'] = $data->num_rows();
        $datos['actividades'] = $data->result();
        $this->load->view('reporteactividadconcej', $datos);
    }

    function vistaembepdf() {
        $this->load->view('menu/mebePDF');
    }

    
    
    
    //    -------------reporteactividadconcej---------alejandro----------
    function vistaPersonalRemun() {
        $this->load->view('personalRemun');
    }

    //    ----------------------alejandro----------
    //quienes somos
    function vistaquienSomos() {
        $this->load->view('menu/quienSomos');
    }

    //historia
    function vistaHistoria() {
        $this->load->view('menu/historia');
    }

    //msj alcalde
    function vistaMSJalcalde() {
        $this->load->view('menu/mensajeAlcalde');
    }

    //consejo municipal
    function vistaConsejoMunicipal() {
        $this->load->view('menu/consejoMunicipal');
    }

    //estructura organica
    function vistaOrganigrama() {
        $this->load->view('menu/organigrama');
    }

    function vistaOrganigramaDepto() {
        $this->load->view('menu/organigramasDepartamentos');
    }

    //salud

    function vistaSalud() {
        $this->load->view('menu/deptoSalud');
    }

    //cartografia
    function vistaDeCartografia() {
        $this->load->view('menu/cartografia');
    }

    //deporte
    function vistaDeporte() {
        $this->load->view('menu/deporte');
    }

    //direcion unidades
    function vistaDireccionUnidad() {
        $this->load->view('menu/directorUnidad');
    }

    //jefe depto
    function vistajefeDepto() {
        $this->load->view('menu/jefeDepartamento');
    }

//   ----------------trasparecia Activa--------------

    function menuTA() {
        $this->load->view('menuTA');
    }

//    function vistaMenuTransActiva() {
//        $this->load->view('menuTransActiva');
//    }
// diario oficial
    function vistaDiarioOficial() {
        $datos = $this->modelo->TBDiarioOficial();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/diarioOficial', $data);
    }

    //marco narrativo
    function vistaMarcoNormativo() {
        $datos = $this->modelo->TBMarcoNormativo();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/MarcoNormativo', $data);
    }

    // potestad
    function vistaPotestad() {
        $datos = $this->modelo->TBPotestades();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/potestades', $data);
    }

    function vistaotrasTransferencias() {

        $datos1 = $this->modelo->TBotrasTransferencias1();
        $data['cantidad1'] = $datos1->num_rows();
        $data['resultado1'] = $datos1->result();

        $datos2 = $this->modelo->TBotrasTransferencias2();
        $data['cantidad2'] = $datos2->num_rows();
        $data['resultado2'] = $datos2->result();

        $this->load->view('Trasparencia/otrasTransferencias', $data);
    }

    function vistaEmprendedores() {

        $datos1 = $this->modelo->TBEmprendedores1();
        $data['cantidad1'] = $datos1->num_rows();
        $data['resultado1'] = $datos1->result();

        $datos2 = $this->modelo->TBEmprendedores2();
        $data['cantidad2'] = $datos2->num_rows();
        $data['resultado2'] = $datos2->result();

        $this->load->view('Trasparencia/emprendedores', $data);
    }

    function vistaPostulacionFondeve() {
        $datos = $this->modelo->TBPostulacionFondeve();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();


        $this->load->view('Trasparencia/PostulacionFondeve', $data);
    }

    function vistaConcursoPublicos() {
        $datos = $this->modelo->TBConcursoPublicos();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/concursopublicos', $data);
    }

    function vistaPatenteComerc() {
        $datos = $this->modelo->TBPatenteComerc();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/patenteComerc', $data);
    }

    function vistaPermisoEdif() {
        $datos = $this->modelo->TBPermisoEdif();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/PermisoEdif', $data);
    }

    function vistaDecretoMunicipales() {

        $this->load->view('Trasparencia/DecretoMunicipales');
    }

    function vistaDecretoTransito() {

        $this->load->view('Trasparencia/DecretoTransito');
    }

    function vistaDecretoObras() {

        $this->load->view('Trasparencia/DecretoObras');
    }

    function vistaDecretoRentas() {

        $this->load->view('Trasparencia/DecretoRentas');
    }

    function vistaTablaDecreto() {
        $codigo = $this->input->post('codigo');
        $anio = $this->input->post('anios');

        $datos = $this->modelo->TBDecretos($codigo, $anio);
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/TablaDecretos', $data);
    }

    function vistaOrdenanzas() {

        $datos = $this->modelo->TBOrdenanzas();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/ordenanzas', $data);
    }

    function vistaSumarios() {

        $this->load->view('Trasparencia/sumarios');
    }

    function vistaTablaSumarios() {
        $anio = $this->input->post('anios');


        $datos = $this->modelo->TBSumarios($anio);
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/TablaSumarios', $data);
    }

    function vistaConvenios() {

        $datos = $this->modelo->TBConvenios();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/convenios', $data);
    }

    function vistaMpartCiudadana() {

        $datos = $this->modelo->TBMparticipacionCiudadana();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/MparticipacionCiudadana', $data);
    }

    function vistaConsejeros() {
        $datos = $this->modelo->TBConsejeros();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/consejeros', $data);
    }

    function vistaActasConsejos() {
        $datos = $this->modelo->TBActaConsejo();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/actasConsejo', $data);
    }

    function vistaCpublicas() {

        $datos = $this->modelo->TBCuentasPublicas();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/cuentasPublicas', $data);
    }

    function vistaPrepAreaMuni() {
        $datos = $this->modelo->TBPrepAreaMuni();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('PrepAreaMuni', $data);
    }

    function vistaFComunMuni() {
        $datos = $this->modelo->TBFComunMun();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/FComunMun', $data);
    }

    function vistaResAuditorias() {
        $datos = $this->modelo->TBresAuditorias();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/resAuditorias', $data);
    }

    function vistaInfoTrimestral() {
        $datos = $this->modelo->TBinfoTrimestrales();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/infoTrimestrales', $data);
    }

    function vistaEntiMunicipales() {
        $datos = $this->modelo->TBVinculosEntidades();
        $data['cantidad'] = $datos->num_rows();
        $data['resultado'] = $datos->result();
        $this->load->view('Trasparencia/VinculosEntidades', $data);
    }

    function vistaAnteMernorTaman() {
        $this->load->view('Trasparencia/AnteMernorTaman');
    }

    function vistaDocReservados() {
        $this->load->view('Trasparencia/DocReservados');
    }

    function vistaCostosReproduccion() {
        $this->load->view('Trasparencia/CostosReproduccion');
    }

    function vistaDificultades() {
        $this->load->view('Trasparencia/DifTecnicas');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */