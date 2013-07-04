<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php print $header.' | '.$this->preference->item('site_name');?></title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- PageGuide -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/pageguide/pageguide.css">
	<!-- Fullcalendar -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themes.css">

    
	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>assets/js/jjquery.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url(); ?>assets/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/jquery-ui/jquery.ui.draggable.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<!-- Touch enable for jquery UI -->
	<script src="<?php echo base_url(); ?>assets/js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
	<!-- slimScroll -->
	<script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<!-- vmap -->
	<script src="<?php echo base_url(); ?>assets/js/plugins/vmap/jquery.vmap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/vmap/jquery.vmap.world.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/vmap/jquery.vmap.sampledata.js"></script>
	<!-- Bootbox -->
	<script src="<?php echo base_url(); ?>assets/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Flot -->
	<script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.bar.order.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.resize.min.js"></script>
	<!-- imagesLoaded -->
	<script src="<?php echo base_url(); ?>assets/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- PageGuide -->
	<script src="<?php echo base_url(); ?>assets/js/plugins/pageguide/jquery.pageguide.js"></script>
	<!-- FullCalendar -->
	<script src="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>

	<!-- Theme framework -->
	<script src="<?php echo base_url(); ?>assets/js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="<?php echo base_url(); ?>assets/js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="<?php echo base_url(); ?>assets/js/demonstration.min.js"></script>
<body>
<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" class='retina-ready' width="120" height="100"></a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
			<ul class='main-nav'>
				<li>
					<?php print anchor('admin',$this->lang->line('backendpro_dashboard'),array('class'=>'nav-top-item no-submenu'))?>   
				</li>
																	
				   <?php if(check('System',NULL,FALSE)):?>
						<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<i class="icon-th"></i>
						<span>Admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<?php if(check('Members',NULL,FALSE)):?><li><?php print anchor('auth/admin/members',$this->lang->line('backendpro_members'))?></li><?php endif;?>
						<?php if(check('Access Control',NULL,FALSE)):?><li><?php print anchor('auth/admin/access_control',$this->lang->line('backendpro_access_control'))?></li><?php endif;?>
                       <?php if(check('Settings',NULL,FALSE)):?><li><?php print anchor('admin/settings',$this->lang->line('backendpro_settings'))?></li><?php endif;?>
					</ul>
				</li>
				<?php endif;?>
			</ul>
			<div class="user">
				<div class="dropdown">
					<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="icon-user"></i> <?php echo "<b>".$this->session->userdata('username')."</b>"; ?> <span class="caret"></span></a>
					<ul class="dropdown-menu pull-right">
						<li>
							<?php print anchor('auth/logout',$this->lang->line('userlib_logout'))?>
						</li>
					</ul>
				</div>
			</div>
			<a href="#" class='toggle-mobile'><i class="icon-reorder"></i></a>
		</div>
</div>
<div class="container-fluid" id="content">
		<div id="left">
			<form action="#" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit"><i class="icon-search"></i></button>
				</div>
			</form>
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Content</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="#">Link1</a>
					</li>
					<li>
						<a href="#">Link2</a>
					</li>
					<li>
						<a href="#">Link3</a>
					</li>
					<li>
						<a href="#">Link4</a>
					</li>
				</ul>
				
			</div>
						
		</div>
