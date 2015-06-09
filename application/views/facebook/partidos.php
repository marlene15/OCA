<html>
<head lang="es">
  <title>Candidatos por Partido</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.min.js"></script>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.js"></script> 
  <script src="<?php echo base_url()?>assets/facebook/jsapi.js"></script> 
  <script src="<?php echo base_url()?>assets/facebook/vk.js"></script>  
  <!--Para poder usar el calendario, importar las librerias-->
  <link href="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <!--Para usar los contenedores widget-->
  <link href="<?php echo base_url()?>assets/bootstrap-widget/css/widget.css" rel="stylesheet" type="text/css">   
</head>
<body class="page-header-fixed">
    <!--Carga la barra superior-->
    <?php $this->load->view('comunes/barra_superior'); ?>

    <!-- BEGIN CONTAINER -->
    <div class="page-container page-sidebar-closed">
        <?php $this->load->view('comunes/nav'); ?>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12" id="encabezado">
                        <h3 class="page-title" id="titulo">
                          Candidatos por Partido <small>Actividad en Facebook</small>
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
                            <li>
                                <i class="icon-flag"></i>
                                Partido 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-facebook"></i>
                                Facebook 
                                <i class="icon-angle-right"></i>                                
                            </li>                            
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <center>
                      <div class="portlet-body form well">
                        <!--Código para el tap de pestañas-->   
                        <div class="bs-example bs-example-tabs">
                          <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a data-toggle="tab" href="#barras1">PRI</a></li> 
                            <li class=""><a data-toggle="tab" href="#barras2">PAN</a></li>                            
                            <li class=""><a data-toggle="tab" href="#barras3">PRD</a></li>                            
                            <li class=""><a data-toggle="tab" href="#barras4">MC</a></li>                                                        
                            <li class=""><a data-toggle="tab" href="#barras5">PV</a></li>                                                        
                            <li class=""><a data-toggle="tab" href="#barras6">PT</a></li>
                            <li class=""><a data-toggle="tab" href="#barras7">PM</a></li>                                                                                                                
                            <li class=""><a data-toggle="tab" href="#barras8">PNA</a></li>
                            <li class=""><a data-toggle="tab" href="#barras9">PES</a></li>
                            <li class=""><a data-toggle="tab" href="#barras10">PH</a></li>                                                                                                                                                                        
                            <li class=""><a data-toggle="tab" href="#barras11">Nube de Palabras</a></li>                            
                          </ul>
                            <div class="tab-content" id="tabs">
                              <div id="barras1" class="tab-pane fade active in"> 
                                <div class="container-fluid">
                                    <div class="row-fluid">
                                      <div class="span12">
                                        <div class="span9">                                          
                                            <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                                <div class="widget-header" style="background: #B20034">
                                                    <i class="icon-bar-chart"></i>
                                                    <h3>PRI</h3>                                                    
                                                </div>
                                                <div class="widget-content">                                          
                                                    <div id="chart_div" style="height: 400px;"></div> 
                                                </div>
                                            </div> 
                                        </div> 

                                        <div class="span3">
                                          <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                            <div class="widget-header" style="background: #B20034" align="left">
                                                <i class="icon-calendar"></i>
                                                <h3>Fechas a consultar</h3>                                                    
                                            </div>
                                            <div class="widget-content">
                                              <center>
                                                <label>Fecha de inicio</label>
                                                <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                    <span class="add-on"><i class="icon-th"></i></span>
                                                    <span class="add-on"><i class="icon-remove"></i></span>
                                                    <input class="form-control span9" size="15" type="text" value="" readonly id="fecha">
                                                </div> 
                                                <label>Fecha de término</label>
                                                <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                    <span class="add-on"><i class="icon-th"></i></span>
                                                    <span class="add-on"><i class="icon-remove"></i></span>
                                                    <input class="form-control span9" size="15" type="text" value="" readonly id="fecha">
                                                </div>
                                                <input type="hidden" name="vtab" id="vtab1" value="1">
                                                <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta">Consultar</button>
                                              </center>
                                            </div> 
                                          </div>  
                                        </div>

                                      </div>
                                    </div>
                                </div>
                              </div>

                              <div id="barras2" class="tab-pane fade"> 
                                <br> 
                                  <div id="chart_div2"></div>
                              </div>
                              <div id="barras3" class="tab-pane fade"> 
                                <br> 
                                  <div id="chart_div3"></div>
                              </div>                                                                                
                              <div id="barras4" class="tab-pane fade"> 
                                <br> 
                                  <div id="chart_div4"></div>
                              </div>
                              <div id="barras5" class="tab-pane fade"> 
                                <br> 
                                  <div id="chart_div5"></div>
                              </div>
                              <div id="barras6" class="tab-pane fade"> 
                                <br> 
                                  <div id="chart_div6"></div>
                              </div>
                              <div id="barras7" class="tab-pane fade"> 
                                <br> 
                                  <div id="chart_div7"></div>
                              </div>                                                                                                                            
                              <div id="barras8" class="tab-pane fade"> 
                                <br> 
                                  <div id="chart_div8"></div>
                              </div>          
                              <div id="barras9" class="tab-pane fade"> 
                                <br> 
                                  <div id="chart_div9"></div>
                              </div>                                                  
                              <div id="barras10" class="tab-pane fade"> 
                                <br> 
                                  <div id="chart_div10"></div>
                              </div>
                              <div id="barras11" class="tab-pane fade"> 
                                <br> 
                                  <div id="chart_div11"></div>
                              </div>                                                            
                            </div>
                        </div> 
                      </div>
                    </center>
                </div>              
            </div>
        </div>
    </div>
  <?php $this->load->view('comunes/footer'); ?> 
</body>
  <!--Para poder usar el calendario, importar las librerias-->
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>  

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

<!--GRÁFICA POR PARTIDO PRI-->
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

    ////////PRI
    <?php //char1  
        $a = array();
        foreach ($pri as $pri) 
        {
            $a[] = array(
                "fecha" => $pri->fecha,
                "Megusta" => $pri->Megusta,
                "PersonasHablan" => $pri->PersonasHablan
            );
        }                       
    ?>

function drawVisualization() {
  // Some raw data (not necessarily accurate)
      var data = google.visualization.arrayToDataTable(
        [
          ['Fecha', 'Likes', 'Post'],
          <?php for ($i=0; $i<count($a); $i++) {
              ?>
              ['<?php echo $a[$i]['fecha'] ?>', <?php echo $a[$i]['Megusta'] ?>, <?php echo $a[$i]['PersonasHablan'] ?>],
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
</html> 