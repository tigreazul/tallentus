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
                <div class="col-md-4 step-ok">
                    <hr class="line">
                    <div class="txt pull-right">Areas de<br>trabajo</div>
                    <div class="icon pull-right">
                        <img src="<?php echo $frontend ?>assets/img/step-ok.svg">
                    </div>
                </div>
                <div class="col-md-4 step-not">
                    <hr class="line">
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
            <h3>Mis datos</h3>
            <h4>Ingrese todos sus datos personales</h4>
        </div>
    </div>

    <?php // print_r($arrEmail); ?>
    <div class="row registro">
        <form action="<?php echo $BASE_URL ?>finalizar" method="post" class="registro_final">
            <div class="col-md-2 mg30">
                <div class="row bg">
                    <div class="image_upload">
                        <img src="<?php echo $frontend ?>assets/img/user_load.svg" class="img-responsive img-center">
                    </div>
                    <div class="file-field input-field">
                        <div class="btn btn-red">
                            <span>Imagen</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Cargar...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 mg30">

                <div class="row bg">

                    <div class="col-md-2">
                        <div class="input-field">
                            <input placeholder="" value="<?php echo $arrEmail['usu_nombre'] ?>" name="nombre" id="nombres" type="text" class="validate">
                            <input value="<?php echo base64_encode($arrEmail['usu_id']) ?>" name="id" type="hidden">
                            <label for="first_name">Nombres</label>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="input-field">
                            <input placeholder="Ingrese sus apellidos" value="" id="apellidos" name="apellido" type="text" class="validate">
                            <label for="first_name">Apellidos</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input placeholder="Ingrese su correo electronico o e-mail" name="email" value="<?php echo $arrEmail['usu_correo'] ?>" id="email" type="email" class="validate">
                            <label for="first_name">Correo Electronico o E-mail</label>
                        </div>
                    </div>

                    <div class="col-md-4 selects">
                        <div class="input-field">

                            <div class="col-md-4">
                                <select class="select-materialcss" name="dia">
                                    <option value="" disabled selected>día</option>
                                    <?php for ($i=1; $i <= 31; $i++) { ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select class="select-materialcss" name="mes">
                                    <option value="" disabled selected>mes</option>
                                    <option value="01">Enero</option>
                                    <option value="02">Febrero</option>
                                    <option value="03">Marzo</option>
                                    <option value="04">Abril</option>
                                    <option value="05">Mayo</option>
                                    <option value="06">Junio</option>
                                    <option value="07">Julio</option>
                                    <option value="08">Agosto</option>
                                    <option value="09">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select class="select-materialcss" name="anio">
                                    <option value="" disabled selected>año</option>
                                    <?php for ($i2=1970; $i2 <= date('Y')-1; $i2++) { ?>
                                        <option value="<?php echo $i2 ?>"><?php echo $i2 ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <label for="first_name">Fecha de nacimiento</label>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="input-field">
                            <select class="select-materialcss" name="documento">
                                <option value="" disabled selected>Seleccione doc.</option>
                                <option value="1">DNI</option>
                                <option value="2">Carnet de Extranjeria</option>
                                <option value="3">Otro</option>
                            </select>
                            <label for="first_name">Documento identidad</label>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="input-field">
                            <input placeholder="Ingrese su número" id="email" name="nrodocumento" type="text" class="validate">
                            <label for="first_name">Número de documento</label>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="col-md-4 selects padL0">
                            <div class="input-field">
                                <select class="select-materialcss" name="sexo">
                                    <option value="" disabled selected>Seleccione sexo</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                                <label for="first_name">Sexo</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field">
                                <input placeholder="Ingrese su nro. fijo" id="email" name="fijo" type="text" class="validate">
                                <label for="first_name">Telefono fijo</label>
                            </div>
                        </div>
                        <div class="col-md-4 padR0">
                            <div class="input-field">
                                <input placeholder="Ingrese su nro. celular" id="celular" name="celular" type="text" class="validate">
                                <label for="first_name">Celular</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input type="checkbox" id="discapacidad" name="discapacidad" value="1"/>
                            <label for="discapacidad">Poseo algún tipo de discapacidad</label>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="input-field">
                            <input placeholder="Ingrese su ripo de discapacidad" id="texotdiscapacidad" name="texotdiscapacidad" type="text" class="validate">
                            <label for="first_name">Por favor, indica que tipo de discapacidad posees</label>
                            <span class="help-text">No es obligatorio que declares ningún tipo de discapacidad; pero si lo
                                haces, podemos ayudarte a que te encuentren aquellas empresas que dispongan de puestos
                                que mejor se adapten a tus necesidades.</span>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-12 mg30">
                <p class="text-center">
                    <button class="btn btn-red btn-send">Finalizar</button>
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