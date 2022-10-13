
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Silla extends CI_Controller {
    
    public function registrarSilla(){

		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$ci = $this->input->post("ci");
		$correo = $this->input->post("correo");
		$telefono = $this->input->post("telefono");
        $numSilla = $this->input->post("numSilla");
        $mes= $this->input->post("mesa");
		$zona = $this->input->post("zona");

        $idUsuario=$this->session->userdata('idusuario');

		$this->form_validation->set_rules("nombres","Nombre del Cliente","required");
		// $this->form_validation->set_rules("apellidos","Apellidos","required");
		$this->form_validation->set_rules("telefono","Telefono - Celular","required");
		$this->form_validation->set_rules("numSilla","Numero de Silla","required|is_unique[silla.numSilla]");

        $config=array(
            array(
                'field'=>'numSilla',
                'label' =>'Silla',
                'rules' =>'is_unique[silla.numSilla]',
                // 'errors'=> array(
                //         'is_unique' =>'El %s. ya se encuentra registrado',
                // ),

            ),
        );
        $this->form_validation->set_rules($config);

		if ($this->form_validation->run()) {
			$data  = array(
				'nombres' => $nombres, 
				'apellidos' => $apellidos,
				'correo' => $correo,
				'telefono' => $telefono,
				'ci' => $ci,
                'usuario_idUsuario' => $idUsuario,               
			);
            try {
                //code...

                        $this->db->trans_begin();  //iniciamso la transaccion
                        $this->silla_model->registrarSilla($data);
                        $id= $this->db->insert_id();

                        if ($id>0) {
                           $idZon=$this->zona_model->getZona($zona);
                            $data2  = array(                   
                                'idUsuarioAcciones' => $idUsuario,
                                'numSilla' => $numSilla,
                                'idZona' => $idZon,
                                'idCliente'=>$id,
                            );                
                            $this->silla_model->registroSilla($data2);
                            $this->db->trans_commit();
                            echo '<script>
                            alert("Registro de Silla exitosa");
                            </script>';
                            redirect('usuario_per/test', 'refresh');

                            // redirect(base_url()."index.php/usuario_per/test");	
                        }  
                    
                    else{
                        // $this->test();
                        echo '<script>
                            alert("Error de Registro");
                            </script>'; 
                                redirect('usuario_per/test', 'refresh');
                    }
                }
                    catch (Exception $ex) {
                        $this->db->trans_rollback();
                        echo '<script>
                        alert("Se detecto una falla en el proceso, vuelva a intentarlo profavor");
                        </script>';
                        redirect('usuario_per/test','refresh');
                    }
                

        }
        else {
            //esto hayq modificar para q no se registre al msima silla
            $this->db->trans_rollback();
            echo '<script>
            alert("Silla ya Registrada");
            </script>';
            redirect('usuario_per/test','refresh');
        }
         //para al transaccion
      
           

            
     
		
	}


        


    
    
}