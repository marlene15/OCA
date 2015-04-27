$(document).ready(function(){
	$('#barras2').hide();
	$('[data-toggle=tab][href=#barras1]').on('click',function(){
		setTimeout(function(){
			drawChart();
		},550)
		$('#barras1').show(500);
		$('#barras2').hide(250);
		$('#barras2').html('<center><div id="chart_div2" style="width: 100%; height: 600px;"></div> <!--Segundo mapa--></center>  ');
	});
	$('[data-toggle=tab][href=#barras2]').on('click',function(){
		setTimeout(function(){
			drawChart2();
		},550)
		$('#chart_div2').width('100%');
		$('#barras2').show(500);
		$('#barras1').hide(250);
		$('#barras1').html('<center><div id="chart_div" style="width: 100%; height: 600px;"></div> <!--Segundo mapa--></center>  ');
	});
});