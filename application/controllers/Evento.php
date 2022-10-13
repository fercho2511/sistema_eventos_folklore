<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {


	public function evento1()
	{
        $evento=$this->session->userdata('evento');

         $data['arrMesa']= "";
         $data['mesa']= "";
         $data['precio']= "";
         $data['sillas']= $this->silla_model->get_sillas($evento);
         $data['clientes']=$this->silla_model->get_clientes($evento);

 
 
         $mesa =$this->input->get('mesa', TRUE);
      
         if ($mesa) {
             //$result = $this->silla_model->get_cantidad($query); 
             
                 $data['arrMesa']=$this->silla_model->get_cantidad($mesa,$evento);
                 $data['mesa']=$mesa;
                 $data['precio']= $this->silla_model->get_precio($mesa,$evento);
                 //$data['sillas']=$this->silla_model->get_sillas();
 
              
                
             
         }
       
         
        // $lista=$this->usuarioper_model->lista();
         //$data['usuario']=$lista; 
 
         //$data['arrZona'] = $this->zona_model->get_zona();        
 
         $this->load->view('header/menu_inicio.php');
         //$this->load->view('inc_menu3.php');
         //  $this->load->view('inc_menu4.php');
         // $this->load->view('inc_menu.php');

         $this->load->view('evento/evento1',$data);
         $this->load->view('inc_fin2.php');

	}

    public function evento2()
	{
        $evento=$this->session->userdata('evento');
        ;
         $data['arrMesa']= "";
         $data['mesa']= "";
         $data['precio']= "";
         $data['sillas']= $this->silla_model->get_sillas($evento);

 
 
         $mesa =$this->input->get('mesa', TRUE);
      
         if ($mesa) {
             //$result = $this->silla_model->get_cantidad($query); 
             
                 $data['arrMesa']=$this->silla_model->get_cantidad($mesa,$evento);
                 $data['mesa']=$mesa;
                 $data['precio']= $this->silla_model->get_precio($mesa,$evento);
                 //$data['sillas']=$this->silla_model->get_sillas();
 
              
                
             
         }
       
         
        // $lista=$this->usuarioper_model->lista();
         //$data['usuario']=$lista; 
 
         //$data['arrZona'] = $this->zona_model->get_zona();        
 
         $this->load->view('header/menu_inicio.php');
         //$this->load->view('inc_menu3.php');
         //  $this->load->view('inc_menu4.php');
         // $this->load->view('inc_menu.php');

         $this->load->view('evento/evento2',$data);
         $this->load->view('inc_fin2.php');

	}
    public function evento3()
	{
        $evento=$this->session->userdata('evento');
        ;
         $data['arrMesa']= "";
         $data['mesa']= "";
         $data['precio']= "200";
         $data['sillas']= $this->silla_model->get_sillas($evento);

 
 
         $mesa =$this->input->get('mesa', TRUE);
      
         if ($mesa) {
             //$result = $this->silla_model->get_cantidad($query); 
             
                 $data['arrMesa']=$this->silla_model->get_cantidad($mesa,$evento);
                 $data['mesa']=$mesa;
                 $data['precio']= $this->silla_model->get_precio($mesa,$evento);
                 //$data['sillas']=$this->silla_model->get_sillas();
 
              
                
             
         }
       
         
        // $lista=$this->usuarioper_model->lista();
         //$data['usuario']=$lista; 
 
         //$data['arrZona'] = $this->zona_model->get_zona();        
 
         $this->load->view('header/menu_inicio.php');
         //$this->load->view('inc_menu3.php');
         //  $this->load->view('inc_menu4.php');
         // $this->load->view('inc_menu.php');

         $this->load->view('evento/evento3',$data);
         $this->load->view('inc_fin2.php');

	}



    function formUser (){
        $evento=$this->session->userdata('evento');


        $accion = $_GET['accion'] ?? '';
         $m=$_GET['numSilla'];
         if ($m == 'general') {
            $mesa=46;
         }else {
            $mesa = $_GET['numSilla'];
         }

        // $data['cantidad']=$_POST['silla'];
        // $data['precio']=$_POST['precioTotal'];
        // Buscar qué botón fue el que se usó para enviar el formulario
        if($accion == 'vender') {
            // Inicializar y ejecutar controlador correspondiente
            
            $this->load->view('header/menu_inicio.php');
            // $this->load->view('inc_menu4.php');
             $this->load->view('venta/formulario2');
             $this->load->view('inc_fin2.php');
        } elseif($accion == 'reservar') {
            // Inicializar y ejecutar controlador correspondiente
            $this->load->view('header/menu_inicio.php');
            // $this->load->view('inc_menu4.php');
             $this->load->view('venta/formularioReserva');
             $this->load->view('inc_fin2.php');
        }  elseif($accion == 'ventaReserva') {
            // Inicializar y ejecutar controlador correspondiente
            $data['reservas']=$this->evento_model->verReservas($mesa,$evento);
            $this->load->view('header/menu_inicio.php');
            // $this->load->view('inc_menu4.php');
             $this->load->view('venta/formularioVentaReserva2',$data,$mesa);
             $this->load->view('inc_fin2.php');
        } 
     
        
        //$this->load->view('inc_inicio.php');
       
       

    }


    function reporte(){

        
        $evento=$this->session->userdata('evento');

        $data['mesas']= $this->evento_model->mesas($evento);
        $data['venta']= $this->evento_model->vendedor($evento);
        $data['compra']= $this->evento_model->comprador($evento); 
        $data['reporte']= $this->evento_model->reporteFantasma($evento); 
        $data['titulo']="";
        
        $opcion =$this->input->get('filtro', TRUE);

      
      
               switch ($opcion) {
                  case '1':
                        $desde =$this->input->get('desde', TRUE);
                        $hasta =$this->input->get('hasta', TRUE);
                      $data['reporte']=$this->evento_model->reporteFechas($desde,$hasta,$evento);
                      $data['titulo']="Reporte desde fecha ".$desde." hasta fecha ".$hasta;
                      break;
                  case '2':
                       $mesa =$this->input->get('mesa', TRUE);
                      $data['reporte']=$this->evento_model->reporteMesa($mesa,$evento);   
                      $data['titulo']="Reporte de la mesa ".$mesa ;

                      break;
                   case '3':
                         $comprador =$this->input->get('comprador', TRUE);
                      $data['reporte']=$this->evento_model->reporteComprador($comprador,$evento); 
                      $data['titulo']="Reporte de comprador ".$comprador;
      
                       break; 
                   case '4':
                        $vendedor =$this->input->get('vendedor', TRUE);
                       $data['reporte']=$this->evento_model->reporteVendedor($vendedor,$evento);  
                       $data['titulo']="Reporte del Vendedor ".$vendedor;
      
                       break; 
                   case '5':
                       $data['reporte']=$this->evento_model->reporteGeneral($evento);      
                       $data['titulo']="Reporte General ";
  
                        break; 
              }
       $this->load->view('header/menu_inicio.php');

        //$this->load->view('inc_menu3.php');
       // $this->load->view('inc_menu4.php');
        $this->load->view('evento/reporte',$data);
        $this->load->view('inc_fin2.php');

    }


    function crearEvento(){

        $data['arrEvento']=$this->evento_model->crearEvento();
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
        $this->load->view('usuario/administrador/evento',$data);
        $this->load->view('inc_fin.php');
    }



    function confirmarReserva(){

        $mesa=$_POST['mesa'];
        $evento=$_POST['evento'];
        $usuarioAccion=$_POST['idUsuario_Acciones'];
        $cantidad=$_POST['cantidadSillas'];
        $idCliente=$_POST['idCliente'];
        try {
            $this->venta_model->ActualizarVenta($idCliente,$mesa,$usuarioAccion,$evento);

      
            echo '<script>
            alert("Venta de Silla actualizada");
            </script>';
            redirect('evento/evento3', 'refresh');
        } catch (Exception $ex) {
            echo '<script>
            alert("Error, vuelva a intentar");
            </script>';
            redirect('evento/evento3', 'refresh');
        }
   

      
      


    }


    function eliminarReserva(){
        $mesa=$_POST['mesa'];
        $evento=$_POST['evento'];
        $usuarioAccion=$_POST['idUsuario_Acciones'];
        $cantidad=$_POST['cantidadSillas'];
        $idCliente=$_POST['idCliente'];
        try {
            $this->venta_model->eliminarReserva($idCliente,$mesa,$usuarioAccion,$evento);

      
            echo '<script>
            alert("Reserva eliminada");
            </script>';
            redirect('evento/evento3', 'refresh');
        } catch (Exception $ex) {
            echo '<script>
            alert("Error, vuelva a intentar");
            </script>';
            redirect('evento/evento3', 'refresh');
        }

    }


} 
