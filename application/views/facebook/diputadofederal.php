<head lang="es">
  <title>Diputado Federal</title>   
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.js"></script> 
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.layout.cloud.js"></script>
    <!--Se usa para la primera gráfica-->
    <script src="<?php echo base_url()?>assets/facebook/jsapi.js"></script> 
    <script src="<?php echo base_url()?>assets/facebook/tabsDL.js"></script> 
    <!--Para poder usar el calendario, importar las librerias-->
    <link href="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <!--Para usar los contenedores widget-->
    <link href="<?php echo base_url()?>assets/bootstrap-widget/css/widget.css" rel="stylesheet" type="text/css">        

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
                          Candidatos a Diputado Federal <small>Actividad en Facebook</small>
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
                            <li>
                                <i class="icon-table"></i>
                                Cargo 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-facebook"></i>
                                Facebook 
                                <i class="icon-angle-right"></i>                                
                            </li>
                            <li>
                                <i class="icon-user"></i>
                                Diputado Federal
                                <i class="icon-angle-right"></i>
                            </li>                            
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">
                      <div id="alert"></div>                  
                    <center>
                        <!--Código para el tap de pestañas-->   
                        <div class="bs-example bs-example-tabs">
                          <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a data-toggle="tab" href="#barras1">Distrito I</a></li>
                            <li class=""><a data-toggle="tab" href="#barras2">Distrito II</a></li>
                            <li class=""><a data-toggle="tab" href="#nube" onclick="nube();">Nube de Palabras</a></li>
                          </ul>
                        <div class="tab-content" id="tabs">
                        <!--Primer tab-->
                          <div id="barras1" class="tab-pane fade active in">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div"></div>                            
                                      <div id="con"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab1" value="1">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Enrique Rojas</center></td>                                      
                                      </tr>
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Jose Manuel</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRD.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Indira Vizcaíno</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PMC.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Silvía Díaz</center></td>
                                      </tr>                         
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/MORENA.jpg" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Ángeles Márquez</center></td>
                                      </tr>
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PES.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Rosalina García</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/HUMANISTA.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Claudia Ibarra</center></td>
                                      </tr> 
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div>                      
                        <!--Segunda tab-->
                          <div id="barras2" class="tab-pane">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor2"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div2"></div>                            
                                      <div id="con2"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha2">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab2" value="2">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta2">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVEM.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Norma Galindo</center></td>                                      
                                      </tr>
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Pedro Fernández</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Elías Valencia</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PMC.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Juan Carlos Olave</center></td>
                                      </tr>                         
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/MORENA.jpg" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Marisa Mesina</center></td>
                                      </tr> 
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div>   
                          
                          <div id="nube" class="tab-pane fade ">  
                            <div class="row-fluid">
                              <div class="span10">
                                <div id="container">
                                  <center><div id="contenido_nube" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid"></div></center>  
                                  <center><div id="nube_consulta" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid"></div></center>           
                                </div>                           
                              </div>

                              <div class="span2">
                                </br></br>
                                <div class="btn-toolbar" align="left"> 
                                  <div class="btn-group-vertical">
                                    <a class="btn btn-success btn-lg active" id="consulta_nube"> Marzo</a>
                                    <a class="btn btn-primary btn-lg" id="consulta_nube2"> Abril</a>
                                    <a class="btn btn-primary btn-lg" id="consulta_nube3"> Mayo</a>
                                    <a class="btn btn-primary btn-lg" id="consulta_nube4"> Junio</a>
                                  </div>
                                </div>
                              </div>                    
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
   <!--Para poder usar el calendario, importar las librerias-->
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>  
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
   <!--GRAFICA DISTRITO I-->
  <script type="text/javascript">
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Likes');
        data.addColumn('number', 'Posts');       
        data.addRows([
          ['PAN',<?php echo $megustacj ?>, <?php echo $seguidorescj ?>],
          ['PRI',<?php echo $megustace ?>, <?php echo $seguidoresce ?>],
          ['PRD',<?php echo $megustaci ?>, <?php echo $seguidoresci ?>],
          ['MC',<?php echo $megustacs ?>, <?php echo $seguidorescs ?>],
          ['PM',<?php echo $megustaca ?>, <?php echo $seguidoresca ?>],
          ['PES',<?php echo $megustacr ?>, <?php echo $seguidorescr ?>],
          ['PH',<?php echo $megustacc ?>, <?php echo $seguidorescc ?>]
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
            }
          },
          vAxis: {
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
          }
        };  

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(view, options);          
      }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart();
    });      
  </script>

