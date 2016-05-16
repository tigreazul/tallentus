<div class="container-fluid" id="info-micuenta">
        <div class="container info-head">
            <div class="col-md-2">
                <?php 
                    $imagen = $datos['emp_logo'];
                    echo "<img src='".$BASE_URL."uploads/empresa/".$imagen."' class='img-responsive img-center img-circle' style='width:100%;height: 18%;'>";
                ?>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <div class="datos">
                            <h2><?php echo $datos['emp_nombre'] ?></h2>
                            <p>
                                <i><img src="<?php echo $frontend ?>assets/img/map-marker.svg" class="img-small"></i>Lima, Perú
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-10 col-md-offset-2 btn-datos">
                <!-- <a href="#" class="btn grey lighten-4">Editar datos</a> -->
                <a href="<?php echo base_url() ?>empresa/crear-aviso" class="btn grey lighten-4 send-msg">Crear Aviso</a>
                <a href="<?php echo base_url() ?>empresa/mis-vacantes" class="btn grey lighten-4 ent">Mis Vacantes</a>
                <!-- 
                <a href="#" class="btn light-blue darken-3 fb"><i><img src="<?php echo $frontend ?>assets/img/facebook_user.svg" class="img-small"></i>Facebook</a>
                <a href="#" class="btn light-blue accent-1 in"><i><img src="<?php echo $frontend ?>assets/img/LinkedIn_user.svg" class="img-small"></i>Likendin</a>
                <a href="#" class="share">Recomendar</a> 
                -->
            </div>
        </div>
    </div>

    <section class="container" id="historial-cuenta">
        <article class="col-md-12">
            <div class="row text-justify info">
                <h3>Mis Vacantes</h3>
            </div>

            <div class="row historial">
                <div class="col-md-12 bg">
                    <div class="row lst_empleos">
                        <table class="highlight" data-page-size="6">
                            <thead>
                                <tr>
                                    <td>Aviso</td>
                                    <td>Caduca el</td>
                                    <td>Inscritos</td>
                                    <td>Status</td>
                                    <td>Acciones</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php // var_dump($postu); ?>
                                <?php foreach ($postu as $vaca) : ?>
                                    <tr class="boder">
                                        <td>
                                            <div class="col-lg-12 col-md-12 col-sm-12 bordered_pad" data-type="empleo">
                                                <div class="info pull-left">
                                                    <h3><?php echo $vaca['titulo'] ?></h3>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-lg-12 col-md-12 col-sm-12 bordered_pad" data-type="empleo">
                                                <div class="info pull-left">
                                                    <?php echo $vaca['caduca'] ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-lg-12 col-md-12 col-sm-12 bordered_pad" data-type="empleo">
                                                <div class="info pull-left">
                                                    <a href="" title="">
                                                    <?php echo $vaca['total'] ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-lg-12 col-md-12 col-sm-12 bordered_pad" data-type="empleo">
                                                <div class="info pull-left">
                                                    Activo
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-md-2">
                                                <a href="" title="">
                                                    <i class="glyphicon glyphicon-print"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="" title="">
                                                    <i class="glyphicon glyphicon-erase"></i>
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