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
	<?php $this->load->view('comunes/header'); ?>
    <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
    <!--Para poder usar el API del mapa-->
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD4NI8lkdewy-_qWG5wDhTR9KjTN9Sn_xs&sensor=SET_TO_TRUE_OR_FALSE">
    </script> 
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
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">
                        <div id="map_div" style="width: 400px; height: 300px"></div>
                        <?php //print_r($coordenadas); 

                            foreach ($coordenadas as $coordenadas) {
                                //echo "<td class='success' height='100%'>".$coordenadas->latitud."</td>";
                                $array = [
                                "Lat" => $coordenadas->latitud,
                                "Long" => $coordenadas->longitud,
                                ];
                                echo $coordenadas->latitud;
                            };
                            print_r($array);
                             
                        ?>
                    </div>
                </div>              
            </div>
        </div>
    </div>

	<?php $this->load->view('comunes/footer'); ?> 
</body>
</html>

<script type="text/javascript">
      google.load("visualization", "1", {packages:["map"]});
      google.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Lat', 'Long', 'Name'],
          [37.4232, -122.0853, 'Work'],
          [37.4289, -122.1697, 'University'],
          [37.6153, -122.3900, 'Airport'],
          [37.4422, -122.1731, 'Shopping']
        ]);

        var map = new google.visualization.Map(document.getElementById('map_div'));
        map.draw(data, {showTip: true});
      }

</script>