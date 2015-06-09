<head lang="es">
  <title>Diputado Federal</title>   
  <?php $this->load->view('comunes/header'); ?>
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.js"></script> 
  <script src="<?php echo base_url()?>assets/facebook/d3/d3.layout.cloud.js"></script>
    <!--Se usa para la primera gráfica-->
    <script src="<?php echo base_url()?>assets/facebook/jsapi.js"></script> 
    <script src="<?php echo base_url()?>assets/facebook/tabsDL.js"></script> 
    <!--Para poder usar el calendario, importar las librerias-->
    <link href="<?php echo base_url()?>assets/calendar/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <!--Para usar los contenedores widget-->
    <link href="<?php echo base_url()?>assets/bootstrap-widget/css/widget.css" rel="stylesheet" type="text/css">        

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
                          Candidatos a Diputado Local <small>Actividad en Facebook</small>
                        </h3>
                        <ul class="breadcrumb" id="ul_menu">
                            <li>
                                <i class="icon-table"></i>
                                Cargo 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <i class="icon-facebook"></i>
                                Facebook 
                                <i class="icon-angle-right"></i>                                
                            </li>
                            <li>
                                <i class="icon-user"></i>
                                Diputado Local
                                <i class="icon-angle-right"></i>
                            </li>                            
                        </ul>
                    </div>
                </div>
                <!--CONTENIDO DE LA PÁGINA -->
                <div id="dashboard">
                    <div class="portlet-body form well">
                      <div id="alert"></div>                  
                    <center>
                        <!--Código para el tap de pestañas-->   
                        <div class="bs-example bs-example-tabs">
                          <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a data-toggle="tab" href="#barras1">Distrito I</a></li>
                            <li class=""><a data-toggle="tab" href="#barras2">Distrito II</a></li>
                            <li class=""><a data-toggle="tab" href="#barras3">Distrito III</a></li>
                            <li class=""><a data-toggle="tab" href="#barras4">Distrito IV</a></li>
                            <li class=""><a data-toggle="tab" href="#barras5">Distrito V</a></li>
                            <li class=""><a data-toggle="tab" href="#barras6">Distrito VI</a></li>
                            <li class=""><a data-toggle="tab" href="#barras7">Distrito VII</a></li>
                            <li class=""><a data-toggle="tab" href="#barras8">Distrito VIII</a></li>
                            <li class=""><a data-toggle="tab" href="#barras9">Distrito IX</a></li>
                            <li class=""><a data-toggle="tab" href="#barras10">Distrito X</a></li>                            
                            <li class=""><a data-toggle="tab" href="#barras11">Distrito XI</a></li>
                            <li class=""><a data-toggle="tab" href="#barras12">Distrito XII</a></li>
                            <li class=""><a data-toggle="tab" href="#barras13">Distrito XIII</a></li>
                            <li class=""><a data-toggle="tab" href="#barras14">Distrito XIV</a></li>
                            <li class=""><a data-toggle="tab" href="#barras15">Distrito XV</a></li>
                            <li class=""><a data-toggle="tab" href="#barras16">Distrito XVI</a></li>                                                       
                            <li class=""><a data-toggle="tab" href="#barras17">Nube de Palabras</a></li>                               
                          </ul>
                        <div class="tab-content" id="tabs">
                        <!--Primer tab-->
                          <div id="barras1" class="tab-pane fade active in">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div"></div>                            
                                      <div id="con"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab1" value="1">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Hilda Ceballos</center></td>                                      
                                      </tr>
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PMC.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>José Cardenas</center></td>
                                      </tr>                         
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/HUMANISTA.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Leonardo Gutiérrez</center></td>
                                      </tr> 
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div>                      
                        <!--Segunda tab-->
                          <div id="barras2" class="tab-pane">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor2"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div2"></div>                            
                                      <div id="con2"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha2">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab2" value="2">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta2">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Nicólas Contreras</center></td>                                      
                                      </tr>
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Guillermo Rángel</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PVE.gif" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Sandra Ramírez</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>José García</center></td>
                                      </tr>                         
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRD.jpg" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Arturo García</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PES.jpg" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Liliana Rodríguez</center></td>
                                      </tr>                                      
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div>  
                        <!--tercer tab-->
                          <div id="barras3" class="tab-pane">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor3"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div3"></div>                            
                                      <div id="con3"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha3">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab3" value="3">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta3">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Nicólas Contreras</center></td>                                      
                                      </tr>
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Guillermo Rángel</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PVE.gif" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Sandra Ramírez</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>José García</center></td>
                                      </tr>                         
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRD.jpg" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Arturo García</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PES.jpg" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Liliana Rodríguez</center></td>
                                      </tr>                                      
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div> 
                        <!--cuarta tab-->
                          <div id="barras4" class="tab-pane">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor4"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div4"></div>                            
                                      <div id="con4"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha4">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab4" value="4">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta4">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Janeth Paz Ponce</center></td>                                      
                                      </tr>
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Juana Andrés Rivera</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRD.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Sergio Ricardo Ruiz</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Andrés Fernando Orozco Soto</center></td>
                                      </tr>                         
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div>     
                        <!--quinta tab-->
                          <div id="barras5" class="tab-pane">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor5"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div5"></div>                            
                                      <div id="con5"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha5">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab5" value="5">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta5">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Ramiro Toscano</center></td>                                      
                                      </tr>
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVE.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>José Benavides</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Yuliana Aguilar</center></td>
                                      </tr>   
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div> 
                        <!--Sexta tab-->
                          <div id="barras6" class="tab-pane">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor6"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div6"></div>                            
                                      <div id="con6"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha6">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab6" value="6">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta6">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Sandra Ramírez</center></td>                                      
                                      </tr>
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVE.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Octavio Tintos</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRD.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Sergio Silva</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Leticia Mendoza</center></td>
                                      </tr>                         
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/HUMANISTA.png" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Getsemani Ibarra</center></td>
                                      </tr> 
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div>  
                        <!--septima tab-->
                          <div id="barras7" class="tab-pane">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor7"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div7"></div>                            
                                      <div id="con7"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha7">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab7" value="7">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta7">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Francisco Ceballos</center></td>                                      
                                      </tr>
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVE.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Alfredo Hernández</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRD.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Sara Cernas</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Joel Padilla</center></td>
                                      </tr>                         
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PMC.png" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Socorro Bayardo</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/HUMANISTA.png" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Erendira Andrade</center></td>
                                      </tr>                                       
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div>
                        <!--Octava tab-->
                          <div id="barras8" class="tab-pane">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor8"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div8"></div>                            
                                      <div id="con8"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha8">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab8" value="8">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta8">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Meyly Pastora</center></td>                                      
                                      </tr>
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVE.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Héctor Magaña</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Alfredo Herrera</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PES.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Adelaida Fernández</center></td>
                                      </tr>                         
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/HUMANISTA.png" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Juan Juárez</center></td>
                                      </tr> 
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div>
                        <!--Novena tab-->
                          <div id="barras9" class="tab-pane">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor9"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div9"></div>                            
                                      <div id="con9"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha9">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab9" value="9">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta9">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Eusebio Mesina</center></td>                                      
                                      </tr>
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Beatríz Isunza</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PVE.gif" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Selene Margarita</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PMC.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Angélica Ochoa</center></td>
                                      </tr>                         
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/MORENA.jpg" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Mauricio Barreto</center></td>
                                      </tr> 
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div>
                        <!--Decima tab-->
                          <div id="barras10" class="tab-pane">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor10"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div10"></div>                            
                                      <div id="con10"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha10">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab10" value="10">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta10">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVE.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Juan Pinto</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Ricardo Sevilla</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PMC.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Raquel Cárdenas</center></td>
                                      </tr>                         
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/MORENA.jpg" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Marco Rodarte</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/HUMANISTA.png" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Salvador Juárez</center></td>
                                      </tr>                                       
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div>
                        <!--Onceava tab-->
                          <div id="barras11" class="tab-pane">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor11"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div11"></div>                            
                                      <div id="con11"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha11">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab11" value="11">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta11">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Miguel García</center></td>                                      
                                      </tr>                                        
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVE.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Armida Nuñez</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRD.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Aldo Vega</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Sebastián Esparza</center></td>
                                      </tr>                         
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/MORENA.jpg" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Teresa Hernández</center></td>
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PES.jpg" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Diana Topete</center></td>
                                      </tr>                                       
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div>
                        <!--Doce tab-->
                          <div id="barras12" class="tab-pane">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor12"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div12"></div>                            
                                      <div id="con12"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha12">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab12" value="12">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta12">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Martha Sosa</center></td>                                      
                                      </tr>                                        
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVE.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Rosario Yeme</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Nora Ayala</center></td>
                                      </tr>                         
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PMC.png" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Iveth Noriega</center></td>
                                      </tr>                                       
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div>
                        <!--Trece tab-->
                          <div id="barras13" class="tab-pane">
                            <div class="row-fluid">
                              <div class="span12">  
                                <div class="span9">  
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary" id="graf">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-bar-chart"></i>
                                      <h3 id="fecha_contenedor13"></h3>                                                    
                                      <?php echo $ultima_fecha ?>
                                    </div>
                                    <div class="widget-content">                                          
                                      <div id="chart_div13"></div>                            
                                      <div id="con13"></div>  <!--Grafica despues de la consulta-->
                                    </div>
                                  </div> 
                                </div>
                                <div class="span3">
                                  <div data-fullscreen="false" data-title=".widget .widget-primary" data-icon="icon-facebook" class="widget widget-primary">
                                    <div class="widget-header" style="background: #B20034" align="left">
                                      <i class="icon-calendar"></i>
                                      <h3>Fecha a consulta</h3>                                                   
                                    </div>
                                    <div class="widget-content">
                                      <center>
                                            <div class="controls input-append date form_date span12"  data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="float:left">
                                                <span class="add-on"><i class="icon-th"></i></span>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <input class="form-control span9" size="15" type="text" value="<?php echo $ultima_fecha ?>" readonly id="fecha13">
                                            </div> 
                                            <input type="hidden" name="vtab" id="vtab13" value="13">
                                            <button type="submit" class="btn btn-primary btn-lg" title="Consultar" id="consulta13">Consultar</button>
                                      </center>
                                    </div> 
                                  </div>  
                                </div>
                                <!--Tabla con candidatos con cuentas-->
                                <div class="span3">
                                  <div class="span12">Candidatos que tienen cuenta de Facebook</div>
                                  <table class="table table-hover table-bordered">
                                    <tbody>                         
                                    <!-- Aplicadas en las celdas (<td> o <th>) -->
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/pan.jpg" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Martha Sosa</center></td>                                      
                                      </tr>                                        
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PRI.jpg" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PVE.gif" class="img-responsive center-block" width="30" height="30"><img src="<?php echo base_url()?>assets/logos_partidos/PNAL.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Rosario Yeme</center></td>                                        
                                      </tr> 
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PT.png" class="img-responsive center-block" width="30" height="30"></center></td>
                                        <td class="success"><center>Nora Ayala</center></td>
                                      </tr>                         
                                      <tr>
                                        <td class="active"><center><img src="<?php echo base_url()?>assets/logos_partidos/PMC.png" class="img-responsive center-block" width="25" height="25"></center></td>
                                        <td class="success"><center>Iveth Noriega</center></td>
                                      </tr>                                       
                                    </tbody>
                                  </table>                                      
                                </div>
                              </div>                                  
                            </div>
                          </div>

                        </div> 
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
<!--GRAFICA DISTRITO I-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI\nHilda Ceballos',<?php echo $megustac1 ?>, <?php echo $seguidoresc1 ?>],
        ['PM\nJosé Cardenas',<?php echo $megustac2 ?>, <?php echo $seguidoresc2 ?>],
        ['PH\nLeonardo gutiérrez',<?php echo $megustac3 ?>, <?php echo $seguidoresc3 ?>]
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
                      }]);
      var options = {
        //title: '@oca_face',
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
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      chart.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart();
    });    
  </script>

