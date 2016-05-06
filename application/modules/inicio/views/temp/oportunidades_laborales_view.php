<section class="internal-header overlay-dark" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php if(!empty($this->session->userdata('username'))){ ?>
          <ol class="breadcrumb" style="float:left">
            <li><?php echo $this->session->userdata('username') ?></li>  
            <li class="active"><a href="<?php echo base_url() ?>salir" title="">Salir</a></li>
          </ol>
        <?php } ?>

        <ol class="breadcrumb">
          <li><a href="<?php echo base_url() ?>">Inicio</a></li>  
          <li class="active">Oportunidades Laborales  </li>
        </ol>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end internal-header -->
<section class="career">
  <div class="container" >
    <div class="row">
      <div class="col-xs-12">
        <div class="titles">
  
          <h2>OPORTUNIDADES LABORALES</h2>
        </div>


        <!-- end title --> 
      </div>
     
       
     
      <!-- end col-12 -->
      <p style="color: red"><?php echo $this->session->flashdata('mensaje') ?></p>
       <div class="col-xs-12"  ALIGN=center>
         <h2>Estamos Buscando</h2>
        <!-- end title --> 
      </div>
      <!-- end col-12 -->
      <div class="col-xs-12">
        <ul class="position-list">
          <li>
              <h5>N°  &nbsp; &nbsp; CARGO / POSICIONES</h5>
                <span>ÁREA</span>
                <span style="float: right;">RÉGIMEN</span>
            </li>
        </ul>
      	<ul class="position-list">
          
          <?php $i = 1; foreach ($oportunidades as $opo): ?>
          <ul class="position-list">
            <li>
              <h5>
                <a href="<?php echo base_url().'oportunidades-laborales/'.$opo->id_convocatoria ?>" style="float:left">
                  <?php echo $i.'. '; ?>
                  <?php echo $opo->puesto ?>
                </a>
              </h5>
              <span><?php echo $opo->areas ?></span>
                <div style="float:right">
              <?php echo $opo->regimen ?>
                </div>
            </li>
          </ul>
        <?php $i++; endforeach ?>
        </ul>
      </div>
      <!-- end col-12 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end gallery -->
<?php echo $this->load->view('layout/suscribe_view') ?>