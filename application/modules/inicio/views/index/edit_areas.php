<!--Main jumbotron for a primary marketing message or call to action -->
<div class="banner" style="height: 185px;">
    <!-- masterslider -->
    <div class="master-slider ms-skin-default" id="masterslider">
        <!-- new slide -->
        <div class="ms-slide slide-1" data-delay="14">
            <img src="<?php echo $frontend ?>assets/masterslider/blank.gif" data-src="<?php echo $frontend ?>assets/img/bg_registro.jpg" alt="Slide1 background">
        </div>
        <!-- end of slide -->
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
            <form action="<?php echo $BASE_URL ?>update-areas" method="post" class="">
                <section class="row lst-categorias">
                    <input value="<?php echo base64_encode($id_user) ?>" name="id" type="hidden">
                    <div class="col-md-12" data-toggle="buttons">
                        <?php foreach($areas as $area): ?>
                                <?php //var_dump($area) ?>
                                <div class="col-md-2 text-center" data-type="categoria">
                                    <label class="btn btn-default <?php echo $area['activo'] != 0 ? 'active':'' ?>">
                                        <input type="checkbox" name="areas[]" class="area_check" autocomplete="off" value="<?php echo $area['id'] ?>" <?php echo $area['activo'] != 0 ? 'checked':'' ?>>
                                        <img src="<?php echo $frontend; ?>upload/item-categoria.png" class="img-responsive img-center img-circle">
                                        <h3><?php echo $area['nombre'] ?></h3>
                                        <span>Seleccionar</span>
                                    </label>
                                </div>
                        <?php endforeach ?>

                    </div>
                    <div class="col-md-12 mg30">
                        <p class="text-center">
                            <button class="btn btn-red" id="checkedado">Actualizar</button>
                        </p>
                    </div>
                </section>
            </form>
        </article>
    </div>

</div> <!-- /container