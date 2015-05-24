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
  <title>Dip. Locales</title> 
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/twitter/jsapi.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/tabsDL.js"></script>  
  <!--Para poder usar el calendario, importar las librerias-->
  <link href="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <!--Para usar la nube-->
  <script src="<?php echo base_url()?>assets/twitter/d3/d3.js"></script> 
  <script src="<?php echo base_url()?>assets/twitter/d3/d3.layout.cloud.js"></script>
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
                            Candidatos a Diputado Local <small>Actividad en Twitter </small>
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
                                <a href="<?php echo site_url('twitter/controlador_inicio/dip_locales');?>">Diputado Local</a>
                            </li>                            
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                  <center>
                    <div class="portlet-body form well">
                      <div id="alert"></div> 
                      <div id="alert2"></div> 
                      <!--Código para el tab de pestañas-->   
                      <div class="bs-example bs-example-tabs">
                        <ul class="nav nav-tabs" id="myTab">
                          <li class="active"><a data-toggle="tab" href="#barras1">Distrito 1</a></li>
                          <li><a data-toggle="tab" href="#barras2">Distrito 2</a></li>
                          <li><a data-toggle="tab" href="#barras3">Distrito 3</a></li>
                          <li><a data-toggle="tab" href="#barras4">Distrito 4</a></li>
                          <li><a data-toggle="tab" href="#barras5">Distrito 5</a></li>
                          <li><a data-toggle="tab" href="#barras6">Distrito 6</a></li>
                          <li><a data-toggle="tab" href="#barras7">Distrito 7</a></li>
                          <li><a data-toggle="tab" href="#barras8">Distrito 8</a></li>
                          <li><a data-toggle="tab" href="#barras9">Distrito 9</a></li>
                          <li><a data-toggle="tab" href="#barras10">Distrito 10</a></li>
                          <li><a data-toggle="tab" href="#barras11">Distrito 11</a></li>
                          <li><a data-toggle="tab" href="#barras12">Distrito 12</a></li>
                          <li><a data-toggle="tab" href="#barras13">Distrito 13</a></li>
                          <li><a data-toggle="tab" href="#barras14">Distrito 14</a></li>
                          <li><a data-toggle="tab" href="#barras15">Distrito 15</a></li>
                          <li><a data-toggle="tab" href="#barras16">Distrito 16</a></li> 
                          <li><a data-toggle="tab" href="#nube" onclick="nube();">Nube de Palabras</a></li>                         
                        </ul>
                          <div class="tab-content" id="tabs">

                            <div id="barras1" class="tab-pane fade active in"> 
                                <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha">
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
                                    <div id="chart_div"></div>  
                                    <div id="con"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras2" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha2">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab2" value="2">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta2">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div2"></div>  
                                    <div id="con2"></div>                            
                                  </div>
                                </div>
                              </div>

                            </div>

                            <div id="barras3" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha3">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab3" value="3">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta3">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div3"></div>  
                                    <div id="con3"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras4" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha4">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab4" value="4">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta4">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div4"></div>  
                                    <div id="con4"></div>                            
                                  </div>
                                </div>
                              </div>

                            </div>

                            <div id="barras5" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha5">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab5" value="5">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta5">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div5"></div>  
                                    <div id="con5"></div>                            
                                  </div>
                                </div>
                              </div>

                            </div>

                            <div id="barras6" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha6">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab6" value="6">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta6">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div6"></div>  
                                    <div id="con6"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras7" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha7">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab7" value="7">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta7">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div7"></div>  
                                    <div id="con7"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras8" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha8">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab8" value="8">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta8">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div8"></div>  
                                    <div id="con8"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras9" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha9">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab9" value="9">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta9">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div9"></div>  
                                    <div id="con9"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras10" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha10">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab10" value="10">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta10">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div10"></div>  
                                    <div id="con10"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras11" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha11">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab11" value="11">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta11">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div11"></div>  
                                    <div id="con11"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras12" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha12">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab12" value="12">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta12">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div12"></div>  
                                    <div id="con12"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras13" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha13">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab13" value="13">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta13">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div13"></div>  
                                    <div id="con13"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras14" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha14">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab14" value="14">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta14">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div14"></div>  
                                    <div id="con14"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras15" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha15">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab15" value="15">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta15">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div15"></div>  
                                    <div id="con15"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="barras16" class="tab-pane fade">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">                                    
                                      <label class="control-label" style="float:left">Fecha de consulta: </label>
                                      <br/><br/>
                                      <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                        <input class="form-control" size="16" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha16">
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                      </div>                                
                                      <div style="float:left">                                 
                                        <input type="hidden" name="vtab" id="vtab16" value="16">
                                        <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta16">Consultar</button>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>                                

                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span12">  
                                    <div id="chart_div16"></div>  
                                    <div id="con16"></div>                            
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="nube" class="tab-pane fade ">  
                                <div class="container-fluid">
                                   <div class="row-fluid">
                                      <div class="span12">  
                                        <button id="go" type="submit" onclick="nube();" class="btn btn-success btn-lg" title="Actualizar" style="float:left">Actualizar</button>
                                        <br/><br/>
                                        <div id="container">
                                          <center><div id="contenido_nube" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid"></div></center>    
                                        </div>                           
                                      </div>
                                    </div>
                                </div>                          
                            </div>

                        </div>
                      </div> <!--Cierra div del tab de pestañas-->        
                    </div>
                  </center>
                </div>              
            </div>
        </div>
    </div>

  <?php $this->load->view('comunes/footer'); ?> 
  <!--Para poder usar el calendario, importar las librerias-->
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>  
</body>

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
        ['PRI Hilda Ceballos de Moreno', <?php echo $seguidoresh ?>, <?php echo $siguiendoh ?>, <?php echo $tweetsh ?>],
        ['NUEVA ALIANZA Yadira Carrillo Montero', <?php echo $seguidores_yadira ?>, <?php echo $siguiendo_yadira ?>, <?php echo $tweets_yadira ?>]
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
        //title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(view, options);          
    }
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart2() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['NUEVA ALIANZA Guillermo Rangel Lozano', <?php echo $seguidores_rangel ?>, <?php echo $siguiendo_rangel ?>, <?php echo $tweets_rangel ?>],
        ['VERDE Viviana Ramírez Anguiano', <?php echo $seguidores_viviana ?>, <?php echo $siguiendo_viviana ?>, <?php echo $tweets_viviana ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
      chart2.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart3() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([        
        ['PAN Crispín Guerra', <?php echo $seguidores_crispin ?>, <?php echo $siguiendo_crispin ?>, <?php echo $tweets_crispin ?>],
        ['VERDE Isis Villaseñor Silva', <?php echo $seguidores_isis ?>, <?php echo $siguiendo_isis ?>, <?php echo $tweets_isis ?>],
        ['PRI Alma Delia Arreola Cruz', <?php echo $seguidores_alma ?>, <?php echo $siguiendo_alma ?>, <?php echo $tweets_alma ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div3'));
      chart3.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart4() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PAN Janeth Paz Ponce', <?php echo $seguidores_janeth ?>, <?php echo $siguiendo_janeth ?>, <?php echo $tweets_janeth ?>],
        ['PRI Juana Andrés Rivera', <?php echo $seguidores_juanita ?>, <?php echo $siguiendo_juanita ?>, <?php echo $tweets_juanita ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div4'));
      chart4.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart5() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PRI José Guadalupe Benavides Florián', <?php echo $seguidores_lupe ?>, <?php echo $siguiendo_lupe ?>, <?php echo $tweets_lupe ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  
      var chart5 = new google.visualization.ComboChart(document.getElementById('chart_div5'));
      chart5.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart6() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PRI Octavio Tintos Trujillo', <?php echo $seguidores_octavio ?>, <?php echo $siguiendo_octavio ?>, <?php echo $tweets_octavio ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart6 = new google.visualization.ComboChart(document.getElementById('chart_div6'));
      chart6.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart7() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PRD Sara Elizabeth Cernas Verduzco', <?php echo $seguidores_sara ?>, <?php echo $siguiendo_sara ?>, <?php echo $tweets_sara ?>],
        ['PT Joel Padilla Peña', <?php echo $seguidores_joel ?>, <?php echo $siguiendo_joel ?>, <?php echo $tweets_joel ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart7 = new google.visualization.ComboChart(document.getElementById('chart_div7'));
      chart7.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart8() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PAN Meyly Beltrán Rolón', <?php echo $seguidores_meyly ?>, <?php echo $siguiendo_meyly ?>, <?php echo $tweets_meyly ?>],
        ['PRI Héctor Magaña Lara', <?php echo $seguidores_hector ?>, <?php echo $siguiendo_hector ?>, <?php echo $tweets_hector ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart87 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
      chart87.draw(view, options);          
    }
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart9() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PRI Eusebio Mesina Reyes', <?php echo $seguidores_eusebio ?>, <?php echo $siguiendo_eusebio ?>, <?php echo $tweets_eusebio ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart9 = new google.visualization.ComboChart(document.getElementById('chart_div9'));
      chart9.draw(view, options);          
    }
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart10() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PAN Adriana Lucía Mesina Tena', <?php echo $seguidores_mesina ?>, <?php echo $siguiendo_mesina ?>, <?php echo $tweets_mesina ?>],
        ['PRI Juan Carlos Pinto Rodríguez', <?php echo $seguidores_pinto ?>, <?php echo $siguiendo_pinto ?>, <?php echo $tweets_pinto ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart10 = new google.visualization.ComboChart(document.getElementById('chart_div10'));
      chart10.draw(view, options);          
    }
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart11() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PRI Armida Núñez García', <?php echo $seguidores_armida ?>, <?php echo $siguiendo_armida ?>, <?php echo $tweets_armida ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart11 = new google.visualization.ComboChart(document.getElementById('chart_div11'));
      chart11.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart12() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PAN Martha Leticia Sosa Govea', <?php echo $seguidores_marthaS ?>, <?php echo $siguiendo_marthaS ?>, <?php echo $tweets_marthaS ?>],
        ['PRD Ana María Sánchez Landa', <?php echo $seguidores_amary ?>, <?php echo $siguiendo_amary ?>, <?php echo $tweets_amary ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart12 = new google.visualization.ComboChart(document.getElementById('chart_div12'));
      chart12.draw(view, options);          
    }
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart13() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      data.addRows([
        ['PRI Sergio Sánchez Ochoa', <?php echo $seguidores_sergio ?>, <?php echo $siguiendo_sergio ?>, <?php echo $tweets_sergio ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart13 = new google.visualization.ComboChart(document.getElementById('chart_div13'));
      chart13.draw(view, options);          
    }
    </script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart14() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');    
      data.addRows([
        ['VERDE Martha Alicia Meza Oregon', <?php echo $seguidores_martha ?>, <?php echo $siguiendo_martha ?>, <?php echo $tweets_martha ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart14 = new google.visualization.ComboChart(document.getElementById('chart_div14'));
      chart14.draw(view, options);          
    }
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart15() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PRI Felícitas Peña Cisneros', <?php echo $seguidores_felicitas ?>, <?php echo $siguiendo_felicitas ?>, <?php echo $tweets_felicitas ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart15 = new google.visualization.ComboChart(document.getElementById('chart_div15'));
      chart15.draw(view, options);          
    }
    </script>

    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart16() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Seguidores');
      data.addColumn('number', 'Siguiendo');
      data.addColumn('number', 'Tweets');     
      data.addRows([
        ['PRI Santiago Chávez Chávez', <?php echo $seguidores_santiago ?>, <?php echo $siguiendo_santiago ?>, <?php echo $tweets_santiago ?>]
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
        title: '',
        hAxis: {
          title: 'Candidatos'
        },         
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          },
          2: {
            type: 'bars',
            color: '#FF4524'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart16 = new google.visualization.ComboChart(document.getElementById('chart_div16'));
      chart16.draw(view, options);          
    }
  </script>

 

  <!--Para usar el calendario-->
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
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con').html(html);   
          }
        });            
      }); 

      $("#consulta2").click(function(event) {
        var fecha = document.getElementById("fecha2").value; 
        var vtab = document.getElementById("vtab2").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con2').html(html);
          }
        });
      });

      $("#consulta3").click(function(event) {
        var fecha = document.getElementById("fecha3").value; 
        var vtab = document.getElementById("vtab3").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con3').html(html);
          }
        });
      });

      $("#consulta4").click(function(event) {
        var fecha = document.getElementById("fecha4").value; 
        var vtab = document.getElementById("vtab4").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con4').html(html);
          }
        });
      });

      $("#consulta5").click(function(event) {
        var fecha = document.getElementById("fecha5").value; 
        var vtab = document.getElementById("vtab5").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con5').html(html);
          }
        });
      });

      $("#consulta6").click(function(event) {
        var fecha = document.getElementById("fecha6").value; 
        var vtab = document.getElementById("vtab6").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con6').html(html);
          }
        });
      });

      $("#consulta7").click(function(event) {
        var fecha = document.getElementById("fecha7").value; 
        var vtab = document.getElementById("vtab7").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con7').html(html);
          }
        });
      });

      $("#consulta8").click(function(event) {
        var fecha = document.getElementById("fecha8").value; 
        var vtab = document.getElementById("vtab8").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con8').html(html);
          }
        });
      });

      $("#consulta9").click(function(event) {
        var fecha = document.getElementById("fecha9").value; 
        var vtab = document.getElementById("vtab9").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con9').html(html);
          }
        });
      });

      $("#consulta10").click(function(event) {
        var fecha = document.getElementById("fecha10").value; 
        var vtab = document.getElementById("vtab10").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con10').html(html);
          }
        });
      });

      $("#consulta11").click(function(event) {
        var fecha = document.getElementById("fecha11").value; 
        var vtab = document.getElementById("vtab11").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con11').html(html);
          }
        });
      });

      $("#consulta12").click(function(event) {
        var fecha = document.getElementById("fecha12").value; 
        var vtab = document.getElementById("vtab12").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con12').html(html);
          }
        });
      });

      $("#consulta13").click(function(event) {
        var fecha = document.getElementById("fecha13").value; 
        var vtab = document.getElementById("vtab13").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con13').html(html);
          }
        });
      });

      $("#consulta14").click(function(event) {
        var fecha = document.getElementById("fecha14").value; 
        var vtab = document.getElementById("vtab14").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con14').html(html);
          }
        });
      });

      $("#consulta15").click(function(event) {
        var fecha = document.getElementById("fecha15").value; 
        var vtab = document.getElementById("vtab15").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con15').html(html);
          }
        });
      });

      $("#consulta16").click(function(event) {
        var fecha = document.getElementById("fecha16").value; 
        var vtab = document.getElementById("vtab16").value; 
        var parametros = {
                "fecha" : fecha,
                "vtab" : vtab
        };
        $.ajax({                                            
          type:"post",
          data:parametros,
          url: '<?php echo site_url('twitter/controlador_consultas/dip_locales');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con16').html(html);
          }
        });
      });
    });
  </script>

</html>

