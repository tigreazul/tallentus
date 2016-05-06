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
                    <a href="<?php echo base_url().'personal/clientes' ?>">Clientes</a>
                </li>
                <li class="crumb-trail"><?php echo $form['idCliente'] == '' ? 'add' : 'edit' ?></li>
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
                            <?php echo form_open_multipart('personal/clientes/cu_create_cliente','class="form-ui" id="formulario_user"');?>
                                <div class="section-divider mb40" id="spy1">
                                    <span>Datos Generales</span>
                                </div>

                                <!-- Tipo de documento -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="for_label">
                                            <label class="field">
                                                Tipo:
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="section">
                                            <label class="field select">
                                                <?php
                                                $opciones_ = array(
                                                    '' => 'SELECCIONE',
                                                    '1' => 'NATURAL',
                                                    '2' => 'JURIDICO',
                                                );
                                                $st_tipo = $form['tipopersona'] == '' ? '0': $form['tipopersona'];
                                                echo form_dropdown('tipopersona',$opciones_,$st_tipo,'class="form-control m-b required" id="tipopersona"'); ?>

                                                <?php
                                                    //echo form_dropdown('tipodoc',$tipodoc,$form['tipodoc'],'required="required" id="tipodoc"');
                                                ?>
                                                <i class="arrow"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Generales -->
                                    <div class="row natural">
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
                                                    <?php echo form_hidden('idu', $form['idCliente']);?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row natural">
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

                                    <div class="row natural">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Apellido Materno:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['apmaterno']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row natural">
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
                                    
                                    <div class="row natural">
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

                                    <div class="row natural">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Correo Personal:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['mailPerso']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row natural">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Correo Trabajo:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['mailJobs']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row natural">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Telefono Fijo:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['telFijo']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row natural">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Telefono Movil:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['celular']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row juridico">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Razon Social:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['razon_social']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row juridico">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Ruc:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['ruc']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row temp">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Dirección:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['direccion']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row juridico">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Nombre Contacto:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['nom_contact']); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row natural">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Departamento:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field select">
                                                    <?php
                                                        echo form_dropdown('departamento',$departamento,$form['departamento'],'required="required" id="departamento"');
                                                    ?>
                                                    <i class="arrow"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row natural">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Provincia:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field select">
                                                    <!-- <select name="provincia" required="required" id="provincia">
                                                        <option value="">SELECCIONE</option>
                                                    </select> -->
                                                    <?php
                                                        echo form_dropdown('provincia',$cbo_vacio,$form['provincia'],'required="required" id="provincia"');
                                                    ?>
                                                    <i class="arrow"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row natural">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Distrito:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field select">
                                                    <!-- <select name="distrito" required="required" id="distrito">
                                                        <option value="">SELECCIONE</option>
                                                    </select> -->
                                                    <?php
                                                        echo form_dropdown('distrito',$cbo_vacio,$form['distrito'],'required="required" id="distrito"');
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
                                            <?php echo $form['idCliente'] == '' ? 'GUARDAR' : 'ACTUALIZAR' ?>
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
    <?php if($form['ndoc']['value']): ?>
        // $("#ndoc").prop('disabled', true);
        $("#user").prop('disabled', true);
    <?php endif ?>



    $('#formulario_user').find('.temp').addClass('none');
    // $('#formulario_user').find('.natural').addClass('none');
    // $('#formulario_user').find('.juridico').addClass('none');
    $('#tipopersona').change(function(d){
        var e = $(this).val();
        if(e == 1){
            $('#formulario_user').find('.temp').removeClass('none');
            $('#formulario_user').find('.natural').removeClass('none');
            $('#formulario_user').find('.juridico').addClass('none');
        }else if(e ==2){
            $('#formulario_user').find('.temp').removeClass('none');
            $('#formulario_user').find('.juridico').removeClass('none');
            $('#formulario_user').find('.natural').addClass('none');
        }else if(e == 0){
            $('#formulario_user').find('.juridico').removeClass('none');
            $('#formulario_user').find('.natural').removeClass('none');

            $('#formulario_user').find('.juridico').addClass('none');
            $('#formulario_user').find('.temp').addClass('none');
            $('#formulario_user').find('.natural').addClass('none');
        }
    });

        var e = $('#tipopersona').val();
        if(e == 1){
            $('#formulario_user').find('.temp').removeClass('none');
            $('#formulario_user').find('.natural').removeClass('none');
            $('#formulario_user').find('.juridico').addClass('none');
        }else if(e ==2){
            $('#formulario_user').find('.temp').removeClass('none');
            $('#formulario_user').find('.juridico').removeClass('none');
            $('#formulario_user').find('.natural').addClass('none');
        }else if(e == 0){
            $('#formulario_user').find('.juridico').removeClass('none');
            $('#formulario_user').find('.natural').removeClass('none');

            $('#formulario_user').find('.juridico').addClass('none');
            $('#formulario_user').find('.temp').addClass('none');
            $('#formulario_user').find('.natural').addClass('none');
        }


    $("#formulario_user").validate({
        // rules: {
        //     user:{
        //         required : true,
        //         minlength: 6
        //     }
            // user: {
            //     "remote":
            //     {
            //         url: '<?php echo base_url() ?>usuario/dashboard/validateUser',
            //         type: 'post',
            //         data: {
            //             user: function () { return $('#user').val(); }
            //         },
            //         dataType: 'json'
            //     }
            // }
            // ndoc: {
            //     "remote":
            //     {
            //         url: '<?php echo base_url() ?>usuario/dashboard/validateDni',
            //         type: 'post',
            //         data: {
            //             ndoc: function () { 
            //                 // if()
            //                 return $('#ndoc').val(); }
            //         },
            //         dataType: 'json'
            //     }
            // }
        // },
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
                }),
                minlength:(function () {
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
            // nombre:{
            //     letras_espacios: true,
            // },
            // appaterno:{
            //     letras_espacios: true,
            // },
            // apmaterno:{
            //     letras_espacios: true,
            // },
            telFijo:{
                minlength : 7
            },
            celular:{
                minlength : 9
            },
            ruc:{
                maxlength : 11,
                minlength : 11
            }
        },
        messages:{
            mailPerso:{
                required : 'Campo requerido',
                email: 'Ingresar E-mail valido'
            },
            mailJobs:{
                required : 'Campo requerido',
                email: 'Ingresar E-mail valido'
            },
            nombre:{
                required : 'Campo requerido',
                // letras_espacios: "No se permiten numeros"
            },
            appaterno:{
                required : 'Campo requerido',
                // letras_espacios: "No se permiten numeros"
            },
            apmaterno:{
                required : 'Campo requerido',
                // letras_espacios: "No se permiten numeros"
            },
            ndoc:{
                required : 'Campo requerido',
                maxlength: "Ha supera el maximo de caracteres validos {0}",
                minlength: "Solo se premiten {0} caracteres validos"
                // remote   : 'Este DNI ya ha sido registrado'
            },
            celular:{
                required : 'Campo requerido',
                minlength : 'Ingresar minimo 9 caracteres'
            },
            telFijo:{
                required : 'Campo requerido',
                minlength : 'Ingresar minimo 7 caracteres'
            },
            tipodoc:{
                required : 'Campo requerido'
            },
            tipopersona:{
                required : 'Campo requerido'
            },
            razon_social:{
                required : 'Campo requerido'
            },
            ruc:{
                required : 'Campo requerido',
                maxlength: "Ha supera el maximo de caracteres validos {0}",
                minlength: "Solo se premiten {0} caracteres validos"
            },
            // user: {
            //     remote:'El nombre de usuario ya está en uso!'
            // }
        }
    });

});

</script>