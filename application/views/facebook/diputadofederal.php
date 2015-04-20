<head lang="es">
  <title>Candidatos a Diputado Federal</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.min.js"></script>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.js"></script> 
  <script src="<?php echo base_url()?>assets/facebook/jsapi.js"></script> 
  
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
        ['PAN José Manuel Moreno González',<?php echo $megustaci ?>, <?php echo $seguidoresci ?>],
        ['PRI Enrique Rojas Orozco',<?php echo $megustacj ?>, <?php echo $seguidorescj ?>],
        ['PRD Indira Vizcaíno Silva',<?php echo $megustacm ?>, <?php echo $seguidorescm ?>],
        ['MOVIMIENTO CIUDADANO Silvia Elena Díaz Márquez',<?php echo $megustacd ?>, <?php echo $seguidorescd ?>],
        ['MORENA Ángeles Márquez Gileta',<?php echo $megustacl ?>, <?php echo $seguidorescl ?>],
        ['ENCUENTRO SOCIAL Rosalina García Torres',<?php echo $megustacf ?>, <?php echo $seguidorescf ?>],
        ['PARTIDO HUMANISTA Claudia Jasmín Ibarra Ávalos',<?php echo $megustacg ?>, <?php echo $seguidorescg ?>]
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
        title: '@oca_face \n Candidatos a Diputados Federales. Distrito I',
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
                            Oca_Face
                        </h3>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <center>
                      <div class="portlet-body form well">
                        <div id="chart_div" style="height: 600px;"></div>
                      </div>
                    </center>
                </div>              
            </div>
        </div>
    </div>

  <?php $this->load->view('comunes/footer'); ?> 
</body>
</html>