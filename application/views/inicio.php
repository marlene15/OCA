<!DOCTYPE html>
<html>
<?php $this->load->view('comunes/header'); ?>
<head lang="es">
	<title>Inicio</title> 
	<meta charset="utf-8">
</head>
<body>
    <?php $this->load->view('comunes/nav'); ?>

    <div class="page-content">
        <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
                <div class="span12">
                    <h3 class="page-title">
                        Principal <small>Contenido General</small>
                    </h3>
                </div>
            </div>
            <!-- AGREGAR EL CONTENIDO DE LA PÁGINA-->
            <div id="dashboard">
                <label>Principal</label>
            </div>
        </div>
    </div>

	<?php $this->load->view('comunes/footer'); ?> 
</body>
</html>