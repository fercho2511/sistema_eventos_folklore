<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_per extends CI_Controller {


	public function index()
	{
        $lista=$this->usuarioper_model->lista();
        $data['usuario']=$lista; 

		$this->load->view('inc_inicio.php');
		$this->load->view('usuario/lista_usuario',$data);
		$this->load->view('inc_fin.php');

	}
    public function test()
	{
        //  $id = $this->input->get("mesa");
        // if ($id >=1) {
        //     $data['arrSilla'] = $this->silla_model->get_cantidad($id); 
        //     alert("llego el dato") ;      
        // }
        $lista=$this->usuarioper_model->lista();
        $data['usuario']=$lista; 

        $data['arrZona'] = $this->zona_model->get_zona();   
        // $data['arrSilla'] = $this->silla_model->get_cantidad(); 


		$this->load->view('inc_inicio.php');
        // $this->load->view('inc_menu2.php');
		$this->load->view('usuario/administrador/usuario_vista',$data);
		$this->load->view('inc_fin.php');

	}
    public function test5( )
	{
        // $mesa=$_POST['numero'];
        // // $num = $_GET['mesa'];   
        // $this->silla_model->get_cantidad($mesa); 
        // // $data['precio']= $this->silla_model->get_precio($continente);

        $this->silla_model->get_cantidad2(); 

        //  if ($this->input->is_ajax_request()) {
        //       $buscar = $this->input->post("numero");
        //      $datos= $this->silla_model->get_cantidad($buscar); 
        //      echo json_encode($datos);
        //      # code...
        //  }
        //  else {
        //      show_404();
        //  }



	}


    //aca para verificar lso datos

    //crear funcion par amostrar
    function mostrar(){
        $movInt = $_POST['movInt'];
        alert($movInt);
        $sql="SELECT id,silla FROM mapa where estado = 1  and mesa ='$movInt'"; 
        $result=$mysqli->query($sql);
        $options="";
        while ($row=$result->fetch_array(MYSQLI_ASSOC)) { 
            $options.="<option value=\"$row[nombre]\">$row[id] $row[silla]</option>"; 

        }
        echo $options;

        // if ($this->input->is_ajax_request()) {
        //     // $buscar = $this->input->post("buscar");
        //     $data['arrSilla'] = $this->silla_model->get_cantidad($movInt); 
        //     echo json_encode($data);
        //     # code...
        // }
        // else {
        //     show_404();
        // }

    }
  

    // public function test3()
	// {

             
         
    
    //         // $this->load->view('inc_inicio.php');
    //         // $this->load->view('inc_menu2.php');
    //         $this->load->view('usuario/vista.php');
    //         // $this->load->view('inc_fin.php');
        
     
      

	// }


    public function test2()
	{
     
        //$query=$_GET['mesa'];
        $data['arrMesa']= "";
        $data['mesa']= "";
        $data['precio']= "";


        $mesa =$this->input->get('mesa', TRUE);
        // echo $mesa;
        if ($mesa) {
            //$result = $this->silla_model->get_cantidad($query); 
            
                $data['arrMesa']=$this->silla_model->get_cantidad($mesa);
                $data['mesa']=$mesa;
                $data['precio']= $this->silla_model->get_precio($mesa);

             
               
            
        }
      
        
       // $lista=$this->usuarioper_model->lista();
        //$data['usuario']=$lista; 

        //$data['arrZona'] = $this->zona_model->get_zona();        

		$this->load->view('inc_inicio.php');
        // $this->load->view('inc_menu2.php');
		$this->load->view('usuario/usuario_vista2',$data);
		$this->load->view('inc_fin.php');

	}



    function formUser (){
        $this->load->view('inc_inicio.php');
         $this->load->view('inc_menu2.php');
		$this->load->view('venta/formulario');
		$this->load->view('inc_fin.php');

    }

 


       public function modificar($idUsuario)
    {
        // $idUsuario=$idUsuario;
        $data['infousuario']=$this->usuarioper_model->obtenerUsuario($idUsuario);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/modificar_usuario',$data);
		$this->load->view('inc_fin.php');
    }

    public function modificar2()
    {
        $idUsuario = $this->session->flashdata('idUsuario');

        // $idUsuario=$_POST['idUsuario'];
        $data['infousuario']=$this->usuarioper_model->obtenerUsuario($idUsuario);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('usuario/modificar_usuario',$data);
		$this->load->view('inc_fin.php');
    }


    public function modificarUsu()
    {
       

        $idUsuario=$_POST['idUsuario'];
        $data['nombres']=$_POST['nombres'];
        $data['apellidoPaterno']=$_POST['apellidoPaterno'];
        $data['apellidoMaterno']=$_POST['apellidoMaterno'];
        $data['fechaNacimiento']=$_POST['fechaNacimiento'];
        $data['sexo']=$_POST['sexo'];
        $data['ci']=$_POST['ci'];
        $data['telefono']=$_POST['telefono'];
        $data['direccion']=$_POST['direccion'];
        // $data['correo']=$_POST['correo'];
        $rol=$_POST['rol'];
       
                switch ($rol) {
                   case 'Administrador':
                       $data['idRol']='2';
                       break;
                   case 'Profesor':
                       $data['idRol']='3';    
                       break;
                    case 'Estudiante':
                       $data['idRol']='4';        
                        break; 
               }
        $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];      

       // $data['fechaModificacion']=$_POST['CURRENT_TIMESTAMP'];
       // $data['estado']=$_POST['estado'];

        $this->usuarioper_model->modificarUsuario($idUsuario,$data);

        redirect('usuario_per/test','refresh');
    }

    public function modificarUsu2()
    {
        $idUsuario=$this->session->flashdata('idUsuario');


        $idUsuario=$_POST['idUsuario'];
        $data['profesor']=$this->usuarioper_model->obtenerUsuario($idUsuario);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/form_profesor',$data);
		$this->load->view('inc_fin.php');

       
    }
    public function modificarLoguin()
    {
       
        $idUsuario=$_POST['idUsuario'];
        $data['login']=$_POST['login'];
        $data['password']=md5($_POST['password']);
      

        $this->usuarioper_model->modificarUsuario($idUsuario,$data);

        redirect('estudiante/estudiante/test','refresh');
    }




    public function listaUsuario(){
        $lista=$this->usuarioper_model->lista();
        $data['usu']=$lista; //otro array asociativo
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/administrador/usuario_list',$data);
		$this->load->view('inc_fin.php');



    }
   
    public function modificarLoguinAdmin()
    {
        try {           
        
       
            $data['password']=md5($_POST['password']);
            $idUsuario=$_POST['idUsuario'];        
            $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];
            $cod=md5($_POST['password']);
            if ($this->usuarioper_model->existencia($cod)) {

                echo '<script>
                alert("Password ya Registrado");
                </script>'; 
                $this->session->set_flashdata('idUsuario', $idUsuario);
                redirect('usuario_per/modificar2','refresh');
            }
            else{
                
                $this->usuarioper_model->modificarUsuario($idUsuario,$data);
                echo '<script>
                alert("Modificacion Satisfactoria");
                </script>';

                redirect('usuario_per/test','refresh');
            }

            
        } catch (\Throwable $th) {
            echo '<script>
                alert("Password ya Registrado");
                </script>'; 
                    redirect('usuario_per/test', 'refresh');
        }      

       
       

    }
    

    

    
      public function agregar()
    {
        // $this->load->library(array('form_validation'));
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/addUsuario'); 
		$this->load->view('inc_fin.php');

    }

 

    //agregar el usuario desde admin 
     public function addUsuario()
     {       
          $this->load->library(array('form_validation'));

                $this->load->helper('form');
                $data['nombres']=$_POST['nombres'];
                $data['apellido1']=$_POST['apellido1'];
                $data['apellido2']=$_POST['apellido2'];
                // $data['sexo']=$_POST['sexo'];
                $data['telefono']=$_POST['telefono'];
                $data['ci']=$_POST['ci'];
                $data['correo']=$_POST['correo'];
                // $data['fechaNacimiento']=$_POST['fechaNacimiento'];
                //provando loguin
                $nom=$_POST['nombres'];
                $ap=$_POST['apellido1'];
                $am=$_POST['apellido2'];
                $ci=$_POST['ci'];
                
                 $data['idUsuario_Acciones'] =$this->session->userdata('idusuario');
                $rol=$_POST['rol'];
       
                switch ($rol) {                  
                   case 'Admin':
                       $data['idRol']='2';    
                       break;
                    case 'User':
                       $data['idRol']='3';        
                        break; 
               }
        

        // aver aca haciendo pruebas de validation de

            $config=array(
                array(
                    'field'=>'ci',
                    'label' =>'carnet',
                    'rules' =>'is_unique[usuario.ci]',
                    // 'errors'=> array(
                    //         'is_unique' =>'El %s. ya se encuentra registrado',
                    // ),

                ),
            );
            $this->form_validation->set_rules($config);

            if ($this->form_validation->run()==FALSE) {
                # code...
                // $data=$config;
                echo '<script>
                alert("CI YA REGISTRADO");
                </script>'; 
                //  redirect($_SERVER['HTTP_REFERER']);

                    redirect('usuario_per/agregar','refresh');

                // $data=$config;
                // redirect('usuario_per/agregar',$data);
            }
            else {
                // $this->load->view('formsuccess');
                $data['login']=$this->usuarioper_model->crearLoguin($nom,$ap,$am,$ci); 
                $data['password']=md5($this->usuarioper_model->crearLoguin($nom,$ap,$am,$ci)); 
                $this->usuarioper_model->agregarUsuario($data); 
                echo '<script>
                alert("Registro Satisfactorio");
                </script>';
                redirect('usuario_per/listaUsuario','refresh');
       
            }





     }
    
     public function ValidarCI(){

        $data['ci']=$_POST['ci'];
        $ci=$_POST['ci'];
        $val=$this->usuarioper_model->validarCarnet($ci); 
        $data='1';
        $data2='2'; 

         if ($val == 'null') {
            return $data;
         }
         else {
             return $data2;


         }
/*

         $valor = $this->input->post('ci');
         $resultado = $this->usuarioper_model->validarCarnet($valor);
         if($resultado) {
            echo 1;
         } else { 
            echo 0;
         }*/
     }



    
     public function  eliminarUsu()
     {
        $idUsuario=$_POST['idUsuario'];  
        $this->usuarioper_model->eliminarUsuario($idUsuario); 

        redirect('usuario_per/test','refresh');

     }

     public function habillitarUsu($idUsuario){
         $idUsuario_Acciones=$this->session->userdata('idusuario');
        $this->usuarioper_model->HabilUsuario($idUsuario,$idUsuario_Acciones);
       // $this->usuarioper_model->HabilUsuario($idUsuario);

        redirect('usuario_per/listaUsuario','refresh');
     }

    public function desabilitarUsu($idUsuario){
        // $idUsuario_Acciones=$_POST['idUsuario_Acciones'];
       // $this->usuarioper_model->bajaUsuario($idUsuario,$idUsuario_Acciones);
        $this->usuarioper_model->bajaUsuario($idUsuario);

        redirect('usuario_per/listaUsuario','refresh');
    }


    public function gestionar(){

        $idUsuario=$_POST['idUsuario'];
        $data['infousuario']=$this->usuarioper_model->obtenerUsuario($idUsuario);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
        $this->load->view('usuario/form_usuario',$data);
        $this->load->view('inc_fin.php');



    }

    public function gestionar_usu2(){

        $idUsuario=$_POST['idUsuario'];
        $data['infousuario']=$this->usuarioper_model->obtenerUsuario($idUsuario);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
        $this->load->view('usuario/form_usuario',$data);
        $this->load->view('inc_fin.php');


    }


    public function notas(){
        // $idUsuario=$_POST['idUsuario'];
         $data['habilitado']=$this->usuarioper_model->habilitado();
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
        $this->load->view('usuario/notas',$data);
        $this->load->view('inc_fin.php');

    }

    public function Habilitar(){
        
        $data['estado_nota_1_bimestre']=1;
        $data['estado_nota_2_bimestre']=1;;
        $data['estado_nota_3_bimestre']=1;;

        $this->usuarioper_model->habilitarBim($data);
        redirect('usuario_per/notas','refresh');

    }

    public function Desabilitar(){
        $data['estado_nota_1_bimestre']=0;
        $data['estado_nota_2_bimestre']=0;;
        $data['estado_nota_3_bimestre']=0;;
        $this->usuarioper_model->desabilitarBim($data);
        redirect('usuario_per/notas','refresh');


    }



} 
