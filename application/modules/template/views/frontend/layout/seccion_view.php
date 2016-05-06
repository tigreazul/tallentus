<!-- BEGIN # MODAL LOGIN -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" align="center">
                    <span class="brand-logo"><img src="<?php echo $frontend ?>assets/img/logo2.png" class="logo"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Begin # DIV Form -->
                <div id="div-forms">

                    <!-- Begin # Login Form -->
                    <form id="login-form" action="<?php echo $BASE_URL; ?>entrar" method="post" class="forms">
                        <div class="modal-body">
                            <div class="form-group">
                                <span><img src="<?php echo $frontend; ?>assets/img/user.svg" class="img-responsive img-rounded"></span>
                                <input type="text" class="form-control" name="email" placeholder="Usuario" required>
                            </div>
                            <div class="form-group">
                                <span><img src="<?php echo $frontend; ?>assets/img/pwd.svg" class="img-responsive img-rounded"></span>
                                <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <button class="waves btn-red" type="submit">Ingresar</button>
                            </div>
                            <div class="form-group">
                                <button id="login_register_btn" type="button" class="btn-red btn-register">Registrarse</button>
                            </div>
                            <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Recuperar contraseña<img src="<?php echo $frontend; ?>assets/img/help.svg"></button>
                            </div>
                            <div class="form-group login-redes">
                                <p class="text-center">Inicia sesión con</p>
                                <div class="col-md-6">
                                    <div class="row">
                                        <a href="#" class="login-facebook"><span><img src="<?php echo $frontend; ?>assets/img/facebook.svg"></span>facebook</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <a href="#" class="login-linkedin"><span><img src="<?php echo $frontend; ?>assets/img/linkedIn.svg"></span>linkedin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End # Login Form -->

                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
                        <div class="modal-body">
                            <div class="form-group">
                                <span><img src="<?php echo $frontend; ?>assets/img/email.svg" class="img-responsive img-rounded"></span>
                                <input type="email" class="form-control" placeholder="Correo electronico" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <button type="submit" class="waves btn-red">Enviar</button>
                            </div>
                            <!--<div class="form-group">
                                <button id="lost_login_btn" class="waves btn-red" type="submit">Ingresar</button>
                            </div>
                            <div class="form-group">
                                <button id="lost_register_btn" type="button" class="waves btn-red btn-register">Registrarse</button>
                            </div>-->
                            <div class="form-group login-redes">
                                <p class="text-center">Inicia sesión con</p>
                                <div class="col-md-6">
                                    <div class="row">
                                        <a href="#" class="login-facebook"><span><img src="<?php echo $frontend; ?>assets/img/facebook.svg"></span>facebook</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <a href="#" class="login-linkedin"><span><img src="<?php echo $frontend; ?>assets/img/linkedIn.svg"></span>linkedin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End | Lost Password Form -->

                    <!-- Begin | Register Form -->
                    <form id="register-form" action="<?php echo $BASE_URL; ?>registro" method="post" style="display:none;">
                        <div class="modal-body">
                            <div class="form-group">
                                <span><img src="<?php echo $frontend; ?>assets/img/user.svg" class="img-responsive img-rounded"></span>
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <span><img src="<?php echo $frontend; ?>assets/img/pwd.svg" class="img-responsive img-rounded"></span>
                                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                            </div>
                            <div class="form-group">
                                <span><img src="<?php echo $frontend; ?>assets/img/email.svg" class="img-responsive img-rounded"></span>
                                <input type="email" name="email" class="form-control" placeholder="Correo electronico" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <button type="submit" class="waves btn-red btn-register">Registrarse</button>
                            </div>
                            <div>
                                <button id="register_lost_btn" type="button" class="waves btn-link">Recuperar contraseña<img src="<?php echo $frontend; ?>assets/img/help.svg"></button>
                            </div>
                            <div class="form-group login-redes">
                                <p class="text-center">Inicia sesión con</p>
                                <div class="col-md-6">
                                    <div class="row">
                                        <a href="#" class="login-facebook"><span><img src="<?php echo $frontend; ?>assets/img/facebook.svg"></span>facebook</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <a href="#" class="login-linkedin"><span><img src="<?php echo $frontend; ?>assets/img/linkedIn.svg"></span>linkedin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End | Register Form -->

                </div>
                <!-- End # DIV Form -->

            </div>
        </div>
    </div>
    <!-- END # MODAL LOGIN -->

    <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" align="center">
                    <span class="brand-logo"><img src="<?php echo $frontend ?>assets/img/logo2.png" class="logo"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Begin # DIV Form -->
                <div id="div-forms">

                    <!-- Begin | Register Form -->
                    <form id="register-form">
                        <div class="modal-body">
                            <div class="form-group">
                                <span><img src="<?php echo $frontend; ?>assets/img/user.svg" class="img-responsive img-rounded"></span>
                                <input type="text" class="form-control" placeholder="usuario" required>
                            </div>
                            <div class="form-group">
                                <span><img src="<?php echo $frontend; ?>assets/img/pwd.svg" class="img-responsive img-rounded"></span>
                                <input type="password" class="form-control" placeholder="Contraseña" required>
                            </div>
                            <div class="form-group">
                                <span><img src="<?php echo $frontend; ?>assets/img/email.svg" class="img-responsive img-rounded"></span>
                                <input type="email" class="form-control" placeholder="Correo electronico" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <button type="submit" class="waves btn-red btn-register">Registrarse</button>
                            </div>
                            <div>
                                <button id="register_lost_btn" type="button" class="waves btn-link">Recuperar contraseña<img src="<?php echo $frontend; ?>assets/img/help.svg"></button>
                            </div>
                            <div class="form-group login-redes">
                                <p class="text-center">Inicia sesión con</p>
                                <div class="col-md-6">
                                    <div class="row">
                                        <a href="#" class="login-facebook"><span><img src="<?php echo $frontend; ?>assets/img/facebook.svg"></span>facebook</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <a href="#" class="login-linkedin"><span><img src="<?php echo $frontend; ?>assets/img/linkedIn.svg"></span>linkedin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End | Register Form -->

                </div>
                <!-- End # DIV Form -->

            </div>
        </div>
    </div>
    <!-- END # MODAL LOGIN -->





    <div class="modal fade" id="modalRegisterEmpresa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width: 300px;">
            <div class="modal-content">
                <div class="modal-header" align="center">
                    <span class="brand-logo"><img src="<?php echo $frontend ?>assets/img/logo2.png" class="logo"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Begin # DIV Form -->
                <div id="div-forms">

                    <!-- Begin # Login Form -->
                    <form id="login-form" action="<?php echo $BASE_URL; ?>entrar-empresa" method="post" class="forms">
                        <div class="modal-body">
                            <div class="form-group">
                                <span><img src="<?php echo $frontend; ?>assets/img/user.svg" class="img-responsive img-rounded"></span>
                                <input type="text" class="form-control" name="email" placeholder="Usuario" required>
                            </div>
                            <div class="form-group">
                                <span><img src="<?php echo $frontend; ?>assets/img/pwd.svg" class="img-responsive img-rounded"></span>
                                <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <button class="waves btn-red" type="submit">Ingresar</button>
                            </div>
                            <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Recuperar contraseña<img src="<?php echo $frontend; ?>assets/img/help.svg"></button>
                            </div>
                            <div class="form-group login-redes">
                                <p class="text-center"></p>
                                
                            </div>
                        </div>
                    </form>
                    <!-- End # Login Form -->

                </div>
                <!-- End # DIV Form -->

            </div>
        </div>
    </div>


    <!-- END # MODAL LOGIN -->