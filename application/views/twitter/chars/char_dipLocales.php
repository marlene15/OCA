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
      
      data.addRows([
        ['PRI Hilda Ceballos de Moreno', <?php echo $seguidoresh ?>, <?php echo $siguiendoh ?>, <?php echo $tweetsh ?>]
      ]);       
      if (<?php echo $seguidores_yadira ?>!=0 && <?php echo $siguiendo_yadira ?>!=0 && <?php echo $tweets_yadira ?>!=0)
      {  
        data.addRows([          
          ['NUEVA ALIANZA Yadira Carrillo Montero', <?php echo $seguidores_yadira ?>, <?php echo $siguiendo_yadira ?>, <?php echo $tweets_yadira ?>]
        ]);         
      }else{
        $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><strong>La información de Yadira Carrillo!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 hasta el <?php echo $ultima_fecha ?></div>'); 
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
          ['PAN Crispín Guerra', <?php echo $seguidores_crispin ?>, <?php echo $siguiendo_crispin ?>, <?php echo $tweets_crispin ?>]
        ]); 
        if (<?php echo $seguidores_isis ?>!=0 && <?php echo $siguiendo_isis ?>!=0 && <?php echo $tweets_isis ?>!=0)
        {
          data.addRows([
            ['VERDE Isis Villaseñor Silva', <?php echo $seguidores_isis ?>, <?php echo $siguiendo_isis ?>, <?php echo $tweets_isis ?>]          
          ]);
        }else{
          $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><strong>La información de Isis Villaseñor!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 hasta el <?php echo $ultima_fecha ?></div>'); 
        } 
        if(<?php echo $seguidores_alma ?>!=0 && <?php echo $siguiendo_alma ?>!=0 && <?php echo $tweets_alma ?>!=0)
        {
          data.addRows([
            ['PRI Alma Delia Arreola Cruz', <?php echo $seguidores_alma ?>, <?php echo $siguiendo_alma ?>, <?php echo $tweets_alma ?>]      
          ]);
        }
        else{
          $('#alert2').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><strong>La información de Alma Delia Arreola!</strong> Se encuentra disponible a partir de la fecha: 19 Mayo 2015 hasta el <?php echo $ultima_fecha ?></div>'); 
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

        var chart87 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
        chart87.draw(view, options);          
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

        var chart9 = new google.visualization.ComboChart(document.getElementById('chart_div9'));
        chart9.draw(view, options);          
      }
      drawChart9();
    $('#chart_div9').width('100%');   
  }; 

  if (<?php echo $vtab ?>==10) {  
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart10);

      function drawChart10() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');     
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
      drawChart10();
    $('#chart_div10').width('100%');   
  }; 

  if (<?php echo $vtab ?>==11) {   
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart11);
      function drawChart11() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');  
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

        var chart11 = new google.visualization.ComboChart(document.getElementById('chart_div11'));
        chart11.draw(view, options);          
      }   
      drawChart11();
    $('#chart_div11').width('100%');   
  }; 

  if (<?php echo $vtab ?>==12) {  
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart12);
      function drawChart12() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');  
        if (<?php echo $seguidores_marthaS ?>!=0 && <?php echo $siguiendo_marthaS ?>!=0 && <?php echo $tweets_marthaS ?>!=0)
        {
          data.addRows([
            ['PAN Martha Leticia Sosa Govea', <?php echo $seguidores_marthaS ?>, <?php echo $siguiendo_marthaS ?>, <?php echo $tweets_marthaS ?>]
          ]);
        }else{
          $('#alert').html('<div id="alert" class="alert alert-block"><button type="button" class="close" data-dismiss="alert"></button><strong>La información de Martha Sosa!</strong> Se encuentra disponible a partir de la fecha: 14 Mayo 2015 hasta el <?php echo $ultima_fecha ?></div>'); 
        }
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

        var chart12 = new google.visualization.ComboChart(document.getElementById('chart_div12'));
        chart12.draw(view, options);          
      }    
      drawChart12();
    $('#chart_div12').width('100%');   
  }; 

  if (<?php echo $vtab ?>==13) {  
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart13);
      function drawChart13() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');     
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
        var chart13 = new google.visualization.ComboChart(document.getElementById('chart_div13'));
        chart13.draw(view, options);          
      }    
      drawChart13();
    $('#chart_div13').width('100%');   
  }; 

  if (<?php echo $vtab ?>==14) {   
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart14);
      function drawChart14() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');     
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

        var chart14 = new google.visualization.ComboChart(document.getElementById('chart_div14'));
        chart14.draw(view, options);          
      }   
      drawChart14();
    $('#chart_div14').width('100%');   
  }; 

  if (<?php echo $vtab ?>==15) { 
    if (<?php echo $seguidores_felicitas ?>!=0 && <?php echo $siguiendo_felicitas ?>!=0 && <?php echo $tweets_felicitas ?>!=0)
    {   
        google.load("visualization", "1", {packages: ["corechart"]});
        google.setOnLoadCallback(drawChart15);
        function drawChart15() {
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Candidatos');
          data.addColumn('number', 'Seguidores');
          data.addColumn('number', 'Siguiendo');
          data.addColumn('number', 'Tweets');     
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
          var chart15 = new google.visualization.ComboChart(document.getElementById('chart_div15'));
          chart15.draw(view, options);          
        }  
        drawChart15();
      $('#chart_div15').width('100%');  
    }
    else{
      $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong>Fecha No Encontrada!</strong> Se encuentra disponible a partir de la fecha: 19 Mayo 2015 hasta el <?php echo $ultima_fecha ?> <br/> Se cargaron los datos de la última fecha encontrada</div>');
    }
  }; 

  if (<?php echo $vtab ?>==16) {  
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart16);

      function drawChart16() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');     
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
        var chart16 = new google.visualization.ComboChart(document.getElementById('chart_div16'));
        chart16.draw(view, options);          
      }    
      drawChart16();
    $('#chart_div16').width('100%');   
  }; 

  if (<?php echo $existe ?> ==2) {
    $('#alert').html('<div id="alert" class="alert alert-error"><button type="button" class="close" data-dismiss="alert"></button><strong>Fecha No Encontrada!</strong> La información se encuentra disponible a partir de la fecha: 4 Mayo 2015 hasta el <?php echo $fecha ?> <br/> Se cargaron los datos de la última fecha encontrada</div>');
  };
  </script>
