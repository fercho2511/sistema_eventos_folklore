
<!-- Content Wrapper. Contains page content -->

<!-- para el usuario user
 -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Clientes
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>index.php/cliente/addCliente2" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Clientes</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>C.I.</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>                                 
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <?php
                                    $indice=1;
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($cliente-> result() as $cliente) {
                        ?>
                            <tbody>
                               
                                        <tr>
                                            <td><?php echo $indice;?></td>
                                            <td><?php echo $cliente->nombres;?></td>
                                            <td><?php echo $cliente->apellidos;?></td>
                                            <td><?php echo $cliente->ci;?></td>
                                            <td><?php echo $cliente->telefono;?></td>
                                            <td><?php echo $cliente->correo;?></td>
                                            <!-- <?php $datacliente = $cliente->idCliente."*".$cliente->nombres."*".$cliente->apellidos."*".$cliente->ci."*".$cliente->telefono."*".$cliente->correo;?> -->
                                            <td>
                                                <div class="btn-group">
                                               
                   

                                                    <a title="Editar" href="<?php echo base_url();?>index.php/cliente/editarCliente2/<?php echo $cliente->idCliente;?>" class="btn btn-outline-dark"><span class="fas fa-user-edit"></span></a>
                                                    <a title="Eliminar" href="<?php echo base_url();?>index.php/cliente/deleteCliente2/<?php echo $cliente->idCliente;?>" class="btn btn-outline-danger "><span class="fas fa-trash-alt"></span></a>
                                                
                                                    
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
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de la Categoria</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
