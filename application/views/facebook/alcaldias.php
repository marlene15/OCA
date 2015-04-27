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
                          Candidatos a Presidente Municipal <small>Actividad en Facebook</small>
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
                                Presidente Municipal
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
                            <li class="active"><a data-toggle="tab" href="#barras1">Armería</a></li>
                            <li class=""><a data-toggle="tab" href="#barras2">Colima</a></li>
                            <li class=""><a data-toggle="tab" href="#barras3">Comala</a></li>
                            <li class=""><a data-toggle="tab" href="#barras4">Coquimatlán</a></li>
                            <li class=""><a data-toggle="tab" href="#barras5">Cuauhtémoc</a></li>
                            <li class=""><a data-toggle="tab" href="#barras6">Ixtlahuacán</a></li>
                            <li class=""><a data-toggle="tab" href="#barras7">Minatitlán</a></li>
                            <li class=""><a data-toggle="tab" href="#barras8">Manzanillo</a></li>
                            <li class=""><a data-toggle="tab" href="#barras9">Tecomán</a></li>
                            <li class=""><a data-toggle="tab" href="#barras10">Villa de Álvarez</a></li>                                                                                                                                                                                                    
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

<!--GRAFICA ARMERÍA-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI\nEsperanza Alcaraz',<?php echo $megustac40 ?>, <?php echo $seguidoresc40 ?>],
        ['PM\nMiguel Ruelas',<?php echo $megustac41 ?>, <?php echo $seguidoresc41 ?>],
        ['PH\nSalvador Bueno',<?php echo $megustac42 ?>, <?php echo $seguidoresc42 ?>]
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

<!--GRAFICA COLIMA-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PH\nBrenda\nMayoral',<?php echo $megustac7 ?>, <?php echo $seguidoresc7 ?>],        
        ['PMC\nElena\nAbaroa',<?php echo $megustac6 ?>, <?php echo $seguidoresc6 ?>],        
        ['VERDE\nEsmeralda\nCárdenas',<?php echo $megustac3 ?>, <?php echo $seguidoresc3 ?>],
        ['PAN\nHéctor\nInsúa',<?php echo $megustac1 ?>, <?php echo $seguidoresc1 ?>],
        ['PRD\nJuan\nVázquez',<?php echo $megustac4 ?>, <?php echo $seguidoresc4 ?>],        
        ['PRI\nOscar\nValdovinos',<?php echo $megustac2 ?>, <?php echo $seguidoresc2 ?>],
        ['PT\nPaulo\nVélazquez',<?php echo $megustac5 ?>, <?php echo $seguidoresc5 ?>]
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

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
      chart.draw(view, options);          
    }
  </script>        

  <!--GRAFICA COMALA-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PES\nMario Carrillo',<?php echo $megustac25 ?>, <?php echo $seguidoresc25 ?>],
        ['PT\nMario Peña',<?php echo $megustac23 ?>, <?php echo $seguidoresc23 ?>],
        ['PRI\nSalomón Salazar',<?php echo $megustac22 ?>, <?php echo $seguidoresc22 ?>],
        ['PM\nZenaida Vicente',<?php echo $megustac24 ?>, <?php echo $seguidoresc24 ?>]
        
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

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div3'));
      chart.draw(view, options);          
    }
  </script>
  
  <!--GRAFICA COQUIMATLÁN-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI\nEnrique Preciado',<?php echo $megustac30 ?>, <?php echo $seguidoresc30 ?>],
        ['PAN\nOrlando Lino',<?php echo $megustac29 ?>, <?php echo $seguidoresc29 ?>],
        ['PMC\nSergio Polanco',<?php echo $megustac31 ?>, <?php echo $seguidoresc31 ?>]
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

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div4'));
      chart.draw(view, options);          
    }
  </script>

