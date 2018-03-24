<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url(); ?>usuarios">Usuarios</a>
            </li>
            <li class="breadcrumb-item active">Modificar usuario</li>
        </ol>
        <div class="row">
            <div class="col-12">

                <div class="card mb-3">
                    <div class="card-header">                       
                        <i class="fa fa-table"></i> Modificar usuario</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form name="mod_usuario" action="<?php echo base_url(); ?>usuarios/actualizar" method="POST">                                                                
                                <fieldset>
                                    <div class="row grid-divider">
                                        <div class="col-md-6">
                                            <!-- Grupo de credenciales -->
                                            <div class="form-control">
                                                <div class="">
                                                    <label class="control-label" for="rol">Rol de usuario</label>
                                                    <select class="form-control col-6" id="rol" name="rol">                                                        
                                                        <option value="Admin"   <?php if($data->rol === 'Admin') echo 'selected' ?>>Admin</option>
                                                        <option value="Agente"  <?php if($data->rol === 'Agente') echo 'selected' ?>>Agente</option>
                                                        <option value="Usuario" <?php if($data->rol === 'Usuario') echo 'selected' ?>>Usuario</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="username" class="control-label">Usuario</label>
                                                    <input value="<?php echo $data->username; ?>" class="form-control col-8" type="text" name="username" id="username" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="control-label">Contraseña</label>
                                                    <input class="form-control col-8" type="password" name="password" id="password" value="">
                                                </div>
                                            </div>
                                            <!-- Grupo administrativo -->
                                            <div class="form-control">
                                                <div class="form-group">
                                                    <label for="codigo_usuario" class="control-label">Código de usuario</label>
                                                    <input value="<?php echo $data->codigo_usuario; ?>" class="form-control" type="text" name="codigo_usuario" id="codigo_usuario">
                                                </div>
                                                <div class="form-group">
                                                    <label for="parent_usuario" class="control-label">Depende de</label>
                                                    <div class="">
                                                        <input value="<?php echo $data->parent_usuario; ?>"class="form-control" type="text" name="parent_usuario" id="parent_usuario">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="grupo_usuario" class="control-label">Grupo</label>
                                                    <div class="">
                                                        <input class="form-control" type="text" name="grupo_usuario" id="grupo_usuario">
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Grupo informativo -->
                                            <div class="form-control">
                                                <div class="form-group">
                                                    <label class="control-label" for="nombre_usuario">Nombre del usuario</label>  
                                                    <div class="">
                                                        <input name="nombre_usuario" id="nombre_usuario" class="form-control input-md" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="apellidos_usuario">Apellidos</label>  
                                                    <div class="">
                                                        <input name="apellidos_usuario" id="apellidos_usuario" class="form-control input-md" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="razon_usuario">Razón Social</label>  
                                                    <div class="">
                                                        <input name="razon_usuario" id="razon_usuario" class="form-control input-md" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Observaciones -->
                                            <div class="form-control">
                                                <div class="form-group">
                                                    <label class="control-label" for="obs_usuario">Observaciones</label>
                                                    <div class="">                     
                                                        <textarea class="form-control" name="obs_usuario" id="obs_usuario"></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                            <a href="<?php echo base_url() ?>escritorio" class="btn btn-danger">Cancelar</a>                                        
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
