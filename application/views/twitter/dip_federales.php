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
  <title>Dip. Federales</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/tabsDL.js"></script> 
  <!--Para poder usar el calendario, importar las librerias-->
  <link href="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <!--Para usar la nube-->
  <script src="<?php echo base_url()?>assets/twitter/d3/d3.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/d3/d3.layout.cloud.js"></script>
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
                            Candidatos a Diputado Federal <small>Actividad en Twitter </small>
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
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
                      <div id="alert"></div>                  
                      <div class="bs-example bs-example-tabs"><!--Código para el tab de pestañas-->   
                        <ul class="nav nav-tabs" id="myTab">
                          <li class="active"><a data-toggle="tab" href="#barras1">Distrito 1</a></li>
                          <li class=""><a data-toggle="tab" href="#barras2" >Distrito 2</a></li>
                          <li class=""><a data-toggle="tab" href="#nube" onclick="nube();">Nube de Palabras</a></li>
                        </ul>
                          <div class="tab-content" id="myTabContent"> <!--Inicia tab de pestañas-->
                            <div id="barras1" class="tab-pane fade active in"> 
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label">Fecha de consulta: </label>
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

                            <div id="barras2" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">
                                      <label class="control-label">Fecha de consulta:</label>
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

                            <div id="nube" class="tab-pane fade ">  
                                <div class="container-fluid">
                                   <div class="row-fluid">
                                      <div class="span12">  
                                        <button id="go" type="submit" onclick="nube();" class="btn btn-success btn-lg" title="Actualizar">Actualizar</button>
                                        <br/><br/>
                                        <div id="container">
                                          <!-- <center><div id="contenido_nube" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid"></div></center>   -->  
                                        </div>                           
                                      </div>
                                    </div>
                                </div>                          
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
          url: '<?php echo site_url('twitter/controlador_consultas/dip_federales');?>',                                      
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
          url: '<?php echo site_url('twitter/controlador_consultas/dip_federales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con2').html(html);
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    function nube()
    {
      //Limpiar div
      var d = document.getElementById("contenido_nube");
      while (d.hasChildNodes())
      {
        d.removeChild(d.firstChild);
      }

      <?php //Llenamos el array con las coordenadas        
            $aux=""; 
            for ($i=0; $i<count($hashtags); $i++)
            {
                $porciones = explode(" ", $hashtags[$i]->hashtags);
                for ($j=0; $j<count($porciones); $j++)
              {
                if ($porciones[$j] != "") 
                {
                  $aux = $aux." ".$porciones[$j]; 
                };
                
              };                    
            };    

          $test = preg_split('/[\s,]+/', $aux); //Coloca los hashtags en una sola línea, el separador son los espacios
          $palabras_contadas = array_count_values($test); //Cuenta la cantidad de veces que se repite una palabra

          $a2 = array();
          foreach ($palabras_contadas as $key => $value) { //Llena el array para convertirlo a json
              if($key != "")
              {
                $a2[] = array(
                      "text" => $key,
                      "size" => $value*10
                );
              }       
        };
        $palabras_JSON = json_encode($a2); //Convertimos el array a Json para poderlo colocar en la nube de palabras                   
        ?>
      var fill = d3.scale.category20();
      d3.layout.cloud().size([1000, 400])
          .words(<?php echo $palabras_JSON ?>)
          .padding(3)
          .rotate(function() { return ~~(Math.random() * 2) * 90; })
          .font("Impact")
          .fontSize(function(d) { return d.size; })
          .on("end", draw)
          .start();

      function draw(words) 
      {
          d3.select("#contenido_nube").append("svg")
              .attr("viewBox", "-15 0 " + 1000 + " " + 500 )
                .attr("preserveAspectRatio", "xMidYMid meet")
            .append("g")
              .attr("transform", "translate(472,250)")
            .selectAll("text")
              .data(words)
            .enter().append("text")
              .style("font-size", function(d) { return d.size + "px"; })
              .style("font-family", "Impact")
              .style("fill", function(d, i) { return fill(i); })
              .attr("text-anchor", "middle")
              .attr("transform", function(d) {
                return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
              })
              .text(function(d) { return d.text; });
      }
    }
    //Sirve para hacer la nube de palabars responsiva
    var aspect = 1000 / 400,
      chart = $("#contenido_nube");
    $(window).on("resize", function() {
        var targetWidth = chart.parent().width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
    });
  </script>
</body>
</html>

