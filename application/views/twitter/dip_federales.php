<!DOCTYPE html>
<html>
<?php $this->load->view('comunes/header'); ?>
<head lang="es">
	<title>Dip. Federales</title> 
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
          ['PAN José Manuel Moreno González', <?php echo $seguidoresjm ?>, <?php echo $siguiendojm ?>, <?php echo $tweetsjm ?>],
          ['PRI Enrique Rojas Orozco', <?php echo $seguidoresk ?>, <?php echo $siguiendok ?>, <?php echo $tweetsk ?>],
          ['PRD Indira Vizcaíno Silva', <?php echo $seguidoresi ?>, <?php echo $siguiendoi ?>, <?php echo $tweetsi ?>]
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
          title: '@oca_twitt \n Candidatos a Diputados Federales. Distrito I',
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
          ['PRI Norma Galindo Matías', <?php echo $seguidoresn ?>, <?php echo $siguiendon ?>, <?php echo $tweetsn ?>],
          ['MOVIMIENTO CIUDADANO Juan Carlos Olave Neri', <?php echo $seguidoresj ?>, <?php echo $siguiendoj ?>, <?php echo $tweetsj ?>]
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
          title: '@oca_twitt \n Candidatos a Diputados Federales. Distrito II',
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
	<div id="page-wrapper">
        <div id="page-inner">
      		<div id="chart_div" style="height: 600px;"></div>
      		<br>
      		<br>
      		<div id="chart_div2" style="height: 600px;"></div>
        </div>
    </div>
	</div>
	<?php $this->load->view('comunes/footer'); ?> 
</body>
</html>