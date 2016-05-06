<!-- Main jumbotron for a primary marketing message or call to action -->
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
            <h3>Mis datos</h3>
            <h4>Ingrese todos sus datos personales</h4>
        </div>
    </div>

    <div class="row registro">
        <form id="imageform" method="post" enctype="multipart/form-data" action='<?php echo $BASE_URL ?>upload' style="margin-top: 12px;">
            <div class="col-md-2 mg30">
                <div class="row bg">
                    <div class="image_upload" id="preview">
                        <?php 
                        $imagen = $arrEmail['usu_imagen_perfil'];
                        if($imagen != ''):
                            echo "<img src='".$BASE_URL."uploads/usuario/".$imagen."'  class='img-responsive img-center'>";
                        else: 
                            echo '<img src="<?php echo $frontend ?>assets/img/user_load.svg" class="img-responsive img-center">';
                        endif 
                        ?>
                    </div>
                    <div class="file-field input-field">
                        <div class="btn btn-red">
                            <span>Imagen</span>
                            <input type="file" name="photoimg" id="photoimg" />
                            <!-- <input type="file"> -->
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Cargar...">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form action="<?php echo $BASE_URL ?>finalizar" method="post" class="registro_final">
            <div class="col-md-10 mg30">

                <div class="row bg">

                    <div class="col-md-2">
                        <div class="input-field">
                            <input placeholder="" value="<?php echo $arrEmail['usu_nombre'] ?>" name="nombre" id="nombres" type="text" class="validate texto">
                            <input value="<?php echo base64_encode($arrEmail['usu_id']) ?>" name="id" type="hidden">
                            <label for="first_name">Nombres</label>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="input-field">
                            <input placeholder="Ingrese sus apellidos" value="<?php echo $arrEmail['usu_apellidos'] ?>" id="apellidos" name="apellido" type="text" class="validate texto">
                            <label for="first_name">Apellidos</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input placeholder="Ingrese su correo electronico o e-mail" name="email" value="<?php echo $arrEmail['usu_correo'] ?>" id="email" type="email" class="validate">
                            <label for="first_name">Correo Electronico o E-mail </label>
                        </div>
                    </div>

                    <div class="col-md-4 selects">
                        <div class="input-field">
                            <?php //echo date("d/m/Y",  strtotime($arrEmail['usu_fecha_nacimiento'])) ?>
                            <div class="col-md-4">
                                <select class="select-materialcss" name="dia" required>
                                    <option value="" disabled selected>día</option>
                                    <?php for ($i=1; $i <= 31; $i++) { ?>
                                        <option value="<?php echo $i ?>" <?php echo date("d",  strtotime($arrEmail['usu_fecha_nacimiento']))==$i ?'selected':'' ?> ><?php echo $i ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select class="select-materialcss" name="mes" required>
                                    <option value="" disabled selected>mes</option>
                                    <option value="01" <?php echo date("m",  strtotime($arrEmail['usu_fecha_nacimiento']))=='01' ?'selected':'' ?>>Enero</option>
                                    <option value="02" <?php echo date("m",  strtotime($arrEmail['usu_fecha_nacimiento']))=='02' ?'selected':'' ?>>Febrero</option>
                                    <option value="03" <?php echo date("m",  strtotime($arrEmail['usu_fecha_nacimiento']))=='03' ?'selected':'' ?>>Marzo</option>
                                    <option value="04" <?php echo date("m",  strtotime($arrEmail['usu_fecha_nacimiento']))=='04' ?'selected':'' ?>>Abril</option>
                                    <option value="05" <?php echo date("m",  strtotime($arrEmail['usu_fecha_nacimiento']))=='05' ?'selected':'' ?>>Mayo</option>
                                    <option value="06" <?php echo date("m",  strtotime($arrEmail['usu_fecha_nacimiento']))=='06' ?'selected':'' ?>>Junio</option>
                                    <option value="07" <?php echo date("m",  strtotime($arrEmail['usu_fecha_nacimiento']))=='07' ?'selected':'' ?>>Julio</option>
                                    <option value="08" <?php echo date("m",  strtotime($arrEmail['usu_fecha_nacimiento']))=='08' ?'selected':'' ?>>Agosto</option>
                                    <option value="09" <?php echo date("m",  strtotime($arrEmail['usu_fecha_nacimiento']))=='09' ?'selected':'' ?>>Septiembre</option>
                                    <option value="10" <?php echo date("m",  strtotime($arrEmail['usu_fecha_nacimiento']))=='10' ?'selected':'' ?>>Octubre</option>
                                    <option value="11" <?php echo date("m",  strtotime($arrEmail['usu_fecha_nacimiento']))=='11' ?'selected':'' ?>>Noviembre</option>
                                    <option value="12" <?php echo date("m",  strtotime($arrEmail['usu_fecha_nacimiento']))=='12' ?'selected':'' ?>>Diciembre</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select class="select-materialcss" name="anio" required>
                                    <option value="" disabled selected>año</option>
                                    <?php for ($i2=1970; $i2 <= date('Y')-1; $i2++) { ?>
                                        <option value="<?php echo $i2 ?>" <?php echo date("Y",  strtotime($arrEmail['usu_fecha_nacimiento']))==$i2 ?'selected':'' ?>><?php echo $i2 ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <label for="first_name">Fecha de nacimiento</label>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="input-field">
                            <select class="select-materialcss" name="documento" required>
                                <option value="" <?php echo $arrEmail['usu_tipo_doc'] == '' ? 'selected':'' ?>>Seleccione doc.</option>
                                <option value="1" <?php echo $arrEmail['usu_tipo_doc'] == 1 ? 'selected':'' ?> >DNI</option>
                                <option value="2" <?php echo $arrEmail['usu_tipo_doc'] == 2 ? 'selected':'' ?> >Carnet de Extranjeria</option>
                                <option value="3" <?php echo $arrEmail['usu_tipo_doc'] == 3 ? 'selected':'' ?> >Otro</option>
                            </select>
                            <label for="first_name">Documento identidad</label>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="input-field">
                            <input placeholder="Ingrese su número" value="<?php echo $arrEmail['usu_nro_documento']?>" id="email" name="nrodocumento" type="text" class="validate numero">
                            <label for="first_name">Número de documento</label>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="col-md-4 selects padL0">
                            <div class="input-field">
                                <select class="select-materialcss" name="sexo">
                                    <option value="" disabled selected required>Seleccione sexo</option>
                                    <option value="M" <?php echo $arrEmail['usu_sexo'] == 'M' ? 'selected':'' ?>>Masculino</option>
                                    <option value="F" <?php echo $arrEmail['usu_sexo'] == 'F' ? 'selected':'' ?>>Femenino</option>
                                </select>
                                <label for="first_name">Sexo</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field">
                                <input placeholder="Ingrese su nro. fijo" value="<?php echo $arrEmail['usu_telefono']?>" id="email" name="fijo" type="text" class="validate numero">
                                <label for="first_name">Telefono fijo</label>
                            </div>
                        </div>
                        <div class="col-md-4 padR0">
                            <div class="input-field">
                                <input placeholder="Ingrese su nro. celular" value="<?php echo $arrEmail['usu_telefono']?>" id="celular" name="celular" type="text" class="validate numero">
                                <label for="first_name">Celular</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input type="checkbox" name="discapacidad" value="1" id="discapacidad" <?php echo $arrEmail['usu_discapacidad'] == '1' ? 'checked':'' ?> />
                            <label for="discapacidad">Poseo algún tipo de discapacidad</label>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="input-field">
                            <input placeholder="Ingrese su ripo de discapacidad" id="texotdiscapacidad" name="texotdiscapacidad" type="text" class="validate texto" value="<?php echo $arrEmail['usu_texodiscapacidad']?>">
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
                    <button class="btn btn-red btn-send">Actualizar</button>
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

<script type="text/javascript" >
    $(document).ready(function() { 
    }); 

    //Obtenemos el id del input y llamamos al evento live
    $(document).on('change','#photoimg', function(){
        //Antes de iniciar debemos de limpiar la visualización para verificar que no aya ninguna imagen anterior
        $("#preview").html('');
        //Colocamos una imagen de load
        $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
        // Llamamos al evento ajaxform para pasar los datos obtenidos del input
        $("#imageform").ajaxForm({
            target: '#preview'
        }).submit();
    });
</script>