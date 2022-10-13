<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Cantidad_silla_model extends CI_Model {
    public function get_cantidad($id) {
        // $this->db->select('*');
        // $this->db->from('mapa');
        // $this->db->where('mesa', $id);
        // $this->db->where('estado', 1);        
        // $this->db->order_by("id");
        // $this->db->order_by("city_name", "ASC");
        // $Q = "SELECT id,silla FROM mapa where estado = 1 and mesa = '$mesa'";
        // if ($Q->num_rows > 0) {
        //     $return = $Q->result();
        // } else {
        //     $return = 0;
        // }
        // $Q->free_result();
        // return $return;


       


        // $this->db->where('mesa', $id);
        // $this->db->where('estado', 1);
        // $this->db->order_by("id");
        //  $query = $sql="SELECT id,silla FROM mapa where estado = 1 and mesa = '$id'";
        // //  $output = '<option value="">Seleccionar cantidad</option>';
        //  foreach ($query -> result() as $row) {
        //          $output .='<option value="'.$row->id.'">'.$row->silla.'</option>';
           
        //  }

        //  return $output;


        //  $query = $this->db-> query("SELECT id,silla FROM mapa where estado = 1 and mesa = '$id' ");
        // // si hay resultados
        // if ($query->num_rows() > 0) {
        //     // almacenamos en una matriz bidimensional
        //     foreach($query->result() as $row)
        //        $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)] = 
        //                  htmlspecialchars($row->silla, ENT_QUOTES);
        //     $query->free_result();
        //     return $arrDatos;
        //  }


         $sql="SELECT id,silla FROM mapa where estado = 1 and mesa = '$id' ";

            $result=$sql;

            $cadena="<label>Seleccionar cantidad</label> 
                    <select id='jcity' name='jcity'>";

            while ($ver=mysqli_fetch_row($result)) {
                $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
            }

            echo  $cadena."</select>";

        




    }



}