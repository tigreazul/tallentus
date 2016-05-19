<aside class="sidebar col-md-2">
    <div class="row bg menu-usuario">
        <div class="col-md-12 pad15">
            <ul class="list-unstyled">
                <li class="h3"><span><img src="<?php echo $frontend ?>assets/img/bolsa.svg"></span>Filtros Seleccionados</li>
                <?php 
                $palabra = $this->session->userdata('palabra');
                if(!empty($palabra)): ?>
                    <li><a href="<?php echo $BASE_URL ?>q/palabra="><?php echo str_replace('-',' ',strtoupper($palabra)); ?>  <span class="glyphicon glyphicon-remove"></span></a></li>
                <?php endif ?>

                <?php 
                $distr = $this->session->userdata('distrito');
                if(!empty($distr)): ?>
                    <li><a href="<?php echo $BASE_URL ?>q/distrito="><?php echo str_replace('-',' ',strtoupper($distr)); ?>  <span class="glyphicon glyphicon-remove"></span></a></li>
                <?php endif ?>

                <?php 
                $salario = $this->session->userdata('salario');
                if(!empty($salario)): ?>
                    <li><a href="<?php echo $BASE_URL ?>q/salario="><?php echo str_replace('-',' ',$salario); ?>  <span class="glyphicon glyphicon-remove"></span></a></li>
                <?php endif ?>

                <?php 
                $fecha = $this->session->userdata('fecha');
                if(!empty($fecha)): ?>
                    <li><a href="<?php echo $BASE_URL ?>q/fecha="><?php echo str_replace('-',' ',$fecha); ?>  <span class="glyphicon glyphicon-remove"></span></a></li>
                <?php endif ?>

                <li><hr></li>
            </ul>
            <!-- <ul class="list-unstyled">
                <li class="h3"><span><img src="<?php echo $frontend ?>assets/img/ofertas.svg"></span>Vizualización CVs</li>
                <li><a href="<?php echo $BASE_URL ?>q/salario=menos-750">Leídos</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/salario=mas-750">No Leídos</a></li>
            </ul> -->

            <!-- <ul class="list-unstyled">
                <li class="h3"><span><img src="<?php echo $frontend ?>assets/img/bolsa.svg"></span>Distrito</li>
                <?php foreach ($distrito as $dist) : ?>
                    <li><a href="<?php echo $BASE_URL.'q/distrito='.slugify($dist['describe_dist']);  ?>">
                        <?php echo $dist['describe_dist'];  ?></a> 
                    </li>
                <?php endforeach ?>
            </ul> -->
            <ul class="list-unstyled">
                <li class="h3"><span><img src="<?php echo $frontend ?>assets/img/ofertas.svg"></span>Sexo</li>
                <li><a href="<?php echo $BASE_URL ?>q/salario=menos-750">Masculino</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/salario=mas-750">Femenino</a></li>
            </ul>
            <ul class="list-unstyled">
                <li class="h3"><span><img src="<?php echo $frontend ?>assets/img/empresa.svg"></span>Edad</li>
                <li><a href="<?php echo $BASE_URL ?>q/fecha=urgente">Hasta 18 años</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/fecha=hoy">Entre 18 y 23 años</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/fecha=3-dias">Entre 24 y 30 años</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/fecha=ultima-semana">Entre 31 y 35 años</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/fecha=15-dias">Entre 36 y 40 años</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/fecha=ultimo-mes">Entre 41 y 45 años</a></li>
            </ul>
        </div>
    </div>
</aside>