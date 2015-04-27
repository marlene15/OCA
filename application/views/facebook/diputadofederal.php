<head lang="es">
  <title>Candidatos a Diputado Federal</title> 
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
                          Candidatos a Diputado Federal <small>Actividad en Facebook</small>
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
                                Diputado Federal
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
        ['PAN\nJosé Manuel',<?php echo $megustaci ?>, <?php echo $seguidoresci ?>],
        ['PRI\nEnrique Rojas',<?php echo $megustacj ?>, <?php echo $seguidorescj ?>],
        ['PRD\nIndira Vizcaíno',<?php echo $megustacm ?>, <?php echo $seguidorescm ?>],
        ['MC\nSilvia Díaz',<?php echo $megustacd ?>, <?php echo $seguidorescd ?>],
        ['MORENA\nÁngeles Márquez',<?php echo $megustacl ?>, <?php echo $seguidorescl ?>],
        ['ES\nRosalina García',<?php echo $megustacf ?>, <?php echo $seguidorescf ?>],
        ['PH\nClaudia Ibarra',<?php echo $megustacg ?>, <?php echo $seguidorescg ?>]
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

<!--GRAFICA DISTRITO II-->
  <script type="text/javascript">
    //google.load("visualization", "1", {packages: ["corechart"]});
    //google.setOnLoadCallback(drawChart);

    function drawChart2() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI\nNorma Galindo',<?php echo $megustacdn ?>, <?php echo $seguidorescdn ?>],
        ['NA\nPedro Fernández',<?php echo $megustacdp ?>, <?php echo $seguidorescdp ?>],
        ['PT\nElías Valencia',<?php echo $megustacde ?>, <?php echo $seguidorescde ?>],
        ['MC\nJuan Carlos Olave',<?php echo $megustacdj ?>, <?php echo $seguidorescdj ?>],
        ['MORENA\nMarisa Mesina',<?php echo $megustacdm ?>, <?php echo $seguidorescdm ?>]
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
        width: 1000,
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

      var chart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
      chart2.draw(view, options);          
    }
  </script>
</html>