<header class="navbar navbar-fixed-top bg-danger">
    <div class="navbar-branding">
        <a class="navbar-brand" href=""> <b>TALLENTUS</b> </a>
        <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
        <ul class="nav navbar-nav pull-right hidden">
            <li>
                <a href="#" class="sidebar-menu-toggle">
                    <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                </a>
            </li>
        </ul>
    </div>

    <ul class="nav navbar-nav navbar-right">

        <li class="ph10 pv20"> <i class="fa fa-circle text-tp fs8"></i>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> 
                <img src="<?php echo base_url() ?>assets/admin/default/img/avatars/5.jpg" alt="avatar" class="mw30 br64 mr15">
                <span><?php echo $this->session->userdata('username') ?></span>
                <span class="caret caret-tp"></span>
            </a>
            <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                
                <li class="br-t of-h">
                    <a href="#" class="fw600 p12 animated animated-short fadeInDown">
                        <span class="fa fa-gear pr5"></span> Account Settings </a>
                </li>
                <li class="br-t of-h">
                    <a href="<?php echo site_url('login/inicio/logout') ?>" class="fw600 p12 animated animated-short fadeInDown">
                        <span class="fa fa-power-off pr5"></span> Salir 
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</header>