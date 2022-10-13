<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cantidad_sillas extends CI_Controller {


    // public function __construct(){
    //     parent::__construct();
    //     $this->load->model('cantidad_silla_model');
    // }
    
   
    
    public function get_mesa(){
    
         if ($this->input->is_ajax_request()) {

           // $buscar = $this->input->post("mesa");
            $datos= $this->cantidad_silla_model->get_cantidad($buscar);
             # code.
             echo $datos;
         }
         else{
             show_404();
         }
        
         
        //  $options = "";
        //  if ($this->input->post('id_country')!='') {
        //      $id_country = $this->input->post('id_country');
        //      echo json_encode($cities_res = $this->cantidad_silla_model->get_cantidad($id_country));
        //     //  foreach ($cities_res as $fila) {
        //     //      ?>
        //     //      <option value="<?php echo $fila->id ?>"><?php echo $silla ?></option>
        //     //      <?php
        //     //  }
        //  }



        

            
    }

	


}
