    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <!--<script src="<?php echo $frontend ?>assets/js/jquery-1.11.1.min.js"></script> -->
    

    <script src="<?php echo $frontend ?>assets/js/bootstrap.min.js"></script>

    <script src="<?php echo $frontend ?>assets/js/waves.js"></script>
    <script src="<?php echo $frontend ?>assets/js/tallentus.js"></script>
    <script src="<?php echo $frontend ?>assets/masterslider/jquery.easing.min.js"></script>
    <!-- Master Slider -->
    <script src="<?php echo $frontend ?>assets/masterslider/masterslider.min.js"></script>
    

    


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo $frontend ?>assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>

        

        Waves.init();
        Waves.attach('.waves');


        var slider = new MasterSlider();
        slider.setup('masterslider' , {
            width:1500,    // slider standard width
            height:340,   // slider standard height
            space:1,
            layout:'fullwidth',
            loop:true,
            preload:0,
            autoplay:true
        });

        var carrousel = new MasterSlider();
        carrousel.setup('carousel' , {
            loop:true,
            width:240,
            height:240,
            speed:20,
            view:'focus',
            preload:0,
            space:25,
            wheel:true,
            viewOptions:{centerSpace:1.6}
        });
        carrousel.control('arrows');
        carrousel.control('slideinfo',{insertTo:'#staff-info'});

        $(document).ready(function(){
            //$('ul.tabs').tabs('select_tab', 'tab_id');
        });

    </script>
    <?php if(isset($web_js)){foreach($web_js as $js){?>
        <script type="text/javascript"<?php if(isset($js['src'])) echo ' src="'.$frontend.$js['src'].'"' ?>><?php if(isset($js['text'])) echo $js['text'] ?></script> 
    <?php echo "\n"; }} ?>