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
                              <li class="active"><a data-toggle="tab" href="#armeria">Armería</a></li>
                              <li><a data-toggle="tab" href="#colima">Colima</a></li>
                              <li><a data-toggle="tab" href="#comala">Comala</a></li>
                              <li><a data-toggle="tab" href="#coqui">Coquimatlán</a></li>
                              <li><a data-toggle="tab" href="#cuau">Cuauhtémoc</a></li>
                              <li><a data-toggle="tab" href="#ixtlahuacan">Ixtlahuacán</a></li>
                              <li><a data-toggle="tab" href="#manzanillo">Manzanillo</a></li>

                              <li><a data-toggle="tab" href="#mina">Minatitlán</a></li>

                              <li><a data-toggle="tab" href="#tecoman">Tecomán</a></li>
                              <li><a data-toggle="tab" href="#villa">Villa de Álvarez</a></li>                                
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div id="armeria" class="tab-pane fade active in"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Armería</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div5" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="colima" class="tab-pane fade"> 
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

                                <div id="comala" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Comala</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div6" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="coqui" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Coquimatlán</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div7" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="cuau" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Cuauhtémoc</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div8" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
                                                        </center> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div id="ixtlahuacan" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Ixtlahuacán</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div>No hay tuits en Ixtlahuacán</div>
                                                            <div id="map_div9" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
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

                                <div id="mina" class="tab-pane fade"> 
                                    <div class="container-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">                                          
                                                <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                    <div class="widget-header" style="background: #B20034">
                                                        <i class="icon-map-marker"></i>
                                                        <h3>Minatitlán</h3>                                                    
                                                    </div>
                                                    <div class="widget-content">                                          
                                                        <center>
                                                            <div id="map_div10" style="width: 100%; height: 500px;"></div> <!--Primer mapa-->  
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
<script type="text/javascript">
    google.load("visualization", "1", {packages:["map"]});
</script>
<!--Mapa de Armería-->
<script type="text/javascript">
    setTimeout(google.setOnLoadCallback(drawChart5),550);
    //Datos Armería
    <?php //Llenamos el array con las coordenadas
        $a17 = array();
        foreach ($gobernadores_armeria as $gobernadores_armeria) 
        {
            $a17[] = array(
                "Lat" => $gobernadores_armeria->latitud,
                "Long" => $gobernadores_armeria->longitud
            );
        }  

        $a18 = array();
        foreach ($dipFederales_armeria as $dipFederales_armeria) 
        {
            $a18[] = array(
                "Lat" => $dipFederales_armeria->latitud,
                "Long" => $dipFederales_armeria->longitud
            );
        }

        $a19 = array();
        foreach ($dipLocales_armeria as $dipLocales_armeria) 
        {
            $a19[] = array(
                "Lat" => $dipLocales_armeria->latitud,
                "Long" => $dipLocales_armeria->longitud
            );
        }

        $a20 = array();
        foreach ($presidentes_armeria as $presidentes_armeria) 
        {
            $a20[] = array(
                "Lat" => $presidentes_armeria->latitud,
                "Long" => $presidentes_armeria->longitud
            );
        }                          
    ?>
    //Datos Armeria
    var data5 = google.visualization.arrayToDataTable(
        [
          ['Lat', 'Long'],
          <?php for ($i=0; $i<count($a17); $i++) {
          ?>
          [<?php echo $a17[$i]['Lat'] ?>, <?php echo $a17[$i]['Long'] ?>],
          <?php } ?>
          <?php for ($i=0; $i<count($a18); $i++) {
          ?>
          [<?php echo $a18[$i]['Lat'] ?>, <?php echo $a18[$i]['Long'] ?>],
          <?php } ?>
          <?php for ($i=0; $i<count($a19); $i++) {
          ?>
          [<?php echo $a19[$i]['Lat'] ?>, <?php echo $a19[$i]['Long'] ?>],
          <?php } ?>
          <?php for ($i=0; $i<count($a20); $i++) {
          ?>
          [<?php echo $a20[$i]['Lat'] ?>, <?php echo $a20[$i]['Long'] ?>],
          <?php } ?>
        ]
    );
  function drawChart5() 
  {
    var map5 = new google.visualization.Map(document.getElementById('map_div5'));
    var options = { showTip: true };
    map5.draw(data5, options);
  }
</script>

<!--Mapa de Colima-->
<script type="text/javascript">    
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

