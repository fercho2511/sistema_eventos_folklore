<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Venta_model extends CI_Model {


    function registrarVenta($cliente,$mesa,$idUsuario,$evento)
    {
        # code... registraremso al silla a nombre de un cliente
         $this -> db -> simple_query ( "UPDATE mapa
                SET estado = '0',
                idCliente = '$cliente',
                fechaventa = CURRENT_TIMESTAMP,
                idUsuarioAcciones=$idUsuario
                where mesa = '$mesa'  and estado = 1 and evento = '$evento'
                LIMIT 1 ");
       
  
        
    }
    function registrarReserva($cliente,$mesa,$idUsuario,$evento)
    {
        # code... registraremso al silla a nombre de un cliente
         $this -> db -> simple_query ( "UPDATE mapa
                SET estado = '2',
                idCliente = '$cliente',
                fechaventa = CURRENT_TIMESTAMP,
                idUsuarioAcciones=$idUsuario
                where mesa = '$mesa'  and estado = 1 and evento = '$evento'
                LIMIT 1 ");    

      

	
    }

    function ActualizarVenta($idCliente,$mesa,$usuarioAccion,$evento){

        $this -> db -> simple_query ("UPDATE mapa
        SET estado = '0',
        idUsuarioAcciones='$usuarioAccion'
        where mesa = '$mesa'  and estado = 2 and evento = '$evento' and idCliente='$idCliente'
        ");
    }


    function eliminarReserva($idCliente,$mesa,$usuarioAccion,$evento){

        $this -> db -> simple_query ("UPDATE mapa
        SET estado = '1',
        idUsuarioAcciones='$usuarioAccion',
        idCliente=null
        where mesa = '$mesa'  and estado = 2 and evento = '$evento' and idCliente='$idCliente'
        ");
    }


}
