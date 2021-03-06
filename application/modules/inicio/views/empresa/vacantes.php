<?php $this->load->view('layout/datos_perfil'); ?>

    <section class="container" id="historial-cuenta">
        <article class="col-md-12">
            <div class="row text-justify info">
                <h3>Mis Vacantes</h3>
            </div>

            <div class="row historial">
                <?php if(!empty($postu)): ?>
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
                                                            <a href="<?php echo $BASE_URL ?>empresa/vacantes-por-usuario/<?php echo $vaca['idpostu'] ?>" title="">
                                                            <?php echo $vaca['total'] ?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 bordered_pad" data-type="empleo">
                                                        <div class="info pull-left">
                                                            <div style="width: 10px;height: 10px; border-radius: 20px; background: green"></div>
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
                                                        <a href="<?php echo $BASE_URL ?>empresa/delete-vacantes/<?php echo $vaca['idpostu'] ?>" title="">
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