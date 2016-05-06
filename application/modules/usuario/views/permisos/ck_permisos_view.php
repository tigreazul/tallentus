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
                    <div style="display: none" id="url_mod">
                        <?php echo site_url('usuario/permisos/update') ?>
                    </div>
                    <input type="hidden" name="id_rol" value="<?php echo $active ?>" id="idrol">
                    <div class="animated-delay p20" data-animate='["300","fadeIn"]'>
                        <h4 class="mt5 mb20"> Perfiles - <span class="fs14 fw400 text-muted"> Usuario</span></h4>
                    </div>
                    <div id="nav-spy">
                        <ul class="nav tray-nav tray-nav-border custom-nav-animation" data-spy="affix" data-offset-top="240">
                            <li class="<?php !isset($active) ? '' : 'active' ; ?>">
                                <a href="<?php echo site_url('usuario/permisos') ?>">
                                    SUPER ADMIN</a>
                            </li>
                            <?php foreach ($rol as $rls) { ?>
                                <li class="<?php echo $rls->id_rol == $active ? 'active' : '' ?>" >
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

                    <div class="panel" id="spy4">
                        <div class="panel-heading">
                            <span class="panel-title">
                                <span class="glyphicons glyphicons-table"></span>Permisos
                            </span>
                        </div>
                        <a href="#" class="notification" data-note-stack="stack_bottom_right" data-note-style="info"></a>
                        <div class="panel-body pn">
                            <div class="table-responsive">
                                <table class="table table-bordered mbn text-center" id="table_check">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Ver</th>
                                            <th>Agregar</th>
                                            <th>Actualizar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php //print_r($pagina); ?>
                                        <?php foreach ($pagina as $pag) { ?>
                                            <?php //echo '<pre>';print_r($pag);echo '</pre>'; ?>
                                            <tr>
                                                <td><?php echo $pag['descripcion'] ?></td>
                                                <td><input type="checkbox" name="id" id="ck_<?php echo $pag['id_pagina'] ?>_ver" value="<?php  echo !empty($pag['permisos']['ver']) ? '0' : '1' ; ?>" <?php  echo !empty($pag['permisos']['ver']) ? 'checked' : '' ; ?>></td>
                                                <td><input type="checkbox" name="id" id="ck_<?php echo $pag['id_pagina'] ?>_add" value="<?php  echo !empty($pag['permisos']['add']) ? '0' : '1' ; ?>" <?php  echo !empty($pag['permisos']['add']) ? 'checked' : '' ; ?>></td>
                                                <td><input type="checkbox" name="id" id="ck_<?php echo $pag['id_pagina'] ?>_up"  value="<?php  echo !empty($pag['permisos']['up']) ? '0' : '1' ; ?>" <?php  echo !empty($pag['permisos']['up']) ? 'checked' : '' ; ?>></td>
                                                <td><input type="checkbox" name="id" id="ck_<?php echo $pag['id_pagina'] ?>_del" value="<?php  echo !empty($pag['permisos']['del']) ? '0' : '1' ; ?>" <?php  echo !empty($pag['permisos']['del']) ? 'checked' : '' ; ?>></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end: .tray-center -->

            </section>
            <!-- End: Content -->

        </section>