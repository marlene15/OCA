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
  <title>Dip. Locales</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/tabsDL.js"></script>  
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
                            Candidatos a Diputado Local <small>Actividad en Twitter </small>
                        </h3>
                        <ul class="breadcrumb">
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
                                <a href="<?php echo site_url('twitter/controlador_inicio/dip_locales');?>">Diputado Local</a>
                            </li>                            
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                  <center>
                    <div class="portlet-body form well">
                      <!--Código para el tab de pestañas-->   
                      <div class="bs-example bs-example-tabs">
                        <ul class="nav nav-tabs" id="myTab">
                          <li class="active"><a data-toggle="tab" href="#barras1">Distrito 1</a></li>
                          <li class=""><a data-toggle="tab" href="#barras2">Distrito 2</a></li>
                          <li class=""><a data-toggle="tab" href="#barras3">Distrito 3</a></li>
                          <li class=""><a data-toggle="tab" href="#barras4">Distrito 4</a></li>
                          <li class=""><a data-toggle="tab" href="#barras5">Distrito 5</a></li>
                          <li class=""><a data-toggle="tab" href="#barras6">Distrito 6</a></li>
                          <li class=""><a data-toggle="tab" href="#barras7">Distrito 7</a></li>
                          <li class=""><a data-toggle="tab" href="#barras8">Distrito 8</a></li>
                          <li class=""><a data-toggle="tab" href="#barras9">Distrito 9</a></li>
                          <li class=""><a data-toggle="tab" href="#barras10">Distrito 10</a></li>
                          <li class=""><a data-toggle="tab" href="#barras11">Distrito 11</a></li>
                          <li class=""><a data-toggle="tab" href="#barras12">Distrito 12</a></li>
                          <li class=""><a data-toggle="tab" href="#barras13">Distrito 13</a></li>
                          <li class=""><a data-toggle="tab" href="#barras14">Distrito 14</a></li>
                          <li class=""><a data-toggle="tab" href="#barras15">Distrito 15</a></li>
                          <li class=""><a data-toggle="tab" href="#barras16">Distrito 16</a></li>                          
                        </ul>
                          <div class="tab-content" id="tabs">

                            <div id="barras1" class="tab-pane fade active in"> 
                                <div id="chart_div"></div>                            
                            </div>

                            <div id="barras2" class="tab-pane fade">
                              <div id="chart_div2"></div>                                   
                            </div>

                            <div id="barras3" class="tab-pane fade">
                              <div id="chart_div3"></div>                                   
                            </div>

                            <div id="barras4" class="tab-pane fade">
                              <div id="chart_div4"></div>                                   
                            </div>

                            <div id="barras5" class="tab-pane fade">
                              <div id="chart_div5"></div>                                   
                            </div>

                            <div id="barras6" class="tab-pane fade">
                              <div id="chart_div6"></div>                                   
                            </div>

                            <div id="barras7" class="tab-pane fade">
                              <div id="chart_div7"></div>                                   
                            </div>

                            <div id="barras8" class="tab-pane fade">
                              <div id="chart_div8"></div>                                   
                            </div>

                            <div id="barras9" class="tab-pane fade">
                              <div id="chart_div9"></div>                                   
                            </div>

                            <div id="barras10" class="tab-pane fade">
                              <div id="chart_div10"></div>                                   
                            </div>

                            <div id="barras11" class="tab-pane fade">
                              <div id="chart_div11"></div>                                   
                            </div>

                            <div id="barras12" class="tab-pane fade">
                              <div id="chart_div12"></div>                                   
                            </div>

                            <div id="barras13" class="tab-pane fade">
                              <div id="chart_div13"></div>                                   
                            </div>

                            <div id="barras14" class="tab-pane fade">
                              <div id="chart_div14"></div>                                   
                            </div>

                            <div id="barras15" class="tab-pane fade">
                              <div id="chart_div15"></div>                                   
                            </div>

                            <div id="barras16" class="tab-pane fade">
                              <div id="chart_div16"></div>                                   
                            </div>
                        </div>
                      </div> <!--Cierra div del tab de pestañas-->        
                    </div>
                  </center>
                </div>              
            </div>
        </div>
    </div>

  <?php $this->load->view('comunes/footer'); ?> 
</body>

