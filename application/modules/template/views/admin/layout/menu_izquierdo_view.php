<aside id="sidebar_left" class="nano nano-primary">
    <div class="nano-content">

        <!-- sidebar menu -->
        <ul class="nav sidebar-menu">
            <li class="sidebar-label pt20">Menu</li>
            <li class="">
                <!-- <a class="accordion-toggle menu-open" href="#"> -->
                <a class="accordion-toggle" href="#">
                    <span class="glyphicons glyphicons-cup"></span>
                    <span class="sidebar-title">Usuarios</span>
                    <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li>
                        <a href="<?php echo base_url().'usuario/postulante' ?>">
                            <!-- <span class="glyphicons glyphicons-more_windows"></span> Empresas Registradas -->
                            - Empresas Registradas
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'usuario/postulante' ?>">
                            - Postulantes Registrados
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url().'usuario/dashboard' ?>">
                            - Usuarios Sistema 
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'usuario/rol' ?>">
                            - Roles Administrador
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'usuario/permisos' ?>">
                            - Permisos Administrador
                        </a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a class="accordion-toggle" href="#">
                    <span class="glyphicons glyphicons-cup"></span>
                    <span class="sidebar-title">Empresas</span>
                    <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li>
                        <a href="<?php echo base_url().'usuario/empresa' ?>">
                            - Empresas Registradas
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'usuario/postulante' ?>">
                            - Postulantes Registrados
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'usuario/postulaciones' ?>">
                            - Postulaciones
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>
</aside>