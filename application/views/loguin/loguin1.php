<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
	  <link rel="icon" href="<?php echo base_url ();?>adminLTE/login/images/foto.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminLTE/dist/loguin/vendor/bootstrap/css/bootstrap.min.css">


	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/login/css/style.css">
	<style>
		#mensaje{
			border:#eaeaea 1px solid;
			color: white;
		}
	</style>

	</head>
	<body class="img js-fullheight" style="background-image: url(<?php echo base_url(); ?>adminLTE/login/images/bg.jpg);">

    
    
	<section class="ftco-section">
   
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section">Bienvenido!</h1>
					<h2 class="heading-section">Sistema de Eventos</h2>
					<br>
						<!--  <div id="mensaje" >
								<div  backgrouncolor="blue">
									<?php
									switch ($msg) {
									case '1':
										$mensaje= "CUENTA O USUARIO NO VALIDO";
										break;
										case '2':
										$mensaje= "ACCESO NO VALIDO";
										break;
										case '3':
											$mensaje= "GRACIAS POR USAR EL SISTEMA";
											break;
									default:
										$mensaje ="INGRESE SUS DATOS";
										break;
									}
									?>   
									
								</div> 
								<div   >
									<?php
									echo $mensaje;
									?>
								</div>

					</div>-->
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<!-- <h3 class="mb-4 text-center">Have an account?</h3> -->

                  <?php
                    echo form_open_multipart('usuario/validarUsuario');
                    ?>

		      	<form action="#" class="signin-form">
		      		<div class="form-group">
		      			<input id="login" name="login" type="text" class="form-control" placeholder="Usuario" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
                
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Ingresar</button>
	            </div>
	            <!-- <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div> -->
	          </form>
                <?php
                    echo form_close();
                    ?>
	          <!-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p> -->
	          <!-- <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div> -->
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url(); ?>adminLTE/login/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>adminLTE/login/js/popper.js"></script>
  <script src="<?php echo base_url(); ?>adminLTE/login/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>adminLTE/login/js/main.js"></script>

	</body>
</html>

