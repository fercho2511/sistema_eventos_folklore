
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Usuario
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
                        <a href="<?php echo base_url();?>index.php/usuario_per/agregar" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Usuario</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-18">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>C.I.</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>  
                                    <th>Rol</th>  
                                    <th>Estado</th>  

                                    <th>Login</th>                                 
                                    <th>Password</th> 
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <?php
                                    $indice=1;
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($usu-> result() as $usu) {
                        ?>
                            <tbody>
                               
                                        <tr>
                                            <td><?php echo $indice;?></td>
                                            <td><?php echo $usu->nombres;?></td>
                                            <td>
                                                <?php echo $usu->apellido1;?>
                                                <?php echo $usu->apellido2;?>
                                            </td>
                                            <td><?php echo $usu->ci;?></td>
                                            <td><?php echo $usu->telefono;?></td>
                                            <td><?php echo $usu->correo;?></td>
                                            <td>
                                                    <?php
                                                    if ($usu->idRol ==1){
                                                        echo 'Administrador';
                                                    }
                                                    else{
                                                        if ($usu->idRol ==2){
                                                            echo 'Admin';
                                                        }
                                                        else{ 
                                                                echo 'User';
                                                        }
                                                    }
                                                    ?>
                                            </td>
                                            <td>
                                                    <?php
                                                    if ($usu->estado ==1){
                                                        echo 'Habilitado';
                                                    }
                                                    else{
                                                            echo 'Desabilitado';
                                                    }
                                                    ?>

                                            </td>


                                                
                                            <td><?php echo $usu->login;?></td>
                                            <td><?php echo $usu->password;?></td>

                                            <!-- <?php $datacliente = $cliente->idCliente."*".$cliente->nombres."*".$cliente->apellidos."*".$cliente->ci."*".$cliente->telefono."*".$cliente->correo;?> -->
                                            <td>
                                                <div class="btn-group">
                                               
                   

                                                    <a title="Editar" href="<?php echo base_url();?>index.php/usuario_per/modificar/<?php echo $usu->idUsuario;?>" class="btn btn-outline-dark"><span class="fas fa-user-edit"></span></a>
                                                    <a title="Habilitar/Desabilitar" href="<?php echo base_url();?>index.php/usuario_per/habillitarUsu/<?php echo $usu->idUsuario;?>" class="btn btn-outline-dark"><span class="fas fa-user-check"></span></a>


                                                    <a title="Eliminar" href="<?php echo base_url();?>index.php/usuario_per/desabilitarUsu/<?php echo $usu->idUsuario;?>" class="btn btn-outline-danger "><span class="fas fa-trash-alt"></span></a>
                                                
                                                    
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


    <!-- otar section -->
    
    <!-- asta aca provar esta seccion -->
</div>
<!-- /.content-wrapper -->


<!-- /.modal -->
