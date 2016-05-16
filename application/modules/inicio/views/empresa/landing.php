<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="banner">
        <!-- masterslider -->
        <div class="master-slider ms-skin-default" id="masterslider">
            <!-- new slide -->
            <div class="ms-slide slide-1" data-delay="14">
                <img src="<?php echo $frontend ?>assets/masterslider/blank.gif" data-src="<?php echo $frontend ?>assets/img/baner.jpg" alt="Slide1 background">
            </div>
            <!-- end of slide -->
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
            <article class="col-md-12">
                <section class="row empresas-premiun">
                    <div class="col-md-12">
                        <!-- template -->
                        <div class="ms-staff-carousel ms-round">
                            <!-- masterslider -->
                            <div class="master-slider" id="carousel">
                                <?php foreach ($empresa as $emp) : ?>
                                    <div class="ms-slide">
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
            </article>
        </div>
        <hr>

        <div class="row">
            <article class="col-md-12">
                <section class="row empresas-premiun">
                    <div class="col-md-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <br>
                    </div>
                </section>
            </article>
        </div>

    </div> <!-- /container -->