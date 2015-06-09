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
    <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
    <script src="<?php echo base_url()?>assets/twitter/tabsDL.js"></script>
    <script src="<?php echo base_url()?>assets/twitter/d3/d3.min.js"></script>
    <script src="<?php echo base_url()?>assets/twitter/d3/d3.js"></script> 
    <script src="<?php echo base_url()?>assets/twitter/d3/liquidFillGauge.js"></script>     
    <style>
        .liquidFillGaugeText { font-family: Helvetica; font-weight: bold; }
    </style>
    <!--Estilo para la gráfica de pastel-->
    <link href="<?= base_url();?>assets/twitter/d3/estilo_pastel.css" rel="stylesheet" type="text/css"/>
    <!--Para usar los contenedores widget-->
    <link href="<?php echo base_url()?>assets/bootstrap-widget/css/widget.css" rel="stylesheet" type="text/css"> 
</head>
<body class="page-header-fixed page-sidebar-closed">
    <!--Carga la barra superior-->
    <?php $this->load->view('comunes/barra_superior'); ?>

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <?php $this->load->view('comunes/nav'); ?>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12" id="encabezado">
                        <h3 class="page-title" id="titulo">
                            Diputados Locales <small>Actividad en Twitter</small>
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
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
                                <a href="<?php echo site_url('twitter/controlador_inicio/valoracion_DipLocales');?>">Diputados Locales</a> 
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
                              <li class="active"><a data-toggle="tab" href="#barras1">Distrito 1. Hilda Ceballos <img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></a></li>
                              <li><a data-toggle="tab" href="#barras2">Distrito 1. Yadira Carrillo <img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></a></li>
                              <li><a data-toggle="tab" href="#barras3">Distrito 2. Guillermo Rangel <img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></a></li>
                              <li><a data-toggle="tab" href="#barras4">Distrito 3. AlmaDeliaArreolaCruz <img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></a></li>
                              <li><a data-toggle="tab" href="#barras5">Distrito 4. Juanita Andrés <img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></a></li>
                            </ul>
                              <div class="tab-content" id="myTabContent">
                                <!--Hilda-->
                                <div id="barras1" class="tab-pane fade active in"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge1" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge2" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge3" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Yadira-->
                                <div id="barras2" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge4" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge5" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge6" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div2">Yadira Carrillo No tiene menciones</div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Guillermo-->
                                <div id="barras3" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge7" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge8" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge9" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div3"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <!--Alma-->
                                <div id="barras4" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge10" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge11" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge12" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div4"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <!--juanita-->
                                <div id="barras5" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-comments-alt"></i>
                                                        <h3>Valoración de Comentarios</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge13" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Positivos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge14" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Negativos</strong></div>
                                                                    </center>
                                                                </div>
                                                                <div class="span4">
                                                                    <center>
                                                                        <svg id="fillgauge15" width="250" height="200" preserveAspectRatio="xMidYMid" viewBox="-22 -41 300 300"></svg>
                                                                        <div><strong>Comentarios Neutros</strong></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br/>
                                                        </div>   
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-bar-chart"></i>
                                                        <h3>Menciones al día</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">   
                                                        <div id="chart_div5"></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>                             

                            </div>
                        </div>  <!--Cierra div de los tabs-->                                            
                    </div>
                </div>              
            </div>
        </div>
    </div>

	<?php $this->load->view('comunes/footer'); ?> 

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

    //Datos Hilda
    loadLiquidFillGauge("fillgauge1", <?php echo $hildaP; ?>, config1);
    loadLiquidFillGauge("fillgauge2", <?php echo $hildaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge3", <?php echo $hildaN; ?>, config3);
    //Datos Yadira
    loadLiquidFillGauge("fillgauge4", <?php echo $yadiraP; ?>, config1);
    loadLiquidFillGauge("fillgauge5", <?php echo $yadiraNe; ?>, config2);
    loadLiquidFillGauge("fillgauge6", <?php echo $yadiraN; ?>, config3);
    //Datos Guillermo
    loadLiquidFillGauge("fillgauge7", <?php echo $guillermoP; ?>, config1);
    loadLiquidFillGauge("fillgauge8", <?php echo $guillermoNe; ?>, config2);
    loadLiquidFillGauge("fillgauge9", <?php echo $guillermoN; ?>, config3);
    //Datos Alma Delia
    loadLiquidFillGauge("fillgauge10", <?php echo $almaP; ?>, config1);
    loadLiquidFillGauge("fillgauge11", <?php echo $almaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge12", <?php echo $almaN; ?>, config3);
    //Datos juanita
    loadLiquidFillGauge("fillgauge13", <?php echo $juanitaP; ?>, config1);
    loadLiquidFillGauge("fillgauge14", <?php echo $juanitaNe; ?>, config2);
    loadLiquidFillGauge("fillgauge15", <?php echo $juanitaN; ?>, config3);
    <?php echo $total; ?>
</script>

    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        <?php //hilda HildaCeballos01
            $a = array();
            foreach ($hilda as $hilda) 
            {
                $a[] = array(
                    "fecha" => $hilda->fecha,
                    "cantidad_menciones" => $hilda->cantidad
                );
            } 
        ?>     
        <?php //guillermo @Rangel_G_
            $a3 = array();
            foreach ($guillermo as $guillermo) 
            {
                $a3[] = array(
                    "fecha" => $guillermo->fecha,
                    "cantidad_menciones" => $guillermo->cantidad
                );
            } 
        ?> 
        <?php //alma @AlmaDelia_D3
            $a4 = array();
            foreach ($alma as $alma) 
            {
                $a4[] = array(
                    "fecha" => $alma->fecha,
                    "cantidad_menciones" => $alma->cantidad
                );
            } 
        ?> 
        <?php //juanita @JuanitaAndres
            $a5 = array();
            foreach ($juanita as $juanita) 
            {
                $a5[] = array(
                    "fecha" => $juanita->fecha,
                    "cantidad_menciones" => $juanita->cantidad
                );
            } 
        ?>  
        ////////////////////////////////////////hilda
        function drawChart() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a); $i++) {
                  ?>
                  ['<?php echo $a[$i]['fecha'] ?>', <?php echo $a[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@HildaCeballos01',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400
          };
          var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
          chart.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart();
        });  
        ////////////////////////////////////////guillermo
        function drawChart3() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a3); $i++) {
                  ?>
                  ['<?php echo $a3[$i]['fecha'] ?>', <?php echo $a3[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@Rangel_G_',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400
          };
          var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div3'));
          chart3.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div3");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart3();
        });  
        ////////////////////////////////////////alma
        function drawChart4() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a4); $i++) {
                  ?>
                  ['<?php echo $a4[$i]['fecha'] ?>', <?php echo $a4[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@AlmaDelia_D3',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400
          };
          var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div4'));
          chart4.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div4");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart4();
        });   
        ////////////////////////////////////////juanita
        function drawChart5() {
          var data = google.visualization.arrayToDataTable(
            [
              ['Fecha', 'Cantidad'],
              <?php for ($i=0; $i<count($a5); $i++) {
                  ?>
                  ['<?php echo $a5[$i]['fecha'] ?>', <?php echo $a5[$i]['cantidad_menciones'] ?>],
              <?php } ?>
            ]
          );  
          var options = {
            title: '@JuanitaAndres',
            hAxis: {title: "Fecha"},
            seriesType: "bars",
            series: {2: {type: "line"}},
            height: 400
          };
          var chart5 = new google.visualization.ComboChart(document.getElementById('chart_div5'));
          chart5.draw(data, options);          
        }
        //Sirve para hacer la grafica responsiva
        var aspect = 1000 / 400,
          chart = $("#chart_div5");
        $(window).on("resize", function() {   
            var targetWidth = chart.width();
            chart.attr("width", targetWidth);
            chart.attr("height", targetWidth / aspect);
            drawChart5();
        });   
    </script>

    <!--Funcion para ajustar la grafica al expander el menú-->
      <script type="text/javascript">
        function recarga()
        {
          setTimeout(function(){
            drawChart();
            drawChart3();
            drawChart4();
            drawChart5();
          },100)    
          $('#chart_div').width('100%');
          $('#chart_div2').width('100%');
          $('#chart_div3').width('100%');
          $('#chart_div5').width('100%');
        }
      </script>
</body>
</html>

