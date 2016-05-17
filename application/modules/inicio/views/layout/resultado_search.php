<!--Main jumbotron for a primary marketing message or call to action -->
    
    <?php $this->load->view('vacio'); ?>

    <div class="container">
        <?php $this->load->view('suscribete'); ?>
        <!-- Example row of columns -->
        <div class="row">
            <?php $this->load->view('../index/layout/filtros'); ?>

            <article class="col-md-10">

                <section class="row bg empleos-premiun pad15">
                    <!-- <h6 class="text-center">Resultado</h6> -->
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


            </article>
        </div>
        <hr>

    </div> <!-- /container