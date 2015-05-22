<script type="text/javascript">
if (<?php echo $vtab ?>==1) {
      google.load("visualization", "1", {packages: ["corechart"]});    
      google.setOnLoadCallback(drawChart);
      function drawChart() 
      {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Candidatos');
        data.addColumn('number', 'Seguidores');
        data.addColumn('number', 'Siguiendo');
        data.addColumn('number', 'Tweets');        
        data.addRows([
          ['PRI Nacho Peralta', <?php echo $seguidoresn ?>, <?php echo $siguiendon ?>, <?php echo $tweetsn ?>],
          ['PAN Jorge L. Preciado', <?php echo $seguidoresj ?>, <?php echo $siguiendoj ?>, <?php echo $tweetsj ?>],
          ['M. CIUDADANO Locho Morán', <?php echo $seguidoresl ?>, <?php echo $siguiendol ?>, <?php echo $tweetsl ?>],
          ['PRD Martha Zepeda', <?php echo $seguidoresm ?>, <?php echo $siguiendom ?>, <?php echo $tweetsm ?>]
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
        title : '<?php echo $ultima_fecha ?>',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#DF0101'
          },
          1: {
            type: 'bars',
            color: '#0101DF'
          },
          2: {
            type: 'bars',
            color: '#868A08'
          }
        },
        vAxis: {
          title: 'Cantidad'
        }
      };     

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(view, options);          
      }
      drawChart();
      $('#chart_div').width('100%');  
  };      
  </script>