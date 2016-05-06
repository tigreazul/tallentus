<div class="container-fluid" id="info-micuenta">
        <div class="container info-head">
            <div class="col-md-2">
                <img src="<?php echo $frontend ?>assets/img/user_new.svg" class="img-responsive img-center img-circle" width="100%">
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
                <a href="<?php echo base_url() ?>crear-aviso" class="btn grey lighten-4 send-msg">Crear Aviso</a>
                <!-- <a href="#" class="btn grey lighten-4 ent">Entrevista</a>
                <a href="#" class="btn light-blue darken-3 fb"><i><img src="<?php echo $frontend ?>assets/img/facebook_user.svg" class="img-small"></i>Facebook</a>
                <a href="#" class="btn light-blue accent-1 in"><i><img src="<?php echo $frontend ?>assets/img/LinkedIn_user.svg" class="img-small"></i>Likendin</a>
                <a href="#" class="share">Recomendar</a> -->
            </div>
        </div>
    </div>

    <section class="container" id="historial-cuenta">
        <article class="col-md-9">
            <div class="row text-justify info">
                <h3>Sobre mi</h3>
                <p><?php echo $datos['emp_descripcion'] ?></p>
                <div class="linea"><span></span></div>
            </div>
            <div class="row historial">
                <div class="col-md-2 center">
                    <h4>Historial</h4>
                    <!-- <p>+3 postulaciones</p>
                    <span>Hace 7 días</span> -->
                </div>
                <div class="col-md-10">
                    <div class="row lst-historial">
                        <!-- ITEM-HISTORIAL-->
                        <?php foreach ($postu as $pst) : ?>
                            <div class="item col-md-12">
                                <div class="pull-left">
                                    <span class="add">
                                        <img src="<?php echo $frontend ?>assets/img/check.svg">
                                    </span>
                                </div>
                                <a href="<?php echo $BASE_URL ?>empleo/<?php echo $pst->postu_seo ?>" title="">
                                    <p class="left"><b><?php echo $pst->postu_titulo ?></b></p>
                                </a>
                            </div>
                        <?php endforeach ?>
                        <!-- /ITEM-HISTORIAL -->
                        
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
                    <!-- 
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
                    </div> -->
                </div>
            </div>
        </aside>
    </section>