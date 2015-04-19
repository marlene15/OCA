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
                <li>
                    <a href="#">
                    <i class="icon-home"></i> 
                    <span class="title">Principal</span>
                    <span class="selected"></span>
                    </a>
                </li>
                <li >
                    <a href="#">
                    <i class="icon-cogs"></i> 
                    <span class="title">Ventas</span>
                    </a>
                <li >
                    <a href="#">
                    <i class="icon-bookmark-empty"></i> 
                    <span class="title">Compras</span>
                    </a>
                </li>
                <li >
                    <a href="javascript:;">
                    <i class="icon-table"></i> 
                    <span class="title">Almacen</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li >
                            <a href="#">
                            Proveedor</a>
                        </li>
                        <li >
                            <a href="#">
                            Categoria</a>
                        </li>
                        <li >
                            <a href="#">
                            Unidad</a>
                        </li>
                        <li >
                            <a href="#">
                            Producto</a>
                        </li>
                    </ul>
                </li>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
</div>