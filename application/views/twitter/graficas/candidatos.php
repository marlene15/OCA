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
	/*echo $twitter->setGetfield($variablesGet)
	             ->buildOauth($url, $requestMethod)
	             ->performRequest();*/
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

	// echo $string3[0]['user']['followers_count']; //Acceder a los datos dela array

	// echo "<pre>";
	// print_r($string3);
	// echo "</pre>";

	// foreach($string as $items) //Si quiero acceder a todos los tuist
 //    {
 //        echo "Time and Date of Tweet: ".$items['created_at']."<br />";
 //        echo "Tweet: ". $items['text']."<br />";
 //        echo "Tweeted by: ". $items['user']['name']."<br />";
 //        echo "Screen name: ". $items['user']['screen_name']."<br />";
 //        echo "Followers: ". $items['user']['followers_count']."<br />";
 //        echo "Friends: ". $items['user']['friends_count']."<br />";
 //        echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
 //    }
?>

<!DOCTYPE html>
<html>
<?php $this->load->view('comunes/header'); ?>
<head lang="es">
	<title>Candidatos</title>
	<script src="<?php echo base_url()?>assets/twitter/d3/d3.min.js"></script>
    <script src="<?php echo base_url()?>assets/twitter/d3/d3.js"></script> 
	<meta charset="utf-8">
</head>
	<style>
		path {  stroke: #fff; }
		path:hover {  opacity:0.9; }
		rect:hover {  fill:blue; }
		.axis {  font: 10px sans-serif; }
		.legend tr{    border-bottom:1px solid grey; }
		.legend tr:first-child{    border-top:1px solid grey; }

		.axis path,
		.axis line {
		  fill: none;
		  stroke: #000;
		  shape-rendering: crispEdges;
		}

		.x.axis path {  display: none; }
		.legend{
		    margin-bottom:76px;
		    display:inline-block;
		    border-collapse: collapse;
		    border-spacing: 0px;
		}
		.legend td{
		    padding:4px 5px;
		    vertical-align:bottom;
		}
		.legendFreq, .legendPerc{
		    align:right;
		    width:50px;
		}
	</style>
<body>
	<?php $this->load->view('comunes/nav'); ?>
	<div class="container">
		<div id='dashboard'></div>
		<script>
			function dashboard(id, fData){
			    var barColor = 'steelblue';
			    function segColor(c){ return {Seguidores:"#807dba", Siguiendo:"#e08214",Tweets:"#41ab5d"}[c]; }
			    
			    // compute total for each candidato.
			    fData.forEach(function(d){d.total = d.informacion.Seguidores+d.informacion.Siguiendo+d.informacion.Tweets;});
			   	
			    // function to handle histogram.
			    function histoGram(fD){
			        var hG={},    hGDim = {t: 60, r: 0, b: 30, l: 0};
			        hGDim.w = 650 - hGDim.l - hGDim.r, 
			        hGDim.h = 450 - hGDim.t - hGDim.b;
			            
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
			        var pC ={},    pieDim ={w:250, h: 250};
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
		</script>

		<!--Guardar el json los datos-->
		<script>
			var freqData=[
			{candidato:'Locho Morán', informacion:{Seguidores:<?php echo $string[0]['user']['followers_count'] ?>,Siguiendo:<?php echo $string[0]['user']['friends_count'] ?>,Tweets:<?php echo $string[0]['user']['statuses_count'] ?>}},
			{candidato:'Nacho Peralta', informacion:{Seguidores:<?php echo $string2[0]['user']['followers_count'] ?>,Siguiendo:<?php echo $string2[0]['user']['friends_count'] ?>,Tweets:<?php echo $string2[0]['user']['statuses_count'] ?>}},
			{candidato:'Jorge Luis Preciado', informacion:{Seguidores:<?php echo $string3[0]['user']['followers_count'] ?>,Siguiendo:<?php echo $string3[0]['user']['friends_count'] ?>,Tweets:<?php echo $string3[0]['user']['statuses_count'] ?>}},
			{candidato:'Martha Zepeda del Toro', informacion:{Seguidores:<?php echo $string4[0]['user']['followers_count'] ?>,Siguiendo:<?php echo $string4[0]['user']['friends_count'] ?>,Tweets:<?php echo $string4[0]['user']['statuses_count'] ?>}}
			];
			dashboard('#dashboard',freqData);
		</script>
	</div>
	<!-- </div> -->

	<?php $this->load->view('comunes/footer'); ?> 
</body>
</html>