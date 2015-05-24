<html>
<head lang="es">
  <title>Candidatos por Partido</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.min.js"></script>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.js"></script> 
  <script src="<?php echo base_url()?>assets/facebook/jsapi.js"></script> 
  <script src="<?php echo base_url()?>assets/facebook/vk.js"></script>  
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
                            <li class=""><a data-toggle="tab" href="#barras4">PMC</a></li>                                                        
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
<!--GRÁFICA POR PARTIDO PRI-->
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([

    ['Semana', 'Like', 'Post'],
    ['27/04/2015', <?php echo $megustac1 ?>,<?php echo $seguidoresc1 ?>],
    ['06/05/2015', <?php echo $megustacc1 ?>, <?php echo $seguidorescc1?>]    
    // ['2006/07',  157,      1167,        587,             807,           397,      623],
    // ['2007/08',  139,      1110,        615,             968,           215,      609.4],
    // ['2008/09',  136,      691,         629,             1026,          366,      569.6]    
  ]);

  var options = {
    vAxis: {title: "Partido"},
    hAxis: {title: "Semana"},
    seriesType: "bars",
    height: 600,
    series: {2: {type: "line"}}
  };

  var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}

</script>
<!--GRÁFICA POR PARTIDO PAN-->
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization2() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([

    ['Semana', 'Like', 'Post'],
    ['27/04/2015', <?php echo $megustac2 ?>, <?php echo $seguidoresc2 ?>],
    ['06/05/2015', <?php echo $megustacc2 ?>, <?php echo $seguidorescc2 ?>]    
    // ['2005/06',  135,      1120,        599,             1268,          288,      682],
    // ['2006/07',  157,      1167,        587,             807,           397,      623],
    // ['2007/08',  139,      1110,        615,             968,           215,      609.4],
    // ['2008/09',  136,      691,         629,             1026,          366,      569.6]    
  ]);

  var options = {
    vAxis: {title: "Partido"},
    hAxis: {title: "Semana"},
    seriesType: "bars",
    height: 600,
    series: {2: {type: "line"}}
  };

  var chart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
  chart2.draw(data, options);
}
</script>

