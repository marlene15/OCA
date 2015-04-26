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
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<title>Inicio</title> 
	<?php $this->load->view('comunes/header'); ?>
    <script src="<?php echo base_url()?>assets/twitter/d3/d3.min.js"></script> 
    <script src="<?php echo base_url()?>assets/twitter/d3/liquidFillGauge.js"></script> 
    <style>
        .liquidFillGaugeText { font-family: Helvetica; font-weight: bold; }
    </style>
</head>
<body class="page-header-fixed">
    <!--Carga la barra superior-->
    <?php $this->load->view('comunes/barra_superior'); ?>

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <?php $this->load->view('comunes/nav'); ?>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <h3 class="page-title">
                            Principal <small>Contenido General</small>
                        </h3>
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo site_url('inicio') ?>">Home</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-user"></i>
                                <a href="javascript:;">Candidato</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-twitter"></i>
                                <a href="javascript:;">Twitter</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-briefcase"></i>
                                <a href="<?php echo site_url('twitter/controlador_inicio/valoracion_gobernadores');?>">Gobernador</a> 
                            </li>
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">
                        <!--Código para el tap de pestañas-->   
                        <div class="bs-example bs-example-tabs">
                            <ul class="nav nav-tabs" id="myTab">
                              <li class="active"><a data-toggle="tab" href="#nacho">Nacho Peralta</a></li>
                              <li class=""><a data-toggle="tab" href="#jorge">Jorge Luis Preciado</a></li>
                            </ul>
                              <div class="tab-content" id="myTabContent">

                                <div id="nacho" class="tab-pane fade active in"> 
                                    <center>
                                        <svg id="fillgauge1"  width="300" height="261" preserveAspectRatio="xMidYMid" viewBox="22 -22 300 300"></svg>
                                        <svg id="fillgauge2" width="300" height="261" preserveAspectRatio="xMidYMid" viewBox="22 -22 300 300" ></svg>
                                        <svg id="fillgauge3" width="300" height="261" preserveAspectRatio="xMidYMid" viewBox="22 -22 300 300" ></svg>
                                    </center>                                                                           
                                </div>

                                <div id="jorge" class="tab-pane fade ">
                                    <center>
                                        <svg id="fillgauge4"  width="300" height="261" preserveAspectRatio="xMidYMid" viewBox="22 -22 300 300"></svg>
                                        <svg id="fillgauge5" width="300" height="261" preserveAspectRatio="xMidYMid" viewBox="22 -22 300 300" ></svg>
                                        <svg id="fillgauge6" width="300" height="261" preserveAspectRatio="xMidYMid" viewBox="22 -22 300 300" ></svg>
                                    </center>                                     
                                </div>
                            </div>
                        </div>  <!--Cierra div de los tabs-->                                            
                    </div>
                </div>              
            </div>
        </div>
    </div>

	<?php $this->load->view('comunes/footer'); ?> 
</body>
</html>

<!--Datos de nacho-->
<script language="JavaScript">
    var config1 = liquidFillGaugeDefaultSettings();
    config1.circleColor = "#178BCA";
    config1.textColor = "#045681";
    config1.waveTextColor = "#81BEF7";
    config1.waveColor = "#58ACFA";
    config1.circleThickness = 0.15;
    config1.textVertPosition = 0.8;
    config1.waveAnimateTime = 1000;    
    config1.textSize = 0.75;
    config1.waveHeight = 0.05;    

    var config2 = liquidFillGaugeDefaultSettings();
    config2.circleColor = "#FF7777";
    config2.textColor = "#FF4444";
    config2.waveTextColor = "#FFAAAA";
    config2.waveColor = "#FFDDDD";
    config2.circleThickness = 0.15;
    config2.textVertPosition = 0.8;
    config2.waveAnimateTime = 500;
    config2.textSize = 0.75;
    config2.waveHeight = 0.05;    

    var config3 = liquidFillGaugeDefaultSettings();
    config3.circleColor = "#D4AB6A";
    config3.textColor = "#553300";
    config3.waveTextColor = "#805615";
    config3.waveColor = "#AA7D39";
    config3.circleThickness = 0.15;
    config3.textVertPosition = 0.8;
    config3.waveAnimateTime = 2000;
    config3.textSize = 0.75;
    config3.waveHeight = 0.15;   

    //Datos nacho
    loadLiquidFillGauge("fillgauge1", <?php echo $nachoP; ?>, config1);
    loadLiquidFillGauge("fillgauge2", <?php echo $nachoNe; ?>, config2);
    loadLiquidFillGauge("fillgauge3", <?php echo $nachoN; ?>, config3);
    //Datos jorge
    loadLiquidFillGauge("fillgauge4", <?php echo $jorgeP; ?>, config1);
    loadLiquidFillGauge("fillgauge5", <?php echo $jorgeNe; ?>, config2);
    loadLiquidFillGauge("fillgauge6", <?php echo $jorgeN; ?>, config3);
</script>
