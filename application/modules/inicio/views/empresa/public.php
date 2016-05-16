<div class="container-fluid" id="info-empresa">
    <div class="container info-head">
        <div class="col-md-1">
            <img src="<?php echo $BASE_URL ?>uploads/empresa/<?php echo $empresa['emp_logo'] ?>" class="img-responsive img-center img-circle" width="100%">
        </div>
        <div class="col-md-11">
            <div class="row">
                <div class="col-md-8">
                    <div class="datos">
                        <h2><?php echo $empresa['emp_razon_social'] ?></h2>
                        <p>
                            <i><img src="<?php echo $frontend ?>assets/img/map-marker.svg" class="img-small"></i>Lima, Perú
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container" id="historial-cuenta">
    <article class="col-md-9">
        <div class="row text-justify info">
            <h3>Sobre la empresa</h3>
            <p><?php echo $empresa['emp_descripcion'] ?></p>
            <ul class="list-unstyled">
                <li>• Desarrollo profesional</li>
                <li>• Bonos e incentivos por objetivos conseguidos.</li>
                <li>• Estabilidad laboral: contrato en planilla.</li>
                <li>• Capacitación constante</li>
            </ul>
            <div class="linea"><span class="arrow"></span></div>
        </div>
        <div class="row historial">
            <div class="col-md-12 bg">
                <div class="row lst_empleos">

                    <table class="highlight" data-page-size="6">
                        <tbody>
                            <?php //var_dump($postu) ?>
                            <?php foreach ($postu as $pst) : ?>
                              <tr>
                                <td>
                                    <div class="col-lg-12 col-md-12 col-sm-12 bordered" data-type="empleo">
                                        <a href="<?php echo base_url().'empleo/'.$pst->postu_seo ?>">
                                            <div class="img pull-left"><img src="<?php echo $frontend ?>upload/item-empresa.jpg" class="img-circle"> </div>
                                        </a>
                                        <div class="info pull-left">
                                            <h3><?php echo $pst->postu_titulo ?></h3>
                                            <h4><?php echo $pst->emp_razon_social ?></h4>
                                            <p><span><?php echo $pst->dist_descripcion ?></span> / <?php echo $pst->jor_descripcion ?></p>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url().'empleo/'.$pst->postu_seo ?>" class="btn-red waves pull-right waves-effect">Presentarse hoy día</a>
                                        </div>
                                    </div>
                                </td>
                              </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot class="hide-if-no-paging">
                            <tr>
                                <td class="text-center">
                                    <div class="pagination pagination-centered"></div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
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