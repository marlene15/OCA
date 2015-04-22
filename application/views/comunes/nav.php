    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar nav-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->        
            <ul class="page-sidebar-menu" data-slide-speed="200" data-auto-scroll="true" data-keep-expanded="false">
                <li>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler hidden-phone"></div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </li>
                <br>
                <li class="active start">
                    <a href="<?php echo site_url('inicio');?>">
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
                                    <a href="<?php echo site_url('facebook/controlador_inicio/gobernadores');?>">
                                        <span class="title">Gobernador</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="<?php echo site_url('facebook/controlador_inicio/DFDistritoI');?>">
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
                                    <a href="<?php echo site_url('twitter/controlador_inicio/gobernadores');?>"> 
                                        <span class="title">Gobernador</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li >
                                    <a href="<?php echo site_url('twitter/controlador_inicio/dip_federales');?>"> 
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
                                    <a href="<?php echo site_url('twitter/controlador_inicio/alcaldias');?>"> 
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
                            <a href="<?php echo site_url('twitter/controlador_inicio/candidatos_valoracion');?>">
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
                            <a href="<?php echo site_url('twitter/controlador_inicio/mapa_coordenadas');?>">
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
                <li >
                    <a href="javascript:;">
                        <i class="icon-indent-left"></i> 
                        <span class="title">¿Cómo vamos Colima?</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li >
                    <a href="<?php echo site_url('twitter/controlador_inicio/busqueda_tweets');?>">
                        <i class="icon-eye-open"></i> 
                        <span class="title">Otros</span>
                        <span class="selected"></span>
                    </a>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>