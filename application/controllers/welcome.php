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

function eliminar() {
$id_solicitud = $this->input->post('id_solicitud');
$this->modelo->eliminar($id_solicitud);
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

$ruta = './hechosmunicipales/'; //Decalaramos una variable con la ruta en donde almacenaremos los archivos
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

function ingresarHMf(){
$fe=  $this->input->post('fecha');
$p1=  $this->input->post('p1');
$p1=date("Y-m-d-H") .$p1;
$valor = 1;
if ($this->modelo->ingresarHMf($fe,$p1) == 0) {
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
    $a="holaa";
$datos['noticia'] = $this->modelo->cargarnoticias()->result();
$this->load->view('inicio', $datos,$a);  
}

function cargarCategorias2() {
$datos['categorias'] = $this->modelo->cargaCategorias()->result();
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

//echos municipales
function vistaechosmunicipales() {
$this->load->view('hechos-municipales');
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */