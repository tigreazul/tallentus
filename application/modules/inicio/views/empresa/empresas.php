<!--Main jumbotron for a primary marketing message or call to action -->
<div class="banner">
    <!-- masterslider -->
    <div class="master-slider ms-skin-default" id="masterslider">
        <!-- new slide -->
        <div class="ms-slide slide-1" data-delay="14">
            <img src="<?php echo $frontend ?>assets/masterslider/blank.gif" data-src="<?php echo $frontend ?>assets/img/baner.jpg" alt="Slide1 background">
        </div>
        <!-- end of slide -->
    </div>
    <div class="search">
        <div class="container">
            <div class="col-md-10 col-lg-offset-1">
                <form class="form-inline">
                    <div class="row">
                        <div class="form-group col-md-8">
                            <span class="icon-search-outline"></span>
                            <input type="text" class="form-control" id="inputSearch" placeholder="Programador web, electricista, abogado, etc.">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-default waves">Buscar empleos</button>
                        </div>
                        <div class="col-md-2">
                            <a href="#">Búsqueda avanzada</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
       <!--  <aside class="sidebar col-md-2">
            <div class="row bg">
                <div class="col-md-12 pad15">
                    <h5>Cargar CV</h5>
                    <form class="form-horizontal frm" action="registro-paso-2.html" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <button class="waves" type="submit">Crear cuenta  y cargar CV</button>
                        <p class="text-justify help-block">Al hacer clic en ”Crear cuenta“ acepto los <a href="#">términos y condiciones.</a></p>
                        <hr>
                        <button class="waves btn-secondary" type="button">Ingresar con Facebook</button>
                    </form>
                </div>
            </div>
            <div class="row bg mgTop15 menu-usuario">
                <div class="col-md-12 pad15">
                    <ul class="list-unstyled">
                        <li class="h3"><span><img src="<?php echo $frontend ?>assets/img/bolsa.svg"></span>Bolsa de Trabajo</li>
                        <li><a href="#" class="active">Buscar empleos</a></li>
                        <li><a href="#">Empresas</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="h3"><span><img src="<?php echo $frontend ?>assets/img/candidatos.svg"></span>Candidatos</li>
                        <li><a href="#">Ingresa CV</a></li>
                        <li><a href="#">Modificar CV</a></li>
                        <li><a href="#">Eliminar CV</a></li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="h3"><span><img src="<?php echo $frontend ?>assets/img/ofertas.svg"></span>Envio de ofertas</li>
                        <li><a href="#">Ofertas en su buzón</a></li>
                        <li><a href="#">Modificar suscripnción</a></li>
                        <li><a href="#">Eliminar suscripción</a></li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="h3"><span><img src="<?php echo $frontend ?>assets/img/empresa.svg"></span>Empresas</li>
                        <li><a href="#">Registre su empresa</a></li>
                        <li><a href="#">Entrar al sistema</a></li>
                        <li><a href="#">Panel de control</a></li>
                        <li><a href="#">Buscar CV</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </aside> -->
        <article class="col-md-12">
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