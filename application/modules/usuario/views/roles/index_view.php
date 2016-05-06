<section id="content_wrapper">
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="<?php echo base_url() ?>">Dashboard</a>
                </li>
                <li class="crumb-icon">
                    <a href="<?php echo base_url() ?>">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                </li>
                <li class="crumb-link">
                    <a href="<?php echo base_url() ?>">Inicio</a>
                </li>
                <li class="crumb-trail">Rol</li>
            </ol>
        </div>
    </header>
    <!-- End: Topbar -->

    <div id="content">

        <div class="row mt20 text-center bn10">
            <div class="col-xs-2">
                <a href="<?php echo base_url().'usuario/rol/add' ?>" title="" class="btn active btn-warning btn-block">AGREGAR</a>
            </div>
        </div>

        <div class="row">
            
            <div class="col-md-12">
                <div class="panel panel-visible">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Lista de usuario</div>
                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-bordered table-hover" id="datatable2" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Documento</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($rol)) : ?>
                                    <?php foreach ($rol as $rols): ?>
                                        <tr>
                                            <td><?php echo $rols->id_rol; ?></td>
                                            <td><?php echo strtoupper($rols->rol_descripcion); ?></td>
                                            <td>
                                                <span class="modi">
                                                    <a href="<?php echo base_url().'usuario/rol/edit/'.$rols->id_rol; ?>" title="" style="padding: 10px">
                                                        <span class="imoon imoon-pencil"></span>
                                                    </a>
                                                </span>
                                                
                                                <span class="dele">
                                                    <a onclick="deleteDato(<?php echo $rols->id_rol; ?>);" href="#">
                                                        <span class="imoon imoon-remove2"></span>
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
    function deleteDato(id) {
        var r = confirm("Desea eliminar este dato?");
        if (r == true) {
            location.href = "<?php echo base_url().'usuario/rol/delete/' ?>"+id;
        }
        return false;
    }
</script>