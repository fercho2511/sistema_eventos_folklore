<?php
echo '<div class="card shadow mb-10">
                            <form action="<?php echo base_url();?>index.php/silla/registrarSilla" method="POST">

                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Registro</h6>

                                </div>
                                <!-- Card Body -->


                                <div class="card-body">

                                    <!-- desde aca se pondra la posicion de las sillas -->

                                    <div class="form-group row">
                                        <div id="output" class="col-sm-5 mb-3 mb-sm-0">
                                            <label for="" class="m-0 font-weight-bold text-info">Mesa:
                                            <input type="text" value ="" class="form-control form-control-user" id="numSilla" name="numSilla" require
                                                placeholder="Mesa"> </label>                                               
                                        </div>
                                        <div class="form-group">
                                                 <label for="" class="m-0 font-weight-bold text-info">Cant. Sillas:
                                                <select class="form-control" name="jcity" id="jcity" class="form-control input-lg">
                                                    <option value="">Seleccionar cantidad</option>                                                    
                                                </select>
                                        </div>
                                        <div class="col-sm-6">
                                                <label class="m-0 font-weight-bold text-info" for="">Precio: </label>
                                                <input type="number" readonly class="form-control form-control-user" id="telefono" name="telefono" require 
                                                 placeholder="Bs.-">
                                        </div>
                                    </div>

                                        <div class="col-sm-12">
                                        <label class="m-0 font-weight-bold text-info" for="">Precio Total:
                                            <input type="text" class="form-control form-control-user" id="precio" name="precioTotal" readonly require
                                                placeholder="Bs.-"> </label>

                                        </div>
                                    <!-- asta esta posicion  -->
                                    <div class="chart-pie pt-4 pb-2">
                                    <label class="m-0 font-weight-bold text-info" for="">Datos del Cliente:</label>

                                        <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nombres" name="nombres" require minlength="3"  maxlength="30"    pattern='[A-Za-z]{3,25}'
                                        placeholder="Nombre">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="apellido" name="apellidos" require minlength="3"  maxlength="30"    pattern='[A-Za-z]{3,25}'
                                            placeholder="Apellido">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="ci" name="ci" require  minlength="4"  maxlength="12" is_unique:[usuario.ci]
                                                placeholder="C.I.">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control form-control-user" id="telefono" name="telefono" require min="1"  pattern='^[0-9]+'   minlength="7"  maxlength="8"
                                                placeholder="Telefono">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="correo" name="correo"
                                            placeholder="Correo">
                                    </div>




                                <hr>

                                     </form>

                                    </div>
                                    <div class="m-0 font-weight-bold text-info" class="form-group" aling="center">
                                            <?php
                                            echo date("Y-m-d H:i:s");
                                            ?>
                                    </div>
                                    <div class="mt-2 text-center small">
                                        <!-- <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span> -->

                                        <button type="submit" class="btn btn-outline-primary" >VENTA</button>
                                        <button type="submit" class="btn btn-outline-primary" >RESERVA</button>
                                    </div>
                                </div>
                            </div>
                        </div>'
                        ?>