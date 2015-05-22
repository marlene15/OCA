<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.2
Version: 1.4
Author: KeenThemes
Website: http://www.keenthemes.com/preview/?theme=metronic
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<title>Inicio</title> 
	<?php $this->load->view('comunes/header'); ?>
    <style type="text/css">     
        #titulo_proyecto{
          font-family: 'Museo';
          font-size: 40px;
        }
        #titulo_proyecto2{
          font-family: 'Museo';
          font-size: 80px;
        }
    </style>
</head>
<body class="page-header-fixed page-sidebar-closed">
    <!--Carga la barra superior-->
    <?php $this->load->view('comunes/barra_superior'); ?>

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <?php $this->load->view('comunes/nav'); ?>
        <div class="page-content">
            <div class="container-fluid">                
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="row-fluid">
                        <div class="span6">
                            <center>
                                <h3 class="page-title">
                                    Colocar el Logo
                                </h3>
                            </center>                            
                        </div>
                        <div class="span6">
                            <center>
                                <h3 class="page-title" id="titulo_proyecto">
                                    Observatorio social media Elecciones Colima 2015
                                </h3>
                                <br/><br/>
                                <h1 class="page-title" id="titulo_proyecto2">
                                    OCA
                                </h1>
                            </center>
                        </div>
                    </div>  
                    <br/><br/>
                    <div class="row-fluid">                        
                        <div class="span12">
                            <center>
                                <h3 class="page-title" id="titulo_proyecto">
                                    Un onservatorio
                                </h3>
                            </center>
                        </div>
                    </div>                   
                </div>              
            </div>
        </div>
    </div>

	<?php $this->load->view('comunes/footer'); ?> 
</body>
</html>