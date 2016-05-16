<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="banner">
    <!-- masterslider -->
    <div class="master-slider ms-skin-default" id="masterslider">
        <!-- new slide -->
        <div class="ms-slide slide-1" data-delay="14">
            <img src="<?php echo $frontend ?>assets/masterslider/blank.gif" data-src="<?php echo $frontend ?>assets/img/bg_registro.jpg" alt="Slide1 background">
        </div>
        <!-- end of slide -->
    </div>
    <div class="step">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-lg-offset-1 step-ok">
                    <div class="icon pull-left">
                        <img src="<?php echo $frontend ?>assets/img/step-ok.svg">
                    </div>
                    <div class="txt pull-left">Registro y<br>Verificación</div>
                </div>
                <div class="col-md-4 step-not">
                    <hr class="line">
                    <div class="txt pull-right">Areas de<br>trabajo</div>
                    <div class="icon pull-right">
                        <img src="<?php echo $frontend ?>assets/img/step-add.svg">
                    </div>
                </div>
                <div class="col-md-4 step-not">
                    <hr class="line line_not">
                    <div class="txt pull-right">Mis datos<br>personales</div>
                    <div class="icon pull-right">
                        <img src="<?php echo $frontend ?>assets/img/step-add.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row registro">
        <div class="col-md-12 titulo">
            <h3>Escoge el área en que deseas trabajar</h3>
            <h4>Selecciona un maximo de 5 areas donde deseas trabajar</h4>
        </div>
    </div>

    <div class="row registro">
        <article class="col-md-12">
            <form action="<?php echo $BASE_URL ?>registro-paso-3" method="post" class="">
                <section class="row lst-categorias">
                    <div class="col-md-12" data-toggle="buttons">
                        <input value="<?php echo base64_encode($arrEmail['usu_id']) ?>" name="id" type="hidden">
                        <?php foreach($areas as $area): ?>
                            <div class="col-md-2 text-center" data-type="categoria">
                                <label class="btn btn-default">
                                    <input type="checkbox" name="areas[]" autocomplete="off" value="<?php echo $area->area_id ?>">
                                    <img src="<?php echo $frontend; ?>upload/item-categoria.png" class="img-responsive img-center img-circle">
                                    <h3><?php echo $area->area_nombre ?></h3>
                                    <span>Seleccionar</span>
                                </label>
                            </div>
                        <?php endforeach ?>

                    </div>
                    <div class="col-md-12 mg30">
                        <p class="text-center">
                            <button class="btn btn-red">Siguiente</button>
                        </p>
                    </div>
                </section>
            </form>
        </article>
    </div>

</div> <!-- /container