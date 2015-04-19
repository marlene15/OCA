	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="<?= base_url();?>assets/plantilla/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/plantilla/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?= base_url();?>assets/plantilla/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/plantilla/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?= base_url();?>assets/plantilla/scripts/app.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/plantilla/scripts/index.js" type="text/javascript"></script>
	<script src="<?= base_url();?>assets/plantilla/scripts/tasks.js" type="text/javascript"></script>        
	<!-- END PAGE LEVEL SCRIPTS -->  
	<script>
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins
		   Index.init();
		   Index.initJQVMAP(); // init index page's custom scripts
		   Index.initCalendar(); // init index page's custom scripts
		   Index.initCharts(); // init index page's custom scripts
		   Index.initChat();
		   Index.initMiniCharts();
		   Index.initDashboardDaterange();
		   Index.initIntro();
		   Tasks.initDashboardWidget();
		});
	</script>
	<!-- END JAVASCRIPTS -->