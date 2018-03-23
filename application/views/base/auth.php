<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Formulario de entrada</div>
        <div class="card-body ">

            <?php $error = $this->session->flashdata("error"); ?>
            <div class="alert alert-<?php echo $error ? 'warning' : 'info' ?> alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                <?php echo $error ? $error : 'Escribe tus credenciales' ?>
            </div>

            <?php echo form_open(); ?>                      

            <?php $error = form_error("user", "<p class='text-danger'>", '</p>'); ?> 
            <!--                    <form id="login_form" action="control/login" method="post">-->

            <?php $error = form_error("user", "<p class='text-danger'>", '</p>'); ?>
            <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
                <label for="user">Nombre de usuario</label>
                <div class="input-group"> 
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" id="username" name="username" type="text" placeholder="usuario" value="<?php echo set_value("user") ?>">
                </div>
                <?php echo $error; ?>
            </div>

            <?php $error = form_error("pass", "<p class='text-danger'>", '</p>'); ?>
            <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
                <label for="pass">Contraseña</label>
                <div class="input-group"> 
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input class="form-control" id="password" name="password" type="password" placeholder="contraseña">
                </div>
                <?php echo $error; ?>
            </div>           

            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Recordar contraseña</label>
                </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Entrar</button>
            <!--                    </form>                    -->

            <div class="text-center">
                <a class="d-block small" href="forgot-password.html">Olvidaste la contraseña?</a>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

