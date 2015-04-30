<html>
<head lang="es">
  <title>Candidatos a Presidente Municipal</title> 
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

<!--GRAFICA DISTRITO II-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart2() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nNicolás\nContreras',<?php echo $megustac4 ?>, <?php echo $seguidoresc4 ?>],        
        ['PNA\nGuillermo\nRángel',<?php echo $megustac5 ?>, <?php echo $seguidoresc5 ?>],        
        ['VERDE\nSandra\nRamírez',<?php echo $megustac6 ?>, <?php echo $seguidoresc6 ?>],
        ['PAN\nJosé\nGarcía',<?php echo $megustac7 ?>, <?php echo $seguidoresc7 ?>],
        ['PRD\nArturo\nGarcía',<?php echo $megustac8 ?>, <?php echo $seguidoresc8 ?>],        
        ['PRI\nLiliana\nRodríguez',<?php echo $megustac9 ?>, <?php echo $seguidoresc9 ?>]
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
        //width: 1000,
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
  <!--GRAFICA DISTRITO III-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart3() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PES\nCrispín\nGuerra',<?php echo $megustac10 ?>, <?php echo $seguidoresc10 ?>],
        ['PT\nAlma\nArreola',<?php echo $megustac11 ?>, <?php echo $seguidoresc11 ?>],
        ['PRI\nMartha\nFarías',<?php echo $megustac12 ?>, <?php echo $seguidoresc12 ?>],
        ['PM\nIsis\nVillaseñor',<?php echo $megustac13 ?>, <?php echo $seguidoresc13 ?>],
        ['PT\nOctavio\nAguilar',<?php echo $megustac14 ?>, <?php echo $seguidoresc14 ?>],
        ['PRI\nPatricia\nPeregrina',<?php echo $megustac15 ?>, <?php echo $seguidoresc14 ?>],
        ['PM\nGloria\nArceo',<?php echo $megustac16 ?>, <?php echo $seguidoresc16 ?>]
     
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
        //width: 1000,
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

      var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div3'));
      chart3.draw(view, options);          
    }
  </script>  
<!--GRAFICA DISTRITO IV-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart4() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nJaneth Paz',<?php echo $megustac17 ?>, <?php echo $seguidoresc17 ?>],
        ['PRI\nJuana Andrés',<?php echo $megustac18 ?>, <?php echo $seguidoresc18 ?>],
        ['PRD\nSergio Ricardo',<?php echo $megustac19 ?>, <?php echo $seguidoresc19 ?>],
        ['PT\nAndrés Orozco',<?php echo $megustac20 ?>, <?php echo $seguidoresc20 ?>]        
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
        //width: 1000,
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

      var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div4'));
      chart4.draw(view, options);          
    }
  </script>  
<!--GRAFICA DISTRITO V-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart5() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nRamiro Toscano',<?php echo $megustac21 ?>, <?php echo $seguidoresc21 ?>],
        ['PRI-PNA-PV\nJosé Benavides',<?php echo $megustac22 ?>, <?php echo $seguidoresc22 ?>],
        ['PT\nYuliana Aguilar',<?php echo $megustac23 ?>, <?php echo $seguidoresc23 ?>]

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
        //width: 1000,
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

      var chart5 = new google.visualization.ComboChart(document.getElementById('chart_div5'));
      chart5.draw(view, options);          
    }
  </script>

<!--GRAFICA DISTRITO VI-->
 <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart6() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nSandra Ramírez',<?php echo $megustac24 ?>, <?php echo $seguidoresc24 ?>],
        ['PRI-PNA-PV\nOctavio Tintos',<?php echo $megustac25 ?>, <?php echo $seguidoresc25 ?>],
        ['PRD\nSergio Silva',<?php echo $megustac26 ?>, <?php echo $seguidoresc26 ?>],
        ['PT\nLeticia Mendoza',<?php echo $megustac27 ?>, <?php echo $seguidoresc27 ?>],
        ['PH\nGetsemani Ibarra',<?php echo $megustac28 ?>, <?php echo $seguidoresc28 ?>]                        
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
        //width: 1000,
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

      var chart6 = new google.visualization.ComboChart(document.getElementById('chart_div6'));
      chart6.draw(view, options);          
    }
  </script>
