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
</div>

<div class="container">
    <div class="row registro">
        <div class="col-md-12 titulo">
            <h3>Crear Aviso</h3>
            <!-- <h4>Registre los datos</h4> -->
        </div>
    </div>

    <div class="row registro">
        <form action="<?php echo $BASE_URL ?>crear-publicacion-aviso" method="post" class="registro_final">

            <div class="col-md-12 mg30">

                <div class="row bg">

                    <div class="col-md-10">
                        <div class="input-field">
                            <input placeholder="" value="" name="titulo" id="titulo" type="text" class="validate texto" required>
                            <label for="first_name">Titulo</label>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="input-field">
                            <input placeholder="" value="" id="descripcion" name="descripcion" type="text" class="validate " minlength="6" required>
                            <label for="first_name">Descripción</label>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="input-field">
                            <input placeholder="" name="beneficio" value=""  type="text" class="validate texto">
                            <label for="first_name">Beneficio</label>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="input-field">
                            <input placeholder="" name="requisito" value="" id="requisito" type="text" class="validate texto">
                            <label for="first_name">Requisitos</label>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="input-field">
                            <input placeholder="" name="vacantes" value="" id="vacantes" type="text" class="validate numero" maxlength="2" minlength="1" required> 
                            <label for="first_name">Vacantes</label>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="input-field">
                            <input placeholder="" name="experiencia" value="" id="experiencia" type="text" class="validate numero" maxlength="2" minlength="1"  required>
                            <label for="first_name">Tiempo de experiencia</label>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="input-field">
                            <input placeholder="" name="salario" type="text" class="validate numero">
                            <label for="first_name">Salario</label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="input-field">
                            <?php echo form_dropdown('distrito',$cbo_distrito,'','required="required" class="select-materialcss"'); ?>
                            <label for="first_name">Distrito</label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="input-field">
                            <?php echo form_dropdown('jornada',$cbo_jornada,'','required="required" class="select-materialcss"'); ?>
                            <label for="first_name">Jornada</label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="input-field">
                            <?php echo form_dropdown('contrato',$cbo_contrato,'','required="required" class="select-materialcss"'); ?>
                            <label for="first_name">Tipo de Contrato</label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="input-field">
                            <?php echo form_dropdown('educacion',$cbo_educacion,'','required="required" class="select-materialcss"'); ?>
                            <label for="first_name">Educación</label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="input-field">
                            <?php echo form_dropdown('area',$cbo_area,'','required="required" class="select-materialcss"'); ?>
                            <label for="first_name">Area</label>
                        </div>
                    </div>  


                </div>

            </div>
            <div class="col-md-12 mg30">
                <p class="text-center">
                    <button type="submit" class="btn btn-red btn-send">Registrar</button>
                </p>
            </div>
        </form>
    </div>

</div> <!-- /container -->

<script type="text/javascript">

$(document).ready(function() {
    $('.select-materialcss').material_select();
});
</script>
<style type="text/css" media="screen">
    .ms-view{
        height: 150px !important;
    }
</style>