<section class="internal-header overlay-dark" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
         
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url() ?>">Inicio</a></li>  
          
          <li class="active">Noticias  </li>
        </ol>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end internal-header -->
<section class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php //print_r($noticia) ?>
        <?php foreach ($noticia as $not) { ?>
          <div class="news-box">
            <figure>
              <?php if ($not->imagen != '') { ?>
                <img src="<?php echo base_url() ?>uploads/noticia/<?php echo $not->id_noticia ?>/<?php echo $not->imagen ?>" alt="Image"> 
              <?php }else{ ?>
                <img src="<?php echo base_url() ?>uploads/noticia/default.jpg" alt="Image"> 
              <?php } ?>
              <!-- <span class="date"><b><?php echo date('d',strtotime($not->fecha));?></b>
              <?php echo strtoupper(date('M',strtotime($not->fecha)));?></span>  -->
            </figure>
            <h3><?php echo $not->titulo; ?></h3>
            <p><?php echo $not->descrip; ?></p>
            <?php if ($not->archivo != '') { ?>
              <a href="<?php echo base_url() ?>uploads/noticia/<?php echo $not->id_noticia ?>/<?php echo $not->archivo ?>" target="_blank" class="read-link">Descargar </a> <BR> <BR> <BR>
            <?php } ?>
          </div>
        <?php } ?>

        <!-- end news-box --> 
         <!-- <div class="news-box">
          <figure><img src="<?php echo base_url() ?>assets/frontend/default/images/noticias-2.jpg" alt="Image"> <span class="date"><b>3</b>JUL</span> </figure>
          <h3>NUESTROS RECONOCIMIENTOS</h3>
          
          
         
        </div> -->
        <!-- end news-box --> 
       
        
        
        <!-- end news-box --> 
      </div>
      <!-- end col-8 -->
      <div class="col-md-4">
        <aside class="blog-sidebar">
    
        <!-- end text-content -->
            
            <!-- end social-media -->
            <div class="widgets search">
            <h2>BUSCAR</h2>
              <form>
                <input type="text" placeholder="Buscar Noticias">
                <button type="submit">IR</button>
              </form>
            </div>
            <!-- end search -->
            <div class="widgets tags">
            <h2>TAGS</h2>
             <a href="#">RECONOCIMIENTOS</a> 
             <a href="#">CERTIFICACIÓN</a> 
             <a href="#">ISO</a>   </div>
            <!-- end tags -->
           
          </aside>
      </div>
      <!-- end col-4 -->
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end gallery -->
<?php echo $this->load->view('layout/suscribe_view') ?>