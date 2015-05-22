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
    <script src="<?php echo base_url()?>assets/twitter/tabsDL.js"></script> 
    <!--Para poder usar el calendario, importar las librerias-->
    <link href="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <style type="text/css">		
	    #myTab{
	      margin-top: -38px;
	    }
	</style>
 </head>	
<body class="page-header-fixed page-sidebar-closed">
    <!--Carga la barra superior-->
    <?php $this->load->view('comunes/barra_superior'); ?>

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <?php $this->load->view('comunes/nav'); ?>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12" id="encabezado">
                        <h3 class="page-title" id="titulo">
                            Candidatos a Gobernador <small>Actividad en Twitter</small>
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
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
					          <li class="active"><a data-toggle="tab" href="#barras1">Gráfica</a></li>
					          <li class=""><a data-toggle="tab" href="#nube" onclick="nube();">Nube de Palabras</a></li>
					        </ul>
					          <div class="tab-content" id="myTabContent">

					          	<div id="barras1" class="tab-pane fade active in"> 
		                            <div class="container-fluid">
		                            	<div class="row-fluid">
		                                  <div class="span12">                                    
		                                      <label class="control-label">Fecha a consulta: </label>
		                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
		                                        <input class="form-control" size="10" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha">
		                                        <span class="add-on"><i class="icon-remove"></i></span>
		                                        <span class="add-on"><i class="icon-th"></i></span>
		                                      </div>                                
		                                      <div style="float:left">                                 
		                                        <input type="hidden" name="vtab" id="vtab1" value="1">
		                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta">Consultar</button>
		                                      </div>                                    
		                                  </div>
		                                </div>
		                            </div>                                

		                            <div class="container-fluid">
		                                <div class="row-fluid">
		                                  <div class="span12">  
		                                    <div class="span8" id="chart_div" style="height: 300px;"></div> 
		                                    <div class="span3">                                 
					                                      <label class="control-label">Fecha a consulta: </label>
					                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
					                                        <input class="form-control" size="20" style="width:150px" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha">
					                                        <span class="add-on"><i class="icon-remove"></i></span>
					                                        <span class="add-on"><i class="icon-th"></i></span>
					                                      </div>                                
					                                      <div style="float:left">                                 
					                                        <input type="hidden" name="vtab" id="vtab1" value="1">
					                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta">Consultar</button>
					                                      </div>  
		                                    </div> 
		                                    <div id="con"></div>                            
		                                  </div>
		                                </div>
		                              </div>                          
	                            	</div>

						            <div id="nube" class="tab-pane fade ">	
			                            <div class="container-fluid">
			                                <div class="row-fluid">
			                                  <div class="span12">  
			                                    <button id="go" type="submit" onclick="nube();" class="btn btn-success btn-lg" title="Actualizar">Actualizar</button>
								            	<br/><br/>
								            	<div id="container">
								            		<!-- <center><div id="contenido_nube" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid"></div></center>  	 -->
								            	</div>                           
			                                  </div>
			                                </div>
			                            </div>                          
		                            </div>					            					            				            					              	            	
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
    google.load("visualization", "1", {packages: ["corechart"]});    
    google.setOnLoadCallback(drawChart);
    function drawChart() {
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
        height: 300,
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
  </script>

   <script type="text/javascript">
    $(document).ready(function(){                                        
      $("#consulta").click(function(event) {
        var fecha = document.getElementById("fecha").value;  
        var vtab = document.getElementById("vtab1").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/gobernadores');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con').html(html);   
          }
        });            
      }); 

    });
  </script>


</body>
</html>

