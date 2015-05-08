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
    <div class="page-container">
        <?php $this->load->view('comunes/nav'); ?>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <h3 class="page-title">
                          Candidatos por Partido <small>Actividad en Facebook</small>
                        </h3>
                        <ul class="breadcrumb">
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
                            <li class="active"><a data-toggle="tab" href="#barras1">Likes</a></li> 
                            <li class=""><a data-toggle="tab" href="#barras2">Post</a></li>                            
                            <li class=""><a data-toggle="tab" href="#barras3">Nube de Palabras</a></li>                            
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
                                  <div id=""></div>
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
<!--GRÁFICA POR PARTIDO LIKES-->
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([

    ['Semana', 'PAN', 'PRI', 'PNA', 'PV', 'PRD', 'PT', 'PMC', 'PM', 'PES', 'PH'],
    ['27/04/2015', <?php echo $megustac1 ?>, <?php echo $megustac2 ?>,<?php echo $megustac3 ?>, <?php echo $megustac4 ?>, <?php echo $megustac5 ?>, <?php echo $megustac6 ?>, <?php echo $megustac7 ?>, <?php echo $megustac8 ?>, <?php echo $megustac9 ?>, <?php echo $megustac10 ?>],
    ['06/05/2015', <?php echo $megustacc1 ?>, <?php echo $megustacc2 ?>,<?php echo $megustacc3 ?>, <?php echo $megustacc4 ?>, <?php echo $megustacc5 ?>, <?php echo $megustacc6 ?>, <?php echo $megustacc7 ?>, <?php echo $megustacc8 ?>, <?php echo $megustacc9 ?>, <?php echo $megustacc10 ?>]    
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

<!--GRÁFICA POR PARTIDO POSTS-->
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization2() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([

    ['Semana', 'PAN', 'PRI', 'PNA', 'PV', 'PRD', 'PT', 'PMC', 'PM', 'PES', 'PH'],
    ['27/04/2015', <?php echo $seguidoresc1 ?>, <?php echo $seguidoresc2 ?>,<?php echo $seguidoresc3 ?>, <?php echo $seguidoresc4 ?>, <?php echo $seguidoresc5 ?>, <?php echo $seguidoresc6 ?>, <?php echo $seguidoresc7 ?>, <?php echo $seguidoresc8 ?>, <?php echo $seguidoresc9 ?>, <?php echo $seguidoresc10 ?>],
    ['06/05/2015', <?php echo $seguidorescc1 ?>, <?php echo $seguidorescc2 ?>,<?php echo $seguidorescc3 ?>, <?php echo $seguidorescc4 ?>, <?php echo $seguidorescc5 ?>, <?php echo $seguidorescc6 ?>, <?php echo $seguidorescc7 ?>, <?php echo $seguidorescc8 ?>, <?php echo $seguidorescc9 ?>, <?php echo $seguidorescc10 ?>]    
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
</html> 