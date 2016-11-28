<?php

class modelo extends CI_Model {

    function conectar($correo, $clave) {

        $this->db->select('*');
        $this->db->where('correo', $correo);
        $this->db->where('pass', md5($clave));
        return $this->db->get('usuarios')->num_rows();
    }

    function queconcejal($id_conectado) {
        $this->db->select('nombre,fotoperfil,propuesta');
        $this->db->where('id_usuario', $id_conectado);
        return $this->db->get('usuarios');
    }

    function permiso($correo) {
        $this->db->select('perfil');
        $this->db->select('nombre');
        $this->db->select('id_usuario');
        $this->db->where('correo', $correo);
        return $this->db->get('usuarios');
    }

    function existe($correo) {
        $this->db->select('correo');
        $this->db->where('correo', $correo);
        $canti = $this->db->get('usuario')->num_rows();
        if ($canti > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function ingresarnoticia($titulo, $encabezado, $texto, $bibliografia, $autor, $linkofoto, $ruta, $p1, $p2, $p3, $p4, $p5) {

        $data = array(
            "titulo" => $titulo,
            "encabezado" => $encabezado,
            "texto" => $texto,
            "bibliografia" => $bibliografia,
            "autor" => $autor,
            "linkofoto" => $linkofoto,
            "ruta" => $ruta,
            "foto1" => $p1,
            "foto2" => $p2,
            "foto3" => $p3,
            "foto4" => $p4,
            "foto5" => $p5,
            "fecha_registro" => date("Y-m-d")
        );
        if ($this->db->insert("noticia", $data) == 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function ingresarHMf($fe, $p1) {
        $data = array("fecha" => $fe,
            "rutapdf" => $p1);
        if ($this->db->insert('hechosmunicipal', $data)) {
            return 1;
        } else {
            return 0;
        }
    }

    function consejo() {
        $query = "SELECT * FROM `usuarios` WHERE `perfil`='2'";
        return $this->db->query($query);
    }

    function actividad($id) {
        $query = "SELECT * FROM `actividad_concejales`  WHERE `fk_actividad_concejal`=$id";
        return $this->db->query($query);
    }

    function ingresarusuario($nombre, $correo, $departamento, $clave, $peril) {
        if ($peril == "usuario") {
            $data = array(
                "correo" => $correo,
                "pass" => md5($clave),
                "nombre" => $nombre,
                "departamento" => $departamento,
                "perfil" => '2'
            );
            if ($this->db->insert('usuario', $data)) {
                return 1;
            } else {
                return 0;
            }
        }
        if ($peril == "tecnico") {
            $data00 = array(
                "correo" => $correo,
                "pass" => md5($clave),
                "nombre" => $nombre,
                "departamento" => $departamento,
                "perfil" => '1'
            );

            $data0 = array(
                "nombre" => $nombre,
                "correo" => $correo,
                "pass" => md5($clave),
                "perfil" => '1'
            );

            if ($this->db->insert('usuario', $data00) && $this->db->insert('tecnico', $data0)) {
                return 1;
            } else {
                return 0;
            }
        }
        if ($peril == "administrador") {
            $data2 = array(
                "correo" => $correo,
                "pass" => md5($clave),
                "nombre" => $nombre,
                "departamento" => $departamento,
                "perfil" => '0'
            );
            if ($this->db->insert('usuario', $data2)) {
                return 1;
            } else {
                return 0;
            }
        }
    }

    function rescataadmin() {

        $query = "SELECT `correo` FROM `usuario` WHERE `perfil`=0";
        return $this->db->query($query)->result();
    }

    function Terminar($codigo) {
        $fechaactual = date('d-m-Y');
        $data = array(
            "estado_solicitud" => "FINALIZADA",
            "fecha_termino" => $fechaactual,
            "progreso" => "100",
            "verificaevaluacion" => "0"
        );
        $this->db->where('id_solicitud', $codigo);
        $this->db->update('solicitud', $data);
    }

    function propuesta($propuesta, $id_conectado) {
        $data = array(
            "propuesta" => $propuesta
        );
        $this->db->where('id_usuario', $id_conectado);
        $this->db->update('usuarios', $data);
        $a = mysql_affected_rows();
        if ($a == 0) {
            return 0;
        } else {
            return 1;
        }
    }

    function actualizarperfil2($id_conectado, $propuesta, $p1) {
        $data = array(
            "fotoperfil" => $p1,
            "propuesta" => $propuesta
        );
        $this->db->where('id_usuario', $id_conectado);
        $this->db->update('usuarios', $data);
        $a = mysql_affected_rows();
        if ($a == 0) {
            return 0;
        } else {
            return 1;
        }
    }

    function ingreactividad($id_conectado, $txttituloactividad, $txtparrafoactividad) {
        $data = array("fk_actividad_concejal" => $id_conectado,
            "titulo" => $txttituloactividad,
            "texto" => $txtparrafoactividad);
        if ($this->db->insert('actividad_concejales', $data)) {
            return 1;
        } else {
            return 0;
        }
    }

    function ingreactividadconfoto($id_conectado, $txttituloactividad, $txtparrafoactividad, $p1) {
        $data = array("fk_actividad_concejal" => $id_conectado,
            "titulo" => $txttituloactividad,
            "texto" => $txtparrafoactividad,
            "foto"=>$p1);
        if ($this->db->insert('actividad_concejales', $data)) {
            return 1;
        } else {
            return 0;
        }
    }

    function eliminarnoticia($id_noticia) {


        $this->db->where('id_noticia', $id_noticia);
        $this->db->delete('noticia');
        $a = mysql_affected_rows();
        if ($a == 0) {
            return 0;
        } else {
            return 1;
        }
    }
    function eliminaractividad($id_actividad_concejal) {


        $this->db->where('id_actividad_concejal', $id_actividad_concejal);
        $this->db->delete('actividad_concejales');
        $a = mysql_affected_rows();
        if ($a == 0) {
            return 0;
        } else {
            return 1;
        }
    }

    function cargarnoticias() {
        $consulta = "SELECT * FROM noticia ORDER BY `id_noticia` DESC LIMIT 5";
        return $this->db->query($consulta);
    }

    function verreporteacti($id_conectado) {
        $consulta = "SELECT `id_actividad_concejal`, `titulo` FROM `actividad_concejales` where `fk_actividad_concejal`='" . $id_conectado . "'";
        return $this->db->query($consulta);
    }
    function reportenoti() {
        $consulta = "SELECT `id_noticia`, `titulo` FROM `noticia`";
        return $this->db->query($consulta);
    }

    function vernoticia($id) {
        $consulta = "SELECT * FROM noticia where `id_noticia`='$id'";
        return $this->db->query($consulta);
    }

    function leer($codigo) {

        $this->db->select('fecha_estimada');
        $this->db->select('comentario_tecnico');
        $this->db->where('id_solicitud', $codigo);
        return $this->db->get('solicitud');
    }

    function cargarTecnicos() {
        $this->db->select('*');
        return $this->db->get('tecnico');
    }

    function evaluar($id, $puntaje) {
        $data = array(
            "evaluacion" => $puntaje,
            "verificaevaluacion" => "1"
        );
        $this->db->where('id_solicitud', $id);
        $this->db->update('solicitud', $data);
        $a = mysql_affected_rows();
        if ($a == 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function guardarcambios($id, $fecha_estimada, $comentario) {
        $data = array(
            "fecha_estimada" => $fecha_estimada,
            "comentario_tecnico" => $comentario
        );
        $this->db->where('id_solicitud', $id);
        $this->db->update('solicitud', $data);
        $a = mysql_affected_rows();
        if ($a == 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function ingresarcategoria($categorianueva) {
        $query = $this->db->get_where('categoria', array('nombre_categoria' => $categorianueva))->num_rows();
        if ($query == 0) {
            $data = array(
                'nombre_categoria' => $categorianueva
            );

            $this->db->insert('categoria', $data);
            return 0;
        } else {
            return 1;
        }
    }

    function modificarcategoria($categorianueva, $actual) {
        $query = $this->db->get_where('categoria', array('nombre_categoria' => $categorianueva))->num_rows();
        if ($query == 0) {
            $data = array(
                'nombre_categoria' => $categorianueva
            );
            $this->db->where('nombre_categoria', $actual);
            $this->db->update('categoria', $data);
            return 0;
        } else {
            return 1;
        }
    }

    function reporte() {
        $consulta = "SELECT solicitud.id_solicitud,
usuario.nombre,
solicitud.fecha_ingreso,
categoria.nombre_categoria,
solicitud.comentario_usuario
FROM solicitud
INNER JOIN usuario
ON solicitud.fk_usuario=usuario.id_usuario
INNER JOIN categoria
on solicitud.fk_categoria=categoria.id_categoria
where solicitud.estado_solicitud='ENVIADO'";
        return $this->db->query($consulta);
    }

    function reportecliente($id_conectado) {
        $this->db->select('*');
        $this->db->where('fk_usuario', $id_conectado);
        $this->db->order_by("id_solicitud", "desc");
        return $this->db->get('solicitud');
    }

    function reportetecnico($correo) {

        $consulta = "SELECT `id_tecnico` FROM `tecnico` WHERE `correo`= '" . $correo . "'";
        $id = $this->db->query($consulta)->result();
        foreach ($id as $fila) {
            $id = $fila->id_tecnico;
        }

        $consulta2 = "SELECT solicitud.id_solicitud,            
usuario.nombre,solicitud.fecha_ingreso,categoria.nombre_categoria,solicitud.comentario_usuario
FROM solicitud INNER JOIN usuario ON solicitud.fk_usuario=usuario.id_usuario INNER JOIN categoria on solicitud.fk_categoria=categoria.id_categoria INNER JOIN usuario_solicitud on solicitud.id_solicitud=usuario_solicitud.fk_solicitud where usuario_solicitud.fk_tecnico= ";
        $consulta2 .= $id . " AND solicitud.estado_solicitud='DERIVADA'";

        return $this->db->query($consulta2);
    }

    function solicitudestecnico($id) {
        $consulta = "SELECT `id_tecnico` FROM `tecnico` WHERE `correo`='.$correo'";
        return $this->db->query($consulta);
    }

    function derivar($id_solicitud, $id_tecnico) {
        $data = array(
            "fk_solicitud" => $id_solicitud,
            "fk_tecnico" => $id_tecnico,
        );
        $data2 = array(
            "estado_solicitud" => "DERIVADA",
            "progreso" => "25"
        );
        if ($this->db->insert("usuario_solicitud", $data) == 1) {

            $this->db->where('id_solicitud', $id_solicitud);
            $this->db->update('solicitud', $data2);
            return 0;
        } else {
            return 1;
        }
        //actualizar la tabla solicitud cambiando el estado a derivado
    }

    //    ----alejandro--
    function TBDiarioOficial() {
        $query = "select nombre,
            link,
            formato,
            carpeta,
            subcarpeta,
            archivo,
            mes,
            periodo
            From transparencia_contenido 
            where codigo= 17 order by orden";

        return $this->db->query($query);
    }

    function TBPotestades() {
        $query = "select id,
                nombre,
                formato,
                carpeta,
                subcarpeta 
                From transparencia_contenido 
                where codigo= 2 order by orden";

        return $this->db->query($query);
    }

    function TBMarcoNarrativo() {
        $query = "select id,
                nombre,
                formato,
                carpeta,
                subcarpeta,
                archivo,
                mes,
                area,
                calidad 
                From transparencia_contenido 
                where codigo= 3 order by orden";

        return $this->db->query($query);
    }

    function TBEmprendedores1() {
        $query = "SELECT id,
                codigo,
                nombre,
                link,
                formato  
                FROM transparencia_contenido 
                where  codigo='7_8_1'  order by orden";
        return $this->db->query($query);
    }

    function TBEmprendedores2() {
        $query = "SELECT id,
                codigo,
                nombre,
                link,
                formato  
                FROM transparencia_contenido 
                where  codigo='7_8_2'  order by orden";

        return $this->db->query($query);
    }

    function TBPostulacionFondeve() {

        $query = "SELECT id,
                codigo,
                nombre,
                link,
                formato  
                FROM transparencia_contenido 
                where  codigo='7_7'  order by orden ";
        return $this->db->query($query);
    }

    function TBConcursoPublicos() {

        $query = "SELECT id,codigo,nombre,link,formato  FROM transparencia_contenido where  codigo='7_6'  order by orden";
        return $this->db->query($query);
    }

    function TBPatenteComerc() {

        $query = "SELECT id,codigo,nombre,link,formato  FROM transparencia_contenido where  codigo='7_4'  order by orden desc";
        return $this->db->query($query);
    }

    function TBPermisoEdif() {

        $query = "SELECT id,codigo,nombre,link,formato  FROM transparencia_contenido where  codigo='7_5'  order by orden desc";
        return $this->db->query($query);
    }

    function TBOrdenanzas() {

        $query = "select * From transparencia_contenido where codigo='7_2' order by orden desc";
        return $this->db->query($query);
    }

    function TBConvenios() {

        $query = "select id,nombre,link,formato,carpeta,subcarpeta,archivo,mes,periodo,area From transparencia_contenido where codigo='7_10' order by orden desc ";
        return $this->db->query($query);
    }

}

?>
