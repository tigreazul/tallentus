<div class="container-fluid" id="info-micuenta">
        <div class="container info-head">
            <div class="col-md-2">
                <?php 
                    $imagen = $datos['usu_imagen_perfil'];
                    echo "<img src='".$BASE_URL."uploads/usuario/".$imagen."' class='img-responsive img-center img-circle' style='width:100%;height: 18%;'>";
                ?>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <div class="datos">
                            <h2><?php echo $datos['usu_nombre']." ".$datos['usu_apellidos'] ?></h2>
                            <p>
                                <i><img src="<?php echo $frontend ?>assets/img/map-marker.svg" class="img-small"></i>Lima, Perú
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 areas text-right">
                        <div class="row">
                            <?php foreach ($areas as $area) { ?>
                                <span class="chip"><?php echo $area->area_nombre; ?></span>
                            <?php } ?>
                            <a class="btn grey lighten-4" href="<?php echo $BASE_URL ?>editar-areas">Editar áreas</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-10 btn-datos">
                <a href="<?php echo $BASE_URL ?>editar-perfil" class="btn grey lighten-4">Editar datos</a>
                <!-- <a href="#" class="btn grey lighten-4 send-msg">Enviar mensaje</a> -->
                <!-- <a href="#" class="btn grey lighten-4 ent">Entrevista</a> -->
                <!-- <a href="#" class="btn light-blue darken-3 fb"><i><img src="<?php echo $frontend ?>assets/img/facebook_user.svg" class="img-small"></i>Facebook</a> -->
                <!-- <a href="#" class="btn light-blue accent-1 in"><i><img src="<?php echo $frontend ?>assets/img/LinkedIn_user.svg" class="img-small"></i>Likendin</a> -->
                <!-- <a href="#" class="share">Recomendar</a> -->
            </div>
        </div>
    </div>

    <section class="container" id="historial-cuenta">
        <article class="col-md-9">
            <div class="row text-justify info">
                <h3>Sobre mi</h3>
                <p><?php echo $datos['usu_descripcion']; ?></p>
                <div class="linea"><span></span></div>
            </div>
            <div class="row historial">
                <div class="col-md-2 center">
                    <h4>Historial</h4>
                    <p>+<?php echo count($postu) ?> postulaciones</p>
                    <span>Hace 7 días</span>
                </div>
                <div class="col-md-10">
                    <div class="row lst-historial">
                        <!-- ITEM-HISTORIAL-->
                        <?php //var_dump($postu) ?>
                        <?php foreach ($postu as $pst) : ?>
                            <div class="item col-md-12">
                                <div class="pull-left">
                                    <span class="add">
                                        <img src="<?php echo $frontend ?>assets/img/check.svg">
                                    </span>
                                </div>
                                <a href="<?php echo base_url().'empleo/'.$pst->postu_seo ?>">
                                    <p class="left"><b><?php echo $pst->postu_titulo ?></b></p>
                                </a>
                            </div>
                        <?php endforeach ?>

                        <!-- <div class="item col-md-12">
                            <a href="#">+ Ver todo el historial</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </article>

        <aside class="col-md-3">
            <div class="bg pad0_15" id="tabs">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <ul class="tabs">
                                <li class="tab col-md-8"><a class="active" href="#ofertas">Postulaciones Relacionadas</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="ofertas" class="col-md-12">
                        <?php //var_dump($rand_post); ?>
                        <?php foreach ($rand_post as $val) : ?>
                            <div class="item">
                                <h3><a href="<?php echo $BASE_URL.'empleo/'.$val->postu_seo ?>"><?php echo $val->postu_titulo ?></a></h3>
                                <p><?php echo $val->emp_razon_social ?></p>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </aside>

    </section>