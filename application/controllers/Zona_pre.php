
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zona_pre extends CI_Controller {

    public function zona()
	{
     
		$lista=$this->zona_model->lista();
        $data['zona']=$lista;  
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('zona/zona_precio',$data);
		$this->load->view('inc_fin.php');

	}
	public function zona2()
	{
     
		$lista=$this->zona_model->lista();
        $data['zona']=$lista;  
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('zona/zona',$data);
		$this->load->view('inc_fin.php');

	}

	


	public function eliminarZona()
	{
	 $idZona=$_POST['idZona'];  // llega el id desde el campo hiden del formulario
        /*guardamos en una variable y lo mandamos al modelo para su posterior eliminacion
         invocamos directo al metodo del modelo*/
        $this->zona_model->eliminar($idZona); // aca se envia el metodo del modelo 

        //despues iremso a la lista redireccionando o dandole un refresh
        redirect('zona_pre/zona','refresh');
	}


	public function crearZona(){

		$data['zona']=$_POST['zona'];
		$data['precio']=$_POST['precio'];
		$this->zona_model->crearZon($data);
		redirect('zona_pre/zona','refresh');

	}


	public function modificarZona(){

		
        // $idZona=$_POST['idZona'];
        // $data['zona']=$_POST['zona'];
        // $data['precio']=$_POST['precio'];		
        // $data['descripcion']=$_POST['descripcion'];
        // // $data['idUsuario_Acciones']=$_POST['idUsuario_Acciones'];


        // //ahora la consula
        // $this->zona_model->modificarZona($idUsuario,$data);
        // //esta linea ya realiza la actualizacion

		// redirect('zona_pre/zona','refresh');
	}

	

        

       

    
    
}