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
        ['PRI',<?php echo $megustac1 ?>, <?php echo $seguidoresc1 ?>],
        ['PM',<?php echo $megustac2 ?>, <?php echo $seguidoresc2 ?>]
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart();
    });    
  </script>

<!--GRAFICA DISTRITO II-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart2() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN',<?php echo $megustac4 ?>, <?php echo $seguidoresc4 ?>],        
        ['PNA',<?php echo $megustac5 ?>, <?php echo $seguidoresc5 ?>],        
        ['PVEM',<?php echo $megustac6 ?>, <?php echo $seguidoresc6 ?>],
        ['PT',<?php echo $megustac7 ?>, <?php echo $seguidoresc7 ?>],
        ['PRD',<?php echo $megustac8 ?>, <?php echo $seguidoresc8 ?>]
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
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
        ['PAN',<?php echo $megustac10 ?>, <?php echo $seguidoresc10 ?>],
        ['PRI',<?php echo $megustac11 ?>, <?php echo $seguidoresc11 ?>],
        ['PNA',<?php echo $megustac12 ?>, <?php echo $seguidoresc12 ?>],
        ['PVEM',<?php echo $megustac13 ?>, <?php echo $seguidoresc13 ?>],
        ['PMC',<?php echo $megustac14 ?>, <?php echo $seguidoresc14 ?>],
        ['PM',<?php echo $megustac15 ?>, <?php echo $seguidoresc14 ?>]  
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div3");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart3();
    });     
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
        ['PAN',<?php echo $megustac17 ?>, <?php echo $seguidoresc17 ?>],
        ['PRI',<?php echo $megustac18 ?>, <?php echo $seguidoresc18 ?>],
        ['PRD',<?php echo $megustac19 ?>, <?php echo $seguidoresc19 ?>]       
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div4");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart4();
    });     
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
        ['PAN',<?php echo $megustac21 ?>, <?php echo $seguidoresc21 ?>],
        ['PRI-PNA-PV',<?php echo $megustac22 ?>, <?php echo $seguidoresc22 ?>]
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div5");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart5();
    });     
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
        ['PAN',<?php echo $megustac24 ?>, <?php echo $seguidoresc24 ?>],
        ['PRI-PNA-PV',<?php echo $megustac25 ?>, <?php echo $seguidoresc25 ?>],
        ['PRD',<?php echo $megustac26 ?>, <?php echo $seguidoresc26 ?>],
        ['PT',<?php echo $megustac27 ?>, <?php echo $seguidoresc27 ?>]                        
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div6");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart6();
    });     
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
        ['PAN',<?php echo $megustac29 ?>, <?php echo $seguidoresc29 ?>],
        ['PRI-PNA-PV',<?php echo $megustac30 ?>, <?php echo $seguidoresc30 ?>],
        ['PRD',<?php echo $megustac31 ?>, <?php echo $seguidoresc31 ?>],
        ['PT',<?php echo $megustac32 ?>, <?php echo $seguidoresc32 ?>],
        ['PMC',<?php echo $megustac33 ?>, <?php echo $seguidoresc33 ?>]                                                       
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div7");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart7();
    });     
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
        ['PAN',<?php echo $megustac35 ?>, <?php echo $seguidoresc35 ?>],
        ['PRI-PNA-PV',<?php echo $megustac36 ?>, <?php echo $seguidoresc36 ?>],
        ['PT',<?php echo $megustac37 ?>, <?php echo $seguidoresc37 ?>],
        ['PMC',<?php echo $megustac38 ?>, <?php echo $seguidoresc38 ?>]
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div8");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart8();
    });     
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
        ['PAN',<?php echo $megustac40 ?>, <?php echo $seguidoresc40 ?>],
        ['PRI',<?php echo $megustac41 ?>, <?php echo $seguidoresc41 ?>],
        ['PVEM',<?php echo $megustac42 ?>, <?php echo $seguidoresc42 ?>],
        ['PMC',<?php echo $megustac43 ?>, <?php echo $seguidoresc43 ?>]
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div9");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart9();
    });     
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
        ['PRI-PNA-PV',<?php echo $megustac45 ?>, <?php echo $seguidoresc45 ?>],
        ['PT',<?php echo $megustac46 ?>, <?php echo $seguidoresc46 ?>],
        ['PMC',<?php echo $megustac47 ?>, <?php echo $seguidoresc47 ?>],
        ['PM',<?php echo $megustac48 ?>, <?php echo $seguidoresc48 ?>]                                                                 
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div10");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart10();
    });     
  </script> 
   <!--GRAFICA DISTRITO XI-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart11() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN',<?php echo $megustac50 ?>, <?php echo $seguidoresc50 ?>],
        ['PRI-PNA-PV',<?php echo $megustac51 ?>, <?php echo $seguidoresc51 ?>],
        ['PRD',<?php echo $megustac52 ?>, <?php echo $seguidoresc52 ?>],
        ['PT',<?php echo $megustac53 ?>, <?php echo $seguidoresc53 ?>],
        ['PM',<?php echo $megustac54 ?>, <?php echo $seguidoresc54 ?>]      
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div11");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart11();
    });     
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
        ['PAN',<?php echo $megustac56 ?>, <?php echo $seguidoresc56 ?>],
        ['PRI',<?php echo $megustac57 ?>, <?php echo $seguidoresc57 ?>],
        ['PT',<?php echo $megustac58 ?>, <?php echo $seguidoresc58 ?>]
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div12");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart12();
    });     
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
        ['PAN',<?php echo $megustac60 ?>, <?php echo $seguidoresc60 ?>]
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div13");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart13();
    });     
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
        ['PAN',<?php echo $megustac62 ?>, <?php echo $seguidoresc62 ?>],
        ['PRI',<?php echo $megustac63 ?>, <?php echo $seguidoresc63 ?>],
        ['PVEM',<?php echo $megustac64 ?>, <?php echo $seguidoresc64 ?>],
        ['PT',<?php echo $megustac65 ?>, <?php echo $seguidoresc65 ?>],
        ['PMC',<?php echo $megustac66 ?>, <?php echo $seguidoresc66 ?>],        
        ['PM',<?php echo $megustac67 ?>, <?php echo $seguidoresc67 ?>]
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div14");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart14();
    });     
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
        ['PRI-PNA-PV',<?php echo $megustac69 ?>, <?php echo $seguidoresc69 ?>],
        ['PT',<?php echo $megustac70 ?>, <?php echo $seguidoresc70 ?>]
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div15");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart15();
    });     
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
        ['PRI-PNA-PV',<?php echo $megustac72 ?>, <?php echo $seguidoresc72 ?>],
        ['PT',<?php echo $megustac73 ?>, <?php echo $seguidoresc73 ?>],
        ['PMC',<?php echo $megustac74 ?>, <?php echo $seguidoresc74 ?>]
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
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div16");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart16();
    });     
  </script>  