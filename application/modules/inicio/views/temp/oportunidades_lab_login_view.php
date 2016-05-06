<section class="internal-header overlay-dark" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>">Inicio</a></li>  
                    <li class="active">Oportunidades Laborales  </li>
                </ol>
            </div>
            <!-- end col-12 --> 
        </div>
        <!-- end row --> 
    </div>
    <!-- end container --> 
</section>

<!-- end internal-header -->
<section class="career">
    <div class="container" >
        <div class="row">

            <?php if ($this->session->flashdata('mensaje_confirm') != 'insert') { ?>
                <div class="col-xs-12">
                    <div class="titles">
                        <h2>OPORTUNIDADES LABORALES</h2>
                    </div>
                    <!-- end title --> 
                </div>
                <!-- end col-12 -->
                <p style="color: red"><?php echo $this->session->flashdata('mensaje') ?></p>
                <div class="col-xs-6" >
                    <form class="career-form" action="<?php echo base_url() ?>login" method="post" id="login">
                        <div class="form-group" style="width: 100%;">
                            <label>DNI</label>
                            <input type="text" name="dni">
                        </div>
                        <!-- end form-group -->
                        <div class="form-group" style="width: 100%;">
                            <label>Contraseña</label>
                            <input type="password" name="password" style="max-width: 80%;">
                        </div>
                        
                        <!-- end form-group -->
                        <div class="form-group full-width">
                            <button type="submit">ENVIAR</button>
                        </div>
                        <!-- end form-group -->
                    </form>
                </div>
                <p>Si aun no esta Registrado ingrese a nuestro: <a href="<?php echo base_url() ?>bolsa-trabajo" style="color:#f3c217">FORMULARIO DE REGISTRO</a></p>
                <!-- end col-12 -->
            <?php }else{ ?>
                <div class="col-xs-12"  ALIGN=center>
                    <h4>TU POSTULACIÓN HA SIDO REGISTRADA NOS COMUNICAREMOS EN LA BREVEDAD POSIBLE</h4>
                    <!-- end title --> 
                </div>
            <?php } ?>

        </div>
        <!-- end row --> 
    </div>
    <!-- end container --> 
</section>
<!-- end gallery -->
<?php echo $this->load->view('layout/suscribe_view') ?>