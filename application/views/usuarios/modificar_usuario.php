<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url();?>usuarios">Usuarios</a>
            </li>
            <li class="breadcrumb-item active">Modificar usuario</li>
        </ol>       

        <div class="col-xl-6 xol-sm-6 mb-6">
            <div class="card-header">
                <div class="card-header">
                    <i class="fa fa-address-card"></i> Modificar usuario</div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark"> 
                            <tr>
                                <th scope="col">Clave</th>
                                <th scope="col">Valor</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($datos as $key => $value) {?>
                        <tr scope="row">
                            <?php echo "<td><p class='text-uppercase'>$key</p></td><td>$value</td>"; ?>
                        </tr>
                        <?php } ?>
                    </table>
                </div>                
            </div>  
        </div>

