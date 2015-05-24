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
          font-size: 40px;
        }
        #logo{
          width: 340px;
          height: 200px;
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
                        <div class="span12">
                            <div class="span6">
                                <center>
                                    <img src="<?php echo base_url()?>assets/imagenes/logon.jpg" class="img-responsive center-block" height="500" width="500">                          
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
                    </div>  
                    <br/><br/>
                    <div class="row-fluid">                        
                        <div class="span12">
                            <center>
                                <h3 class="page-title" id="titulo_proyecto" align="justify">
                                    El Observatorio soCial mediA: elecciones Colima 2015 - OCA -Face y - OCA Twitt, es un proyecto
                                    acádemico, que surgió en el Instituto Tecnológico de Colima a partir del interés de llevar a 
                                    cabo una investigáción sobre la forma en la cual los ciudadanos del estado de Colima utilizan 
                                    los canales de comunicación como: Twitter y Facebook para expresar su opinión con respecto al 
                                    proceso de campaña de los diferentes candidatos y durante los comicios.
                
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