




     <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span><b>Desarrolado by &copy; FSL </b> 2022</span>
                        <b>Version</b> 1.0
                    </div>
                </div>
    </footer>


            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Abandonar la sesion?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Salir" si desea abandonar la sesion</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>


                    <?php
                                    echo form_open_multipart('usuario/logout');
                                    ?>
                                  <button type="submit" class="btn btn-primary" >SALIR</button>

                                  <!-- <a class="btn btn-primary" >Logout</a> -->
                                    </a>
                                    <?php
                                        echo form_close();
                                    ?>

                </div>
            </div>
        </div>
    </div>


    <!-- modal para registrar zona y silla -->
    <div class="modal fade" id="logoutModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
        <?php
                                    echo form_open_multipart('zona_pre/crearZona');
                                    ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CREAR ZONA</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="numMesa" name="zona" 
                                            placeholder="ZONA">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="zona" name="precio" 
                                            placeholder="PRECIO">
                                    </div>
                                </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>


                    <?php
                                    echo form_open_multipart('zona_pre/crearZona');
                                    ?>

                                  <button type="submit" class="btn btn-outline-primary" >REGISTRAR</button>

                                  <!-- <a class="btn btn-primary" >Logout</a> -->
                                    </a>
                                    

                </div>
            </div>
            <?php
                                        echo form_close();
                                    ?>
        </div>
    </div>
    <!-- asta aca modal para zona -->


    <!-- modal para editar zona -->
    <!-- modal para registrar zona y silla -->
    <div class="modal fade" id="logoutModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
        <?php
                                    echo form_open_multipart('zona_pre/crearZona');
                                    ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">MODIFICAR ZONA</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                
                         <tbody>
                <div class="form-group row">

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="numMesa" name="zona" 
                                            placeholder="ZONA" value="<?php echo $datazona?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="zona" name="precio" value="<?php echo $dataprecio?>"
                                            placeholder="PRECIO">
                                    </div>
                                </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>


                    <?php
                                    echo form_open_multipart('zona_pre/crearZona');
                                    ?>

                                  <button type="submit" class="btn btn-outline-primary" >MODIFICAR</button>

                                  <!-- <a class="btn btn-primary" >Logout</a> -->
                                    </a>
                                    

                </div>
            </div>
            <?php
                                        echo form_close();
                                    ?>
        </div>
    </div>
    <!-- asta aca modal para zona -->


    <!-- ventana modal para crear evento -->
    <div class="modal fade" id="logoutModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
        <?php
                                    echo form_open_multipart('zona_pre/crearZona');
                                    ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REGISTRAR EVENTO</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="numMesa" name="zona" 
                                            placeholder="ZONA">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="zona" name="precio" 
                                            placeholder="PRECIO">
                                    </div>
                                </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>


                    <?php
                                    echo form_open_multipart('zona_pre/crearZona');
                                    ?>

                                  <button type="submit" class="btn btn-outline-primary" >REGISTRAR</button>

                                  <!-- <a class="btn btn-primary" >Logout</a> -->
                                    </a>
                                    

                </div>
            </div>
            <?php
                                        echo form_close();
                                    ?>
        </div>
    </div>
    <!-- hasta aca se crea el evento -->


    <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
                </button> -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">VENTA</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                                <button type="button" class="btn btn-primary">GUARDAR CAMBIOS</button>
                            </div>
                            </div>
                        </div>
                </div>




    <!-- asta aca modal para editar zona -->


    <!--  desde aca se realizara la venrtana modal pra la venta o reserva  -->
    <div class="modal fade" id="logoutModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" >
                <div class="modal-header" margin= "30px">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar venta/reserva</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="chart-pie pt-10 pb-4" >

                
                
                   <form action="<?php echo base_url();?>index.php/silla/registrarSilla" method="POST">
                    
                        <div class="chart-pie pt-16 pb-8">
                        <!-- <input type="text" name="silla" value=" silla 1"> -->

                            

                                <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                                        <div class="form-group row">
                                            <div class="col-sm-2 ">
                                            <label for="nombre">Mesa: <input type="text" class="form-control form-control-user" id="numMesa" name="numSilla" value="1"
                                                    placeholder="mesa"></label>
                                                
                                            </div>
                                            <div class="col-sm-2">
                                            <label for="nombre">Zona: <input type="number" class="form-control form-control-user" id="zona" name="zona" value="2"
                                                    placeholder="zona"></label>

                                                
                                            </div>
                                        </div>


                                        <div class="form-group ">

                                            <input type="text" class="form-control form-control-user" id="nombre" name="nombres"
                                                placeholder="Nombre">

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="apellido" name="apellidos"
                                                placeholder="Apellido">
                                        </div>
                                            
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" id="ci" name="ci"
                                                    placeholder="C.I.">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control form-control-user" id="telefono" name="telefono"
                                                    placeholder="Telefono">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="correo" name="correo"
                                                placeholder="Correo">
                                        </div>

                            
                                            
                            <div class="modal-footer">
                                <button class="btn btn-outline-dark" type="button" data-dismiss="modal">Cancel</button>


                        
                                        <button type="submit" class="btn btn-outline-primary" >VENTA</button>
                                        <button type="submit" class="btn btn-outline-primary" >RESERVA</button>


                                        <!-- <a class="btn btn-primary" >Logout</a> -->
                                            </a>
                                        

                            </div>
                        </div>
                </form>
                </div>

        </div>
    </div>
    <!-- end modal windows -->

    <!-- aca provando otro modal -->
    
    <!-- asta esta la prueba -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>starbootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>starbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>starbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>starbootstrap/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>starbootstrap/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>starbootstrap/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url(); ?>starbootstrap/js/demo/chart-pie-demo.js"></script>
    <script src="<?php echo base_url(); ?>starbootstrap/js/validar/formulario_usuario.js"></script>

    <!-- este escrip es para capturar el valor y mostrar en un modal -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- asta aca -->

        <!-- scrip para enviar la posicion de la mesa a la ventaana -->
    <!-- <script src="<?php echo base_url(); ?>starbootstrap/js/consulta_sillas.js"></script> -->
    <script src="<?php echo base_url();?>starbootstrap/js/sillas.js"></script>
    

</body>

</html>