<!--GRAFICA DISTRITO VII-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart7() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nFrancisco\nCeballos',<?php echo $megustac29 ?>, <?php echo $seguidoresc29 ?>],
        ['PRI-PNA-PV\nAlfredo\nHernández',<?php echo $megustac30 ?>, <?php echo $seguidoresc30 ?>],
        ['PRD\nSara\nCernas',<?php echo $megustac31 ?>, <?php echo $seguidoresc31 ?>],
        ['PT\nJoel\nPadilla',<?php echo $megustac32 ?>, <?php echo $seguidoresc32 ?>],
        ['PMC\nSocorro\nBayardo',<?php echo $megustac33 ?>, <?php echo $seguidoresc33 ?>],
        ['PH\nErendira\nÁndrade',<?php echo $megustac34 ?>, <?php echo $seguidoresc34 ?>]                                                        
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
        //width: 1000,
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

      var chart7 = new google.visualization.ComboChart(document.getElementById('chart_div7'));
      chart7.draw(view, options);          
    }
  </script>
  <!--GRAFICA DISTRITO VIII-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart8() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nMeyly\nPastora',<?php echo $megustac35 ?>, <?php echo $seguidoresc35 ?>],
        ['PRI-PNA-PV\nHéctor\nMagaña',<?php echo $megustac36 ?>, <?php echo $seguidoresc36 ?>],
        ['PT\nAlfredo\nHerrera',<?php echo $megustac37 ?>, <?php echo $seguidoresc37 ?>],
        ['PMC\nAdelaida\nFernández',<?php echo $megustac38 ?>, <?php echo $seguidoresc38 ?>],
        ['PH\nJuan\nJuárez',<?php echo $megustac39 ?>, <?php echo $seguidoresc39 ?>]
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
        //width: 1000,
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

      var chart8 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
      chart8.draw(view, options);          
    }
  </script>  
   <!--GRAFICA DISTRITO IX-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart9() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nEusebio\nMesina',<?php echo $megustac40 ?>, <?php echo $seguidoresc40 ?>],
        ['PRI\nBeatriz\nIsunza',<?php echo $megustac41 ?>, <?php echo $seguidoresc41 ?>],
        ['VERDE\nSelene\nLópez',<?php echo $megustac42 ?>, <?php echo $seguidoresc42 ?>],
        ['PMC\nAngelica\nOchoa',<?php echo $megustac43 ?>, <?php echo $seguidoresc43 ?>],
        ['PM\nMauricio\nBarreto',<?php echo $megustac44 ?>, <?php echo $seguidoresc44 ?>]
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
        //width: 1000,
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

      var chart9 = new google.visualization.ComboChart(document.getElementById('chart_div9'));
      chart9.draw(view, options);          
    }
  </script>        

  <!--GRAFICA DISTRITO X-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart10() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI-PNA-PV\nJuan\nPinto',<?php echo $megustac45 ?>, <?php echo $seguidoresc45 ?>],
        ['PT\nRicardo\nSevilla',<?php echo $megustac46 ?>, <?php echo $seguidoresc46 ?>],
        ['PMC\nRaquel\nCárdenas',<?php echo $megustac47 ?>, <?php echo $seguidoresc47 ?>],
        ['PM\nMarco\nRodarte',<?php echo $megustac48 ?>, <?php echo $seguidoresc48 ?>],
        ['PH\nSalvador\nJuárez',<?php echo $megustac49 ?>, <?php echo $seguidoresc49 ?>]                                                                  
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
        //width: 1000,
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

      var chart10 = new google.visualization.ComboChart(document.getElementById('chart_div10'));
      chart10.draw(view, options);          
    }
  </script> 
   <!--GRAFICA DISTRITO XI-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart11() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nMiguel\nGarcía',<?php echo $megustac50 ?>, <?php echo $seguidoresc50 ?>],
        ['PRI-PNA-PV\nArmida\nNuñez',<?php echo $megustac51 ?>, <?php echo $seguidoresc51 ?>],
        ['PRD\nAldo\nVega',<?php echo $megustac52 ?>, <?php echo $seguidoresc52 ?>],
        ['PT\nSebastián\nEsparza',<?php echo $megustac53 ?>, <?php echo $seguidoresc53 ?>],
        ['PM\nTeresa\nHernández',<?php echo $megustac54 ?>, <?php echo $seguidoresc54 ?>],
        ['PM\nDiana\nTopetes',<?php echo $megustac55 ?>, <?php echo $seguidoresc55 ?>]        
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
        //width: 1000,
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

      var chart11 = new google.visualization.ComboChart(document.getElementById('chart_div11'));
      chart11.draw(view, options);          
    }
  </script>        

  <!--GRAFICA DISTRITO XII-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart12() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nMartha\nSosa',<?php echo $megustac56 ?>, <?php echo $seguidoresc56 ?>],
        ['PRI\nRosario\nYema',<?php echo $megustac57 ?>, <?php echo $seguidoresc57 ?>],
        ['PT\nNora\nAyala',<?php echo $megustac58 ?>, <?php echo $seguidoresc58 ?>],
        ['PMC\nIveth\nNoriega',<?php echo $megustac59 ?>, <?php echo $seguidoresc59 ?>]
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
        //width: 1000,
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

      var chart12 = new google.visualization.ComboChart(document.getElementById('chart_div12'));
      chart12.draw(view, options);          
    }
  </script>   
  <!--GRAFICA DISTRITO XIII-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart13() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nMartha\nSosa',<?php echo $megustac60 ?>, <?php echo $seguidoresc60 ?>],
        ['PT\nCarlos\nVilla',<?php echo $megustac61 ?>, <?php echo $seguidoresc61 ?>]
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
        //width: 1000,
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

      var chart13 = new google.visualization.ComboChart(document.getElementById('chart_div13'));
      chart13.draw(view, options);          
    }
  </script>     
  <!--GRAFICA DISTRITO XIV-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart14() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nLuis\nAyala',<?php echo $megustac62 ?>, <?php echo $seguidoresc62 ?>],
        ['PRI\nLilia\nFigueroa',<?php echo $megustac63 ?>, <?php echo $seguidoresc63 ?>],
        ['VERDE\nMartha\nMeza',<?php echo $megustac64 ?>, <?php echo $seguidoresc64 ?>],
        ['PT\nVerónica\nTorres',<?php echo $megustac65 ?>, <?php echo $seguidoresc65 ?>],
        ['PMC\nGustavo\nRentería',<?php echo $megustac66 ?>, <?php echo $seguidoresc66 ?>],        
        ['PM\nJosefina\nRoblada',<?php echo $megustac67 ?>, <?php echo $seguidoresc67 ?>],
        ['PES\nElías\nNúñez',<?php echo $megustac68 ?>, <?php echo $seguidoresc68 ?>]
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
        //width: 1000,
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

      var chart14 = new google.visualization.ComboChart(document.getElementById('chart_div14'));
      chart14.draw(view, options);          
    }
  </script>       
  </script>     
  <!--GRAFICA DISTRITO XIV-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart15() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI-PNA-PV\nFelícitas\nPeña',<?php echo $megustac69 ?>, <?php echo $seguidoresc69 ?>],
        ['PT\nHilda\nMoreno',<?php echo $megustac70 ?>, <?php echo $seguidoresc70 ?>],
        ['PMC\nAlma\nRincón',<?php echo $megustac71 ?>, <?php echo $seguidoresc71 ?>]
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
        //width: 1000,
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

      var chart15 = new google.visualization.ComboChart(document.getElementById('chart_div15'));
      chart15.draw(view, options);          
    }
  </script>         
  </script>     
  <!--GRAFICA DISTRITO XIV-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart16() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI-PNA-PV\nSantiago\nChávez',<?php echo $megustac72 ?>, <?php echo $seguidoresc72 ?>],
        ['PT\nJudith\nGodínez',<?php echo $megustac73 ?>, <?php echo $seguidoresc73 ?>],
        ['PMC\nSergio\nMendoza',<?php echo $megustac74 ?>, <?php echo $seguidoresc74 ?>],
        ['PH\nÁngeles\nRodríguez',<?php echo $megustac75 ?>, <?php echo $seguidoresc75 ?>]
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
        //width: 1000,
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

      var chart16 = new google.visualization.ComboChart(document.getElementById('chart_div16'));
      chart16.draw(view, options);          
    }
  </script>         
</html>