<!--GRAFICA DISTRITO II-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart2() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nNicolás\nContreras',<?php echo $megustac4 ?>, <?php echo $seguidoresc4 ?>],        
        ['PNA\nGuillermo\nRángel',<?php echo $megustac5 ?>, <?php echo $seguidoresc5 ?>],        
        ['VERDE\nSandra\nRamírez',<?php echo $megustac6 ?>, <?php echo $seguidoresc6 ?>],
        ['PAN\nJosé\nGarcía',<?php echo $megustac7 ?>, <?php echo $seguidoresc7 ?>],
        ['PRD\nArturo\nGarcía',<?php echo $megustac8 ?>, <?php echo $seguidoresc8 ?>],        
        ['PRI\nLiliana\nRodríguez',<?php echo $megustac9 ?>, <?php echo $seguidoresc9 ?>]
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
      chart2.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script>  
  <!--GRAFICA DISTRITO III-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart3() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PES\nCrispín\nGuerra',<?php echo $megustac10 ?>, <?php echo $seguidoresc10 ?>],
        ['PT\nAlma\nArreola',<?php echo $megustac11 ?>, <?php echo $seguidoresc11 ?>],
        ['PRI\nMartha\nFarías',<?php echo $megustac12 ?>, <?php echo $seguidoresc12 ?>],
        ['PM\nIsis\nVillaseñor',<?php echo $megustac13 ?>, <?php echo $seguidoresc13 ?>],
        ['PT\nOctavio\nAguilar',<?php echo $megustac14 ?>, <?php echo $seguidoresc14 ?>],
        ['PRI\nPatricia\nPeregrina',<?php echo $megustac15 ?>, <?php echo $seguidoresc14 ?>],
        ['PM\nGloria\nArceo',<?php echo $megustac16 ?>, <?php echo $seguidoresc16 ?>]
     
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div3'));
      chart3.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script>  
