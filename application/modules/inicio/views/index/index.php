<!--Main jumbotron for a primary marketing message or call to action -->
    <?php if($this->session->flashdata('flashSuccess') != ''): ?>
        <p class="bg-success mensaje"><?php echo $this->session->flashdata('flashSuccess') ?></p>
    <?php endif ?>

    <?php $this->load->view('../layout/buscador'); ?>

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

                <section class="row empresas-premiun">
                    <h4>Empresas destacadas <a href="<?php echo $BASE_URL ?>listado-empresas" class="pull-right link">Ver todas las empresas</a></h4>
                    <div class="col-md-12">
                        <!-- template -->
                        <div class="ms-staff-carousel ms-round">
                            <!-- masterslider -->
                            <div class="master-slider" id="carousel">
                                <?php foreach ($empresa as $emp) : ?>
                                    <div class="ms-slide">
                                        <!-- <a href="<?php echo $BASE_URL ?>empresas/<?php echo $emp->emp_seo ?>" title="">
                                        </a> -->
                                        <img src="<?php echo $frontend ?>assets/masterslider/blank.gif" data-src="<?php echo $BASE_URL ?>uploads/empresa/<?php echo $emp->emp_logo ?>" alt="<?php echo $emp->emp_razon_social ?>"/>
                                        <div class="ms-info">
                                            <h3><?php echo $emp->emp_razon_social ?></h3>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <!-- end of template -->
                    </div>
                </section>

                <section class="row bg empleos-premiun pad15">
                    <h6 class="text-center">Empleos destacados</h6>
                    <div class="lst_empleos">
                        <?php foreach ($trabajo as $trab): ?>
                            <div class="col-md-12" data-type="empleo">
                                <div class="img pull-left">
                                    <img src="<?php echo $frontend ?>upload/item-empresa.jpg" class="img-circle"> 
                                </div>
                                <div class="info pull-left">
                                    <a href="<?php echo base_url().'empleo/'.$trab->postu_seo ?>">
                                        <h3><?php echo $trab->postu_titulo ?></h3> 
                                    </a>
                                    <h4><?php echo $trab->emp_razon_social ?></h4>
                                    <p><span><?php echo $trab->dist_descripcion ?></span> / <?php echo $trab->jor_descripcion ?></p>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url().'empleo/'.$trab->postu_seo ?>" class="btn-red waves pull-right">Presentarse hoy día</a>
                                </div>
                            </div>
                        <?php endforeach ?>


                    </div>
                    <!-- <div class="col-md-12 text-center">
                        <a href="#" class="btn-red waves" data-type="button"><span><img src="<?php echo $frontend ?>assets/img/view-list.svg" class="img-responsive"> </span> Ver todos los empleos</a>
                    </div> -->
                </section>

                <section class="row lst-categorias">
                    <div class="col-md-12">
                        <h6 class="text-center">Escoge el área en que deseas trabajar</h6>
                    </div>
                    <div class="col-md-12">
                        <?php foreach ($areas as $area) : ?>
                            <div class="col-md-1 box-md-5 text-center" data-type="categoria">
                                <a href="<?php echo $BASE_URL.'area/'.$area['seo'];  ?>" title="">
                                    <img src="<?php echo $frontend ?>upload/item-categoria.png" class="img-responsive img-center img-circle">
                                    <h3><?php echo $area['describe'];  ?></h3>
                                    <span><?php echo $area['postu'];  ?> puestos</span>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </section>

            </article>
        </div>
        <hr>

    </div> <!-- /container