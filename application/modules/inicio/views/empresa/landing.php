<!-- Main jumbotron for a primary marketing message or call to action -->
    <?php if($this->session->flashdata('flashSuccess') != ''): ?>
        <p class="bg-success mensaje"><?php echo $this->session->flashdata('flashSuccess') ?></p>
    <?php endif ?>
<?php $this->load->view('../layout/vacio'); ?>

    <div class="container">
        <?php $this->load->view('../layout/suscribete'); ?>
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