<!--GRAFICA DISTRITO IV-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart4() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nJaneth Paz',<?php echo $megustac17 ?>, <?php echo $seguidoresc17 ?>],
        ['PRI\nJuana Andrés',<?php echo $megustac18 ?>, <?php echo $seguidoresc18 ?>],
        ['PRD\nSergio Ricardo',<?php echo $megustac19 ?>, <?php echo $seguidoresc19 ?>],
        ['PT\nAndrés Orozco',<?php echo $megustac20 ?>, <?php echo $seguidoresc20 ?>]        
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart4 = new google.visualization.ComboChart(document.getElementById('chart_div4'));
      chart4.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script>  
<!--GRAFICA DISTRITO V-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart5() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nRamiro Toscano',<?php echo $megustac21 ?>, <?php echo $seguidoresc21 ?>],
        ['PRI-PNA-PV\nJosé Benavides',<?php echo $megustac22 ?>, <?php echo $seguidoresc22 ?>],
        ['PT\nYuliana Aguilar',<?php echo $megustac23 ?>, <?php echo $seguidoresc23 ?>]

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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart5 = new google.visualization.ComboChart(document.getElementById('chart_div5'));
      chart5.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script>

<!--GRAFICA DISTRITO VI-->
 <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart6() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nSandra Ramírez',<?php echo $megustac24 ?>, <?php echo $seguidoresc24 ?>],
        ['PRI-PNA-PV\nOctavio Tintos',<?php echo $megustac25 ?>, <?php echo $seguidoresc25 ?>],
        ['PRD\nSergio Silva',<?php echo $megustac26 ?>, <?php echo $seguidoresc26 ?>],
        ['PT\nLeticia Mendoza',<?php echo $megustac27 ?>, <?php echo $seguidoresc27 ?>],
        ['PH\nGetsemani Ibarra',<?php echo $megustac28 ?>, <?php echo $seguidoresc28 ?>]                        
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart6 = new google.visualization.ComboChart(document.getElementById('chart_div6'));
      chart6.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script>
