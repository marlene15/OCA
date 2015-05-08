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
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <title>Dip. Federales</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/tabsDL.js"></script> 
  <!--Para poder usar el calendario, importar las librerias-->
  <link href="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.min.css" rel="stylesheet">
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
                            Candidatos a Diputado Federal <small>Actividad en Twitter </small>
                        </h3>
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo site_url('inicio'); ?>">Home</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-table"></i>
                                Cargo 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-twitter"></i>
                                Twitter 
                                <i class="icon-angle-right"></i>                                
                            </li>
                            <li>
                                <i class="icon-user"></i>
                                <a href="<?php echo site_url('twitter/controlador_inicio/dip_federales'); ?>">Diputado Federal</a>                                 
                            </li>                            
                        </ul>    
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">
                      <?php
                            if($existe==2)
                            {
                              ?>
                              <div class="alert fade in">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                <strong>Fecha No Encontrada!</strong> Se encuentra disponible a partir de la fecha: 4 de mayo de 2015 hasta el día de hoy
                              </div>
                              <?php
                            }
                        ?>                      
                      <div class="bs-example bs-example-tabs"><!--Código para el tab de pestañas-->   
                        <ul class="nav nav-tabs" id="myTab">
                          <?php
                            if($vtab==2)
                            {
                              ?>
                              <li class=""><a data-toggle="tab" href="#barras1">Distrito 1</a></li>
                              <li class="active"><a data-toggle="tab" href="#barras2" >Distrito 2</a></li>                              
                              <?php
                              $active1 = "";
                              $active2 = "active in";
                          }
                          else
                          {
                            ?>
                              <li class="active"><a data-toggle="tab" href="#barras1">Distrito 1</a></li>
                              <li class=""><a data-toggle="tab" href="#barras2" >Distrito 2</a></li>
                              <?php
                              $active1 = "active in";
                              $active2 = "";                              
                            }   
                          ?>
                        </ul>
                          <div class="tab-content" id="myTabContent">
                            <div id="barras1" class="tab-pane fade <?php echo $active1; ?>"> 
                              <form id="form" action="<?php echo site_url('twitter/controlador_consultas/dip_federales');?>" method="post">
                                <label class="control-label">Fecha de consulta:</label>
                                <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input size="16" type="text" value="<?php echo $fecha ?>" readonly name="fecha">
                                    <span class="add-on"><i class="icon-remove"></i></span>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                    <button type="submit" class="btn btn-primary btn-lg" title="Consultar">Consultar</button>
                                </div>
                                <input type="hidden" name="vtab" value="1">
                              </form>
                                <div id="chart_div"></div>                            
                            </div>

                            <div id="barras2" class="tab-pane fade <?php echo $active2; ?>">
                              <form id="form" action="<?php echo site_url('twitter/controlador_consultas/dip_federales');?>" method="post">
                                <label class="control-label">Fecha de consulta:</label>
                                <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input size="16" type="text" value="<?php echo $fecha ?>" readonly name="fecha">
                                    <span class="add-on"><i class="icon-remove"></i></span>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                    <button type="submit" class="btn btn-primary btn-lg" title="Consultar">Consultar</button>
                                </div>
                                <input type="hidden" name="vtab" value="2">
                              </form>
                              <div id="chart_div2"></div>                                   
                            </div>
                        </div>
                      </div> <!--Cierra div del tab de pestañas-->        
                    </div>
                </div>              
            </div>
        </div>
    </div>

  <?php $this->load->view('comunes/footer'); ?> 
  <!--Para poder usar el calendario, importar las librerias-->
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>  

<script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});    
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');        
      data.addRows([
        ['PAN José Manuel Moreno González', <?php echo $seguidoresjm ?>, <?php echo $siguiendojm ?>, <?php echo $tweetsjm ?>],
        ['PRI Enrique Rojas Orozco', <?php echo $seguidoresk ?>, <?php echo $siguiendok ?>, <?php echo $tweetsk ?>],
        ['PRD Indira Vizcaíno Silva', <?php echo $seguidoresi ?>, <?php echo $siguiendoi ?>, <?php echo $tweetsi ?>]
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
                      }, 
                      3,{
                          calc: "stringify",
                          sourceColumn: 3,
                          type: "string",
                          role: "annotation"
                      }]);
      var options = {
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

  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});    
    google.setOnLoadCallback(drawChart2);
    function drawChart2() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');        
      data.addRows([
        ['PRI Norma Galindo Matías', <?php echo $seguidoresn ?>, <?php echo $siguiendon ?>, <?php echo $tweetsn ?>],
        ['MOVIMIENTO CIUDADANO Juan Carlos Olave Neri', <?php echo $seguidoresj ?>, <?php echo $siguiendoj ?>, <?php echo $tweetsj ?>]
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
                      }, 
                      3,{
                          calc: "stringify",
                          sourceColumn: 3,
                          type: "string",
                          role: "annotation"
                      }]);
      var options = {
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
      
      var chart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
      chart2.draw(view, options);          
    }
  </script>
  <script type="text/javascript">
    $('.form_date').datetimepicker({
          language:  'es',
          weekStart: 1,
          todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
      });
  </script> 
</body>
</html>

