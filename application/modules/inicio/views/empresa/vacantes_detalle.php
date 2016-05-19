<?php $this->load->view('layout/datos_perfil'); ?>

    <section class="container" id="historial-cuenta">
        <?php $this->load->view('../layout/filtros_empresa'); ?>
        <article class="col-md-10">
            <div class="row text-justify info">
                <h3>Mis Postulantes - <span><?php echo $post['postu_titulo'] ?></span></h3>
            </div>

            <div class="row historial">
                <?php //var_dump($emp); die(); ?>
                <?php if(!empty($emp)): ?>
                    <div class="col-md-12 bg">
                        <div class="row lst_empleos">
                            <table class="highlight" data-page-size="6">
                                <thead>
                                    <tr>
                                        <td>Imagen</td>
                                        <td>Dato personales</td>
                                        <td>Correo</td>
                                        <td>Edad</td>
                                        <td>Acciones</td>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php foreach ($emp as $vaca) : ?>
                                            <tr class="boder">
                                                <td>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 bordered_pad" data-type="empleo">
                                                        <div class="info pull-left">
                                                            <img src="<?php echo $BASE_URL ?>uploads/usuario/<?php echo $vaca->usu_imagen_perfil ?>" style="width: 112px;">
                                                            <?php if(!empty($vaca->usu_cv)): ?>
                                                                <a href="<?php echo $BASE_URL ?>uploads/usuario/<?php echo $vaca->usu_cv ?>" target='_blank'>
                                                                    <i class='glyphicon glyphicon-save-file' style='font-size: 32px;padding: 10px;'></i>cv
                                                                </a>
                                                            <?php endif ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 bordered_pad" data-type="empleo">
                                                        <div class="info pull-left">
                                                            <h3><?php echo $vaca->usu_nombre." ".$vaca->usu_apellidos ?></h3>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 bordered_pad" data-type="empleo">
                                                        <div class="info pull-left">
                                                            <?php echo $vaca->usu_correo ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 bordered_pad" data-type="empleo">
                                                        <div class="info pull-left">
                                                            <?php echo date('Y') - $vaca->usu_fecha_nacimiento ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- <div class="col-md-2">
                                                        <a href="" title="">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="" title="">
                                                            <i class="glyphicon glyphicon-erase"></i>
                                                        </a>
                                                    </div> -->

                                                    <div class="col-md-2">
                                                        <a href="" title="">
                                                            <i class="glyphicon glyphicon-eye-open"></i>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-md-2">
                                                        <a href="" title="">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php else: ?>
                    <h1> No existen postulaciones creadas</h1>
                    <div style="padding: 120px"></div>
                <?php endif ?>
            </div>
        </article>
    </section>

    <style type="text/css" media="screen">
        table thead tr td{
            padding: 20px !important;
        }

        .boder{
            border-bottom: 1px solid rgba(124, 124, 124, 0.3);
            padding: 15px;
        }
    </style>