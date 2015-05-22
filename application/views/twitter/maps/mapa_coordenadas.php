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
	<title>Mapa</title> 	
    <!--Para poder usar el API del mapa-->
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD4NI8lkdewy-_qWG5wDhTR9KjTN9Sn_xs&sensor=true">
    </script> 
    <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script>    
    <script src="<?php echo base_url()?>assets/twitter/vk.js"></script>    
    <?php $this->load->view('comunes/header'); ?>
    <!--Para que salga correctamente el mapa-->
    <style type="text/css">
        .gm-style img {
            max-width: none;
          }
          .gm-style label {
            width: auto; display:inline;
          }
          #myTab{
          margin-top: -38px;
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
                <div class="row-fluid">
                    <div class="span12" id="encabezado"> 
                        <h3 class="page-title" id="titulo">
                            Tweets <small>Sobre Nacho Peralta en Colima</small>
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
                            <li>
                                <i class="icon-home"></i>
                                    <a href="<?php echo site_url('inicio') ?>">Home</a>                                     
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-map-marker"></i>
                                    <a href="javascript:;"> Entidad</a>                                     
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-twitter"></i>
                                <a href="<?php echo site_url('twitter/controlador_inicio/mapa_coordenadas');?>">Twitter</a>                                                                      
                            </li>
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">
                        <br>
                        <!--Código para el tap de pestañas-->   
                        <div class="bs-example bs-example-tabs">
                            <ul class="nav nav-tabs" id="myTab">
                              <li class="active"><a data-toggle="tab" href="#colima">Colima</a></li>
                              <li class=""><a data-toggle="tab" href="#villa" id="v">Villa de Álvarez</a></li>
                            </ul>
                              <div class="tab-content" id="myTabContent">

                                <div id="colima"> 
                                    <br>
                                    <center>
                                        <div id="map_div" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
                                    </center>                                                                           
                                </div>

                                <div id="villa">
                                    <center>
                                        <div id="map_div2" style="width: 100%; height: 500px;"></div> <!--Segundo mapa-->   
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
<!--Mapa de Colima-->
<script type="text/javascript">

    google.load("visualization", "1", {packages:["map"]});
    setTimeout(google.setOnLoadCallback(drawChart),550);
    //Datos Colima
    <?php //Llenamos el array con las coordenadas
        $a = array();
        foreach ($coordenadasC as $coordenadasC) 
        {
            $a[] = array(
                "Lat" => $coordenadasC->latitud,
                "Long" => $coordenadasC->longitud
            );
        }                          
    ?>

      function drawChart() 
      {
        
        //Datos Colima
        var data = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a); $i++) {
              ?>
              [<?php echo $a[$i]['Lat'] ?>, <?php echo $a[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map = new google.visualization.Map(document.getElementById('map_div'));
        map.draw(data, options);
      }
</script>

<!--Mapa de Villa de álvarez-->
<script type="text/javascript">

    // google.load("visualization", "1", {packages:["map"]});
    // google.setOnLoadCallback(drawChart2);
    //Datos villa de álvarez
    <?php //Llenamos el array con las coordenadas
        $a2 = array();
        foreach ($coordenadasV as $coordenadasV) 
        {
            $a2[] = array(
                "Lat" => $coordenadasV->latitud,
                "Long" => $coordenadasV->longitud
            );
        }                          
    ?>

        //Datos villa de álvarez
        var data2 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a2); $i++) {
              ?>
              [<?php echo $a2[$i]['Lat'] ?>, <?php echo $a2[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
      function drawChart2() 
      {

        var map2 = new google.visualization.Map(document.getElementById('map_div2'));
        var options = { showTip: true };
        map2.draw(data2, options);
      }
</script>
</body>
</html>
