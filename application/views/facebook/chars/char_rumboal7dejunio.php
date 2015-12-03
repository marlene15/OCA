<script type="text/javascript">
  if (<?php echo $vtab ?>==1) {   
    if (<?php echo $fechaInicioMayor ?><1 && <?php echo $existe ?>>0)
    {
        $('#alert').hide(); 
        google.load("visualization", "1", {packages: ["corechart"]});    
        google.setOnLoadCallback(drawChart);

        <?php //char2 
	        $a2 = array();
	        foreach ($rumbo as $rumbo) 
	        {
	            $a2[] = array(
	                "fecha" => $rumbo->fecha,
	                "Megusta" => $rumbo->Megusta,
	                "PersonasHablan" => $rumbo->PersonasHablan
	            );
	        }
     	?> 

     	function drawChart() {
	      var data = google.visualization.arrayToDataTable(
	        [
	          ['Fecha', 'Likes', 'Posts'],
	          <?php for ($i=0; $i<count($a2); $i++) {
	              ?>
	              ['<?php echo $a2[$i]['fecha'] ?>', <?php echo $a2[$i]['Megusta'] ?>, <?php echo $a2[$i]['PersonasHablan'] ?>],
	          <?php } ?>
	        ]
	      );  
	      var options = {
	        title: 'Rumboal7deJunio2015',
	        hAxis: {title: "Fecha"},
	        seriesType: "bars",
	        series: {3: {type: "line"}}
	      };
	      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
	      chart.draw(data, options);  
	    }
      drawChart();
      $('#chart_div').width('100%');  
    };   
  }; 
 </script>	    