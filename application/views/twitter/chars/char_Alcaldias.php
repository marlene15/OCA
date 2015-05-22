<script type="text/javascript">
  if (<?php echo $vtab ?>==1) {
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');   
        if (<?php echo $seguidores_oscar ?>!=0 && <?php echo $siguiendo_oscar ?>!=0 && <?php echo $tweets_oscar ?>!=0)
        {
          data.addRows([
            ['PRI Oscar Valdovinos Anguiano', <?php echo $seguidores_oscar ?>, <?php echo $siguiendo_oscar ?>, <?php echo $tweets_oscar ?>]
          ]);
        }else{
          $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><center><strong>La información de Oscar Valdovinos!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 hasta el <?php echo $ultima_fecha ?></center></div>'); 
        }     
        data.addRows([
          ['PAN Héctor Insúa García', <?php echo $seguidoresh ?>, <?php echo $siguiendoh ?>, <?php echo $tweetsh ?>],
          ['MOVIMIENTO CIUDADANO María Elena Abaroa López', <?php echo $seguidoresma ?>, <?php echo $siguiendoma ?>, <?php echo $tweetsma ?>],
          ['VERDE Esmeralda Cárdenas Sánchez', <?php echo $seguidoreses ?>, <?php echo $siguiendoes ?>, <?php echo $tweetses ?>]
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
        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(view, options);          
      }
    	drawChart();
    	$('#chart_div').width('100%');	
  };   

  if (<?php echo $vtab ?>==2) { 
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart2);
      function drawChart2() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');             
        data.addRows([
          ['PRI Francisco Zepeda González', <?php echo $seguidoresp ?>, <?php echo $siguiendop ?>, <?php echo $tweetsp ?>],
          ['PT Marcos Barajas Yescas', <?php echo $seguidoresmarc ?>, <?php echo $siguiendomarc ?>, <?php echo $tweetsmarc ?>]          
        ]);
        if (<?php echo $seguidores_ruben ?>!=0 && <?php echo $siguiendo_ruben ?>!=0 && <?php echo $tweets_ruben ?>!=0)
        {
          data.addRows([
            ['MOVIMIENTO CIUDADANO Rubén Romo Ochoa', <?php echo $seguidores_ruben ?>, <?php echo $siguiendo_ruben ?>, <?php echo $tweets_ruben ?>]
          ]);
        }else{
          $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><center><strong>La información de Rubén Romo!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 hasta el <?php echo $ultima_fecha ?></center></div>'); 
        } 

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
      drawChart2();
    $('#chart_div2').width('100%');   
  };

  if (<?php echo $vtab ?>==3) {   
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart3);
      function drawChart3() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');               
        data.addRows([
          ['PRI Oswy Delgado Rodríguez', <?php echo $seguidores_oswy ?>, <?php echo $siguiendo_oswy ?>, <?php echo $tweets_oswy ?>],
          ['PAN Yulenny Cortés León', <?php echo $seguidores_yulenny ?>, <?php echo $siguiendo_yulenny ?>, <?php echo $tweets_yulenny ?>]                    
        ]);
        if (<?php echo $seguidores_jaime ?>!=0 && <?php echo $siguiendo_jaime ?>!=0 && <?php echo $tweets_jaime ?>!=0)
        {
          data.addRows([
            ['PRD Jaime Enrique Sotelo Garcia ', <?php echo $seguidores_jaime ?>, <?php echo $siguiendo_jaime ?>, <?php echo $tweets_jaime ?>]
          ]);
        }else{
          $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><center><strong>La información de Jaime Sotelo!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 hasta el <?php echo $ultima_fecha ?></center></div>'); 
        }

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
      drawChart3();
    $('#chart_div3').width('100%');   
  };   

  if (<?php echo $vtab ?>==4) {   
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart4);
      function drawChart4() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Salomón Salazar Barragán', <?php echo $seguidores_salomon ?>, <?php echo $siguiendo_salomon ?>, <?php echo $tweets_salomon ?>],
          ['ENCUENTRO SOCIAL Mario Carrillo Llerenas', <?php echo $seguidores_mario ?>, <?php echo $siguiendo_mario ?>, <?php echo $tweets_mario ?>]
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
      drawChart4();
    $('#chart_div4').width('100%');   
  }; 

  if (<?php echo $vtab ?>==5) {  
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart5);
      function drawChart5() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Arturo García Arias', <?php echo $seguidores_arturo ?>, <?php echo $siguiendo_arturo ?>, <?php echo $tweets_arturo ?>]
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
      drawChart5();
    $('#chart_div5').width('100%');   
  }; 

  if (<?php echo $vtab ?>==6) {   
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart6);
      function drawChart6() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');   
        data.addRows([
          ['PRI Blanca Isabel Rocha Cobián', <?php echo $seguidores_blanca ?>, <?php echo $siguiendo_blanca ?>, <?php echo $tweets_blanca ?>]          
        ]);
        if (<?php echo $seguidores_blancaU ?>!=0 && <?php echo $siguiendo_blancaU ?>!=0 && <?php echo $tweets_blancaU ?>!=0)
        {
          data.addRows([
            ['HUMANISTA Blanca Ursúa Blanco', <?php echo $seguidores_blancaU ?>, <?php echo $siguiendo_blancaU ?>, <?php echo $tweets_blancaU ?>]
          ]);
        }else{
          $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><center><strong>La información de Blanca Ursúa!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 hasta el <?php echo $ultima_fecha ?></center></div>'); 
        }  
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
      drawChart6();
      $('#chart_div6').width('100%');   
  }; 

  if (<?php echo $vtab ?>==7) {   
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart7);
      function drawChart7() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Manuel Palacios Rodríguez', <?php echo $seguidores_manuel ?>, <?php echo $siguiendo_manuel ?>, <?php echo $tweets_manuel ?>]
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
      drawChart7();
    $('#chart_div7').width('100%');   
  }; 

  if (<?php echo $vtab ?>==8) {    
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart8);
      function drawChart8() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Esperanza Alcaraz Alcaraz', <?php echo $seguidores_esperanza ?>, <?php echo $siguiendo_esperanza ?>, <?php echo $tweets_esperanza ?>]
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
        var chart8 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
        chart8.draw(view, options);          
      }  
      drawChart8();
    $('#chart_div8').width('100%');   
  }; 

  if (<?php echo $vtab ?>==9) {    
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart9);
      function drawChart9() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['NUEVA ALIANZA Hiram Amador Ruiz Mancilla', <?php echo $seguidores_hiram ?>, <?php echo $siguiendo_hiram ?>, <?php echo $tweets_hiram ?>]
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
      drawChart9();
    $('#chart_div9').width('100%');   
  }; 

  if (<?php echo $existe ?> ==2) {
    $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><center><strong>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 hasta el <?php echo $fecha ?> <br/> Se cargaron los datos de la última fecha encontrada</center></div>');
  };
  </script>

