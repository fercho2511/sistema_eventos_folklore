<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta extends CI_Controller {

function registrarVenta (){


    $nombres = $this->input->post("nombres");
    $apellidos = $this->input->post("apellidos");
    $ci = $this->input->post("ci");
    $correo = $this->input->post("correo");
    $telefono = $this->input->post("telefono");
    $numSilla = $this->input->post("numSilla");

    $mesa= $this->input->post("mesa");
    $cantidad = $this->input->post("cantidad");
    $idUsuario=$this->session->userdata('idusuario');
    $precioTotal = $this->input->post('precio');

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
                    $this->cliente_model->crearCliente($data);
                    $id= $this->db->insert_id();

                    if ($id>0) {
                    //    $idZon=$this->zona_model->getZona($zona);
                        // $data2  = array(
                        //     'idUsuarioAcciones' => $idUsuario,
                        //     'mesa' => $mesa,
                        //     //'idZona' => $idZon,
                        //     'idCliente'=>$id,
                        // );
                        //aca se procedera a realizar el update en cada silla
                        
                           for ($i=0; $i < $cantidad ; $i++) { 
                            $this->venta_model->registrarVenta($id,$mesa,$idUsuario);

                           }

                          
                        

                        $this->db->trans_commit();
                        echo '<script>
                        alert("Registro de Silla exitosa");
                        </script>';
                        redirect('usuario_per/test2', 'refresh');

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
function registrarReserva (){


    $nombres = $this->input->post("nombres");
    $apellidos = $this->input->post("apellidos");
    $ci = $this->input->post("ci");
    $correo = $this->input->post("correo");
    $telefono = $this->input->post("telefono");
    $numSilla = $this->input->post("numSilla");
    $mes =$this->input->post("mesa");
    // if ($mes =="general") {
    //     $mesa = 46;
    // }else {
    //     $mesa= $this->input->post("mesa");

    // }
    $mesa= $this->input->post("mesa");

    $cantidad = $this->input->post("cantidad");
    $idUsuario=$this->session->userdata('idusuario');
    $evento=$this->session->userdata('evento');

    $precioTotal = $this->input->post('precio');

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
                    $this->cliente_model->crearCliente($data);
                    $id= $this->db->insert_id();

                    if ($id>0) {
                    //    $idZon=$this->zona_model->getZona($zona);
                                $verificar = $this->silla_model->verificarSilla($mesa,$evento);
                                if ($cantidad <= (int)$verificar) {
                                    for ($i=0; $i < $cantidad ; $i++) { 
                                        $this->venta_model->registrarReserva($id,$mesa,$idUsuario,$evento);

                                    }

                                    
                                    

                                    $this->db->trans_commit();
                                    echo '<script>
                                    alert("Reserva de Silla exitosa");
                                    </script>';
                                    redirect('evento/evento3', 'refresh');
                                }
                                else {
                                    $this->db->trans_rollback();
                                    echo '<script>
                                    alert("Sobreventa de silla, vuelva a intentarlo profavor");
                                    </script>';
                                    redirect('evento/evento3','refresh');
                                }

                    }

                else{
                    // $this->test();
                    echo '<script>
                        alert("Error de Registro");
                        </script>';
                            redirect('evento/evento3', 'refresh');
                }
            }
                catch (Exception $ex) {
                    $this->db->trans_rollback();
                    echo '<script>
                    alert("Se detecto una falla en el proceso, vuelva a intentarlo profavor");
                    </script>';
                    redirect('evento/evento3','refresh');
                }


    }
    else {
        //esto hayq modificar para q no se registre al msima silla
        $this->db->trans_rollback();
        echo '<script>
        alert("Silla ya Registrada");
        </script>';
        redirect('evento/evento3','refresh');
    }
     //para al transaccion

}



function registrarVenta2 (){


    $nombres = $this->input->post("nombres");
    $apellidos = $this->input->post("apellidos");
    $ci = $this->input->post("ci");
    $correo = $this->input->post("correo");
    $telefono = $this->input->post("telefono");
    $numSilla = $this->input->post("numSilla");
    $mes =$this->input->post("mesa");
    // if ($mes =="general") {
    //     $mesa = 46;
    // }else {
    //     $mesa= $this->input->post("mesa");

    // }
    $mesa= $this->input->post("mesa");

    $conteo = $_POST['cantidad'];
    $idUsuario=$this->session->userdata('idusuario');
    $evento=$this->session->userdata('evento');

    $precioTotal = $this->input->post('precio');

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
                    $this->cliente_model->crearCliente($data);
                    $id= $this->db->insert_id();

                    if ($id>0) {

                        $numero = $this->silla_model->verificarSilla($mesa,$evento);
                       print($numero);
                        
                    
                        if ($conteo <=  (int)$numero ) {
                            for ($i=0; $i < $conteo ; $i++) { 
                                $this->venta_model->registrarVenta($id,$mesa,$idUsuario,$evento);
    
                               }
    
                              
                            
    
                            $this->db->trans_commit();
                            echo '<script>
                            alert("Registro de Silla exitosa");
                            </script>';
                            redirect('evento/evento3', 'refresh');
                        }
                        else {
                            $this->db->trans_rollback();
                            echo '<script>
                            alert("Sobreventa de silla, vuelva a intentarlo profavor");
                            </script>';
                            redirect('evento/evento3','refresh');
                        }
               
                        
                          

                        // redirect(base_url()."index.php/usuario_per/test");
                    }

                else{
                    // $this->test();
                    echo '<script>
                        alert("Error de Registro");
                        </script>';
                            redirect('evento/evento3', 'refresh');
                }
            }
                catch (Exception $ex) {
                    $this->db->trans_rollback();
                    echo '<script>
                    alert("Se detecto una falla en el proceso, vuelva a intentarlo profavor");
                    </script>';
                    redirect('evento/evento3','refresh');
                }


    }
    else {
        //esto hayq modificar para q no se registre al msima silla
        $this->db->trans_rollback();
        echo '<script>
        alert("Silla ya Registrada");
        </script>';
        redirect('evento/evento3','refresh');
    }
     //para al transaccion

}




}
