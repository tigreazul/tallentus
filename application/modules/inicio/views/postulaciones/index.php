<div class="container-fluid" id="info-empresa">
    <div class="container info-head">
        <div class="col-md-12">
            <nav class="row breadcrumbs">
                <div class="nav-wrapper">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- <a href="#!" class="breadcrumb">Inicio</a>
                            <a href="#!" class="breadcrumb">Educación</a>
                            <a href="#!" class="breadcrumb">Docencia e investigación</a>
                            <a href="#!" class="breadcrumb">Analista Asistente</a>
                            <a href="#!" class="breadcrumb">ANALISTA DE MARKETING</a> -->
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <?php //var_dump($tbl_postu) ?>
            <div class="row">
                <h1><?php echo $tbl_postu['postu_titulo'] ?></h1>
            </div>
        </div>
        <div class="col-md-1">
            <div class="row">
                <img src="<?php echo $frontend ?>assets/img/user_new.svg" class="img-responsive img-center img-circle" width="100%">
            </div>
        </div>
        <div class="col-md-11">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="datos">
                        <h2><?php echo $tbl_postu['emp_razon_social'] ?></h2>
                        <p>
                            <i><img src="<?php echo $frontend ?>assets/img/map-marker.svg" class="img-small"></i><?php echo $tbl_postu['dist_descripcion'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 text-right btn-datos btn-empleo">
                    <input type="hidden" id="f" name="f" value="<?php echo base64_encode($tbl_postu['postu_id']) ?>">
                    <a class="waves-effect waves-light pull-right btn btn-red mgBot10 modal-trigger" href="<?php echo base_url().'postular/'.base64_encode($tbl_postu['postu_id']) ?>">Postular a Ofertas</a><br>
                    <!-- <a href="#!" class="waves-effect waves-red pull-right btn send-msg add_favorite" onclick="messageInfo(1);">Agregar a favoritos</a> -->
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container" id="historial-cuenta">
    <article class="col-md-9">
        <div class="row text-justify info">
            <h3>Descripción de la Oferta</h3>
            <?php echo $tbl_postu['postu_desc_larga'] ?>

            <div class="linea"><span class="arrow"></span></div>
            <h3>Beneficios</h3>
            <?php echo $tbl_postu['postu_beneficios'] ?>

            <div class="linea"><span class="arrow"></span></div>
            <h3>Requisitos</h3>
            <?php echo $tbl_postu['postu_requisitos'] ?>
            <div class="linea"><span class="arrow"></span></div>
            <h3>Vacantes:</h3><?php echo $tbl_postu['postu_vacantes'] ?>
            <h3>Salario:</h3><?php echo $tbl_postu['postu_salario'] ?>
            <h3>Distrito:</h3><?php echo $tbl_postu['dist_descripcion'] ?>
            <h3>Contrato:</h3><?php echo $tbl_postu['contra_descripcion'] ?>
            <h3>Educación:</h3><?php echo $tbl_postu['edu_descripcion'] ?>
            <h3>Jornada:</h3><?php echo $tbl_postu['jor_descripcion'] ?>
            <div class="linea"><span class="arrow"></span></div>
            <p class="btn-datos">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $BASE_URL.'empleo/'.$tbl_postu['postu_seo'] ?>" target="_blank" class="btn light-blue darken-3 fb"><i><img src="<?php echo $frontend ?>assets/img/facebook_user.svg" class="img-small"></i>Compartir</a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $BASE_URL ?>#.Vy2TEvKmF_0.linkedin&title=<?php echo $tbl_postu['postu_seo'] ?>&ro=false&summary=&source=" target="_blank" class="btn light-blue accent-1 in"><i><img src="<?php echo $frontend ?>assets/img/LinkedIn_user.svg" class="img-small"></i>Compartir</a>
            </p>
        </div>
    </article>
    <aside class="col-md-3">
        <div class="bg pad0_15" id="tabs">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <ul class="tabs">
                            <li class="tab title col-md-8">Ofertas relacionadas</li>
                        </ul>
                    </div>
                </div>
                <div id="ofertas" class="col-md-12">
                    <?php foreach ($rand_post as $val) : ?>
                        <div class="item">
                            <h3><a href="<?php echo $BASE_URL.'empleo/'.$val->postu_seo ?>"><?php echo $val->postu_titulo ?></a></h3>
                            <p><?php echo $val->emp_razon_social ?></p>
                        </div>
                    <?php endforeach ?>
                    
                </div>
            </div>
        </div>
    </aside>
</section>


<script type="text/javascript">

$(function(){
    // $.ajax({
    //     method:"POST",
    //     url: "",
    //     data: "",
    //     success: function(data){

    //     }
    // });
});
</script>