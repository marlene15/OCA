<?php	
	require("TwitterAPIExchange.php");

	$settings = array(
	    'oauth_access_token' => "2985011357-Mx6flHxVqmht0Fr6DySCVPHR0ojDR0vcyWzE2U8",
	    'oauth_access_token_secret' => "owBoVYnPuAIkQDMYrTBpAjMg9BPoaJ3S2PpIbTy7oMcQx",
	    'consumer_key' => "LpLLV5ciE4XPSdGC3cIlSsR5F",
	    'consumer_secret' => "VWcrkptV38Pn57k925eZtQ2i1zAZ9sIVT9FObMvsR7rQ0ILCuQ"
    );

	//Recurso del API que queremos consultar
    $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
	$leoncio = '?screen_name=leonciomoranL8&count=1'; //Variable, con patron url (Twitter de Locho Moran)
	$requestMethod = 'GET';

	$nacho = '?screen_name=nachoperaltacol&count=1'; //Variable, con patron url  (Twitter de nacho peralta)	
	$jorge = '?screen_name=JL_Preciado_&count=1'; //Variable, con patron url  (Twitter de nacho Jorge Luis Preciado)	
	$martha = '?screen_name=MarthaZepeda_&count=1'; //Variable, con patron url  (Twitter de nacho Martha Zepeda)	
	
	$twitter = new TwitterAPIExchange($settings); //Objeto del tipo API de la clase que importamos en la parte de arriva
	
	$string = json_decode($twitter->setGetfield($leoncio)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc = TRUE);

	$string2 = json_decode($twitter->setGetfield($nacho)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc = TRUE);

	$string3 = json_decode($twitter->setGetfield($jorge)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc = TRUE);

	$string4 = json_decode($twitter->setGetfield($martha)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc = TRUE);
?>

