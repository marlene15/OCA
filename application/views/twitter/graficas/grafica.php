<html>
<?php $this->load->view('comunes/header'); ?>
  <head>
    <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
    <meta charset="utf-8">
    <!--Gobernadores-->
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
      //google.load("visualization", "1", {packages:["corechart"]});
      //google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Candidatos', 'Seguidores', 'Siguiendo', 'Tweets'],
            ['Nacho Peralta',<?php echo $seguidoresn ?>, <?php echo $siguiendon ?>, <?php echo $tweetsn ?>],
            ['Locho Morán', <?php echo $seguidoresl ?>, <?php echo $siguiendol ?>, <?php echo $tweetsl ?>],
            ['Jorge Luis Preciado',<?php echo $seguidoresj ?>, <?php echo $siguiendoj ?>, <?php echo $tweetsj ?>],
            ['Martha Zepeda del Toro',<?php echo $seguidoresm ?>, <?php echo $siguiendom ?>, <?php echo $tweetsm ?>] 
          ]);
        
        var options = {
          colors: ['red', 'green', 'blue'], //Cambiar los colores de las barras
          chart: {
            title: '@oca_twitt',
            subtitle: 'Actividad de los candidatos en Twitter 06/04/2015'

          },
          bars: 'horizontal' // Required for Material Bar Charts.
        }; 
        var chart = new google.charts.Bar(document.getElementById('barchart_values'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <?php $this->load->view('comunes/nav'); ?>
    <div class="container"> 
      <!--Código para el tap de pestañas-->   
      <div class="bs-example bs-example-tabs">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a data-toggle="tab" href="#practicas">Gobernadores</a></li>
          <li class=""><a data-toggle="tab" href="#presentaciones">Diputados Federales</a></li>
          <li class=""><a data-toggle="tab" href="#investigaciones">Diputados Locales</a></li>
          <li class=""><a data-toggle="tab" href="#otros">Presidentes Municipales</a></li>
        </ul>
          <div class="tab-content" id="myTabContent">
            <div id="practicas" class="tab-pane fade active in"> 
              <br> 
              <div id="barchart_values" style="height: 500px; width: 800px;"></div>                
            </div>

            <div id="presentaciones" class="tab-pane fade ">
            </div>

            <div id="investigaciones" class="tab-pane fade ">             
            </div>

            <div id="otros" class="tab-pane fade ">              
            </div>
        </div>
      </div>       
    </div>     
    <?php $this->load->view('comunes/footer'); ?> 
  </body>
</html>