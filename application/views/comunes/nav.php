<div class="page-header-fixed">
    <!-- BEGIN HEADER -->   
    <div class="header navbar navbar-inverse navbar-fixed-top">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="navbar-inner">
            <div class="container-fluid">
                <!-- BEGIN LOGO -->
                <a class="brand" href="#">
                    <label>OCA</label>
                </a>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="<?= base_url();?>javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <img src="<?= base_url();?>assets/img/menu-toggler.png" alt="" />
                </a>          
                <!-- END RESPONSIVE MENU TOGGLER -->            
                <!-- BEGIN TOP NAVIGATION MENU -->              
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">      
                            <i class="icon-user"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Pantalla Completa</a></li>
                            <li><a href="#" ><i class="icon-key"></i> Salir</a></li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU --> 
            </div>
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar nav-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->        
            <ul class="page-sidebar-menu">
                <li>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler hidden-phone"></div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </li>
                <br>
                <li class="active start">
                    <a href="#">
                    <i class="icon-home"></i> 
                    <span class="title">Principal</span>
                    <span class="selected"></span>
                    </a>
                </li>
                <li >
                    <a href="javascript:;">
                    <i class="icon-table"></i> 
                    <span class="title">Cargo</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li >
                            <a href="javascript:;">
                            <i class="icon-facebook"></i> 
                            <span class="title">Facebook</span>
                            <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li >
                                    <a href="#"> 
                                    <span class="title">Gobernador</span>
                                    <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="#"> 
                                    <span class="title">Diputado Federal</span>
                                    <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="#"> 
                                    <span class="title">Diputado Local</span>
                                    <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="#"> 
                                    <span class="title">Alcaldía</span>
                                    <span class="selected"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <a href="javascript:;">
                            <i class="icon-twitter"></i> 
                            <span class="title">Twitter</span>
                            <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li >
                                    <a href="#"> 
                                    <span class="title">Gobernador</span>
                                    <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="#"> 
                                    <span class="title">Diputado Federal</span>
                                    <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="#"> 
                                    <span class="title">Diputado Local</span>
                                    <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="#"> 
                                    <span class="title">Alcaldía</span>
                                    <span class="selected"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href="javascript:;">
                    <i class="icon-user"></i> 
                    <span class="title">Candidato</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?php echo site_url('facebook/controlador_inicio');?>">
                            <i class="icon-facebook"></i> 
                            <span class="title">Facebook</span>
                            <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('twitter/controlador_inicio/prueba');?>">
                            <i class="icon-twitter"></i> 
                            <span class="title">Twitter</span>
                            <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href="javascript:;">
                    <i class="icon-map-marker"></i> 
                    <span class="title">Entidad</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                            <i class="icon-facebook"></i> 
                            <span class="title">Facebook</span>
                            <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="icon-twitter"></i> 
                            <span class="title">Twitter</span>
                            <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href="javascript:;">
                    <i class="icon-flag"></i> 
                    <span class="title">Partido</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                            <i class="icon-facebook"></i> 
                            <span class="title">Facebook</span>
                            <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="icon-twitter"></i> 
                            <span class="title">Twitter</span>
                            <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
</div>