</script>
<!--GRÁFICA POR PARTIDO PRD-->
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization3() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([

    ['Semana', 'Like', 'Post'],
    ['27/04/2015', <?php echo $megustac5 ?>, <?php echo $seguidoresc5 ?>],
    ['06/05/2015', <?php echo $megustacc5 ?>, <?php echo $seguidorescc5 ?>]    
    // ['2005/06',  135,      1120,        599,             1268,          288,      682],
    // ['2006/07',  157,      1167,        587,             807,           397,      623],
    // ['2007/08',  139,      1110,        615,             968,           215,      609.4],
    // ['2008/09',  136,      691,         629,             1026,          366,      569.6]    
  ]);

  var options = {
    vAxis: {title: "Partido"},
    hAxis: {title: "Semana"},
    seriesType: "bars",
    height: 600,
    series: {2: {type: "line"}}
  };

  var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div3'));
  chart3.draw(data, options);
}
</script>
</script>
<!--GRÁFICA POR PARTIDO PMC-->
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization4() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([

    ['Semana', 'Like', 'Post'],
    ['27/04/2015', <?php echo $megustac7 ?>, <?php echo $seguidoresc7 ?>],
    ['06/05/2015', <?php echo $megustacc7 ?>, <?php echo $seguidorescc7 ?>]    
    // ['2005/06',  135,      1120,        599,             1268,          288,      682],
    // ['2006/07',  157,      1167,        587,             807,           397,      623],
    // ['2007/08',  139,      1110,        615,             968,           215,      609.4],
    // ['2008/09',  136,      691,         629,             1026,          366,      569.6]    
  ]);

  var options = {
    vAxis: {title: "Partido"},
    hAxis: {title: "Semana"},
    seriesType: "bars",
    height: 600,
    series: {2: {type: "line"}}
  };

  var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div4'));
  chart4.draw(data, options);
}
</script>
<!--GRÁFICA POR PARTIDO PV-->
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization5() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([

    ['Semana', 'Like', 'Post'],
    ['27/04/2015', <?php echo $megustac4 ?>, <?php echo $seguidoresc4 ?>],
    ['06/05/2015', <?php echo $megustacc4 ?>, <?php echo $seguidorescc4 ?>]    
    // ['2005/06',  135,      1120,        599,             1268,          288,      682],
    // ['2006/07',  157,      1167,        587,             807,           397,      623],
    // ['2007/08',  139,      1110,        615,             968,           215,      609.4],
    // ['2008/09',  136,      691,         629,             1026,          366,      569.6]    
  ]);

  var options = {
    vAxis: {title: "Partido"},
    hAxis: {title: "Semana"},
    seriesType: "bars",
    height: 600,
    series: {2: {type: "line"}}
  };

  var chart5 = new google.visualization.ComboChart(document.getElementById('chart_div5'));
  chart5.draw(data, options);
}
</script>
<!--GRÁFICA POR PARTIDO PT-->
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization6() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([

    ['Semana', 'Like', 'Post'],
    ['27/04/2015', <?php echo $megustac6 ?>, <?php echo $seguidoresc6 ?>],
    ['06/05/2015', <?php echo $megustacc6 ?>, <?php echo $seguidorescc6 ?>]    
    // ['2005/06',  135,      1120,        599,             1268,          288,      682],
    // ['2006/07',  157,      1167,        587,             807,           397,      623],
    // ['2007/08',  139,      1110,        615,             968,           215,      609.4],
    // ['2008/09',  136,      691,         629,             1026,          366,      569.6]    
  ]);

  var options = {
    vAxis: {title: "Partido"},
    hAxis: {title: "Semana"},
    seriesType: "bars",
    height: 600,
    series: {2: {type: "line"}}
  };

  var chart6 = new google.visualization.ComboChart(document.getElementById('chart_div6'));
  chart6.draw(data, options);
}
</script>
</script>
<!--GRÁFICA POR PARTIDO PM-->
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization7() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([

    ['Semana', 'Like', 'Post'],
    ['27/04/2015', <?php echo $megustac8 ?>, <?php echo $seguidoresc8 ?>],
    ['06/05/2015', <?php echo $megustacc8 ?>, <?php echo $seguidorescc8 ?>]    
    // ['2005/06',  135,      1120,        599,             1268,          288,      682],
    // ['2006/07',  157,      1167,        587,             807,           397,      623],
    // ['2007/08',  139,      1110,        615,             968,           215,      609.4],
    // ['2008/09',  136,      691,         629,             1026,          366,      569.6]    
  ]);

  var options = {
    vAxis: {title: "Partido"},
    hAxis: {title: "Semana"},
    seriesType: "bars",
    height: 600,
    series: {2: {type: "line"}}
  };

  var chart7 = new google.visualization.ComboChart(document.getElementById('chart_div7'));
  chart7.draw(data, options);
}
</script>
<!--GRÁFICA POR PARTIDO PNA-->
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization8() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([

    ['Semana', 'Like', 'Post'],
    ['27/04/2015', <?php echo $megustac3 ?>, <?php echo $seguidoresc3 ?>],
    ['06/05/2015', <?php echo $megustacc3 ?>, <?php echo $seguidorescc3 ?>]    
    // ['2005/06',  135,      1120,        599,             1268,          288,      682],
    // ['2006/07',  157,      1167,        587,             807,           397,      623],
    // ['2007/08',  139,      1110,        615,             968,           215,      609.4],
    // ['2008/09',  136,      691,         629,             1026,          366,      569.6]    
  ]);

  var options = {
    vAxis: {title: "Partido"},
    hAxis: {title: "Semana"},
    seriesType: "bars",
    height: 600,
    series: {2: {type: "line"}}
  };

  var chart8 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
  chart8.draw(data, options);
}
</script>
</script>
<!--GRÁFICA POR PARTIDO PES-->
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization9() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([

    ['Semana', 'Like', 'Post'],
    ['27/04/2015', <?php echo $megustac9 ?>, <?php echo $seguidoresc9 ?>],
    ['06/05/2015', <?php echo $megustacc9 ?>, <?php echo $seguidorescc9 ?>]    
    // ['2005/06',  135,      1120,        599,             1268,          288,      682],
    // ['2006/07',  157,      1167,        587,             807,           397,      623],
    // ['2007/08',  139,      1110,        615,             968,           215,      609.4],
    // ['2008/09',  136,      691,         629,             1026,          366,      569.6]    
  ]);

  var options = {
    vAxis: {title: "Partido"},
    hAxis: {title: "Semana"},
    seriesType: "bars",
    height: 600,
    series: {2: {type: "line"}}
  };

  var chart9 = new google.visualization.ComboChart(document.getElementById('chart_div9'));
  chart9.draw(data, options);
}
</script>
</script>
<!--GRÁFICA POR PARTIDO PH-->
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization10() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([

    ['Semana', 'Like', 'Post'],
    ['27/04/2015', <?php echo $megustac10 ?>, <?php echo $seguidoresc10 ?>],
    ['06/05/2015', <?php echo $megustacc10 ?>, <?php echo $seguidorescc10 ?>]    
    // ['2005/06',  135,      1120,        599,             1268,          288,      682],
    // ['2006/07',  157,      1167,        587,             807,           397,      623],
    // ['2007/08',  139,      1110,        615,             968,           215,      609.4],
    // ['2008/09',  136,      691,         629,             1026,          366,      569.6]    
  ]);

  var options = {
    vAxis: {title: "Partido"},
    hAxis: {title: "Semana"},
    seriesType: "bars",
    height: 600,
    series: {2: {type: "line"}}
  };

  var chart10 = new google.visualization.ComboChart(document.getElementById('chart_div10'));
  chart10.draw(data, options);
}
</script>
</html> 