$(document).ready(function(){
	$('#villa').hide();
	$('[data-toggle=tab][href=#colima]').on('click',function(){
		setTimeout(function(){
			drawChart();
		},550)
		$('#colima').show(500);
		$('#villa').hide(250);
		$('#villa').html('<center><div id="map_div2" style="width: 100%; height: 500px;"></div> <!--Segundo mapa--></center>  ');
	});
	$('[data-toggle=tab][href=#villa]').on('click',function(){
		setTimeout(function(){
			drawChart2();
		},550)
		$('#map_div2').width('100%');
		$('#villa').show(500);
		$('#colima').hide(250);
		$('#colima').html('<center><div id="map_div" style="width: 100%; height: 500px;"></div> <!--Segundo mapa--></center>  ');
	});
});