<!--Mapa de Comala-->
<script type="text/javascript">    
    //Datos Comala
    <?php //Llenamos el array con las coordenadas
        $a21 = array();
        foreach ($gobernadores_comala as $gobernadores_comala) 
        {
            $a21[] = array(
                "Lat" => $gobernadores_comala->latitud,
                "Long" => $gobernadores_comala->longitud
            );
        }  

        $a22 = array();
        foreach ($dipFederales_comala as $dipFederales_comala) 
        {
            $a22[] = array(
                "Lat" => $dipFederales_comala->latitud,
                "Long" => $dipFederales_comala->longitud
            );
        }

        $a23 = array();
        foreach ($dipLocales_comala as $dipLocales_comala) 
        {
            $a23[] = array(
                "Lat" => $dipLocales_comala->latitud,
                "Long" => $dipLocales_comala->longitud
            );
        }

        $a24 = array();
        foreach ($presidentes_comala as $presidentes_comala) 
        {
            $a24[] = array(
                "Lat" => $presidentes_comala->latitud,
                "Long" => $presidentes_comala->longitud
            );
        }                        
    ?>

      function drawChart6() 
      {        
        //Datos Comala
        var data6 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a21); $i++) {
              ?>
              [<?php echo $a21[$i]['Lat'] ?>, <?php echo $a21[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a22); $i++) {
              ?>
              [<?php echo $a22[$i]['Lat'] ?>, <?php echo $a22[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a23); $i++) {
              ?>
              [<?php echo $a23[$i]['Lat'] ?>, <?php echo $a23[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a24); $i++) {
              ?>
              [<?php echo $a24[$i]['Lat'] ?>, <?php echo $a24[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map6 = new google.visualization.Map(document.getElementById('map_div6'));
        map6.draw(data6, options);
      }
</script>

<!--Mapa de Coquimatlán-->
<script type="text/javascript">    
    //Datos Coqui
    <?php //Llenamos el array con las coordenadas
        $a25 = array();
        foreach ($gobernadores_coqui as $gobernadores_coqui) 
        {
            $a25[] = array(
                "Lat" => $gobernadores_coqui->latitud,
                "Long" => $gobernadores_coqui->longitud
            );
        }  

        $a26 = array();
        foreach ($dipFederales_coqui as $dipFederales_coqui) 
        {
            $a26[] = array(
                "Lat" => $dipFederales_coqui->latitud,
                "Long" => $dipFederales_coqui->longitud
            );
        }

        $a27 = array();
        foreach ($dipLocales_coqui as $dipLocales_coqui) 
        {
            $a27[] = array(
                "Lat" => $dipLocales_coqui->latitud,
                "Long" => $dipLocales_coqui->longitud
            );
        }

        $a28 = array();
        foreach ($presidentes_coqui as $presidentes_coqui) 
        {
            $a28[] = array(
                "Lat" => $presidentes_coqui->latitud,
                "Long" => $presidentes_coqui->longitud
            );
        }                        
    ?>

      function drawChart7() 
      {        
        //Datos Coqui
        var data7 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a25); $i++) {
              ?>
              [<?php echo $a25[$i]['Lat'] ?>, <?php echo $a25[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a26); $i++) {
              ?>
              [<?php echo $a26[$i]['Lat'] ?>, <?php echo $a26[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a27); $i++) {
              ?>
              [<?php echo $a27[$i]['Lat'] ?>, <?php echo $a27[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a28); $i++) {
              ?>
              [<?php echo $a28[$i]['Lat'] ?>, <?php echo $a28[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map7 = new google.visualization.Map(document.getElementById('map_div7'));
        map7.draw(data7, options);
      }
</script>

<!--Mapa de Cuauhtémoc-->
<script type="text/javascript">    
    //Datos cuau
    <?php //Llenamos el array con las coordenadas
        $a29 = array();
        foreach ($gobernadores_cuau as $gobernadores_cuau) 
        {
            $a29[] = array(
                "Lat" => $gobernadores_cuau->latitud,
                "Long" => $gobernadores_cuau->longitud
            );
        }  

        $a30 = array();
        foreach ($dipFederales_cuau as $dipFederales_cuau) 
        {
            $a30[] = array(
                "Lat" => $dipFederales_cuau->latitud,
                "Long" => $dipFederales_cuau->longitud
            );
        }

        $a31 = array();
        foreach ($dipLocales_cuau as $dipLocales_cuau) 
        {
            $a31[] = array(
                "Lat" => $dipLocales_cuau->latitud,
                "Long" => $dipLocales_cuau->longitud
            );
        }

        $a32 = array();
        foreach ($presidentes_cuau as $presidentes_cuau) 
        {
            $a32[] = array(
                "Lat" => $presidentes_cuau->latitud,
                "Long" => $presidentes_cuau->longitud
            );
        }                        
    ?>

      function drawChart8() 
      {        
        //Datos Coqui
        var data8 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a29); $i++) {
              ?>
              [<?php echo $a29[$i]['Lat'] ?>, <?php echo $a29[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a30); $i++) {
              ?>
              [<?php echo $a30[$i]['Lat'] ?>, <?php echo $a30[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a31); $i++) {
              ?>
              [<?php echo $a31[$i]['Lat'] ?>, <?php echo $a31[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a32); $i++) {
              ?>
              [<?php echo $a32[$i]['Lat'] ?>, <?php echo $a32[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map8 = new google.visualization.Map(document.getElementById('map_div8'));
        map8.draw(data8, options);
      }
</script>

<!--Mapa de Ixtlahuacán-->
<script type="text/javascript">    
    //Datos ixtlahuacan
    <?php //Llenamos el array con las coordenadas
        $a33 = array();
        foreach ($gobernadores_ixtlahuacan as $gobernadores_ixtlahuacan) 
        {
            $a33[] = array(
                "Lat" => $gobernadores_ixtlahuacan->latitud,
                "Long" => $gobernadores_ixtlahuacan->longitud
            );
        }  

        $a34 = array();
        foreach ($dipFederales_ixtlahuacan as $dipFederales_ixtlahuacan) 
        {
            $a34[] = array(
                "Lat" => $dipFederales_ixtlahuacan->latitud,
                "Long" => $dipFederales_ixtlahuacan->longitud
            );
        }

        $a35 = array();
        foreach ($dipLocales_ixtlahuacan as $dipLocales_ixtlahuacan) 
        {
            $a35[] = array(
                "Lat" => $dipLocales_ixtlahuacan->latitud,
                "Long" => $dipLocales_ixtlahuacan->longitud
            );
        }

        $a36 = array();
        foreach ($presidentes_ixtlahuacan as $presidentes_ixtlahuacan) 
        {
            $a36[] = array(
                "Lat" => $presidentes_ixtlahuacan->latitud,
                "Long" => $presidentes_ixtlahuacan->longitud
            );
        }                        
    ?>

      function drawChart9() 
      {        
        //Datos ixtlahuacan
        var data9 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a33); $i++) {
              ?>
              [<?php echo $a33[$i]['Lat'] ?>, <?php echo $a33[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a34); $i++) {
              ?>
              [<?php echo $a34[$i]['Lat'] ?>, <?php echo $a34[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a35); $i++) {
              ?>
              [<?php echo $a35[$i]['Lat'] ?>, <?php echo $a35[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a36); $i++) {
              ?>
              [<?php echo $a36[$i]['Lat'] ?>, <?php echo $a36[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map9 = new google.visualization.Map(document.getElementById('map_div9'));
        map9.draw(data9, options);
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

<!--Mapa de Minatitlán-->
<script type="text/javascript">    
    //Datos mina
    <?php //Llenamos el array con las coordenadas
        $a37 = array();
        foreach ($gobernadores_mina as $gobernadores_mina) 
        {
            $a37[] = array(
                "Lat" => $gobernadores_mina->latitud,
                "Long" => $gobernadores_mina->longitud
            );
        }  

        $a38 = array();
        foreach ($dipFederales_mina as $dipFederales_mina) 
        {
            $a38[] = array(
                "Lat" => $dipFederales_mina->latitud,
                "Long" => $dipFederales_mina->longitud
            );
        }

        $a39 = array();
        foreach ($dipLocales_mina as $dipLocales_mina) 
        {
            $a39[] = array(
                "Lat" => $dipLocales_mina->latitud,
                "Long" => $dipLocales_mina->longitud
            );
        }

        $a40 = array();
        foreach ($presidentes_mina as $presidentes_mina) 
        {
            $a40[] = array(
                "Lat" => $presidentes_mina->latitud,
                "Long" => $presidentes_mina->longitud
            );
        }                        
    ?>

      function drawChart10() 
      {        
        //Datos mina
        var data10 = google.visualization.arrayToDataTable(
            [
              ['Lat', 'Long'],
              <?php for ($i=0; $i<count($a37); $i++) {
              ?>
              [<?php echo $a37[$i]['Lat'] ?>, <?php echo $a37[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a38); $i++) {
              ?>
              [<?php echo $a38[$i]['Lat'] ?>, <?php echo $a38[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a39); $i++) {
              ?>
              [<?php echo $a39[$i]['Lat'] ?>, <?php echo $a39[$i]['Long'] ?>],
              <?php } ?>
              <?php for ($i=0; $i<count($a40); $i++) {
              ?>
              [<?php echo $a40[$i]['Lat'] ?>, <?php echo $a40[$i]['Long'] ?>],
              <?php } ?>
            ]
        );
        var options = { showTip: true };
        var map10 = new google.visualization.Map(document.getElementById('map_div10'));
        map10.draw(data10, options);
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
