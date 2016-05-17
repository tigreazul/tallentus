<!--Main jumbotron for a primary marketing message or call to action -->
<?php $this->load->view('../layout/vacio'); ?>

<div class="container">
    <div class="row suscribirse">
        <form method="post" class="frm">
            <div class="col-md-6">
                <p>Suscribete a nuestro boletin, para recibir las ultimas ofertas!</p>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <span class="icon-envelope"></span>
                    <input type="text" class="form-control" placeholder="Correo electrónico" required>
                </div>
            </div>
            <div class="col-md-2"><button class="waves" type="submit">Suscribirse</button></div>
        </form>
    </div>
    <!-- Example row of columns -->
    <div class="row">

        <?php $this->load->view('../index/layout/filtros'); ?>

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
                <h6 class="text-center">Empresas</h6>
                <div class="lst_empresa">
                    <?php foreach ($empresa as $emp) : ?>
                        <div class="col-md-2" data-type="empresa">
                            <a href="<?php echo $BASE_URL ?>empresas/<?php echo $emp['razon_seo'] ?>" title="">
                                <img src="<?php echo $BASE_URL ?>uploads/empresa/<?php echo $emp['imagen'] ?>" width="120" class="img-center img-responsive img-circle">
                            </a>
                            <h3><?php echo $emp['razon_social'] ?></h3>
                            <span><?php echo $emp['emp_postu'] ?> puestos</span>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <!-- <div class="col-md-12 text-center">
                    <a href="#" class="btn-red waves btn-large waves-effect waves-light btn-empresas" data-type="button">
                        <span><img src="<?php echo $frontend ?>assets/img/empresas-btn.svg" class="img-responsive" width="24">
                        </span> Ver mas empresas
                    </a>
                </div> -->
            </section>

        </article>
    </div>
    
    <hr>
</div> <!-- /container