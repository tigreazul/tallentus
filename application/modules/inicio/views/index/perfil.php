<div class="container-fluid" id="info-micuenta">
        <div class="container info-head">
            <div class="col-md-2">
                <img src="<?php echo $frontend ?>assets/img/user_new.svg" class="img-responsive img-center img-circle" width="100%">
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
            <div class="col-md-10 col-md-offset-2 btn-datos">
                <a href="<?php echo $BASE_URL ?>editar-perfil" class="btn grey lighten-4">Editar datos</a>
                <!-- <a href="#" class="btn grey lighten-4 send-msg">Enviar mensaje</a> -->
                <!-- <a href="#" class="btn grey lighten-4 ent">Entrevista</a> -->
                <a href="#" class="btn light-blue darken-3 fb"><i><img src="<?php echo $frontend ?>assets/img/facebook_user.svg" class="img-small"></i>Facebook</a>
                <a href="#" class="btn light-blue accent-1 in"><i><img src="<?php echo $frontend ?>assets/img/LinkedIn_user.svg" class="img-small"></i>Likendin</a>
                <!-- <a href="#" class="share">Recomendar</a> -->
            </div>
        </div>
    </div>

    <section class="container" id="historial-cuenta">
        <article class="col-md-9">
            <div class="row text-justify info">
                <h3>Sobre mi</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et porta dolor. Nulla eu diam elementum
                    ipsum interdum semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                    inceptos himenaeos. Praesent et porttitor odio, vulputate consectetur lectus. Sed id tempor mauris.
                    Pellentesque cursus arcu et dolor gravida lobortis.</p>
                <p>Sed tincidunt, neque quis venenatis eleifend, lectus quam scelerisque risus, vel condimentum augue
                    eros eu libero. Praesent scelerisque dignissim erat vel tincidunt. Pellentesque ullamcorper tempus
                    leo. Nulla facilisi. Nunc tincidunt ornare lectus, at hendrerit nibh. Cras euismod mauris quis felis
                    eleifend, sit amet consequat orci convallis. Phasellus pellentesque quis mauris in condimentum.</p>
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
                                <li class="tab col-md-8"><a class="active" href="#ofertas">(0) Ofertas</a></li>
                                <li class="tab col-md-4"><a href="#alertas">(0) Alertas</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="ofertas" class="col-md-12">
                        <div class="item">
                            <h3><a>Practicante de Mecánica Industrial</a></h3>
                            <p>No pierdas esta gran oportunidad de desarrollo
                                Allus Global BPO Center es la compañía líder</p>
                        </div>
                        <div class="item">
                            <h3><a>Practicante de Mecánica Industrial</a></h3>
                            <p>No pierdas esta gran oportunidad de desarrollo
                                Allus Global BPO Center es la compañía líder</p>
                        </div>
                        <div class="item">
                            <h3><a>Practicante de Mecánica Industrial</a></h3>
                            <p>No pierdas esta gran oportunidad de desarrollo
                                Allus Global BPO Center es la compañía líder</p>
                        </div>
                    </div>
                    <div id="alertas" class="col-md-12">
                        <div class="item">
                            <h3><a>Practicante de Industrial</a></h3>
                            <p>No pierdas esta gran oportunidad de desarrollo
                                Allus Global BPO Center es la compañía líder</p>
                        </div>
                        <div class="item">
                            <h3><a>Practicante de Industrial</a></h3>
                            <p>No pierdas esta gran oportunidad de desarrollo
                                Allus Global BPO Center es la compañía líder</p>
                        </div>
                        <div class="item">
                            <h3><a>Practicante de Industrial</a></h3>
                            <p>No pierdas esta gran oportunidad de desarrollo
                                Allus Global BPO Center es la compañía líder</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </section>