<?php
  $username = array(
    'name'        => 'username', 
    // 'placeholder' => 'Email',
    'id'          => 'username',
    'class'       => 'gui-input',
    'required'    => 'required'
  );

  $password = array(
    'name'        => 'password', 
    // 'placeholder' => 'Password',
    'class'       => 'gui-input',
    'id'          => 'password',
    'required'    => 'required'
  );

  $submit = array(
    'name'  => 'submit', 
    'value' => 'Entrar', 
    'title' => 'Iniciar sesión',
    'class' => 'button btn-primary mr10 pull-right'
  );

?>

<body class="external-page sb-l-c sb-r-c">

    <!-- Start: Settings Scripts -->
    <script>
        var boxtest = localStorage.getItem('boxed');

        if (boxtest === 'true') {
            document.body.className += ' boxed-layout';
        }
    </script>
    <!-- End: Settings Scripts -->

    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">
        <?php $correcto = $this->session->flashdata('usuario_incorrecto');
            // print_r($correcto);
            $texto = "";
            switch ($correcto) {
                case 'error_login':
                    $texto = "Usuario y/o contraseña incorrecta";
                break;
                case 'sesion_login':
                    $texto = "Tu sesión ha caducado";
                break;
                case '':
                    $texto = "";
                break;
                default:
                    $texto = "";
                break;
            }
        ?>
        <!-- Start: Content -->
        <section id="content_wrapper">
            <!-- begin canvas animation bg -->
            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- Begin: Content -->
            <section id="content">
                <div class="admin-form theme-info" id="login1">
                    <div class="row mb15 table-layout">
                        
                        <div class="col-xs-6 va-m pln">
                            <a href="<?php echo base_url() ?>" title="Return to Dashboard">
                                <!-- <img src="<?php echo base_url() ?>assets/admin/default/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250"> -->
                            </a>
                        </div>
                    </div>

                    <div class="panel panel-info mt10 br-n">
                        <!-- end .form-header section -->
                        <?php echo form_open(base_url().'login/inicio/valid','id="contact"')?>
                            <div class="panel-body bg-light p30">
                                <div style="padding-bottom: 10px; color: red;text-align: center;"><?php echo $texto ?></div>
                                <div class="row">
                                    <div class="col-sm-12 pr30">

                                        <div class="section">
                                            <label for="username" class="field-label text-muted fs18 mb10">Usuario</label>
                                            <label for="username" class="field prepend-icon">
                                                <?php echo form_input($username)?>
                                                <?php echo form_hidden('token',$token)?>
                                                <label for="username" class="field-icon"><i class="fa fa-user"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="section">
                                            <label for="username" class="field-label text-muted fs18 mb10">Contraseña</label>
                                            <label for="password" class="field prepend-icon">
                                                <?php echo form_password($password)?>
                                                <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                    </div>

                                </div>
                            </div>
                            <!-- end .form-body section -->
                            <div class="panel-footer clearfix p10 ph15">
                                <?php echo form_submit($submit)?>
                            </div>
                            <!-- end .form-footer section -->
                        <?php echo form_close()?>
                    </div>
                </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->


    <?php $this->load->view('layout/login_footer_view') ?>

    <script type="text/javascript">
        $(document).on('ready',function(){
            $("#contact").validate({
                rules: {
                    username:{
                        minlength : 6
                    },
                    password:{
                        minlength : 6
                    }
                },
                messages:{
                    username:{
                        required : 'Usuario requerida',
                        minlength : "Ingresar minimo 6 caracteres"
                    },
                    password:{
                        required : 'Contraseña requerida',
                        minlength : "Ingresar minimo 6 caracteres"
                    }
                }
            });

        });
    </script>

    <style type="text/css" media="screen">
        .error{
            color: red !important;
        }
    </style>
</body>

</html>
