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
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<title>Inicio</title> 
	<?php $this->load->view('comunes/header'); ?>
    <script src="<?php echo base_url()?>assets/twitter/d3/d3.min.js"></script>
    <script src="<?php echo base_url()?>assets/twitter/d3/d3.js"></script> 
    <script src="<?php echo base_url()?>assets/twitter/d3/liquidFillGauge.js"></script> 
    <style>
        .liquidFillGaugeText { font-family: Helvetica; font-weight: bold; }
    </style>
    <!--Estilo para la gráfica de pastel-->
    <link href="<?= base_url();?>assets/twitter/d3/estilo_pastel.css" rel="stylesheet" type="text/css"/>
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
                            Principal <small>Contenido General</small>
                        </h3>
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo site_url('inicio') ?>">Home</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-user"></i>
                                <a href="javascript:;">Candidato</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-twitter"></i>
                                <a href="javascript:;">Twitter</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-briefcase"></i>
                                <a href="<?php echo site_url('twitter/controlador_inicio/valoracion_gobernadores');?>">Gobernador</a> 
                            </li>
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">
                        <!--Código para el tap de pestañas-->   
                        <div class="bs-example bs-example-tabs">
                            <ul class="nav nav-tabs" id="myTab">
                              <li class="active"><a data-toggle="tab" href="#nacho">Nacho Peralta</a></li>
                              <li class=""><a data-toggle="tab" href="#jorge">Jorge Luis Preciado</a></li>
                            </ul>
                              <div class="tab-content" id="myTabContent">

                                <div id="nacho" class="tab-pane fade active in"> 
                                    <center> 
                                        <svg id="fillgauge1"  width="300" height="261" preserveAspectRatio="xMidYMid" viewBox="22 -22 300 300"></svg>
                                        <svg id="fillgauge2" width="300" height="261" preserveAspectRatio="xMidYMid" viewBox="22 -22 300 300" ></svg>
                                        <svg id="fillgauge3" width="300" height="261" preserveAspectRatio="xMidYMid" viewBox="22 -22 300 300" ></svg>
                                        <br>
                                        <div id='pastel'></div>  
                                    </center>                                                                 
                                </div>

                                <div id="jorge" class="tab-pane fade ">
                                    <center>
                                        <svg id="fillgauge4"  width="300" height="261" preserveAspectRatio="xMidYMid" viewBox="22 -22 300 300"></svg>
                                        <svg id="fillgauge5" width="300" height="261" preserveAspectRatio="xMidYMid" viewBox="22 -22 300 300" ></svg>
                                        <svg id="fillgauge6" width="300" height="261" preserveAspectRatio="xMidYMid" viewBox="22 -22 300 300" ></svg>
                                    </center>                                     
                                </div>
                            </div>
                        </div>  <!--Cierra div de los tabs-->                                            
                    </div>
                </div>              
            </div>
        </div>
    </div>

	<?php $this->load->view('comunes/footer'); ?> 

    <!--Datos de nacho-->
<script language="JavaScript">
    var config1 = liquidFillGaugeDefaultSettings();
    config1.circleColor = "#178BCA";
    config1.textColor = "#045681";
    config1.waveTextColor = "#81BEF7";
    config1.waveColor = "#58ACFA";
    config1.circleThickness = 0.15;
    config1.textVertPosition = 0.8;
    config1.waveAnimateTime = 1000;    
    config1.textSize = 0.75;
    config1.waveHeight = 0.05;    

    var config2 = liquidFillGaugeDefaultSettings();
    config2.circleColor = "#FF7777";
    config2.textColor = "#FF4444";
    config2.waveTextColor = "#FFAAAA";
    config2.waveColor = "#FFDDDD";
    config2.circleThickness = 0.15;
    config2.textVertPosition = 0.8;
    config2.waveAnimateTime = 500;
    config2.textSize = 0.75;
    config2.waveHeight = 0.05;    

    var config3 = liquidFillGaugeDefaultSettings();
    config3.circleColor = "#D4AB6A";
    config3.textColor = "#553300";
    config3.waveTextColor = "#805615";
    config3.waveColor = "#AA7D39";
    config3.circleThickness = 0.15;
    config3.textVertPosition = 0.8;
    config3.waveAnimateTime = 2000;
    config3.textSize = 0.75;
    config3.waveHeight = 0.15;   

    //Datos nacho
    loadLiquidFillGauge("fillgauge1", <?php echo $nachoP; ?>, config1);
    loadLiquidFillGauge("fillgauge2", <?php echo $nachoNe; ?>, config2);
    loadLiquidFillGauge("fillgauge3", <?php echo $nachoN; ?>, config3);
    //Datos jorge
    loadLiquidFillGauge("fillgauge4", <?php echo $jorgeP; ?>, config1);
    loadLiquidFillGauge("fillgauge5", <?php echo $jorgeNe; ?>, config2);
    loadLiquidFillGauge("fillgauge6", <?php echo $jorgeN; ?>, config3);
</script>

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
        {candidato:'JIPS2015', informacion:{Seguidores:<?php echo $seguidores_jips2015 ?>,Siguiendo:<?php echo $siguiendo_jips2015 ?>,Tweets:<?php echo $tweets_jips2015 ?>}},
        {candidato:'JIPSColima', informacion:{Seguidores:<?php echo $seguidores_jipsColima ?>,Siguiendo:<?php echo $siguiendo_jipsColima ?>,Tweets:<?php echo $tweets_jipsColima ?>}},
        {candidato:'jipsvdea', informacion:{Seguidores:<?php echo $seguidores_jipsVilla ?>,Siguiendo:<?php echo $siguiendo_jipsVilla ?>,Tweets:<?php echo $tweets_jipsVilla ?>}},
        {candidato:'MiSelfiecoNacho', informacion:{Seguidores:<?php echo $seguidores_selfieNacho ?>,Siguiendo:<?php echo $siguiendo_selfieNacho ?>,Tweets:<?php echo $tweets_selfieNacho ?>}}
        ];
        dashboard('#pastel',freqData);
    </script>
</body>
</html>

