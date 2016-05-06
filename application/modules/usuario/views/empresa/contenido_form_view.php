<section id="content_wrapper">

    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="<?php echo base_url() ?>">Dashboard</a>
                </li>
                <li class="crumb-icon">
                    <a href="<?php echo base_url() ?>">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                </li>
                <li class="crumb-link">
                    <a href="<?php echo base_url().'usuario/dashboard' ?>">Usuario</a>
                </li>
                <li class="crumb-trail"><?php echo $form['usu_id'] == '' ? 'add' : 'edit' ?></li>
            </ol>
        </div>
    </header>
    <!-- End: Topbar -->

    <!-- Begin: Content -->
    <section id="content" class="table-layout">

        <!-- begin: .tray-center -->
        <div class="tray tray-center pv40 ph30 va-t posr animated-delay animated-long" data-animate='["500","fadeIn"]'>
            <div class="mw1100 center-block">

                <?php
            $correcto = $this->session->flashdata('message');
            switch ($correcto) {
                case 'error_u':
                    $texto = "Usuario ingresado ya existe";
                    break;
                case 'error_nro':
                    $texto = "Numero de documento ingresado ya existe";
                    break;
                case 'error':
                    $texto = "Ocurrio un error intentelo nuevamente";
                    break;
                case 'delete':
                    $texto = "Se ha <strong>ELIMINADO</strong> correctamente";
                    break;
            }
        ?>
        <?php if($correcto === 'error' || $correcto === 'error_u'): ?>
            <!-- Mensaje Error -->
            <div class="alert alert-block alert-danger fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <?php echo $texto ?>
            </div>
        <?php endif ?>

        <?php if($correcto === 'error_nro'): ?>
            <!-- Mensaje Error -->
            <div class="alert alert-block alert-warning fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <?php echo $texto ?>
            </div>
        <?php endif ?>

        <?php if($correcto === 'update' || $correcto === 'insert' || $correcto === 'delete' ): ?>
            <!-- Mensaje correcto -->
            <div class="alert alert-success fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <?php echo $texto ?>
            </div>
        <?php endif ?>

                <!-- begin: .admin-form -->
                <div class="admin-form">

                    <div id="p1" class="panel heading-border">

                        <div class="panel-body bg-light">
                            <?php echo form_open_multipart('usuario/dashboard/cu_create_usuario','class="form-ui" id="formulario_user"');?>
                                <div class="section-divider mb40" id="spy1">
                                    <span>Datos Generales</span>
                                </div>
                                <!-- Generales -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Nombre:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['nombre']); ?>
                                                    <?php echo form_hidden('idu', $form['usu_id']);?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Apellido Paterno:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['appaterno']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Documento:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field select">
                                                    <?php
                                                        echo form_dropdown('tipodoc',$tipodoc,$form['tipodoc'],'required="required" id="tipodoc"');
                                                    ?>
                                                    <i class="arrow"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Nº:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['ndoc']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                <div class="section-divider mb40" id="spy1">
                                    <span>Accesos</span>
                                </div>

                                <!-- Accesos -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Usuario:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['user']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Contraseña:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_password($form['pass']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Rol:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field select">
                                                    <?php
                                                        echo form_dropdown('perfil',$roles,$form['roles'],'required="required"');
                                                    ?>
                                                    <i class="arrow"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row mt20 text-center bn10">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-xs-2">
                                        <button type="submit" class="btn active btn-primary btn-block">
                                            <?php echo $form['usu_id'] == '' ? 'GUARDAR' : 'ACTUALIZAR' ?>
                                        </button>
                                    </div>
                                </div>
                                
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
                <!-- end: .admin-form -->

            </div>
        </div>
        <!-- end: .tray-center -->

    </section>
    <!-- End: Content -->

</section>

<script type="text/javascript">
$(document).on('ready',function(){

    $("#formulario_user").validate({
        rules: {
            ndoc:{
                maxlength:(function () {
                    if($('#tipodoc').val() == 1){
                        return 8;
                    }else if($('#tipodoc').val() == 2){
                        return 11;
                    // }else if($('#tipodoc').val() >= 3){
                    //     return 50;
                    } else {
                        return 0;
                    }
                })
            },
            nombre:{
                letras_espacios: true,
            },
            appaterno:{
                letras_espacios: true,
            },
            apmaterno:{
                letras_espacios: true,
            },
            pass:{
                minlength : 6
            },
            user:{
                minlength : 6
            }
        },
        messages:{
            nombre:{
                required : 'Campo requerido',
                letras_espacios: "No se permiten numeros"
            },
            appaterno:{
                required : 'Campo requerido',
                letras_espacios: "No se permiten numeros"
            },
            apmaterno:{
                required : 'Campo requerido',
                letras_espacios: "No se permiten numeros"
            },
            ndoc:{
                required : 'Campo requerido',
                maxlength: "Ha supera el maximo de caracteres validos {0}"
                // remote   : 'Este DNI ya ha sido registrado'
            },
            user:{
                required : 'Campo requerido',
                minlength : 'Ingresar minimo 6 caracteres'
            },
            pass:{
                minlength : 'Ingresar minimo 6 caracteres'
            },
            tipodoc:{
                required : 'Campo requerido'
            },
            perfil:{
                required : 'Campo requerido'
            }
            // user: {
            //     remote:'El nombre de usuario ya está en uso!'
            // }
        }
    });

});

</script>