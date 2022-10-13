
 <?php
 $mesa = $_GET['numSilla'];
 $cantidadSillas=$_GET['silla'];
 $precio=$_GET['precioTotal']
?> 



  <!-- /.content-wrapper -->


  <section >

		<div class="container" class="col-md-12">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section">Bienvenido!</h1>
					<h2 class="heading-section">Confirma tus datos para venta de cupos reservados</h2>
					<br>

				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="login-wrap p-0">
		     <!-- <form  id="quickForm"> -->
             <?php echo validation_errors(); ?>
                              <!-- <form action="<?php echo base_url(); ?>index.php/usuario_per/agregarUsu" class="formulario" id="formulario"> -->

                                  

<br>

<div class="col-md-12" >
            <div class="card">
                        <div class="card-header">
                            <h3 style="color: black;" class="card-title">Mesa : <?php echo $mesa;?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="color: black;">
                            <table id="example1" class="table table-bordered table-striped" >
                            <thead>
                            <tr>
                            <th>N°</th>
                                <th>Reservado a nombre de</th>
                                <th>C.I</th>
                                <th>Celular</th>
                                <th>Cantidad Sillas</th>
                                <th>Precio Unitario</th>
                                <th>Total a Pagar</th>
                                <th>Fecha Reserva</th>
                                <td>Acciones</td>
                                <!-- <th>Evento</th> -->

                            </tr>
                            </thead>



                            <tbody>
                                        <?php
                                    $indice=1;
                                    //invocaremos a [profesor] q pusimos en el array asociativo $data de profesor.php
                                    foreach ($reservas-> result() as $row) {
                                        ?>
                                                            <tr>
                                                <td><?php echo $indice;?></td>
                                                <td><?php echo $row->nombre;?></td>
                                                <td><?php echo $row->ci;?></td>
                                                <td><?php echo $row->telefono;?></td>
                                        
                                                <td><?php echo $row->cantidadSillas;?></td>
                                                <td><?php echo $row->precio;?> Bs.-</td>
                                                <td><?php echo $row->precio  * $row->cantidadSillas ;?> Bs.-</td>
                                                <td><?php echo $row->fechaventa;?></td>
                                                <td>
                                                <div class="btn-group btn-group-justified" >
                                                <?php
                                                        echo form_open_multipart('evento/confirmarReserva')
                                                    ?>
                                                    <input type="hidden" name="mesa" value="<?php echo $mesa;?>">
                                                    <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">
                                                    <input type="hidden" name="evento" value="<?php echo $this->session->userdata('evento');?>">
                                                    <input type="hidden" name="cantidadSillas" value="<?php echo $row->cantidadSillas;?>">
                                                    <input type="hidden" name="idCliente" value="<?php echo $row->idCliente;?>">

                                                    <button type="submit" class="btn btn-outline-dark" title="Confirmar Venta">
                                                    <span class="fas fa-clipboard-check"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                <?php
                                                        echo form_open_multipart('evento/eliminarReserva')
                                                    ?>
                                                    <input type="hidden" name="mesa" value="<?php echo $mesa;?>">
                                                    <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">
                                                    <input type="hidden" name="evento" value="<?php echo $this->session->userdata('evento');?>">
                                                    <input type="hidden" name="cantidadSillas" value="<?php echo $row->cantidadSillas;?>">
                                                    <input type="hidden" name="idCliente" value="<?php echo $row->idCliente;?>">

                                                    <button type="submit" class="btn btn-outline-danger" title="Eliminar Reserva" >
                                                    <span class="fas fa-trash-alt"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                </div>


                                                </td>






                                            </tr>
                        <?php
                        $indice++;
                    }
                    ?>
                                       

                            </tbody>
                            <tfoot>
                            <tr>
                            <th>N°</th>
                                <th>Reservado a nombre de</th>
                                <th>C.I</th>
                                <th>Celular</th>
                                <th>Cantidad Sillas</th>
                                <th>Precio Unitario</th>
                                <th>Total a Pagar</th>
                                <th>Fecha Reserva</th>
                                <td>Acciones</td>
                            </tr>
                            </tfoot>
                            </table>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
</div>



                                            <div justify-conten="center">
                                               
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
</div>