<!--GRAFICA CUAUHTÉMOC-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRD\nBertha Zamora',<?php echo $megustac34 ?>, <?php echo $seguidoresc34 ?>],
        ['PRI\nBlanca Rocha',<?php echo $megustac33 ?>, <?php echo $seguidoresc33 ?>],
        ['PH\nBlanca Ursúa',<?php echo $megustac36 ?>, <?php echo $seguidoresc36 ?>],
        ['PM\nGilberto Ascencio',<?php echo $megustac35 ?>, <?php echo $seguidoresc35 ?>],
        ['PAN\nRafael Mendoza',<?php echo $megustac32 ?>, <?php echo $seguidoresc32 ?>]

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

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div5'));
      chart.draw(view, options);          
    }
  </script>

<!--GRAFICA IXTLAHUACÁN-->
 <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI\nCrispín Gutiérrez',<?php echo $megustac43 ?>, <?php echo $seguidoresc43 ?>],
        ['PT\nGermán Ruelas',<?php echo $megustac45 ?>, <?php echo $seguidoresc45 ?>],
        ['PNA\nHiram Ruíz',<?php echo $megustac44 ?>, <?php echo $seguidoresc44 ?>],
        ['PM\nIgnacia Gutiérrez',<?php echo $megustac46 ?>, <?php echo $seguidoresc46 ?>]        
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

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div6'));
      chart.draw(view, options);          
    }
  </script>
<!--GRAFICA MINATITLAN-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI\nManuel Palacios',<?php echo $megustac37 ?>, <?php echo $seguidoresc37 ?>],
        ['PMC\nBertha picasso',<?php echo $megustac38 ?>, <?php echo $seguidoresc38 ?>],
        ['PES\nNorma Campos',<?php echo $megustac39 ?>, <?php echo $seguidoresc39 ?>]                        
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

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div7'));
      chart.draw(view, options);          
    }
  </script>
  <!--GRAFICA MANZANILLO-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nGabriel\nBenavides',<?php echo $megustac8 ?>, <?php echo $seguidoresc8 ?>],
        ['PM\nHéctor\nLara',<?php echo $megustac13 ?>, <?php echo $seguidoresc13 ?>],
        ['PT\nMarcos\nBarajas',<?php echo $megustac11 ?>, <?php echo $seguidoresc11 ?>],
        ['PRD\nMartha\nLeal',<?php echo $megustac10 ?>, <?php echo $seguidoresc10 ?>],
        ['PMC\nRubén\nRomo',<?php echo $megustac12 ?>, <?php echo $seguidoresc12 ?>],
        ['PH\nVíctor\nGranados',<?php echo $megustac14 ?>, <?php echo $seguidoresc14 ?>]                        
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

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div8'));
      chart.draw(view, options);          
    }
  </script>  
  <!--GRAFICA TECOMAN-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI\nArturo García',<?php echo $megustac26 ?>, <?php echo $seguidoresc26 ?>],
        ['PT\nRubén Santos',<?php echo $megustac27 ?>, <?php echo $seguidoresc27 ?>],
        ['PM\nÁngel Venegas',<?php echo $megustac28 ?>, <?php echo $seguidoresc28 ?>]                        
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

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div9'));
      chart.draw(view, options);          
    }
  </script>        

  <!--GRAFICA VILLA DE ÁLVAREZ-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nYulenny\nCortés',<?php echo $megustac15 ?>, <?php echo $seguidoresc15 ?>],
        ['PRI\nOswy\nDelgado',<?php echo $megustac16 ?>, <?php echo $seguidoresc16 ?>],
        ['PRD\nJaime\nSotelo',<?php echo $megustac17 ?>, <?php echo $seguidoresc17 ?>],
        ['PT\nBerenice\nGonzález',<?php echo $megustac18 ?>, <?php echo $seguidoresc18 ?>],
        ['PMC\nHéctor\nAnaya',<?php echo $megustac19 ?>, <?php echo $seguidoresc19 ?>],
        ['PM\nMelchor\nArroyo',<?php echo $megustac20 ?>, <?php echo $seguidoresc20 ?>],
        ['PH\nEdgar\nGonzález',<?php echo $megustac21 ?>, <?php echo $seguidoresc21 ?>]                                                                    
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

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div10'));
      chart.draw(view, options);          
    }
  </script>
</html>