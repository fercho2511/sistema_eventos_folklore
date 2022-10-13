<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Evento_model extends CI_Model {


    function registrarVenta($cliente,$mesa,$idUsuario)
    {
        # code... registraremso al silla a nombre de un cliente
         $this -> db -> simple_query ( "UPDATE mapa
                SET estado = '0',
                idCliente = '$cliente',
                fechaventa = CURRENT_TIMESTAMP,
                idUsuarioAcciones=$idUsuario
                where mesa = '$mesa'  and estado = 1 
                LIMIT 1 ");
       
    //   $query=  "UPDATE mapa
    //     SET estado = '0',
    //     idCliente = '$cliente',
    //     fechaventa = CURRENT_TIMESTAMP
    //     where mesa = '$mesa'  and estado = 1 
    //     LIMIT 1 " 
        
    }



    function mesas($evento){
        
      



                $query = $this->db-> query("SELECT id, mesa from mapa
                where evento = '$evento'
                GROUP BY mesa 
                ORDER BY id ASC");
                // si hay resultados
                if ($query->num_rows() > 0) {
                // almacenamos en una matriz bidimensional
                foreach($query->result() as $row)
                $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)] = 
                    htmlspecialchars($row->mesa, ENT_QUOTES);
                $query->free_result();
                return $arrDatos;
                }

    }


    function comprador($evento){

                $query = $this->db-> query("SELECT m.idCliente AS id, CONCAT(c.nombres,' ',c.apellidos) AS Nombre
                from mapa m
                INNER JOIN cliente c on c.idCliente = m.idCliente 
                where evento = '$evento'
                GROUP BY nombre
                ORDER BY m.idCliente asc");
                // si hay resultados
                if ($query->num_rows() > 0) {
                // almacenamos en una matriz bidimensional
                foreach($query->result() as $row)
                $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)] = 
                    htmlspecialchars($row->Nombre, ENT_QUOTES);
                $query->free_result();
                return $arrDatos;
            }
    }


    function vendedor($evento){
        $query = $this->db-> query("SELECT m.idUsuarioAcciones as id, CONCAT(u.nombres,' ',u.apellido1,' ',u.apellido2) as nombre
        from mapa m
        INNER JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
        where m.evento = '$evento'
        GROUP BY nombre
        ORDER BY m.idUsuarioAcciones asc");
        // si hay resultados
        if ($query->num_rows() > 0) {
        // almacenamos en una matriz bidimensional
        foreach($query->result() as $row)
        $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)] = 
            htmlspecialchars($row->nombre, ENT_QUOTES);
        $query->free_result();
        return $arrDatos;
        }
    }

    function reporteGeneral($evento){
        $query= "SELECT c.idCliente, CONCAT(c.nombres,' ',c.apellidos) as nombreComprador, CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2) nombreVendedor, m.mesa, COUNT(m.silla) as Cantidadsillas, z.precio as precioxsilla, m.fechaventa,e.evento
        FROM mapa m
        LEFT  JOIN cliente c on c.idCliente = m.idCliente
        LEFT JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
        LEFT JOIN zona z on z.idZona = m.zona
        LEFT JOIN evento e on e.Id = m.evento
         WHERE m.evento = '$evento' and m.estado = 0 
         GROUP BY c.idCliente asc
         ";
        $resultados = $this->db->query($query);
              return $resultados;
    }

    function reporteFechas($inicio,$fin,$evento){
        $query= "SELECT c.idCliente, CONCAT(c.nombres,' ',c.apellidos) as nombreComprador, CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2) nombreVendedor, m.mesa, COUNT(m.silla) as Cantidadsillas, z.precio as precioxsilla, m.fechaventa,e.evento
        FROM mapa m
        LEFT  JOIN cliente c on c.idCliente = m.idCliente
        LEFT JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
        LEFT JOIN zona z on z.idZona = m.zona
        LEFT JOIN evento e on e.Id = m.evento
         WHERE m.evento = '$evento' and m.estado = 0 and fechaventa BETWEEN '$inicio 00:00:00 ' AND '$fin 23:59:00' 
         GROUP BY m.idCliente asc
         ORDER BY m.fechaventa";
        $resultados = $this->db->query($query);
              return $resultados;

    }

    function reporteMesa($mesa,$evento){
        $query= "SELECT c.idCliente, CONCAT(c.nombres,' ',c.apellidos) as nombreComprador, CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2) nombreVendedor, m.mesa, COUNT(m.silla) as Cantidadsillas, z.precio as precioxsilla, m.fechaventa,e.evento
        FROM mapa m
        LEFT  JOIN cliente c on c.idCliente = m.idCliente
        LEFT JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
        LEFT JOIN zona z on z.idZona = m.zona
        LEFT JOIN evento e on e.Id = m.evento
         WHERE m.evento = '$evento' and m.estado = 0 and mesa = '$mesa' 
         GROUP BY m.idCliente asc
         ORDER BY m.mesa";
        $resultados = $this->db->query($query);
              return $resultados;
    }


    function reporteComprador($comprador,$evento){
        $query= "SELECT c.idCliente, CONCAT(c.nombres,' ',c.apellidos) as nombreComprador, CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2) nombreVendedor, m.mesa, COUNT(m.silla) as Cantidadsillas, z.precio as precioxsilla, m.fechaventa,e.evento
        FROM mapa m
        LEFT  JOIN cliente c on c.idCliente = m.idCliente
        LEFT JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
        LEFT JOIN zona z on z.idZona = m.zona
        LEFT JOIN evento e on e.Id = m.evento
         WHERE m.evento = '$evento' and m.estado = 0 and CONCAT(c.nombres,' ',c.apellidos)  = '$comprador' 
         GROUP BY m.idCliente asc
         ORDER BY m.mesa";
        $resultados = $this->db->query($query);
              return $resultados;
    }

    function reporteVendedor($vendedor,$evento){
        $query= "SELECT c.idCliente, CONCAT(c.nombres,' ',c.apellidos) as nombreComprador, CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2) nombreVendedor, m.mesa, COUNT(m.silla) as Cantidadsillas, z.precio as precioxsilla, m.fechaventa,e.evento
        FROM mapa m
        LEFT  JOIN cliente c on c.idCliente = m.idCliente
        LEFT JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
        LEFT JOIN zona z on z.idZona = m.zona
        LEFT JOIN evento e on e.Id = m.evento
         WHERE m.evento = '$evento' and m.estado = 0 and CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2)='$vendedor'
         GROUP BY m.idCliente asc
         ORDER BY m.mesa";
        $resultados = $this->db->query($query);
              return $resultados;
    }



    function reporteFantasma($evento){
        

         $query= "SELECT c.idCliente, CONCAT(c.nombres,' ',c.apellidos) as nombreComprador, CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2) nombreVendedor, m.mesa, COUNT(m.silla) as Cantidadsillas, z.precio as precioxsilla, m.fechaventa,e.evento
         FROM mapa m
         LEFT  JOIN cliente c on c.idCliente = m.idCliente
         LEFT JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
         LEFT JOIN zona z on z.idZona = m.zona
         LEFT JOIN evento e on e.Id = m.evento
          WHERE m.evento = '$evento' and m.estado = 10  
          GROUP BY m.idCliente asc
          ORDER BY m.mesa";
         $resultados = $this->db->query($query);
               return $resultados;
    }
	


    //para crear evento 
    function crearEvento(){
        
        $query = "SELECT id, evento, lugar, fechaEvento, estado FROM evento ";
        $resultados = $this->db->query($query);
        return $resultados;


    }


    function verReservas($mesa, $evento){

        $query = "SELECT m.*, CONCAT(c.nombres,' ',c.apellidos) as nombre,c.ci,c.telefono, COUNT(m.silla) as cantidadSillas, z.precio 
        from mapa m 
        INNER JOIN cliente c ON c.idCliente=  m.idCliente
        INNER JOIN zona z ON z.idZona = m.zona
        where m.estado = 2 and m.evento = $evento and m.mesa = '$mesa'
        GROUP BY m.idCliente";
        $resultados = $this->db->query($query);
        return $resultados;

    }
}