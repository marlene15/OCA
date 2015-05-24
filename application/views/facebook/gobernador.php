<head lang="es">
  <title>Candidatos a Gobernador</title>   
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.min.js"></script>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.js"></script> 
  <script src="<?php echo base_url()?>assets/facebook/jsapi.js"></script>
  <script src="<?php echo base_url()?>assets/facebook/vk.js"></script>   
  <style type="text/css">   
      #myTab{
        margin-top: 2px;
      }
  </style>  
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
                          Candidatos a Gobernador <small>Actividad en Facebook</small>
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
                                Gobernador
                                <i class="icon-angle-right"></i>
                            </li>                            
                        </ul>                        
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <center>
                      <!--Código para el tap de pestañas-->   
                      <div class="bs-example bs-example-tabs">
                        <ul class="nav nav-tabs" id="myTab">
                          <li class="active"><a data-toggle="tab" href="#barras1">Gráfica</a></li>
                          <li class=""><a data-toggle="tab" href="#barras2">Nube de Palabras</a></li>
                        </ul>
                        <div class="tab-content" id="tabs">
                          <div id="barras1" class="tab-pane fade active in"> 
                            <br> 
                            <!-- <div id="pastel"></div> -->
                            <div id="chart_div"></div>
                          </div>
                          <div id="barras2" class="tab-pane fade">
                            <br> 
                            <div id=""></div>                                   
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
 <!--GRAFICA GOBERNADOR-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI\nIgnacio Peralta',<?php echo $megustaci ?>, <?php echo $seguidoresci ?>],
        ['PRI\nJorge Preciado',<?php echo $megustacj ?>, <?php echo $seguidorescj ?>],
        ['PRD\nMartha Zepeda',<?php echo $megustacm ?>, <?php echo $seguidorescm ?>],
        ['PT\nDavid Munro',<?php echo $megustacd ?>, <?php echo $seguidorescd ?>],
        ['PMC\nLeoncio Morán',<?php echo $megustacl ?>, <?php echo $seguidorescl ?>],
        ['PM\nJosé Gallardo',<?php echo $megustacf ?>, <?php echo $seguidorescf ?>],
        ['PES\nGerardo Galván',<?php echo $megustacg ?>, <?php echo $seguidorescg ?>],
        ['PH\nCarlos Barbazán',<?php echo $megustacc ?>, <?php echo $seguidorescc ?>]        
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