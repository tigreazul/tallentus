<!-- Main jumbotron for a primary marketing message or call to action -->
<?php $this->load->view('../layout/vacio'); ?>

<div class="container">
    <?php $this->load->view('../layout/suscribete'); ?>
    <!-- Example row of columns -->
    <div class="row">
        <?php $this->load->view('layout/filtros'); ?>

        <article class="col-md-10">
            <section class="row bg">
                <div class="col-md-12">
                    <h5>Selecciona una localidad</h5>
                </div>
                <div class="col-md-12">
                    <ul class="list-unstyled lst-ubicacion row">
                        <?php foreach ($distrito as $dist) : ?>
                            <li class="col-md-3">
                                <a href="<?php echo $BASE_URL.'distrito/'.slugify($dist['describe_dist']);  ?>"><?php echo $dist['describe_dist'];  ?></a>
                                <span class="label label-default"><?php echo $dist['postu_dist'];  ?></span>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </section>

            <section class="row bg empleos-premiun pad15">
                <h6 class="text-center">Empleos en <?php echo strtoupper(str_replace('-',' ',$titulo_dst)); ?></h6>
                <div class="lst_empleos">

                    <?php if(!empty($lDistrito)) : ?>
                        <?php foreach ($lDistrito as $dstP) : ?>
                            <div class="col-md-12" data-type="empleo">
                                <div class="img pull-left">
                                    <img src="<?php echo $frontend ?>upload/item-empresa.jpg" class="img-circle"> 
                                </div>
                                <div class="info pull-left">
                                    <a href="<?php echo base_url().'empleo/'.$dstP->postu_seo ?>">
                                        <h3><?php echo $dstP->postu_titulo ?></h3> 
                                    </a>
                                    <h4><?php echo $dstP->emp_razon_social ?></h4>
                                    <p><span><?php echo $dstP->dist_descripcion ?></span> / <?php echo $dstP->jor_descripcion ?></p>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url().'empleo/'.$dstP->postu_seo ?>" class="btn-red waves pull-right">Presentarse hoy día</a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php else: ?>
                            <div class="col-md-12" data-type="empleo">
                                <div class="info pull-left">
                                    <h4>No existen postulaciones en este distrito</h4>
                                </div>
                            </div>
                    <?php endif ?>

                </div>
                <!-- <div class="col-md-12 text-center">
                    <a href="#" class="btn-red waves" data-type="button"><span><img src="<?php echo $frontend ?>assets/img/view-list.svg" class="img-responsive"> </span> Ver mas empleos</a>
                </div> -->
            </section>

        </article>
    </div>
    <hr>

</div> <!-- /container -->