<html>
<head lang="es">
  <title>Candidatos a Presidente Municipal</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.min.js"></script>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.js"></script> 
  <script src="<?php echo base_url()?>assets/facebook/jsapi.js"></script> 
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
                          Candidatos a Diputado Local <small>Actividad en Facebook</small>
                        </h3>
                        <ul class="breadcrumb">
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
                                Diputado Local
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
                            <li class="active"><a data-toggle="tab" href="#barras1">Distrito I</a></li>
                            <li class=""><a data-toggle="tab" href="#barras2">Distrito II</a></li>
                            <li class=""><a data-toggle="tab" href="#barras3">Distrito III</a></li>
                            <li class=""><a data-toggle="tab" href="#barras4">Distrito IV</a></li>
                            <li class=""><a data-toggle="tab" href="#barras5">Distrito V</a></li>
                            <li class=""><a data-toggle="tab" href="#barras6">Distrito VI</a></li>
                            <li class=""><a data-toggle="tab" href="#barras7">Distrito VII</a></li>
                            <li class=""><a data-toggle="tab" href="#barras8">Distrito VIII</a></li>
                            <li class=""><a data-toggle="tab" href="#barras9">Distrito IX</a></li>
                            <li class=""><a data-toggle="tab" href="#barras10">Distrito X</a></li>                            
                            <li class=""><a data-toggle="tab" href="#barras11">Distrito XI</a></li>
                            <li class=""><a data-toggle="tab" href="#barras12">Distrito XII</a></li>
                            <li class=""><a data-toggle="tab" href="#barras13">Distrito XIII</a></li>
                            <li class=""><a data-toggle="tab" href="#barras14">Distrito XIV</a></li>
                            <li class=""><a data-toggle="tab" href="#barras15">Distrito XV</a></li>
                            <li class=""><a data-toggle="tab" href="#barras16">Distrito XVI</a></li>        
                          </ul>
                            <div class="tab-content" id="tabs">
                              
                              <div id="barras1" class="tab-pane fade active in"> 
                                <br> 
                                  <div id="chart_div"></div>
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
                              <div id="barras12" class="tab-pane fade">
                                <br> 
                                  <div id="chart_div12"></div>                                   
                              </div>
                              <div id="barras13" class="tab-pane fade">
                                <br> 
                                  <div id="chart_div13"></div>                                                                
                              </div>
                              <div id="barras14" class="tab-pane fade">
                                <br> 
                                  <div id="chart_div14"></div>                                   
                              </div>
                              <div id="barras15" class="tab-pane fade">
                                <br> 
                                  <div id="chart_div15"></div>                                                               
                              </div> 
                              <div id="barras16" class="tab-pane fade">
                                <br> 
                                  <div id="chart_div16"></div>                                                               
                              </div>                               
                      </div>
                    </center>
                </div>              
            </div>
        </div>
    </div>
  <?php $this->load->view('comunes/footer'); ?> 
</body>

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
        ['PRI\nHilda Ceballos',<?php echo $megustac1 ?>, <?php echo $seguidoresc1 ?>],
        ['PM\nJosé Cardenas',<?php echo $megustac2 ?>, <?php echo $seguidoresc2 ?>],
        ['PH\nLeonardo gutiérrez',<?php echo $megustac3 ?>, <?php echo $seguidoresc3 ?>]
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
          maxValue: 100
        }
      };  

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(view, options);          
    }
  </script>
</html>