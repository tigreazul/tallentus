<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $BASE_URL ?>">
                    <img src="<?php echo $frontend ?>assets/img/logo.png" class="logo">
                </a>
            </div>
            

            <?php  
            $url = $this->uri->segment(1); 
            if($url == 'empresa'): ?>
                <?php if(!empty($this->session->userdata('email_emp'))): ?>
                    <div id="micuenta" class="navbar-collapse collapse pull-right">
                        <div class="pull-right">
                            <!-- <img src="<?php echo $frontend ?>assets/img/user_new.svg" class="img-circle img-responsive"> -->
                            <?php 
                                $imagen = $this->session->userdata('imagen');
                                echo "<img src='".$BASE_URL."uploads/empresa/thumbs/".$imagen."' class='img-circle img-responsive'>";
                            ?>
                        </div>
                        <div class="pull-right">
                            <p class="text-right">Bienvenido - <a href="<?php echo base_url() ?>salir" style="line-height: 0;">Salir</a></p>
                            <h5 class="text-right"><a href="<?php echo base_url() ?>empresa/mi-empresa"><?php echo $this->session->userdata('email_emp') ?></a></h5>
                        </div>
                    </div><!--/.navbar-collapse -->
                <?php else: ?>
                    <?php if(empty($this->session->userdata('is_logued_in')) || $this->session->userdata('is_logued_in') == false ): ?>
                        <div id="navbar" class="navbar-collapse collapse pull-right">
                            <a href="<?php echo base_url() ?>empresa/registro-empresa" role="button">Registrar</a>
                            <a href="#login" role="button" data-toggle="modal" data-target="#modalRegisterEmpresa" class="btn-login-empresa pull-right waves">Iniciar Sesion</a>
                        </div><!--/.navbar-collapse -->
                    <?php endif ?>
                <?php endif ?>
            <?php else: ?>
                <?php if(!empty($this->session->userdata('email'))): ?>
                    <div id="micuenta" class="navbar-collapse collapse pull-right">
                        <div class="pull-right">
                            <?php 
                                $imagen = $this->session->userdata('imagen');
                                echo "<img src='".$BASE_URL."uploads/usuario/thumbs/".$imagen."' class='img-circle img-responsive' style='width: 40px;height: 35px;'>";
                            ?>
                        </div>
                        <div class="pull-right">
                            <p class="text-right">Bienvenido - <a href="<?php echo base_url() ?>salir" style="line-height: 0;">Salir</a></p>
                            <h5 class="text-right"><a href="<?php echo base_url() ?>mi-cuenta"><?php echo $this->session->userdata('email') ?></a></h5>
                        </div>
                    </div><!--/.navbar-collapse -->
                <?php else: ?>
                    <?php if(empty($this->session->userdata('is_logued_in')) || $this->session->userdata('is_logued_in') == false ): ?>
                        <div id="navbar" class="navbar-collapse collapse pull-right">
                            <a href="#register" role="button" data-toggle="modal" data-target="#modalLogin">Registrate</a> o
                            <a href="#login" role="button" data-toggle="modal" data-target="#modalLogin">Iniciar sesión</a>
                            <a href="<?php echo $BASE_URL ?>empresa" role="button" class="btn-login-empresa pull-right waves">Mi empresa</a>
                        </div><!--/.navbar-collapse -->
                    <?php endif ?>
                <?php endif ?>
            <?php
            endif;
            ?>


        </div>
    </div>
    <div class="container-fluid date">
        <div class="container">
            <p class="text-right"><span class="icon-calendar-1">
                <?php 
                $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                 
                echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

                ?></span></p>
        </div>
    </div>
</nav>