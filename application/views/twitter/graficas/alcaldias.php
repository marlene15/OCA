<html>
<?php $this->load->view('comunes/header'); ?>
  <head>
    <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
    <meta charset="utf-8">
    <script type="text/javascript">
      google.load("visualization", "1", {packages: ["corechart"]});
      google.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
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
          title: '@oca_twitt \n Candidatos a la Alcaldía de Colima. 11/04/2015',
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

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Francisco Zepeda González', <?php echo $seguidoresp ?>, <?php echo $siguiendop ?>, <?php echo $tweetsp ?>],
          ['PT Marcos Barajas Yescas', <?php echo $seguidoresmarc ?>, <?php echo $siguiendomarc ?>, <?php echo $tweetsmarc ?>]
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
          title: '@oca_twitt \n Candidatos a la Alcaldía de Manzanillo. 11/04/2015',
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

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
        chart.draw(view, options);          
      }
    </script>
  </head>
  <body>    
    <?php $this->load->view('comunes/nav'); ?>
    <div class="container">
      <div id="chart_div" style="height: 600px;"></div>
      <br>
      <br>
      <div id="chart_div2" style="height: 600px;"></div>
    </div>
    <?php $this->load->view('comunes/footer'); ?> 
  </body>
</html>