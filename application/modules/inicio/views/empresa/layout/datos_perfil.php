<div class="container-fluid" id="info-micuenta">
    <div class="container info-head">
        <div class="col-md-2">
            <?php 
                $imagen = $datos['emp_logo'];
                echo "<img src='".$BASE_URL."uploads/empresa/".$imagen."' class='img-responsive img-center img-circle' style='width:100%;height: 18%;'>";
            ?>
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
            <a href="<?php echo base_url() ?>empresa/editar-perfil" class="btn grey lighten-4">Editar datos</a>
            <a href="<?php echo base_url() ?>empresa/crear-aviso" class="btn grey lighten-4 send-msg">Crear Aviso</a>
            <a href="<?php echo base_url() ?>empresa/mis-vacantes" class="btn grey lighten-4 ent">Mis Vacantes</a>
            <!-- 
            <a href="#" class="btn light-blue darken-3 fb"><i><img src="<?php echo $frontend ?>assets/img/facebook_user.svg" class="img-small"></i>Facebook</a>
            <a href="#" class="btn light-blue accent-1 in"><i><img src="<?php echo $frontend ?>assets/img/LinkedIn_user.svg" class="img-small"></i>Likendin</a>
            <a href="#" class="share">Recomendar</a> 
            -->
        </div>
    </div>
</div>