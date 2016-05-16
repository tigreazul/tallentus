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

    <?php // var_dump($arrEmail); ?>
    <div class="row registro">
        <form id="imageform" method="post" enctype="multipart/form-data" action='<?php echo $BASE_URL ?>upload-empresa' style="margin-top: 12px;">
            <div class="col-md-2 mg30">
                <div class="row bg">
                    <div class="image_upload" id="preview">
                        <?php 
                        $imagen = $arrEmail['emp_logo'];
                        if($imagen != '' and !empty($imagen)):
                            echo "<img src='".$BASE_URL."uploads/empresa/".$imagen."'  class='img-responsive img-center'>";
                        else: 
                            echo '<img src="'.$frontend.'assets/img/user_load.svg" class="img-responsive img-center">';
                        endif 
                        ?>
                    </div>
                    <div class="file-field input-field">
                        <div class="btn btn-red">
                            <span>Imagen</span>
                            <input type="file" name="photoimg" id="photoimg" />
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Cargar...">
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form action="<?php echo $BASE_URL ?>empresa/editar-perfil" method="post" class="registro_final">

            <div class="col-md-10 mg30">

                <div class="row bg">

                    <div class="col-md-4">
                        <div class="input-field">
                            <input placeholder="" value="<?php echo $arrEmail['emp_nombre'] ?>" name="nombre" id="nombres" type="text" class="validate" required>
                            <input value="<?php echo base64_encode($arrEmail['emp_id']) ?>" name="id" type="hidden">
                            <label for="first_name">Nombres</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input placeholder="" name="email" value="<?php echo $arrEmail['emp_email'] ?>" id="email" type="email" class="validate" required>
                            <label for="first_name">Correo Electronico o E-mail</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input placeholder="" name="ruc" value="<?php echo $arrEmail['emp_ruc'] ?>" id="ruc" type="text" class="validate" required>
                            <label for="first_name">RUC</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input placeholder="" value="<?php echo $arrEmail['emp_razon_social'] ?>" id="razon" name="razon" type="text" class="validate" required>
                            <label for="first_name">Razon Social</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input placeholder="" name="direccion" value="<?php echo $arrEmail['emp_direccion'] ?>" id="direccion" type="text" class="validate">
                            <label for="first_name">Dirección</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-field">
                            <input placeholder="" id="email" name="fijo" type="text" value="<?php echo $arrEmail['emp_telefono'] ?>" class="validate">
                            <label for="first_name">Telefono fijo</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="input-field">
                            <input placeholder="" id="descripcion" name="descripcion" value="<?php echo $arrEmail['emp_descripcion'] ?>" type="text" class="validate">
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
                    <button type="submit" class="btn btn-red btn-send">Actualizar</button>
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