<!--GRAFICA DISTRITO VII-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart7() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nFrancisco\nCeballos',<?php echo $megustac29 ?>, <?php echo $seguidoresc29 ?>],
        ['PRI-PNA-PV\nAlfredo\nHernández',<?php echo $megustac30 ?>, <?php echo $seguidoresc30 ?>],
        ['PRD\nSara\nCernas',<?php echo $megustac31 ?>, <?php echo $seguidoresc31 ?>],
        ['PT\nJoel\nPadilla',<?php echo $megustac32 ?>, <?php echo $seguidoresc32 ?>],
        ['PMC\nSocorro\nBayardo',<?php echo $megustac33 ?>, <?php echo $seguidoresc33 ?>],
        ['PH\nErendira\nÁndrade',<?php echo $megustac34 ?>, <?php echo $seguidoresc34 ?>]                                                        
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart7 = new google.visualization.ComboChart(document.getElementById('chart_div7'));
      chart7.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script>
  <!--GRAFICA DISTRITO VIII-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart8() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nMeyly\nPastora',<?php echo $megustac35 ?>, <?php echo $seguidoresc35 ?>],
        ['PRI-PNA-PV\nHéctor\nMagaña',<?php echo $megustac36 ?>, <?php echo $seguidoresc36 ?>],
        ['PT\nAlfredo\nHerrera',<?php echo $megustac37 ?>, <?php echo $seguidoresc37 ?>],
        ['PMC\nAdelaida\nFernández',<?php echo $megustac38 ?>, <?php echo $seguidoresc38 ?>],
        ['PH\nJuan\nJuárez',<?php echo $megustac39 ?>, <?php echo $seguidoresc39 ?>]
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart8 = new google.visualization.ComboChart(document.getElementById('chart_div8'));
      chart8.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script>  
   <!--GRAFICA DISTRITO IX-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart9() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nEusebio\nMesina',<?php echo $megustac40 ?>, <?php echo $seguidoresc40 ?>],
        ['PRI\nBeatriz\nIsunza',<?php echo $megustac41 ?>, <?php echo $seguidoresc41 ?>],
        ['VERDE\nSelene\nLópez',<?php echo $megustac42 ?>, <?php echo $seguidoresc42 ?>],
        ['PMC\nAngelica\nOchoa',<?php echo $megustac43 ?>, <?php echo $seguidoresc43 ?>],
        ['PM\nMauricio\nBarreto',<?php echo $megustac44 ?>, <?php echo $seguidoresc44 ?>]
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart9 = new google.visualization.ComboChart(document.getElementById('chart_div9'));
      chart9.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script>        

  <!--GRAFICA DISTRITO X-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart10() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI-PNA-PV\nJuan\nPinto',<?php echo $megustac45 ?>, <?php echo $seguidoresc45 ?>],
        ['PT\nRicardo\nSevilla',<?php echo $megustac46 ?>, <?php echo $seguidoresc46 ?>],
        ['PMC\nRaquel\nCárdenas',<?php echo $megustac47 ?>, <?php echo $seguidoresc47 ?>],
        ['PM\nMarco\nRodarte',<?php echo $megustac48 ?>, <?php echo $seguidoresc48 ?>],
        ['PH\nSalvador\nJuárez',<?php echo $megustac49 ?>, <?php echo $seguidoresc49 ?>]                                                                  
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart10 = new google.visualization.ComboChart(document.getElementById('chart_div10'));
      chart10.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script> 
   <!--GRAFICA DISTRITO XI-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart11() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nMiguel\nGarcía',<?php echo $megustac50 ?>, <?php echo $seguidoresc50 ?>],
        ['PRI-PNA-PV\nArmida\nNuñez',<?php echo $megustac51 ?>, <?php echo $seguidoresc51 ?>],
        ['PRD\nAldo\nVega',<?php echo $megustac52 ?>, <?php echo $seguidoresc52 ?>],
        ['PT\nSebastián\nEsparza',<?php echo $megustac53 ?>, <?php echo $seguidoresc53 ?>],
        ['PM\nTeresa\nHernández',<?php echo $megustac54 ?>, <?php echo $seguidoresc54 ?>],
        ['PM\nDiana\nTopetes',<?php echo $megustac55 ?>, <?php echo $seguidoresc55 ?>]        
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart11 = new google.visualization.ComboChart(document.getElementById('chart_div11'));
      chart11.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script>        

  <!--GRAFICA DISTRITO XII-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart12() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nMartha\nSosa',<?php echo $megustac56 ?>, <?php echo $seguidoresc56 ?>],
        ['PRI\nRosario\nYema',<?php echo $megustac57 ?>, <?php echo $seguidoresc57 ?>],
        ['PT\nNora\nAyala',<?php echo $megustac58 ?>, <?php echo $seguidoresc58 ?>],
        ['PMC\nIveth\nNoriega',<?php echo $megustac59 ?>, <?php echo $seguidoresc59 ?>]
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart12 = new google.visualization.ComboChart(document.getElementById('chart_div12'));
      chart12.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script>   
  <!--GRAFICA DISTRITO XIII-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart13() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nMartha\nSosa',<?php echo $megustac60 ?>, <?php echo $seguidoresc60 ?>],
        ['PT\nCarlos\nVilla',<?php echo $megustac61 ?>, <?php echo $seguidoresc61 ?>]
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart13 = new google.visualization.ComboChart(document.getElementById('chart_div13'));
      chart13.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script>     
  <!--GRAFICA DISTRITO XIV-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart14() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PAN\nLuis\nAyala',<?php echo $megustac62 ?>, <?php echo $seguidoresc62 ?>],
        ['PRI\nLilia\nFigueroa',<?php echo $megustac63 ?>, <?php echo $seguidoresc63 ?>],
        ['VERDE\nMartha\nMeza',<?php echo $megustac64 ?>, <?php echo $seguidoresc64 ?>],
        ['PT\nVerónica\nTorres',<?php echo $megustac65 ?>, <?php echo $seguidoresc65 ?>],
        ['PMC\nGustavo\nRentería',<?php echo $megustac66 ?>, <?php echo $seguidoresc66 ?>],        
        ['PM\nJosefina\nRoblada',<?php echo $megustac67 ?>, <?php echo $seguidoresc67 ?>],
        ['PES\nElías\nNúñez',<?php echo $megustac68 ?>, <?php echo $seguidoresc68 ?>]
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart14 = new google.visualization.ComboChart(document.getElementById('chart_div14'));
      chart14.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script>       
  </script>     
  <!--GRAFICA DISTRITO XIV-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart15() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI-PNA-PV\nFelícitas\nPeña',<?php echo $megustac69 ?>, <?php echo $seguidoresc69 ?>],
        ['PT\nHilda\nMoreno',<?php echo $megustac70 ?>, <?php echo $seguidoresc70 ?>],
        ['PMC\nAlma\nRincón',<?php echo $megustac71 ?>, <?php echo $seguidoresc71 ?>]
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart15 = new google.visualization.ComboChart(document.getElementById('chart_div15'));
      chart15.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
  </script>         
  </script>     
  <!--GRAFICA DISTRITO XIV-->
  <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    // google.setOnLoadCallback(drawChart);

    function drawChart16() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Candidatos');
      data.addColumn('number', 'Likes');
      data.addColumn('number', 'Posts');       
      data.addRows([
        ['PRI-PNA-PV\nSantiago\nChávez',<?php echo $megustac72 ?>, <?php echo $seguidoresc72 ?>],
        ['PT\nJudith\nGodínez',<?php echo $megustac73 ?>, <?php echo $seguidoresc73 ?>],
        ['PMC\nSergio\nMendoza',<?php echo $megustac74 ?>, <?php echo $seguidoresc74 ?>],
        ['PH\nÁngeles\nRodríguez',<?php echo $megustac75 ?>, <?php echo $seguidoresc75 ?>]
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
                      }]);
      var options = {
        //title: '@oca_face',
        hAxis: {
          title: 'Candidatos'
        },         
        //width: 1000,
        height: 600,
        series: {
          0: {
            type: 'bars',
            color: '#33559B'
          },
          1: {
            type: 'bars',
            color: '#6F3697'
          }
        },
        vAxis: {
          maxValue: 100
        }
      };  

      var chart16 = new google.visualization.ComboChart(document.getElementById('chart_div16'));
      chart16.draw(view, options);          
    }
    //Sirve para hacer la grafica responsiva
    var aspect = 1000 / 400,
      chart = $("#chart_div2");
    $(window).on("resize", function() {   
        var targetWidth = chart.width();
        chart.attr("width", targetWidth);
        chart.attr("height", targetWidth / aspect);
        drawChart2();
    });     
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
          url: '<?php echo site_url('facebook/controlador_consultas/DFDistritoI');?>',                                      
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
          url: '<?php echo site_url('facebook/controlador_consultas/DFDistritoI');?>',                                      
          dataType: 'html',
          success: function (html) {
            $('#con2').html(html);
          }
        });
      });
    });
  </script>  


    <!--Funcion para ajustar la grafica al expander el menú-->
  <script type="text/javascript">
    function recarga()
    {
      setTimeout(function(){
        drawChart();
        drawChart2();
      },100)    
      $('#chart_div').width('100%');  
      $('#chart_div2').width('100%');  
    }
  </script>    
</body>     
</html>