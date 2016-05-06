
    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- Google Map API -->
    <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> -->

    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/js/bootstrap/bootstrap.min.js"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/js/pages/login/EasePack.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/js/pages/login/rAF.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/js/pages/login/TweenLite.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/js/pages/login/login.js"></script>

    <!-- Jquery Validate -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/vendor/jvalidate/jquery.validate.js"></script>
    
    <!-- Theme Javascript -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/js/utility/utility.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/js/demo.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core      
            Core.init();

            // Init Demo JS
            Demo.init();

            // Init CanvasBG and pass target starting location
            CanvasBG.init({
                Loc: {
                    x: window.innerWidth / 2,
                    y: window.innerHeight / 3.3
                },
            });


        });
    </script>

    <!-- END: PAGE SCRIPTS -->
