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
	<title>Candidatos</title> 
	<?php $this->load->view('comunes/header'); ?>
	<script type="text/javascript" src="<?php echo base_url()?>assets/twitter/d3/d3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/twitter/d3/radialProgress.js"></script>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/twitter/d3/style_circulos/style.css">
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
                            Valoracion de Comentarios <small>Candidatos</small>
                        </h3>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form">
                        <h4>Valoraciones de los comentarios sobre Nacho Peralta</h4>
                        <div id="contenedor">
				        	<div id="div1" class="well"></div>
					        <div id="div2" class="well"></div>
					        <div id="div3" class="well"></div>
					    </div>
                    </div>
                </div>              
            </div>
        </div>
    </div>

	<?php $this->load->view('comunes/footer'); ?> 
</body>
</html>

<script>
    var div1=d3.select(document.getElementById('div1'));
    var div2=d3.select(document.getElementById('div2'));
    var div3=d3.select(document.getElementById('div3'));

    start();

    function labelFunction(val,min,max) {

    }

    function deselect() {
        div1.attr("class","radial");
        div2.attr("class","radial");
        div3.attr("class","radial");
        div4.attr("class","radial");
    }

    function start() {
        var rp1 = radialProgress(document.getElementById('div1'))
                .label("Positivos")
                .diameter(200)
                .minValue(1)
                .maxValue(100)
                .value(<?php echo $positivos ?>)
                .render();

        var rp2 = radialProgress(document.getElementById('div2'))
                .label("Negativos")
                .diameter(200)
                .minValue(1)
                .maxValue(100)
                .value(<?php echo $negativos ?>)
                .render();

        var rp3 = radialProgress(document.getElementById('div3'))
                .label("Neutros")
                .diameter(200)
                .minValue(1)
                .maxValue(100)
                .value(<?php echo $neutros ?>)
                .render();
    }
</script>