<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.2
Version: 1.4
Author: KeenThemes
Website: http://www.keenthemes.com/preview/?theme=metronic
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<title>Gobernador</title> 
	<?php $this->load->view('comunes/header'); ?>	

    <script src="<?php echo base_url()?>assets/twitter/d3/d3.js"></script> 
	<script src="<?php echo base_url()?>assets/twitter/d3/d3.layout.cloud.js"></script>
    <!--Se usa para la primera gráfica-->
    <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
    <!--Estilo para la gráfica de pastel-->
    <link href="<?= base_url();?>assets/twitter/d3/estilo_pastel.css" rel="stylesheet" type="text/css"/>
    <!--Para poder usar el calendario, importar las librerias-->
    <link href="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.min.css" rel="stylesheet">
    
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
                            Candidatos a Gobernador <small>Actividad en Twitter</small>
                        </h3>
                        <ul class="breadcrumb">
                        	<li>
                                <i class="icon-home"></i>
                                <a href="<?php echo site_url('inicio'); ?>">Home</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-table"></i>
                                Cargo 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-twitter"></i>
                                Twitter 
                                <i class="icon-angle-right"></i>                                
                            </li>
                            <li>
                                <i class="icon-user"></i>
                                <a href="<?php echo site_url('twitter/controlador_inicio/gobernadores'); ?>">Gobernador</a>                                 
                            </li>                            
                        </ul>     
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->                
                <div id="dashboard">
                    <div class="portlet-body form well">
			        	<br>
			        	<!--Código para el tap de pestañas-->   
					      <div class="bs-example bs-example-tabs">
					        <ul class="nav nav-tabs" id="myTab">
					          <li class="active"><a data-toggle="tab" href="#barras_circulo">Gráfica</a></li>
					          <li class=""><a data-toggle="tab" href="#nube" onclick="nube();">Nube de Palabras</a></li>
					        </ul>
					          <div class="tab-content" id="myTabContent">

					            <div id="barras_circulo" class="tab-pane fade active in"> 
					            	<label class="control-label">Fecha de consulta:</label>
					                <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
					                    <input size="16" type="text" value="" readonly name="fecha">
					                    <span class="add-on"><i class="icon-remove"></i></span>
										<span class="add-on"><i class="icon-th"></i></span>
					                </div>
					            	<div id='pastel'></div> 					              				                           
					            </div>

					            <div id="nube" class="tab-pane fade ">	
					            	<button id="go" type="submit" onclick="nube();">Actualizar</button>
					            	<br>
					            	<!-- <div id="vis"></div>  -->					            				            					              	            	
					            </div>
					        </div>
					      </div> 
                    </div>
                </div>              
            </div>
        </div>
    </div>

	<?php $this->load->view('comunes/footer'); ?> 
	<!--Para poder usar el calendario, importar las librerias-->
	<script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>	

	<script>
		function dashboard(id, fData){
		    var barColor = 'steelblue';
		    function segColor(c){ return {Seguidores:"#807dba", Siguiendo:"#e08214",Tweets:"#41ab5d"}[c]; }
		    
		    // compute total for each candidato.
		    fData.forEach(function(d){d.total = d.informacion.Seguidores+d.informacion.Siguiendo+d.informacion.Tweets;});
		   	
		    // function to handle histogram.
		    function histoGram(fD){
		        var hG={},    hGDim = {t: 60, r: 0, b: 30, l: 0};
		        hGDim.w = 450 - hGDim.l - hGDim.r, 
		        hGDim.h = 250 - hGDim.t - hGDim.b;
		            
		        //create svg for histogram.
		        var hGsvg = d3.select(id).append("svg")
		            .attr("width", hGDim.w + hGDim.l + hGDim.r)
		            .attr("height", hGDim.h + hGDim.t + hGDim.b).append("g")
		            .attr("transform", "translate(" + hGDim.l + "," + hGDim.t + ")");

		        // create function for x-axis mapping.
		        var x = d3.scale.ordinal().rangeRoundBands([0, hGDim.w], 0.1)
		                .domain(fD.map(function(d) { return d[0]; }));

		        // Add x-axis to the histogram svg.
		        hGsvg.append("g").attr("class", "x axis")
		            .attr("transform", "translate(0," + hGDim.h + ")")
		            .call(d3.svg.axis().scale(x).orient("bottom"));

		        // Create function for y-axis map.
		        var y = d3.scale.linear().range([hGDim.h, 0])
		                .domain([0, d3.max(fD, function(d) { return d[1]; })]);

		        // Create bars for histogram to contain rectangles and freq labels.
		        var bars = hGsvg.selectAll(".bar").data(fD).enter()
		                .append("g").attr("class", "bar");
		        
		        //create the rectangles.
		        bars.append("rect")
		            .attr("x", function(d) { return x(d[0]); })
		            .attr("y", function(d) { return y(d[1]); })
		            .attr("width", x.rangeBand())
		            .attr("height", function(d) { return hGDim.h - y(d[1]); })
		            .attr('fill',barColor)
		            .on("mouseover",mouseover)// mouseover is defined below.
		            .on("mouseout",mouseout);// mouseout is defined below.
		            
		        //Create the frequency labels above the rectangles.
		        bars.append("text").text(function(d){ return d3.format(",")(d[1])})
		            .attr("x", function(d) { return x(d[0])+x.rangeBand()/2; })
		            .attr("y", function(d) { return y(d[1])-5; })
		            .attr("text-anchor", "middle")
		            .attr("font-size","20px");
		        
		        function mouseover(d){  // utility function to be called on mouseover.
		            // filter for selected candidato.
		            var st = fData.filter(function(s){ return s.candidato == d[0];})[0],
		                nD = d3.keys(st.informacion).map(function(s){ return {type:s, informacion:st.informacion[s]};});
		               
		            // call update functions of pie-chart and legend.    
		            pC.update(nD);
		            leg.update(nD);
		        }
		        
		        function mouseout(d){    // utility function to be called on mouseout.
		            // reset the pie-chart and legend.    
		            pC.update(tF);
		            leg.update(tF);
		        }
		        
		        // create function to update the bars. This will be used by pie-chart.
		        hG.update = function(nD, color){
		            // update the domain of the y-axis map to reflect change in frequencies.
		            y.domain([0, d3.max(nD, function(d) { return d[1]; })]);
		            
		            // Attach the new data to the bars.
		            var bars = hGsvg.selectAll(".bar").data(nD);
		            
		            // transition the height and color of rectangles.
		            bars.select("rect").transition().duration(500)
		                .attr("y", function(d) {return y(d[1]); })
		                .attr("height", function(d) { return hGDim.h - y(d[1]); })
		                .attr("fill", color);

		            // transition the frequency labels location and change value.
		            bars.select("text").transition().duration(500)
		                .text(function(d){ return d3.format(",")(d[1])})
		                .attr("y", function(d) {return y(d[1])-5; });            
		        }        
		        return hG;
		    }
		    
		    // function to handle pieChart.
		    function pieChart(pD){
		        var pC ={},    pieDim ={w:200, h: 200};
		        pieDim.r = Math.min(pieDim.w, pieDim.h) / 2;
		                
		        // create svg for pie chart.
		        var piesvg = d3.select(id).append("svg")
		            .attr("width", pieDim.w).attr("height", pieDim.h).append("g")
		            .attr("transform", "translate("+pieDim.w/2+","+pieDim.h/2+")");
		        
		        // create function to draw the arcs of the pie slices.
		        var arc = d3.svg.arc().outerRadius(pieDim.r - 10).innerRadius(0);

		        // create a function to compute the pie slice angles.
		        var pie = d3.layout.pie().sort(null).value(function(d) { return d.informacion; });

		        // Draw the pie slices.
		        piesvg.selectAll("path").data(pie(pD)).enter().append("path").attr("d", arc)
		            .each(function(d) { this._current = d; })
		            .style("fill", function(d) { return segColor(d.data.type); })
		            .on("mouseover",mouseover).on("mouseout",mouseout);

		        // create function to update pie-chart. This will be used by histogram.
		        pC.update = function(nD){
		            piesvg.selectAll("path").data(pie(nD)).transition().duration(500)
		                .attrTween("d", arcTween);
		        }        
		        // Utility function to be called on mouseover a pie slice.
		        function mouseover(d){
		            // call the update function of histogram with new data.
		            hG.update(fData.map(function(v){ 
		                return [v.candidato,v.informacion[d.data.type]];}),segColor(d.data.type));
		        }
		        //Utility function to be called on mouseout a pie slice.
		        function mouseout(d){
		            // call the update function of histogram with all data.
		            hG.update(fData.map(function(v){
		                return [v.candidato,v.total];}), barColor);
		        }
		        // Animating the pie-slice requiring a custom function which specifies
		        // how the intermediate paths should be drawn.
		        function arcTween(a) {
		            var i = d3.interpolate(this._current, a);
		            this._current = i(0);
		            return function(t) { return arc(i(t));    };
		        }    
		        return pC;
		    }
		    
		    // function to handle legend.
		    function legend(lD){
		        var leg = {};
		            
		        // create table for legend.
		        var legend = d3.select(id).append("table").attr('class','legend');
		        
		        // create one row per segment.
		        var tr = legend.append("tbody").selectAll("tr").data(lD).enter().append("tr");
		            
		        // create the first column for each segment.
		        tr.append("td").append("svg").attr("width", '16').attr("height", '16').append("rect")
		            .attr("width", '16').attr("height", '16')
					.attr("fill",function(d){ return segColor(d.type); });
		            
		        // create the second column for each segment.
		        tr.append("td").text(function(d){ return d.type;});

		        // create the third column for each segment.
		        tr.append("td").attr("class",'legendFreq')
		            .text(function(d){ return d3.format(",")(d.informacion);});

		        // create the fourth column for each segment.
		        tr.append("td").attr("class",'legendPerc')
		            .text(function(d){ return getLegend(d,lD);});

		        // Utility function to be used to update the legend.
		        leg.update = function(nD){
		            // update the data attached to the row elements.
		            var l = legend.select("tbody").selectAll("tr").data(nD);

		            // update the frequencies.
		            l.select(".legendFreq").text(function(d){ return d3.format(",")(d.informacion);});

		            // update the percentage column.
		            l.select(".legendPerc").text(function(d){ return getLegend(d,nD);});        
		        }
		        
		        function getLegend(d,aD){ // Utility function to compute percentage.
		            return d3.format("%")(d.informacion/d3.sum(aD.map(function(v){ return v.informacion; })));
		        }

		        return leg;
		    }
		    
		    // calculate total frequency by segment for all candidato.
		    var tF = ['Seguidores','Siguiendo','Tweets'].map(function(d){ 
		        return {type:d, informacion: d3.sum(fData.map(function(t){ return t.informacion[d];}))}; 
		    });    
		    
		    // calculate total frequency by candidato for all segment.
		    var sF = fData.map(function(d){return [d.candidato,d.total];});

		    var hG = histoGram(sF), // create the histogram.
		        pC = pieChart(tF), // create the pie-chart.
		        leg= legend(tF);  // create the legend.
		}
	
	//Guardar en Json los datos	
		var freqData=[
		{candidato:'Locho Morán', informacion:{Seguidores:<?php echo $string[0]['user']['followers_count'] ?>,Siguiendo:<?php echo $string[0]['user']['friends_count'] ?>,Tweets:<?php echo $string[0]['user']['statuses_count'] ?>}},
		{candidato:'Nacho Peralta', informacion:{Seguidores:<?php echo $string2[0]['user']['followers_count'] ?>,Siguiendo:<?php echo $string2[0]['user']['friends_count'] ?>,Tweets:<?php echo $string2[0]['user']['statuses_count'] ?>}},
		{candidato:'Jorge L. Preciado', informacion:{Seguidores:<?php echo $string3[0]['user']['followers_count'] ?>,Siguiendo:<?php echo $string3[0]['user']['friends_count'] ?>,Tweets:<?php echo $string3[0]['user']['statuses_count'] ?>}},
		{candidato:'Martha Zepeda', informacion:{Seguidores:<?php echo $string4[0]['user']['followers_count'] ?>,Siguiendo:<?php echo $string4[0]['user']['friends_count'] ?>,Tweets:<?php echo $string4[0]['user']['statuses_count'] ?>}}
		];
		dashboard('#pastel',freqData);
	</script>

	

	<script type="text/javascript">
		$('.form_date').datetimepicker({
	        language:  'es',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0
	    });
	</script>	

	<script type="text/javascript">

	function nube()
	{
		var fill = d3.scale.category20b();

		var w = window.innerWidth - 300,
		        h = window.innerHeight;

		var max,
		        fontSize;

		var layout = d3.layout.cloud()
		        .timeInterval(Infinity)
		        .size([w, h])
		        .fontSize(function(d) {
		            return fontSize(+d.value);
		        })
		        .text(function(d) {
		            return d.key;
		        })
		        .on("end", draw);

		var svg = d3.select("#vis").append("svg")
		        .attr("width", w)
		        .attr("height", h);

		var vis = svg.append("g").attr("transform", "translate(" + [w >> 1, h >> 1] + ")");

		update();

		window.onresize = function(event) {
		    update();
		};

		function draw(data, bounds) {
		    var w = window.innerWidth - 300,
		        h = window.innerHeight;

		    svg.attr("width", w).attr("height", h);

		    scale = bounds ? Math.min(
		            w / Math.abs(bounds[1].x - w / 2),
		            w / Math.abs(bounds[0].x - w / 2),
		            h / Math.abs(bounds[1].y - h / 2),
		            h / Math.abs(bounds[0].y - h / 2)) / 2 : 1;

		    var text = vis.selectAll("text")
		            .data(data, function(d) {
		                return d.text.toLowerCase();
		            });
		    text.transition()
		            .duration(1000)
		            .attr("transform", function(d) {
		                return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
		            })
		            .style("font-size", function(d) {
		                return d.size + "px";
		            });
		    text.enter().append("text")
		            .attr("text-anchor", "middle")
		            .attr("transform", function(d) {
		                return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
		            })
		            .style("font-size", function(d) {
		                return d.size + "px";
		            })
		            .style("opacity", 1e-6)
		            .transition()
		            .duration(1000)
		            .style("opacity", 1);
		    text.style("font-family", function(d) {
		        return d.font;
		    })
		            .style("fill", function(d) {
		                return fill(d.text.toLowerCase());
		            })
		            .text(function(d) {
		                return d.text;
		            });

		    vis.transition().attr("transform", "translate(" + [w >> 1, h >> 1] + ")scale(" + scale + ")");
		}


		<?php //Llenamos el array con las coordenadas        
	        $aux=""; 
	        for ($i=0; $i<count($hashtags); $i++)
	        {
	            $porciones = explode(" ", $hashtags[$i]->hashtags);
	            for ($j=0; $j<count($porciones); $j++)
	        	{
	        		if ($porciones[$j] != "") 
	        		{
	        			$aux = $aux." ".$porciones[$j]; 
	        		};
	        		
	        	};                    
	        };    

	      $test = preg_split('/[\s,]+/', $aux); //Coloca los hashtags en una sola línea, el separador son los espacios
	      $palabras_contadas = array_count_values($test); //Cuenta la cantidad de veces que se repite una palabra

	      $a2 = array();
	      foreach ($palabras_contadas as $key => $value) { //Llena el array para convertirlo a json
	      		if($key != "")
	      		{
	      			$a2[] = array(
		                "key" => $key,
		                "value" => $value*10
		           	);
	      		}		    
			};
			$palabras_JSON = json_encode($a2); //Convertimos el array a Json para poderlo colocar en la nube de palabras                   
	    ?>

		function update() {			
		    layout.font('impact').spiral('archimedean');
		    fontSize = d3.scale['sqrt']().range([10, 100]);
		    if (<?php echo $palabras_JSON ?>.length){
		        fontSize.domain([+<?php echo $palabras_JSON ?>[<?php echo $palabras_JSON ?>.length - 1].value || 1, +<?php echo $palabras_JSON ?>[0].value]);
		    }
		    layout.stop().words(<?php echo $palabras_JSON ?>).start();
		}
	}
	</script>


</body>
</html>

