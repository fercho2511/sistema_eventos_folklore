

         <div class="row">

<!-- Area Chart -->
<div class="col-xl-2 ">
    <div class="card shadow mb-2">
        <!-- Card Header - Dropdown -->
        
            
                       

                                    <a class="btn btn-primary btn-flat" href="#" data-toggle="modal" data-target="#logoutModal2">
                                    <i class="fa fa-plus"></i>
                                    Crear Evento
                                    </a>

                                    <!-- <div class="col-md-12">
                                        <a href="<?php echo base_url();?>index.php/cliente/addCliente" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Clientes</a>
                                    </div> -->
            
           
       
 

        <!-- asta este punto perteence la imagen del mapa -->
    </div>
</div>


<!-- Content Row -->
<div class="row">

<!-- Content Column -->
<div class="col-lg-6 mb-4">


<div class="col-lg-6 mb-4">

 

</div>
</div>

</div>
<!-- /.container-fluid -->

</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Eventos Registrados</h6>
                           
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>N°</th>
                                            <th>Evento</th>
                                            <th>Lugar</th>
                                            <th>Fecha del Evento</th>
                                            <th>Estado</th>

                                            <th>Acciones</th>
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>N°</th>
                                            <th>Evento</th>
                                            <th>Lugar</th>
                                            <th>Fecha del Evento</th>
                                            <th>Estado</th>

                                            <th>Acciones</th>

                                           
                                        </tr>
                                    </tfoot>

<?php
                                    $indice=1;
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($arrEvento-> result() as $row) {
                        ?>
                         <tbody>
                                            <tr>
                                                <td><?php echo $indice;?></td>

                                                <td><?php echo $row->evento;?></td> 
                                                <td><?php echo $row->lugar;?></td>
                                                <td><?php echo $row->fechaEvento;?></td>
                                                <td><?php echo $row->estado;?></td>

                                              

                                                 <td>
                                                <div class="btn-group btn-group-justified" >                                               

                                                         </button> 
                                                        <a class="btn btn-outline-dark" href="#" data-toggle="modal" data-target="#logoutModal4" title="Modificar">
                                                        <span class="fas fa-user-edit"></span>
                                                        <input type="hidden" name="idZona" value="<?php $id;?>">
                                                        </a> 

                                                        </button> 
                                                        <a class="btn btn-outline-dark" href="#" data-toggle="modal" data-target="#logoutModal3" title="Modificar">
                                                        <span class="fas fa-user-edit"></span>
                                                        <input type="hidden" name="idZona" value="<?php $id;?>">
                                                        </a>                                                   
                                                        <!-- probando -->
                                                    

                                                        <?php
                                                            echo form_open_multipart('zona_pre/eliminarZona')
                                                        ?>
                                                        <input type="hidden" name="idZona" value="<?php echo $row->id;?>">
                                                        <button type="submit" class="btn btn-outline-danger " title="Eliminar" >
                                                        <span class="fas fa-trash-alt"></span>

                                                        </button>
                                                        <?php
                                                            echo form_close();
                                                        ?>

                                                </div>
                                                </td> 
                                            </tr>
                                            </tbody>
                                            <?php
                                            $indice++;
                                        }
                                        ?> 


                                   
                                        
                                       
                                        
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>