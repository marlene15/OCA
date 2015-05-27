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
    <!--Para usar los contenedores widget-->
    <link href="<?php echo base_url()?>assets/bootstrap-widget/css/widget.css" rel="stylesheet" type="text/css">    
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
                            Tweets en Colima
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
                              <li class=""><a data-toggle="tab" href="#villa">Villa de Álvarez</a></li>
                              <li class=""><a data-toggle="tab" href="#manzanillo">Manzanillo</a></li>
                              <li class=""><a data-toggle="tab" href="#tecoman">Tecomán</a></li>
                            </ul>
                              <div class="tab-content" id="myTabContent">

                                <div id="colima" class="tab-pane fade active in"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Colima</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="villa" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Villa de Álvarez</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div2" style="width: 100%; height: 500px;"></div> <!--Segundo mapa-->   
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="manzanillo" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Manzanillo</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div3" style="width: 100%; height: 500px;"></div> <!--Segundo mapa-->   
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="tecoman" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Tecomán</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div4" style="width: 100%; height: 500px;"></div> <!--Segundo mapa-->   
                                                        </center> 
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
<!--Mapa de Colima-->
<script type="text/javascript">

    google.load("visualization", "1", {packages:["map"]});
    setTimeout(google.setOnLoadCallback(drawChart),550);
    //Datos Colima
    <?php //Llenamos el array con las coordenadas
        $a = array();
        foreach ($gobernadores_colima as $gobernadores_colima) 
        {
            $a[] = array(
                "Lat" => $gobernadores_colima->latitud,
                "Long" => $gobernadores_colima->longitud
            );
        }  

        $a2 = array();
        foreach ($dipFederales_colima as $dipFederales_colima) 
        {
            $a2[] = array(
                "Lat" => $dipFederales_colima->latitud,
                "Long" => $dipFederales_colima->longitud
            );
        }

        $a3 = array();
        foreach ($dipLocales_colima as $dipLocales_colima) 
        {
            $a3[] = array(
                "Lat" => $dipLocales_colima->latitud,
                "Long" => $dipLocales_colima->longitud
            );
        }

        $a4 = array();
        foreach ($presidentes_colima as $presidentes_colima) 
        {
            $a4[] = array(
                "Lat" => $presidentes_colima->latitud,
                "Long" => $presidentes_colima->longitud
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
              <?php for ($i=0; $i<count($a2); $i++) {
              ?>
              [<?php echo $a2[$i]['Lat'] ?>, <?php echo $a2[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a3); $i++) {
              ?>
              [<?php echo $a3[$i]['Lat'] ?>, <?php echo $a3[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a4); $i++) {
              ?>
              [<?php echo $a4[$i]['Lat'] ?>, <?php echo $a4[$i]['Long'] ?>],
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
    //Datos villa de álvarez
    <?php //Llenamos el array con las coordenadas
        $a5 = array();
        foreach ($gobernadores_villa as $gobernadores_villa) 
        {
            $a5[] = array(
                "Lat" => $gobernadores_villa->latitud,
                "Long" => $gobernadores_villa->longitud
            );
        }  

        $a6 = array();
        foreach ($dipFederales_villa as $dipFederales_villa) 
        {
            $a6[] = array(
                "Lat" => $dipFederales_villa->latitud,
                "Long" => $dipFederales_villa->longitud
            );
        }

        $a7 = array();
        foreach ($dipLocales_villa as $dipLocales_villa) 
        {
            $a7[] = array(
                "Lat" => $dipLocales_villa->latitud,
                "Long" => $dipLocales_villa->longitud
            );
        }

        $a8 = array();
        foreach ($presidentes_villa as $presidentes_villa) 
        {
            $a8[] = array(
                "Lat" => $presidentes_villa->latitud,
                "Long" => $presidentes_villa->longitud
            );
        }                          
    ?>

        //Datos villa de álvarez
        var data2 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a5); $i++) {
              ?>
              [<?php echo $a5[$i]['Lat'] ?>, <?php echo $a5[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a6); $i++) {
              ?>
              [<?php echo $a6[$i]['Lat'] ?>, <?php echo $a6[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a7); $i++) {
              ?>
              [<?php echo $a7[$i]['Lat'] ?>, <?php echo $a7[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a8); $i++) {
              ?>
              [<?php echo $a8[$i]['Lat'] ?>, <?php echo $a8[$i]['Long'] ?>],
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

<!--Mapa de Manzanillo-->
<script type="text/javascript">
    //Datos Manzanillo
    <?php //Llenamos el array con las coordenadas
        $a9 = array();
        foreach ($gobernadores_manzanillo as $gobernadores_manzanillo) 
        {
            $a9[] = array(
                "Lat" => $gobernadores_manzanillo->latitud,
                "Long" => $gobernadores_manzanillo->longitud
            );
        }  

        $a10 = array();
        foreach ($dipFederales_manzanillo as $dipFederales_manzanillo) 
        {
            $a10[] = array(
                "Lat" => $dipFederales_manzanillo->latitud,
                "Long" => $dipFederales_manzanillo->longitud
            );
        }

        $a11 = array();
        foreach ($dipLocales_manzanillo as $dipLocales_manzanillo) 
        {
            $a11[] = array(
                "Lat" => $dipLocales_manzanillo->latitud,
                "Long" => $dipLocales_manzanillo->longitud
            );
        }

        $a12 = array();
        foreach ($presidentes_manzanillo as $presidentes_manzanillo) 
        {
            $a12[] = array(
                "Lat" => $presidentes_manzanillo->latitud,
                "Long" => $presidentes_manzanillo->longitud
            );
        }                          
    ?>
        //Datos Manzanillo
        var data3 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a9); $i++) {
              ?>
              [<?php echo $a9[$i]['Lat'] ?>, <?php echo $a9[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a10); $i++) {
              ?>
              [<?php echo $a10[$i]['Lat'] ?>, <?php echo $a10[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a11); $i++) {
              ?>
              [<?php echo $a11[$i]['Lat'] ?>, <?php echo $a11[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a12); $i++) {
              ?>
              [<?php echo $a12[$i]['Lat'] ?>, <?php echo $a12[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
      function drawChart3() 
      {
        var map3 = new google.visualization.Map(document.getElementById('map_div3'));
        var options = { showTip: true };
        map3.draw(data3, options);
      }
</script>

<!--Mapa de Tecomán-->
<script type="text/javascript">
    //Datos Tecomán
    <?php //Llenamos el array con las coordenadas
        $a13 = array();
        foreach ($gobernadores_tecoman as $gobernadores_tecoman) 
        {
            $a13[] = array(
                "Lat" => $gobernadores_tecoman->latitud,
                "Long" => $gobernadores_tecoman->longitud
            );
        }  

        $a14 = array();
        foreach ($dipFederales_tecoman as $dipFederales_tecoman) 
        {
            $a14[] = array(
                "Lat" => $dipFederales_tecoman->latitud,
                "Long" => $dipFederales_tecoman->longitud
            );
        }

        $a15 = array();
        foreach ($dipLocales_tecoman as $dipLocales_tecoman) 
        {
            $a15[] = array(
                "Lat" => $dipLocales_tecoman->latitud,
                "Long" => $dipLocales_tecoman->longitud
            );
        }

        $a16 = array();
        foreach ($presidentes_tecoman as $presidentes_tecoman) 
        {
            $a16[] = array(
                "Lat" => $presidentes_tecoman->latitud,
                "Long" => $presidentes_tecoman->longitud
            );
        }                          
    ?>
        //Datos Manzanillo
        var data4 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a13); $i++) {
              ?>
              [<?php echo $a13[$i]['Lat'] ?>, <?php echo $a13[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a14); $i++) {
              ?>
              [<?php echo $a14[$i]['Lat'] ?>, <?php echo $a14[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a15); $i++) {
              ?>
              [<?php echo $a15[$i]['Lat'] ?>, <?php echo $a15[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a16); $i++) {
              ?>
              [<?php echo $a16[$i]['Lat'] ?>, <?php echo $a16[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
      function drawChart4() 
      {
        var map4 = new google.visualization.Map(document.getElementById('map_div4'));
        var options = { showTip: true };
        map4.draw(data4, options);
      }
</script>
</body>
</html>
