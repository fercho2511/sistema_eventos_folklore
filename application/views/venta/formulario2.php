
<?php
$mesa = $_GET['numSilla'];
$cantidadSillas=$_GET['silla'];
$precio=$_GET['precioTotal']
?>



  <!-- /.content-wrapper -->


  <section class="ftco-section">
   
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section">Bienvenido!</h1>
					<h2 class="heading-section">Registra tus datos para la compra de tu entrada</h2>
					<br>
			
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="login-wrap p-0">
		     <!-- <form  id="quickForm"> -->
             <?php echo validation_errors(); ?>
                              <!-- <form action="<?php echo base_url(); ?>index.php/usuario_per/agregarUsu" class="formulario" id="formulario"> -->

                                  <div class="card-body"  >
                                     <!-- <form id="quickForm" >  -->
                                     <?php
                                             //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                                            echo form_open_multipart('venta/registrarVenta2')
                                         ?>

                                        <div class="row" text-aling="center">
                                            <div class="col-xs-4" aling="center">
                                            <label class="form-label">Ubicacion:</label>
                                                <input type="text" class="form-control col-sm-10" name='mesa' id="mesa"  readonly
                                                                                   value="<?php echo $mesa;?>">
                                            </div>
                                            <div class="col-xs-4">
                                            <label class="form-label">Cantidad de Lugares:</label>
                                                <input type="text" class="form-control col-sm-4" name='cantidad' id="cantidad"  readonly
                                                                                   value="<?php echo $cantidadSillas;?> ">
                                            </div>
                                            
                                            <div class="col-xs-4">
                                            <label class="form-label">Precio total:</label>
                                                <input type="text" class="form-control col-sm-6" name='precio' id="precio"  readonly
                                                                                   value="<?php echo $precio;?> Bs.-">
                                            </div>
                                        </div>

<br>
                                  
                                            <div class="form-group">
                                                <label class="form-label">Nombre:</label>
                                                <input type="text" class="form-control col-sm-12" name='nombres' id="nombres"  placeholder="Ingrese Nombre" 
                                                                                    title="Ingrese nombre" required minlength="3"  maxlength="30"    pattern='[a-zA-Z ]{2,254}'  value="<?php echo set_value('nombres');?>">
                                            </div>
                                            <div class="form-group"  >
                                                <label class="form-label">Apellido:</label>
                                                <input type="text" class="form-control col-sm-12" name='apellidos' id='apellidos'  placeholder="Ingrese Apellido" title="Ingrese Apellidos"
                                                required minlength="3"  maxlength="30"    pattern='[a-zA-Z ]{2,254}'  >
                                            </div>                                       

                                            <div class="form-group">
                                                <label class="form-label">C.I.:</label>
                                                <input type="text" class="form-control col-sm-12" title="Ingrese Carnet de Identidad" name='ci'  id="ci" placeholder="Ingrese C.I." required   minlength="5"  maxlength="12" is_unique:[usuario.ci] >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Telefono:</label>
                                                <input type="text" class="form-control col-sm-12" title="Ingrese Telefono" name='telefono' id='telefono'  placeholder="Ingrese telefono"  min="1"  pattern='^[0-9]+'   minlength="7"  maxlength="8"   required >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Correo:</label>
                                                <input type="text" class="form-control" name='correo'  title="Ingrese Correo Electronico"placeholder="Ingrese Correo Electronico" >
                                            </div>
                              
       
                            
                                            <div justify-conten="center">
                                                <button class="btn btn-outline-info" type="submit" title="Registrar"  >
                                                <span class="fas fa-clipboard-check"> REGISTRAR VENTA</span>
                                                <!-- <span class="fas fa-clipboard-check"> REGISTRAR VENTA</span> -->

                                                </button>
                                                <button class="btn btn-outline-info" type="button" onclick="history.back()" name="volver atrás" title="Cancelar" >
                                                <span class="far fa-window-close"> CANCELAR</span>
                                              </button>

	        
                                              </div>
                                             <?php
                                                echo form_close();
                                            ?>
                                          
	        
		      </div>
				</div>
			</div>
		</div>
	</section>
  



</form>