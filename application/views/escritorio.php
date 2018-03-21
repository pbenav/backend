<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-capitalize"><?php echo $this->session->userdata('username'); ?></li>
            <li class="breadcrumb-item">
                <a href="escritorio">Escritorio</a>
            </li>
            <li class="breadcrumb-item active">Mi Escritorio</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-comments"></i>
                        </div>
                        <div class="mr-5">¡26 Mensajes nuevos!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Ver detalles</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">¡11 Tareas nuevas!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Ver detalles</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5">123 Ordenes nuevas!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Ver detalles</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-support"></i>
                        </div>
                        <div class="mr-5">¡13 Tickets nuevos!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Ver detalles</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>        
        <!-- Icon Cards-->

        <div class="row">
            <div class="col-xl-6 xol-sm-6 mb-6">
                <div class="card-header">
                    <div class="card-header">
                        <i class="fa fa-address-card"></i> Datos de usuario</div>
                    <div class="card-body">
                        <?php $datos_usuario = $this->session->all_userdata(); ?>
                        <table class="table text-uppercase">                            
                            <tbody>
                                <tr>
                                    <td>Código Usuario</td>
                                    <td><?php echo $datos_usuario['codigo_usuario'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nombre de usuario</td>
                                    <td><?php echo $datos_usuario['username'] ?></td>
                                </tr>
                                <tr>
                                    <td>Rol de usuario</td>
                                    <td><?php echo $datos_usuario['rol'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nombre</td>
                                    <td><?php echo $datos_usuario['nombre_usuario'] ?></td>
                                </tr>
                                <tr>
                                    <td>Apellidos</td>
                                    <td><?php echo $datos_usuario['apellidos_usuario'] ?></td>
                                </tr>
                                <tr>
                                    <td>Depende de </td>
                                    <td><?php echo $datos_usuario['parent_usuario'] ?></td>
                                </tr>
                                <tr>
                                    <td>Razón social</td>
                                    <td><?php echo $datos_usuario['razon_usuario'] ?></td>
                                </tr>
                                <tr>
                                    <td>Observaciones</td>
                                    <td><?php echo $datos_usuario['obs_usuario'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="usuarios/modificar/<?php echo $datos_usuario['id_usuario']; ?>">
                            <span class="btn btn-success">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>                
            </div>  
            <div class="col-xl-6 xol-sm-6 mb-6"><div class="card-header">
                    <div class="card-header">
                        <i class="fa fa-address-card"></i> Datos de usuario
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>