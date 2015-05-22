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
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <title>Alcaldías</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/tabsDL.js"></script>  
  <!--Para poder usar el calendario, importar las librerias-->
  <link href="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <!--Para usar la nube-->
  <script src="<?php echo base_url()?>assets/twitter/d3/d3.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/d3/d3.layout.cloud.js"></script>
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
                            Candidatos a Presidente Municipal <small>Actividad en Twitter</small>
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
                                <a href="<?php echo site_url('twitter/controlador_inicio/alcaldias');?>">Presidente Municipal</a>
                            </li>                            
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                  <center>
                    <div class="portlet-body form well">
                      <div id="alert"></div> 
                      <!--Código para el tab de pestañas-->   
                      <div class="bs-example bs-example-tabs">
                        <ul class="nav nav-tabs" id="myTab">
                          <li class="active"><a data-toggle="tab" href="#barras8">Armería</a></li>
                          <li><a data-toggle="tab" href="#barras1">Colima</a></li>
                          <li><a data-toggle="tab" href="#barras4">Comala</a></li>
                          <li><a data-toggle="tab" href="#barras10">Coquimatlán</a></li>
                          <li><a data-toggle="tab" href="#barras6">Cuauhtémoc</a></li>
                          <li><a data-toggle="tab" href="#barras9">Ixtlahuacán</a></li>
                          <li><a data-toggle="tab" href="#barras2">Manzanillo</a></li>
                          <li><a data-toggle="tab" href="#barras7">Minatitlán</a></li>
                          <li><a data-toggle="tab" href="#barras5">Tecomán</a></li>
                          <li><a data-toggle="tab" href="#barras3">Villa de Álvarez</a></li>  
                          <li><a data-toggle="tab" href="#nube" onclick="nube();">Nube de Palabras</a></li>                              
                        </ul>
                          <div class="tab-content" id="tabs">
                            <div id="barras8" class="tab-pane fade active in">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha8">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab8" value="8">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta8">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div8"></div>  
                                    <div id="con8"></div>                            
                                  </div>
                                </div>
                              </div>                                
                            </div>

                            <div id="barras1" class="tab-pane fade"> 
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab1" value="1">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div"></div>  
                                    <div id="con"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras4" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha4">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab4" value="4">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta4">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div4"></div>  
                                    <div id="con4"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras10" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha10">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab10" value="10">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta10">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div10">
                                      No tienen cuantas los usuarios
                                    </div>                             
                                  </div>
                                </div>
                              </div>                                
                            </div>

                            <div id="barras6" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha6">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab6" value="6">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta6">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div6"></div>  
                                    <div id="con6"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras9" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha9">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab9" value="9">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta9">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div9"></div>  
                                    <div id="con9"></div>                            
                                  </div>
                                </div>
                              </div>                                
                            </div>

                            <div id="barras2" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha2">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab2" value="2">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta2">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>   

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div2"></div>  
                                    <div id="con2"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras7" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha7">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab7" value="7">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta7">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div7"></div>  
                                    <div id="con7"></div>                            
                                  </div>
                                </div>
                              </div>                                
                            </div>

                            <div id="barras5" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha5">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab5" value="5">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta5">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div5"></div>  
                                    <div id="con5"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras3" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha3">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab3" value="3">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta3">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div3"></div>  
                                    <div id="con3"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>  

                            <div id="nube" class="tab-pane fade ">  
                                <div class="container-fluid">
                                   <div class="row-fluid">
                                      <div class="span12">  
                                        <button id="go" type="submit" onclick="nube();" class="btn btn-success btn-lg" title="Actualizar" style="float:left">Actualizar</button>
                                        <br/><br/>
                                        <div id="container">
                                          <!-- <center><div id="contenido_nube" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid"></div></center>     -->
                                        </div>                           
                                      </div>
                                    </div>
                                </div>                          
                            </div>

                        </div>
                      </div> <!--Cierra div del tab de pestañas-->                        
                    </div>
                  </center>
                </div>              
            </div>
        </div>
    </div>

  <?php $this->load->view('comunes/footer'); ?> 
  <!--Para poder usar el calendario, importar las librerias-->
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>  
</body>

  <script type="text/javascript">
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart8);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Oscar Valdovinos Anguiano', <?php echo $seguidores_oscar ?>, <?php echo $siguiendo_oscar ?>, <?php echo $tweets_oscar ?>],
          ['PAN Héctor Insúa García', <?php echo $seguidoresh ?>, <?php echo $siguiendoh ?>, <?php echo $tweetsh ?>],
          ['MOVIMIENTO CIUDADANO María Elena Abaroa López', <?php echo $seguidoresma ?>, <?php echo $siguiendoma ?>, <?php echo $tweetsma ?>],
          ['VERDE Esmeralda Cárdenas Sánchez', <?php echo $seguidoreses ?>, <?php echo $siguiendoes ?>, <?php echo $tweetses ?>]
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
      
      function drawChart2() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Francisco Zepeda González', <?php echo $seguidoresp ?>, <?php echo $siguiendop ?>, <?php echo $tweetsp ?>],
          ['PT Marcos Barajas Yescas', <?php echo $seguidoresmarc ?>, <?php echo $siguiendomarc ?>, <?php echo $tweetsmarc ?>],
          ['MOVIMIENTO CIUDADANO Rubén Romo Ochoa', <?php echo $seguidores_ruben ?>, <?php echo $siguiendo_ruben ?>, <?php echo $tweets_ruben ?>]
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

        var chart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
        chart2.draw(view, options);          
      }
      
      function drawChart3() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Oswy Delgado Rodríguez', <?php echo $seguidores_oswy ?>, <?php echo $siguiendo_oswy ?>, <?php echo $tweets_oswy ?>],
          ['PAN Yulenny Cortés León', <?php echo $seguidores_yulenny ?>, <?php echo $siguiendo_yulenny ?>, <?php echo $tweets_yulenny ?>],
          ['PRD Jaime Enrique Sotelo Garcia ', <?php echo $seguidores_jaime ?>, <?php echo $siguiendo_jaime ?>, <?php echo $tweets_jaime ?>]          
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

        var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div3'));
        chart3.draw(view, options);          
      }
     
      function drawChart4() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Salomón Salazar Barragán', <?php echo $seguidores_salomon ?>, <?php echo $siguiendo_salomon ?>, <?php echo $tweets_salomon ?>],
          ['ENCUENTRO SOCIAL Mario Carrillo Llerenas', <?php echo $seguidores_mario ?>, <?php echo $siguiendo_mario ?>, <?php echo $tweets_mario ?>]
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

        var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div4'));
        chart4.draw(view, options);          
      }
      
      function drawChart5() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Arturo García Arias', <?php echo $seguidores_arturo ?>, <?php echo $siguiendo_arturo ?>, <?php echo $tweets_arturo ?>]
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

        var chart5 = new google.visualization.ComboChart(document.getElementById('chart_div5'));
        chart5.draw(view, options);          
      }
      
      function drawChart6() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Blanca Isabel Rocha Cobián', <?php echo $seguidores_blanca ?>, <?php echo $siguiendo_blanca ?>, <?php echo $tweets_blanca ?>],
          ['HUMANISTA Blanca Ursúa Blanco', <?php echo $seguidores_blancaU ?>, <?php echo $siguiendo_blancaU ?>, <?php echo $tweets_blancaU ?>]
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

        var chart6 = new google.visualization.ComboChart(document.getElementById('chart_div6'));
        chart6.draw(view, options);          
      }
      
      function drawChart7() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Manuel Palacios Rodríguez', <?php echo $seguidores_manuel ?>, <?php echo $siguiendo_manuel ?>, <?php echo $tweets_manuel ?>]
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

        var chart7 = new google.visualization.ComboChart(document.getElementById('chart_div7'));
        chart7.draw(view, options);          
      }
      
      function drawChart8() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Esperanza Alcaraz Alcaraz', <?php echo $seguidores_esperanza ?>, <?php echo $siguiendo_esperanza ?>, <?php echo $tweets_esperanza ?>]
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

        var chart8 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
        chart8.draw(view, options);          
      }
      
      function drawChart9() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['NUEVA ALIANZA Hiram Amador Ruiz Mancilla', <?php echo $seguidores_hiram ?>, <?php echo $siguiendo_hiram ?>, <?php echo $tweets_hiram ?>]
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

        var chart9 = new google.visualization.ComboChart(document.getElementById('chart_div9'));
        chart9.draw(view, options);          
      }
  </script>

  

  <!--Para usar el calendario-->
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

    <script type="text/javascript">
    $(document).ready(function(){                                        
      $("#consulta").click(function(event) {
        var fecha = document.getElementById("fecha").value;  
        var vtab = document.getElementById("vtab1").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con').html(html);   
          }
        });            
      }); 

      $("#consulta2").click(function(event) {
        var fecha = document.getElementById("fecha2").value; 
        var vtab = document.getElementById("vtab2").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con2').html(html);
          }
        });
      });

      $("#consulta3").click(function(event) {
        var fecha = document.getElementById("fecha3").value; 
        var vtab = document.getElementById("vtab3").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con3').html(html);
          }
        });
      });

      $("#consulta4").click(function(event) {
        var fecha = document.getElementById("fecha4").value; 
        var vtab = document.getElementById("vtab4").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con4').html(html);
          }
        });
      });

      $("#consulta5").click(function(event) {
        var fecha = document.getElementById("fecha5").value; 
        var vtab = document.getElementById("vtab5").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con5').html(html);
          }
        });
      });

      $("#consulta6").click(function(event) {
        var fecha = document.getElementById("fecha6").value; 
        var vtab = document.getElementById("vtab6").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con6').html(html);
          }
        });
      });

      $("#consulta7").click(function(event) {
        var fecha = document.getElementById("fecha7").value; 
        var vtab = document.getElementById("vtab7").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con7').html(html);
          }
        });
      });

      $("#consulta8").click(function(event) {
        var fecha = document.getElementById("fecha8").value; 
        var vtab = document.getElementById("vtab8").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con8').html(html);
          }
        });
      });

      $("#consulta9").click(function(event) {
        var fecha = document.getElementById("fecha9").value; 
        var vtab = document.getElementById("vtab9").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/alcaldias');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con9').html(html);
          }
        });
      });
    });
  </script>
  
</html>

