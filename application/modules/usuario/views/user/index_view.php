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
                <li class="crumb-trail">Usuario</li>
            </ol>
        </div>
    </header>
    <!-- End: Topbar -->

    <div id="content">

        <div class="row mt20 text-center bn10">
            <div class="col-xs-2">
                <a href="<?php echo base_url().'usuario/dashboard/add' ?>" title="" class="btn active btn-danger btn-block">AGREGAR</a>
            </div>
        </div>

        <?php
            $correcto = $this->session->flashdata('message');
            $document = $this->session->flashdata('documento');
            // echo $document;
            switch ($correcto) {
                case 'update':
                    $texto = "Se ha <strong>ACTUALIZADO</strong> correctamente";
                    break;
                case 'insert':
                    $texto = "Se ha <strong>INSERTADO</strong> correctamente";
                    break;
                case 'error_nro':
                    $texto = "Numero de documento ingresado no ha sido modificado";
                    break;
                case 'error_nro_':
                    $texto = "Numero de documento ingresado ya existe intentalo nuevamente";
                    break;
                case 'error':
                    $texto = "Ocurrio un error intentelo nuevamente";
                    break;
                case 'delete':
                    $texto = "Se ha <strong>ELIMINADO</strong> correctamente";
                    break;
            }
        ?>
        <?php if($correcto === 'error' || $correcto == 'error_nro_'): ?>
            <!-- Mensaje Error -->
            <div class="alert alert-block alert-danger fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <?php echo $texto ?>
            </div>
        <?php endif ?>

        <?php if($document === 'error_nro'): ?>
            <!-- Mensaje Error -->
            <div class="alert alert-block alert-warning fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                Numero de documento ingresado no ha sido modificado
            </div>
        <?php endif ?>

        <?php if($correcto === 'update' || $correcto === 'insert' || $correcto === 'delete' ): ?>
            <!-- Mensaje correcto -->
            <div class="alert alert-success fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <?php echo $texto ?>
            </div>
        <?php endif ?>
        
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
                                    <th>Nombre </th>
                                    <th>Usuario</th>
                                    <th>Documento</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($usuario)) : ?>
                                    <?php foreach ($usuario as $user): ?>
                                        <tr>
                                            <td><?php echo $user->usu_id; ?></td>
                                            <td><?php echo strtoupper($user->usu_nombre.' '.$user->usu_apellidos); ?></td>
                                            <td><?php echo $user->usu_correo; ?></td>
                                            <td><?php echo $user->doc_nombre.': '.$user->usu_nro_documento; ?></td>
                                            <td>
                                                <span class="modi">
                                                    <a href="<?php echo base_url().'usuario/dashboard/edit/'.$user->usu_id; ?>" title="" style="padding: 10px">
                                                        <span class="imoon imoon-pencil"></span>
                                                    </a>
                                                </span>
                                                
                                                <span class="dele">
                                                    <a onclick="deleteDato(<?php echo $user->usu_id; ?>);" href="#">
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
            location.href = "<?php echo base_url().'usuario/dashboard/delete/' ?>"+id;
        }
        return false;
    }
</script>