<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-capitalize"><?php echo $this->session->userdata('username'); ?></li>
            <li class="breadcrumb-item">
                <a href="<?php echo base_url(); ?>usuarios">Usuarios</a>
            </li>
        </ol>
        <div class="row">
            <div class="col-12">

                <div class="card mb-3">
                    <div class="card-header">                       
                        <i class="fa fa-table"></i> Usuarios</div>
                    <div class="card-body">
                        <div class="alert alert-primary " role="alert">
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>usuarios/insertar/">Añadir usuario</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" data-order='[[ 1, "asc" ]]' data-column-defs='[ { "orderable": false, "targets": 0 } ]' cellspacing="0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="no-sort">Acción</th>
                                        <th>Codigo</th>
                                        <th>Usuario</th>
                                        <th>Rol</th>
                                        <th>Nombre real</th>
                                        <th>Apellidos</th>
                                        <th>Depende de</th>
                                        <th>Razón Social</th>
                                        <th>Observaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($data)) {
                                        foreach ($data as $valor) {
                                            ?>
                                            <tr>
                                                <td><a href="<?php echo base_url(); ?>usuarios/modificar/<?php echo $valor->id_usuario; ?>"><button type='button' class='btn btn-success'><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</button> </a>
                                                    <a href="<?php echo base_url(); ?>usuarios/eliminar/<?php echo $valor->id_usuario; ?>"><button type='button' class='btn btn-danger'><i class="fa fa-remove" aria-hidden="true"></i></button> </a></td>
                                                <td><?php echo $valor->codigo_usuario; ?></td>
                                                <td><?php echo $valor->username; ?></td>
                                                <td><?php echo $valor->rol; ?></td>
                                                <td><?php echo $valor->nombre_usuario; ?></td>
                                                <td><?php echo $valor->apellidos_usuario; ?></td>                                                
                                                <td><?php echo $valor->parent_usuario; ?></td>
                                                <td><?php echo $valor->razon_usuario; ?></td>
                                                <td><?php echo $valor->obs_usuario; ?></td>
                                            </tr><?php
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