<!--GRAFICA DISTRITO II-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    function drawChart2() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['Coalición \n PRI-PVE',<?php echo $megustacn ?>, <?php echo $seguidorescn ?>],
        ['NA',<?php echo $megustacp ?>, <?php echo $seguidorescp ?>],
        ['PT',<?php echo $megustacev ?>, <?php echo $seguidorescev ?>],
        ['MC',<?php echo $megustacju ?>, <?php echo $seguidorescju ?>],
        ['PM',<?php echo $megustacm ?>, <?php echo $seguidorescm ?>]
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
        hAxis: {
          title: 'Candidatos'
        },         
        width: 800,
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
          title: 'C A N T I D A D',
          titleTextStyle: { fontName: 'Arial Black'}
        }
      };  

      var chart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
      chart2.draw(view, options); 
    }   
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });          
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
          url: '<?php echo site_url('facebook/controlador_consultas/DFDistritoI');?>',                                      
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
          url: '<?php echo site_url('facebook/controlador_consultas/DFDistritoI');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con2').html(html);
          }
        });
      });
    });
  </script>  


    <!--Funcion para ajustar la grafica al expander el menú-->
  <script type="text/javascript">
    function recarga()
    {
      setTimeout(function(){
        drawChart();
        drawChart2();
      },100)    
      $('#chart_div').width('100%');  
      $('#chart_div2').width('100%');  
    }
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

    <!--Consulta de la nube de palabras-->
  <script type="text/javascript">
    $(document).ready(function(){ 

      $("#consulta_nube").click(function(event) {
        $("#consulta_nube").addClass('active btn-success');
        $("#consulta_nube2").removeClass('active btn-success');
        $("#consulta_nube3").removeClass('active btn-success');
        $("#consulta_nube4").removeClass('active btn-success');       
        var parametros = {
                "mes" : '03'
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/nube_dipFederales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#nube_consulta').html(html);   
          }
        });            
      }); 

      $("#consulta_nube2").click(function(event) {
        $("#consulta_nube2").addClass('active btn-success');
        $("#consulta_nube").removeClass('active btn-success');
        $("#consulta_nube").addClass('btn-primary');
        $("#consulta_nube3").removeClass('active btn-success');
        $("#consulta_nube4").removeClass('active btn-success');         
        var parametros = {
                "mes" : '04'
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/nube_dipFederales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#nube_consulta').html(html);   
          }
        });            
      });

      $("#consulta_nube3").click(function(event) {
        $("#consulta_nube3").addClass('active btn-success');
        $("#consulta_nube2").removeClass('active btn-success');
        $("#consulta_nube").removeClass('active btn-success');
        $("#consulta_nube").addClass('btn-primary');
        $("#consulta_nube4").removeClass('active btn-success'); 
        var parametros = {
                "mes" : '05'
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/nube_dipFederales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#nube_consulta').html(html);   
          }
        });            
      });

      $("#consulta_nube4").click(function(event) {
        $("#consulta_nube4").addClass('active btn-success');
        $("#consulta_nube2").removeClass('active btn-success');
        $("#consulta_nube3").removeClass('active btn-success');
        $("#consulta_nube").removeClass('active btn-success'); 
        $("#consulta_nube").addClass('btn-primary');
        var parametros = {
                "mes" : '06'
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/nube_dipFederales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#nube_consulta').html(html);   
          }
        });            
      });

    });
  </script>  
</body>   
</html>