<script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PRI\nHilda Ceballos de Moreno', <?php echo $seguidoresh ?>, <?php echo $siguiendoh ?>, <?php echo $tweetsh ?>]
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
        //title: '',
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
    google.setOnLoadCallback(drawChart);
    function drawChart2() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['NUEVA ALIANZA Guillermo Rangel Lozano', <?php echo $seguidores_rangel ?>, <?php echo $siguiendo_rangel ?>, <?php echo $tweets_rangel ?>],
        ['VERDE Viviana Ramírez Anguiano', <?php echo $seguidores_viviana ?>, <?php echo $siguiendo_viviana ?>, <?php echo $tweets_viviana ?>]
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
        title: '',
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
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart3() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PAN Crispín Guerra', <?php echo $seguidores_crispin ?>, <?php echo $siguiendo_crispin ?>, <?php echo $tweets_crispin ?>],
        ['VERDE Isis Villaseñor Silva', <?php echo $seguidores_isis ?>, <?php echo $siguiendo_isis ?>, <?php echo $tweets_isis ?>]
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
        title: '',
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

      var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div3'));
      chart3.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart4() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PAN Janeth Paz Ponce', <?php echo $seguidores_janeth ?>, <?php echo $siguiendo_janeth ?>, <?php echo $tweets_janeth ?>],
        ['PRI Juana Andrés Rivera', <?php echo $seguidores_juanita ?>, <?php echo $siguiendo_juanita ?>, <?php echo $tweets_juanita ?>]
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
        title: '',
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

      var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div4'));
      chart4.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart5() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PRI José Guadalupe Benavides Florián', <?php echo $seguidores_lupe ?>, <?php echo $siguiendo_lupe ?>, <?php echo $tweets_lupe ?>]
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
        title: '',
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

      var chart5 = new google.visualization.ComboChart(document.getElementById('chart_div5'));
      chart5.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart6() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PRI Octavio Tintos Trujillo', <?php echo $seguidores_octavio ?>, <?php echo $siguiendo_octavio ?>, <?php echo $tweets_octavio ?>]
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
        title: '',
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

      var chart6 = new google.visualization.ComboChart(document.getElementById('chart_div6'));
      chart6.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart7() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PRD Sara Elizabeth Cernas Verduzco', <?php echo $seguidores_sara ?>, <?php echo $siguiendo_sara ?>, <?php echo $tweets_sara ?>],
        ['PT Joel Padilla Peña', <?php echo $seguidores_joel ?>, <?php echo $siguiendo_joel ?>, <?php echo $tweets_joel ?>]
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
        title: '',
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

      var chart7 = new google.visualization.ComboChart(document.getElementById('chart_div7'));
      chart7.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart8() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PAN Meyly Beltrán Rolón', <?php echo $seguidores_meyly ?>, <?php echo $siguiendo_meyly ?>, <?php echo $tweets_meyly ?>],
        ['PRI Héctor Magaña Lara', <?php echo $seguidores_hector ?>, <?php echo $siguiendo_hector ?>, <?php echo $tweets_hector ?>]
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
        title: '',
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

      var chart87 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
      chart87.draw(view, options);          
    }
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart9() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PRI Eusebio Mesina Reyes', <?php echo $seguidores_eusebio ?>, <?php echo $siguiendo_eusebio ?>, <?php echo $tweets_eusebio ?>]
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
        title: '',
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

      var chart9 = new google.visualization.ComboChart(document.getElementById('chart_div9'));
      chart9.draw(view, options);          
    }
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart10() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PAN Adriana Lucía Mesina Tena', <?php echo $seguidores_mesina ?>, <?php echo $siguiendo_mesina ?>, <?php echo $tweets_mesina ?>],
        ['PRI Juan Carlos Pinto Rodríguez', <?php echo $seguidores_pinto ?>, <?php echo $siguiendo_pinto ?>, <?php echo $tweets_pinto ?>]
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
        title: '',
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

      var chart10 = new google.visualization.ComboChart(document.getElementById('chart_div10'));
      chart10.draw(view, options);          
    }
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart11() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PRI Armida Núñez García', <?php echo $seguidores_armida ?>, <?php echo $siguiendo_armida ?>, <?php echo $tweets_armida ?>]
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
        title: '',
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

      var chart11 = new google.visualization.ComboChart(document.getElementById('chart_div11'));
      chart11.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart12() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PRD Ana María Sánchez Landa', <?php echo $seguidores_amary ?>, <?php echo $siguiendo_amary ?>, <?php echo $tweets_amary ?>]
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
        title: '',
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

      var chart12 = new google.visualization.ComboChart(document.getElementById('chart_div12'));
      chart12.draw(view, options);          
    }
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart13() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PRI Sergio Sánchez Ochoa', <?php echo $seguidores_sergio ?>, <?php echo $siguiendo_sergio ?>, <?php echo $tweets_sergio ?>]
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
        title: '',
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

      var chart13 = new google.visualization.ComboChart(document.getElementById('chart_div13'));
      chart13.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart14() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['VERDE Martha Alicia Meza Oregon', <?php echo $seguidores_martha ?>, <?php echo $siguiendo_martha ?>, <?php echo $tweets_martha ?>]
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
        title: '',
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

      var chart14 = new google.visualization.ComboChart(document.getElementById('chart_div14'));
      chart14.draw(view, options);          
    }
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart15() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PRI Felícitas Peña Cisneros', <?php echo $seguidores_felicitas ?>, <?php echo $siguiendo_felicitas ?>, <?php echo $tweets_felicitas ?>]
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
        title: '',
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

      var chart15 = new google.visualization.ComboChart(document.getElementById('chart_div15'));
      chart15.draw(view, options);          
    }
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart16() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      <?php echo "Hilda: ".$seguidoresh ?>    
      data.addRows([
        ['PRI Santiago Chávez Chávez', <?php echo $seguidores_santiago ?>, <?php echo $siguiendo_santiago ?>, <?php echo $tweets_santiago ?>]
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
        title: '',
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

      var chart16 = new google.visualization.ComboChart(document.getElementById('chart_div16'));
      chart16.draw(view, options);          
    }
  </script>

</html>

