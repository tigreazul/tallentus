<body class="tables-datatables-page admin-elements-page" data-spy="scroll" data-target="#nav-spy" data-offset="300">

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <?php echo $this->load->view('layout/menu_superior_view') ?>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <?php echo $this->load->view('layout/menu_izquierdo_view') ?>
        <!-- End: Sidebar -->

        <!-- Start: Content -->
        <?php $this->load->view($module."/".$view_file); ?>
        <!-- End: Content -->

    </div>
    <!-- End: Main -->


    