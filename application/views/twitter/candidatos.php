<!DOCTYPE html>
<html>
<?php $this->load->view('comunes/header'); ?>
<head lang="es">
	<title>Candidatos</title> 
	<meta charset="utf-8">

	<meta HTTP-EQUIV="X-UA-COMPATIBLE" CONTENT="IE=EmulateIE9" >
	
	<script type="text/javascript" src="<?php echo base_url()?>assets/twitter/d3/d3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/twitter/d3/radialProgress.js"></script>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/twitter/d3/style_circulos/style.css">
</head>
<body>
	<?php $this->load->view('comunes/nav'); ?>
	<div id="page-wrapper">
        <div id="page-inner">
        	<h1>Valoraciones de los comentarios sobre Nacho Peralta</h1>
        	<br>
        	<div id="div1"></div>
	        <div id="div2"></div>
	        <div id="div3"></div>
        </div>
    </div>
	</div>

	<script language="JavaScript">
	    var div1=d3.select(document.getElementById('div1'));
	    var div2=d3.select(document.getElementById('div2'));
	    var div3=d3.select(document.getElementById('div3'));
	    var div4=d3.select(document.getElementById('div4'));

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
	                .diameter(150)
	                .minValue(1)
	                .maxValue(100)
	                .value(<?php echo $positivos ?>)
	                .render();

	        var rp2 = radialProgress(document.getElementById('div2'))
	                .label("Negativos")
	                .diameter(150)
	                .minValue(1)
	                .maxValue(100)
	                .value(<?php echo $negativos ?>)
	                .render();

	        var rp3 = radialProgress(document.getElementById('div3'))
	                .label("Neutros")
	                .diameter(150)
	                .minValue(1)
	                .maxValue(100)
	                .value(<?php echo $neutros ?>)
	                .render();

	        var rp4 = radialProgress(document.getElementById('div4'))
	                .label("No procesables")
	                .diameter(150)
	                .minValue(1)
	                .maxValue(100)
	                .value(30)
	                .render();
	    }
	</script>

	<?php $this->load->view('comunes/footer'); ?> 
</body>
</html>