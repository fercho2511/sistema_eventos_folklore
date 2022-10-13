
<?php
$mesa = $_GET['numSilla'];
$cantidadSillas=$_GET['silla'];
$precio=$_GET['precioTotal']
?>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FORMULARIO </h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-info  ">
              <div class="card-header">
                <h3 class="card-title">Registrar Venta</h3>
              </div>
             
              <!-- <form  id="quickForm"> -->
                                  <?php echo validation_errors(); ?>
                              <!-- <form action="<?php echo base_url(); ?>index.php/usuario_per/agregarUsu" class="formulario" id="formulario"> -->

                                  <div class="card-body"  >
                                     <!-- <form id="quickForm" >  -->
                                     <?php
                                             //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                                            echo form_open_multipart('venta/registrarVenta')
                                         ?>

                                         

                                            <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                                            <div class="form-group">
                                                <label class="form-label">Mesa</label>
                                                <input type="text" class="form-control col-sm-6" name='mesa' id="mesa"  readonly
                                                                                   value="<?php echo $mesa;?>">
<br>
                                                 <label class="form-label">Cantidad de Sillas</label>
                                                <input type="text" class="form-control col-sm-6" name='cantidad' id="cantidad"  readonly
                                                                                   value="<?php echo $cantidadSillas;?>">
                                                <br>
                                                 <label class="form-label">Precio total en Bs.-</label>
                                                <input type="text" class="form-control col-sm-6" name='precio' id="precio"  readonly
                                                                                   value="<?php echo $precio;?>">

                                                                                   
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Nombre</label>
                                                <input type="text" class="form-control col-sm-6" name='nombres' id="nombres"  placeholder="Ingrese Nombre" 
                                                                                    title="" required minlength="3"  maxlength="30"    pattern='[A-Za-z]{3,25}' value="<?php echo set_value('nombres');?>">
                                            </div>
                                            <div class="form-group"  >
                                                <label class="form-label">Apellido</label>
                                                <input type="text" class="form-control col-sm-6" name='apellidos' id='apellidos'  placeholder="Ingrese Apellido"
                                                required minlength="3"  maxlength="30"    pattern='[A-Za-z]{3,25}' >
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="form-label">Apellido Materno</label>
                                                <input type="text" class="form-control col-sm-6" name='apellidoMaterno' id='apellidoMaterno'  placeholder="Ingrese Apellido Materno" minlength="3"  maxlength="30"    pattern='[A-Za-z]{3,25}'  >
                                            </div> -->
                                            <!-- <div class="form-group">
                                                <label class="form-label">Fecha Nacimiento</label>
                                                <input type="date" class="form-control col-sm-4" name='fechaNacimiento' id='fechaNacimiento'  placeholder="Ingrese Fecha Nacimiento" required >
                                            </div>
                                            <div class="form-group" >
                                              <label for="">sexo:</label>
                                              <select class="form-control col-sm-3" name="sexo" id="sexo" required>
                                                <option>M</option>
                                                <option>F</option>                                               
                                              </select>
                                            </div> -->

                                            <!-- para el mensaje de alerta -->
                                            <!-- <div type="hidden" class="alert alert-danger" id="msg-error" >
                                                <div class="list-errors" > 
                                                </div>
                                            </div> -->
                                            <!-- asta aca el mensaje -->

                                            <div class="form-group">
                                                <label class="form-label">C.I.</label>
                                                <input type="text" class="form-control col-sm-6" name='ci'  id="ci" placeholder="Ingrese C.I." required   minlength="4"  maxlength="12" is_unique:[usuario.ci] >
                                                <!-- required onblur="compruebaValidoEntero()" -->
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Telefono</label>
                                                <input type="number" class="form-control col-sm-6" name='telefono' id='telefono'  placeholder="Ingrese telefono"  min="1"  pattern='^[0-9]+'   minlength="7"  maxlength="8"  required >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Correo</label>
                                                <input type="text" class="form-control" name='correo'  placeholder="Ingrese Correo Electronico" >
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="form-label">Direccion</label>
                                                <input type="text" class="form-control" name='direccion' id="direccion"   placeholder="Ingrese Direccion" >
                                            </div> -->
                                            
                                            

                                            <!-- <div class="form-group">
                                              <label for="">Rol:</label>
                                              <select class="form-control col-sm-6" name="rol" id="rol">
                                                <option>Profesor</option>
                                                <option>Estudiante</option>
                                                <option>Administrador</option>
                                               
                                              </select>
                                            </div> -->

                                            <div class="card-footer">
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
                                          
                                                
                                              <!-- </form>     -->
                                    
                                    </div>
                                    <!-- /.card-body -->
                                  

                               
                   <!-- </form>  -->
            </div>
           
        <!-- /.row -->
      </div><!-- /.container-fluid -->


      <!-- <main>
		<form action="" class="formulario" id="formulario">
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Usuario</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="john123">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="John Doe">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password" id="password">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
			</div>

			<div class="formulario__grupo" id="grupo__password2">
				<label for="password2" class="formulario__label">Repetir Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password2" id="password2">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
			</div>

			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>

			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label">Teléfono</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="4491234567">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>

			<div class="formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
					Acepto los Terminos y Condiciones
				</label>
			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
	</main> -->

    </section>
    <br><br>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  



</form>