<section id="content_wrapper">

            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <a href="<?php echo base_url() ?>">Dashboard</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="<?php echo base_url() ?>">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-link">
                            <a href="<?php echo site_url('usuario/permisos') ?>">Home</a>
                        </li>
                        <li class="crumb-trail">Permisos</li>
                    </ol>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="table-layout" style="/*min-height: 3500px;*/">

                <!-- begin: .tray-left -->
                <aside class="tray tray-left tray320 va-t pn" data-tray-height="match">

                    <div class="animated-delay p20" data-animate='["300","fadeIn"]'>
                        <h4 class="mt5 mb20"> Perfiles - <span class="fs14 fw400 text-muted"> Usuario</span></h4>
                    </div>
                    <div id="nav-spy">
                        <ul class="nav tray-nav tray-nav-border custom-nav-animation" data-spy="affix" data-offset-top="240">
                            <li class="active">
                                <a href="#">
                                    SUPER ADMIN</a>
                            </li>
                            <?php foreach ($rol as $rls) { ?>
                                <li >
                                    <a href="<?php echo site_url('usuario/permisos/mod/'.$rls->id_rol) ?>">
                                         <?php echo $rls->rol_descripcion ?></a>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>

                </aside>
                <!-- end: .tray-left -->

                <!-- begin: .tray-center -->
                <div class="tray tray-center p40 va-t posr">
                    <div class="alert alert-default light alert-dismissable">
                        Los permisos de <strong>administrador </strong>no pueden ser modificados.
                    </div>
                </div>
                <!-- end: .tray-center -->

            </section>
            <!-- End: Content -->

        </section>