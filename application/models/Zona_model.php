<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Zona_model extends CI_Model {

	//este metdo devolvera la lista de estudiantes de la db
        //consulta para leer la lista 


        public function lista(){
            $this->db->select('*');
            $this->db->from('zona');
            // $this->db->where('idRol','4');
            $this->db->where('estado','1');

            return $this->db->get();
        }


        public function eliminar($idZona){
            $datos = ['estado' => '0',];
            $this-> db-> where ('idZona', $idZona);
            $this-> db-> update ('zona', $datos);
        }


        public function crearZon($data){

            $this->db->insert('zona',$data);

        }



        public function modificarEstudiante($idZona,$datos){

        //aca pondremos la consulta para modificar lso datos de la zona 
        $this->db->where ('idZona',$idZona);
        $this->db->update('zona',$datos);

        }

        function get_zona(){

            // armamos la consulta
            $query = $this->db-> query('SELECT idZona,zona FROM zona where estado = 1');
        
            // si hay resultados
            if ($query->num_rows() > 0) {
                // almacenamos en una matriz bidimensional
                foreach($query->result() as $row)
                   $arrDatos[htmlspecialchars($row->idZona, ENT_QUOTES)] = 
                             htmlspecialchars($row->zona, ENT_QUOTES);
        
                $query->free_result();
                return $arrDatos;
             }
        }

        public function getZona($data){
            $result= " SELECT idZona
                                FROM zona 
                                where zona = '$data' AND estado = 1";
                                


                $query = $this->db->query($result);
                        if ($query->num_rows() > 0) {
                                return $query->row()->idZona;
                        }
                        return false; 
        }

   

              
    

}
