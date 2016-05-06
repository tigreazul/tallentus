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
                    <a href="<?php echo base_url().'usuario/rol' ?>">Roles</a>
                </li>
                <li class="crumb-trail"><?php echo $form['id_rol'] == '' ? 'add' : 'edit' ?></li>
            </ol>
        </div>
    </header>
    <!-- End: Topbar -->

    <!-- Begin: Content -->
    <section id="content" class="table-layout">

        <!-- begin: .tray-center -->
        <div class="tray tray-center pv40 ph30 va-t posr animated-delay animated-long" data-animate='["800","fadeIn"]'>
            <div class="mw1100 center-block">

                <!-- begin: .admin-form -->
                <div class="admin-form">

                    <div id="p1" class="panel heading-border">

                        <div class="panel-body bg-light">
                            <?php echo form_open_multipart('usuario/rol/cu_create_rol','class="form-ui"');?>
                                <div class="section-divider mb40" id="spy1">
                                    <span>Datos Generales</span>
                                </div>
                                <!-- Generales -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="for_label">
                                                <label class="field">
                                                    Descripción: 
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="section">
                                                <label class="field">
                                                    <?php echo form_input($form['nombre']); ?>
                                                    <?php echo form_hidden('idu', $form['id_rol']);?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row mt20 text-center bn10">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-xs-2">
                                        <button type="submit" class="btn active btn-primary btn-block">
                                            <?php echo $form['id_rol'] == '' ? 'GUARDAR' : 'ACTUALIZAR' ?>
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