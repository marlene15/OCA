<head lang="es">
  <title>Candidatos a Diputado Federal</title> 
  <?php $this->load->view('comunes/header'); ?>
  <meta charset="utf-8">
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.min.js"></script>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
  <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
      
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Candidatos', 'Me gusta'],
          ['José Manuel Moreno González',<?php echo $megustaci ?>],
          ['Enrique Rojas Orozco',<?php echo $megustacj ?>],
          ['Indira Vizcaíno Silva',<?php echo $megustacm ?>],
          ['Silvia Elena Díaz Márquez',<?php echo $megustacd ?>],
          ['Ángeles Márquez Gileta',<?php echo $megustacl ?>],
          ['Rosalina García Torres',<?php echo $megustacf ?>],
          ['Claudia Jasmín Ibarra Ávalos',<?php echo $megustacg ?>]
        ]);

        var options = {
          colors: ['red', 'green', 'blue', 'yellow', 'orange', 'pink', 'purple', 'brown'], //Cambiar los colores de las barras
          title: 'Likes',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
  </script>
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
                            Oca_Face
                        </h3>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <h1><center>Actividad de los Candidatos a Diputado Federal en Facebook</center></h1>
                    <center>
                        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                    </center>
                </div>              
            </div>
        </div>
    </div>

  <?php $this->load->view('comunes/footer'); ?> 
</body>
</html>