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
            <h3>Datos de la Empresa</h3>
            <h4>Registre los datos</h4>
        </div>
    </div>

    <?php // print_r($arrEmail); ?>
    <div class="row registro">
        <form action="<?php echo $BASE_URL ?>registrar" method="post" class="registro_final">

            <div class="col-md-12 mg30">

                <div class="row bg">

                    <div class="col-md-2">
                        <div class="input-field">
                            <input placeholder="" value="" name="nombre" id="nombres" type="text" class="validate">
                            <label for="first_name">Nombres</label>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="input-field">
                            <input placeholder="" value="" id="razon" name="razon" type="text" class="validate">
                            <label for="first_name">Razon Social</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input placeholder="" name="email" value="" id="email" type="email" class="validate">
                            <label for="first_name">Correo Electronico o E-mail</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input placeholder="" name="ruc" value="" id="ruc" type="text" class="validate">
                            <label for="first_name">RUC</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input placeholder="" name="password" value="" id="password" type="password" class="validate">
                            <label for="first_name">Contraseña</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input placeholder="" name="direccion" value="" id="direccion" type="text" class="validate">
                            <label for="first_name">Dirección</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input placeholder="" id="email" name="fijo" type="text" class="validate">
                            <label for="first_name">Telefono fijo</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="input-field">
                            <input placeholder="" id="descripcion" name="descripcion" type="text" class="validate">
                            <label for="first_name">Descripción</label>
                            
                            <span class="help-text">No es obligatorio que declares ningún tipo de discapacidad; pero si lo
                                haces, podemos ayudarte a que te encuentren aquellas empresas que dispongan de puestos
                                que mejor se adapten a tus necesidades.</span>
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