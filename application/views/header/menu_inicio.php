<!DOCTYPE html>



<script>
  // if (condition) {
  //   fullcalendar
  // }
  $cache_expire = session_cache_expire();
  if ($cache_expire>=300) {
    $.ajax({
        url:"<?php echo base_url(); ?>usuario/logout",
        type:"POST",
        
        success:function()
        {
            alert("Session terminada");
                    }
});
alert('hola');

  }

</script>
<!-- 
<?php
if ($this->sess_expiration >=300)
{
print('hola');
}
?> -->




<html lang="">
<head>
<title><?php echo $this->session->userdata('nombreEvento')?> </title>
<meta charset="utf-8">
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
-->

<link rel="icon" href="<?php echo base_url ();?>adminLTE/login/images/foto.jpg">

  	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminLTE/dist/loguin/vendor/bootstrap/css/bootstrap.min.css">


	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
		#mensaje{
			border:#eaeaea 1px solid;
			color: white;
		}
	</style>


<meta https-equiv="X-UA-Compatible" content="IE=edge">

<link href="<?php echo base_url();?>nocobot/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<link href="<?php echo base_url(); ?>starbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>starbootstrap/css/sb-admin-2.min.css" rel="stylesheet">


    <link href="<?php echo base_url();?>nocobot/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/estilo.css"> -->


<!-- de adminLTE -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/dist/css/adminlte.min.css">

      <!-- para el datepiker -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/plugins/fontawesome-free/css/all.min.css">
      <!-- daterange picker -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/plugins/daterangepicker/daterangepicker.css">
      <!-- iCheck for checkboxes and radio inputs -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- Bootstrap Color Picker -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
      <!-- Tempusdominus Bootstrap 4 -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- Select2 -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/plugins/select2/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
      <!-- Bootstrap4 Duallistbox -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminLTE//plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
      <!-- BS Stepper -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/plugins/bs-stepper/css/bs-stepper.min.css">
      <!-- dropzonejs -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/plugins/dropzone/min/dropzone.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>adminLTE/dist/css/estilo.css">

     <!-- <style>
      svg{
            width: 100%;
            height: 100%;
            border: 1px solid black;
        }
        rect{
          
        }
        #seat-1{
        fill: red;
        }
     </style> -->



</head>
<body id="page-top">
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <!-- <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
        <li><i class="far fa-envelope rgtspace-5"></i> info@domain.com</li>
      </ul> -->
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><?php echo $this->session->userdata('nombres')?></li>
        <li><a href="<?php echo base_url();?>index.php/usuario/logout" title="Cerrar session"><i class="fas fa-power-off"></i></a></li>


        <!-- <li id="searchform">
          <div>
            <form action="#" method="post">
              <fieldset>
                <legend>Quick Search:</legend>
                <input type="text" placeholder="Enter search term&hellip;">
                <button type="submit"><i class="fas fa-search"></i></button>
              </fieldset>
            </form>
          </div>
        </li> -->
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->


<?php
$valor = $this->session->userdata('evento');
$valor2=($valor-1);
//print ($valor2);

?>




    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

  


<body id="page-top">
<div class="wrapper row0">


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('<?php echo base_url();?>nocobot/images/demo/backgrounds/fonde3.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <!-- ################################################################################################ -->
        <!-- en esta linea se coloca el nomrbe del evento -->
        <h1><a href="index.html">Evento <?php echo $this->session->userdata('nombreEvento')?></a></h1>
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="clear">
          <!-- <li class="active"><a href="<?php echo base_url();?>index.php/usuario/index">INICIO</a></li> -->
          <li class="active"><a href="<?php echo base_url();?>index.php/evento/evento<?php echo $valor2;?>">MAPA</a></li>
          <li class="active"><a href="<?php echo base_url();?>index.php/evento/reporte">REPORTES</a></li>


          <!-- <li><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="<?php echo base_url();?>nocobot/pages/gallery.html">Gallery</a></li>
              <li><a href="<?php echo base_url();?>nocobot/pages/full-width.html">Full Width</a></li>
              <li><a href="<?php echo base_url();?>nocobot/pages/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="<?php echo base_url();?>nocobot/pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="<?php echo base_url();?>nocobot/pages/basic-grid.html">Basic Grid</a></li>
              <li><a href="<?php echo base_url();?>nocobot/pages/font-icons.html">Font Icons</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Dropdown</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li> -->
        </ul>
        <!-- ################################################################################################ -->
      </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="overlay">