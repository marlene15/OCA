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
  <script src="<?php echo base_url()?>assets/facebook/vk.js"></script>  
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
                            Como vamos Colima <small>Actividad en Facebook y Twitter </small>
                        </h3>
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo site_url('facebook/controlador_inicio/comoVamos') ?>">Home</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo site_url('twitter/controlador_inicio/comoVamos'); ?>">Como Vamos Colima</a> 
                            </li>                           
                        </ul>    
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">
                      <!--Código para el tab de pestañas-->   
                      <div class="bs-example bs-example-tabs">
                        <ul class="nav nav-tabs" id="myTab">                          
                          <li class="active"><a data-toggle="tab" href="#barras1" id="tab1">Facebook</a></li>
                          <li class=""><a data-toggle="tab" href="#barras2" id="tab2">Twitter</a></li>
                        </ul>
                          <div class="tab-content" id="myTabContent">
                            <div id="barras1" class="tab-pane fade active in"> 
                                <div id="chart_div"></div>                                                             
                            </div>
                            <div id="barras2" class="tab-pane fade"> 
                                <div id="chart_div2" style="height: 400px;"></div>    
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
    
    ////////comoVamos
    <?php //char2 
        $a = array();
        foreach ($comoVamos as $comoVamos) 
        {
            $a[] = array(
                "fecha" => $comoVamos->fecha,
                "seguidores" => $comoVamos->seguidores,
                "siguiendo" => $comoVamos->siguiendo,
                "tweets" => $comoVamos->tweets,
                "promedio" => ($comoVamos->seguidores+$comoVamos->siguiendo+$comoVamos->tweets)/3
            );
        }                       
    ?> 
    ////////////////////////////////////////comoVamos
    google.setOnLoadCallback(drawChart2); 
    function drawChart2() {
      var data = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Seguidores', 'Siguiendo', 'Tweets', 'Promedio'],
          <?php for ($i=0; $i<count($a); $i++) {
              ?>
              ['<?php echo $a[$i]['fecha'] ?>', <?php echo $a[$i]['seguidores'] ?>, <?php echo $a[$i]['siguiendo'] ?>, <?php echo $a[$i]['tweets'] ?>, <?php echo $a[$i]['promedio'] ?>],
          <?php } ?>
        ]
      );  
      var options = {
        title: '@Comovamoscolima',
        hAxis: {title: "Fecha"},
        seriesType: "bars",
        series: {3: {type: "line"}}
      };
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
      chart.draw(data, options);  
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(view, options);          
    }    
  </script>
<!--GRAFICA COMO VAMOS COLIMA POR FACEBOOK-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['Como vamos Colima', <?php echo $megustac1 ?>, <?php echo $seguidoresc1 ?>]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,{
                          calc: "stringify",
                          sourceColumn: 1,
                          type: "string",
                          role: "annotation"
                      }, 
                      2,{
                          calc: "stringify",
                          sourceColumn: 2,
                          type: "string",
                          role: "annotation"
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {title: 'Candidatos'},         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
      chart.draw(view, options);          
    }
  </script>
</body>
</html>

