
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Cliente
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>


                        <form action="<?php echo base_url();?>index.php/cliente/guardar" method="POST" class="formulario" id="quickForm">
                            <div class="form-group <?php echo form_error("nombre") != false ? 'has-error':'';?>">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" required placeholder="Ingrese Nombre" minlength="3"  maxlength="30"    pattern='[A-Za-z]{3,25}'  >
                                <!-- <?php echo form_error("nombre","<span class='help-block'>","</span>");?> -->
                            </div>
                            <div class="form-group <?php echo form_error("nombre") != false ? 'has-error':'';?>">
                                <label for="nombre">Apellido:</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" required placeholder="Ingrese Apellidos" minlength="3"  maxlength="30"    pattern='[A-Za-z]{3,25}' >
                                <!-- <?php echo form_error("nombre","<span class='help-block'>","</span>");?> -->
                            </div>
                         
                            <div class="form-group <?php echo form_error("numero") != false ? 'has-error':'';?>">
                                <label for="numero">C.I.:</label>
                                <input type="text" class="form-control" id="ci" name="ci" required placeholder="Ingrese C.I." minlength="4"  maxlength="12" is_unique:[usuario.ci]  >
                                <!-- <?php echo form_error("numero","<span class='help-block'>","</span>");?> -->
                            </div>
                            
                            <div class="form-group">
                                <label for="telefono">Telefono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required placeholder="Ingrese Telefono"  min="1"  pattern='^[0-9]+'   minlength="7"  maxlength="8" >
                            </div>
                            <div class="form-group">
                                <label for="direccion">Correo:</label>
                                <input type="text" class="form-control" id="correo" name="correo"  placeholder="Ingrese Correo"  >
                            </div>
                            
                            <div class="form-group">
                            <button class="btn btn-primary btn-flat" type="button" onclick="history.back()" name="volver atrás" title="Cancelar" > Cancelar</span> </button>

                                <button type="submit" class="btn btn-primary btn-flat">Guardar</button>
                            </div>
                        </form>
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
