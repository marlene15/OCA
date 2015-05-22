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
  <title>Como vamos Colima</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/tabsDL.js"></script>  
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
                            Rumbo al 7 de Junio de 2015<small>Actividad en Facebook</small>
                        </h3>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">
                      <!--Código para el tab de pestañas-->   
                      <div class="bs-example bs-example-tabs">
                        <ul class="nav nav-tabs" id="myTab">                          
                          <li class="active"><a data-toggle="tab" href="#barras1" id="tab1">Facebook</a></li>
                        </ul>
                          <div class="tab-content" id="myTabContent">
                            <div id="barras1" class="tab-pane fade active in"> 
                                <div id="chart_div" style="height: 400px;"></div>   
                            </div>
                        </div>
                      </div> <!--Cierra div del tab de pestañas-->        
                    </div>
                </div>              
            </div>
        </div>
    </div>

  <?php $this->load->view('comunes/footer'); ?>      
 
<script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});     
    ////////rumbo al 7 de junio
     <?php //char2 
        $a2 = array();
        foreach ($rumbo as $rumbo) 
        {
            $a2[] = array(
                "Fecha" => $rumbo->Fecha,
                "Megusta" => $rumbo->Megusta,
                "PersonasHablan" => $rumbo->PersonasHablan
            );
        }
    ?> 

    //Facebook
     google.setOnLoadCallback(drawChart);
    function drawChart() {
       var data = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Posts'],
          <?php for ($i=0; $i<count($a2); $i++) {
              ?>
              ['<?php echo $a2[$i]['Fecha'] ?>', <?php echo $a2[$i]['Megusta'] ?>, <?php echo $a2[$i]['PersonasHablan'] ?>],
          <?php } ?>
        ]
      );  
      var options = {
        title: '',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(data, options);  
    }
  </script>

</body>
</html>

