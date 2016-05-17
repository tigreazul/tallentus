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

            <ul class="list-unstyled">
                <li class="h3"><span><img src="<?php echo $frontend ?>assets/img/bolsa.svg"></span>Distrito</li>
                <?php foreach ($distrito as $dist) : ?>
                    <li><a href="<?php echo $BASE_URL.'q/distrito='.slugify($dist['describe_dist']);  ?>">
                        <?php echo $dist['describe_dist'];  ?> (<?php echo $dist['postu_dist'];  ?>)</a> 
                    </li>
                <?php endforeach ?>
            </ul>
            <ul class="list-unstyled">
                <li class="h3"><span><img src="<?php echo $frontend ?>assets/img/ofertas.svg"></span>Salario</li>
                <li><a href="<?php echo $BASE_URL ?>q/salario=menos-750">Menos de S/.750</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/salario=mas-750">Mas de S/.750</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/salario=1500">Mas de S/.1500</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/salario=3000">Mas de S/.3000</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/salario=1000">Mas de S/.10000</a></li>
            </ul>
            <ul class="list-unstyled">
                <li class="h3"><span><img src="<?php echo $frontend ?>assets/img/empresa.svg"></span>Fecha Publicación</li>
                <li><a href="<?php echo $BASE_URL ?>q/fecha=urgente">Urgente</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/fecha=hoy">Hoy</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/fecha=3-dias">Últimos 3 días</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/fecha=ultima-semana">Última Semana</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/fecha=15-dias">Última 15 días</a></li>
                <li><a href="<?php echo $BASE_URL ?>q/fecha=ultimo-mes">Última mes</a></li>
            </ul>
        </div>
    </div>
</aside>