

    <!-- Bootstrap -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/js/bootstrap/bootstrap.min.js"></script>

    <!-- Datatables -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/vendor/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>

    <!-- Vendor Formulario -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/default/admin-tools/admin-forms/css/admin-forms.css">
    
    <!-- Page Plugins -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/vendor/editors/xeditable/js/bootstrap-editable.js"></script>

    <!-- Jquery Validate -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/vendor/jvalidate/jquery.validate.js"></script>


    <!-- Page Plugins -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/vendor/plugins/magnific/jquery.magnific-popup.js"></script>


    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/admin-tools/admin-forms/js/jquery-tcm-month.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/admin-tools/admin-forms/js/jquery-ui-timepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/admin-tools/admin-forms/js/jquery-ui-touch-punch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/admin-tools/admin-forms/js/jquery.spectrum.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/admin-tools/admin-forms/js/jquery.stepper.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/js/utility/utility.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/js/demo.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/default/js/core.js"></script>
    
    <script type="text/javascript">
        jQuery.validator.setDefaults({
            highlight: function (element, errorClass, validClass) {
                if (element.type === "radio") {
                    this.findByName(element.name).addClass(errorClass).removeClass(validClass);
                } else {
                    $(element).closest('.section').removeClass('has-success has-feedback').addClass('has-error has-feedback');
                    $(element).closest('.section').find('i.fa').remove();
                    $(element).closest('.section').append('<i class="fa fa-exclamation fa-lg form-control-feedback"></i>');
                }
            },
            unhighlight: function (element, errorClass, validClass) {
                if (element.type === "radio") {
                    this.findByName(element.name).removeClass(errorClass).addClass(validClass);
                } else {
                    $(element).closest('.section').removeClass('has-error has-feedback').addClass('has-success has-feedback');
                    $(element).closest('.section').find('i.fa').remove();
                    $(element).closest('.section').append('<i class="fa fa-check fa-lg form-control-feedback"></i>');
                }
            }
        });

        jQuery.validator.addMethod("letras_espacios", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
        }, "Sólo letras y espacios");
    </script>
    
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Demo JS   
            Demo.init();


            var modalContent = $('#modal-content');

            modalContent.on('click', '.holder-style', function(e) {
                e.preventDefault();

                modalContent.find('.holder-style').removeClass('holder-active');
                $(this).addClass('holder-active');
            });

            function findActive() {
                var activeModal = modalContent.find('.holder-active').attr('href');
                return activeModal;
            };




            $('#animation-switcher button').on('click', function() {
                $('#animation-switcher').find('button').removeClass('active-animation');
                $(this).addClass('active-animation item-checked');

                // alert('s');
                // Inline Admin-Form example 
                $.magnificPopup.open({
                    removalDelay: 500, //delay removal by X to allow out-animation,
                    items: {
                        src: findActive()
                    },
                    // overflowY: 'hidden', // 
                    callbacks: {
                        beforeOpen: function(e) {
                            var Animation = $("#animation-switcher").find('.active-animation').attr('data-effect');
                            this.st.mainClass = Animation;
                        }
                    },
                    midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
                });

            });



            // Init Highlight.js Plugin
            $('pre code').each(function(i, block) {
                hljs.highlightBlock(block);
            });

            // Select all text in CSS Generate Modal
            $('#modal-close').click(function(e) {
                e.preventDefault();
                $('.datatables-demo-modal').modal('toggle');
            });

            $('.datatables-demo-code').on('click', function() {
                var modalContent = $(this).prev();
                var modalContainer = $('.datatables-demo-modal').find('.modal-body')

                // Empty Modal of Existing Content
                modalContainer.empty();

                // Clone Content and Place in Modal
                modalContent.clone(modalContent).appendTo(modalContainer);

                // Toggle Modal
                $('.datatables-demo-modal').modal({
                    backdrop: 'static'
                })
            });

            // Init Datatables with Tabletools Addon    
            $('#datatable2').dataTable({
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [-1]
                }],
                "oLanguage": {
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "NingÃºn dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sPrevious": "",
                        "sNext": ""
                    },
                    "sEmptyTable": "No hay resultados para <?php echo $page_title ?>"
                },
                "iDisplayLength": 10,
                "aLengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
                "oTableTools": {
                    "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                }
            });

            // MISC DATATABLE HELPER FUNCTIONS
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd',
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });


            $('.timepicker').timepicker({
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            // Add Placeholder text to datatables filter bar
            $('.dataTables_filter input').attr("placeholder", "Buscar...");

            // Manually Init Chosen on Datatables Filters
            // $("select[name='datatable2_length']").chosen();
            // $("select[name='datatable3_length']").chosen();
            // $("select[name='datatable4_length']").chosen();

            // Init Xeditable Plugin
            $.fn.editable.defaults.mode = 'popup';
            $('.xedit').editable();


        });


        $('.texto').keypress(function(tecla) {
            var reg = /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ'_\s]+$/;
            if(!reg.test(String.fromCharCode(tecla.which))){
                return false;
            }      
        });
        
        $('.numero').keypress(function (tecla) {
            var reg = /^[0-9-\s]+$/;
            if(!reg.test(String.fromCharCode(tecla.which))){
                return false;
            }
        });



        $('#departamento').change(function(){
            var e = $(this).val();
            $("#distrito").html("");
            $("#provincia").html();
            $.ajax({
                url: '<?php echo base_url() ?>personal/clientes/ajax_departamento',
                data: 'id='+e,
                type: 'POST',
                success:function(v){
                    $("#provincia").html(v);
                }
                
            });
        });


        $('#provincia').change(function(){
            var e = $(this).val();
            $("#provincia").html();
            $.ajax({
                url: '<?php echo base_url() ?>personal/clientes/ajax_provincia',
                data: 'id='+e,
                type: 'POST',
                success:function(v){
                        $("#distrito").html(v);
                }
                
            });
        });


        $('#departamento').ready('change',function(){
            var e = $(this).val();
            $("#distrito").html("");
            $("#provincia").html();
            $.ajax({
                url: '<?php echo base_url() ?>personal/clientes/ajax_departamento',
                data: 'id='+e,
                type: 'POST',
                success:function(v){
                    $("#provincia").html(v);
                }
                
            });
        });


        $('#provincia').ready('change',function(){
            var e = $(this).val();
            $("#provincia").html();
            $.ajax({
                url: '<?php echo base_url() ?>personal/clientes/ajax_provincia',
                data: 'id='+e,
                type: 'POST',
                success:function(v){
                        $("#distrito").html(v);
                }
                
            });
        });




    </script>
</body>

</html>
