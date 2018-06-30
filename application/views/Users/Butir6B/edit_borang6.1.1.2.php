<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/";?>global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/";?>global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/";?>global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/";?>global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/";?>global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?php echo base_url()."assets/";?>global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/";?>global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/";?>global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="<?php echo base_url()."assets/";?>admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url()."assets/";?>global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/";?>global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/";?>admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url()."assets/";?>admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url()."assets/";?>admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content">
	<!-- BEGIN HEADER -->
		<?php 
			$this->load->view('Users/header_Users.php');
		?>

	<!-- BEGIN CONTAINER -->
		<?php 
			$this->load->view('Users/sidebar_Users.php');
		 ?>
	<!-- BEGIN CONTENT -->
		<?php 
			$this->load->view('setting_content.php');
		 ?>
	<!-- END STYLE CUSTOMIZER -->

	<!-- BEGIN PAGE HEADER-->
		<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Butir 6.1.1.2 : PENGGUNAAN DANA
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<!-- <a href="<?php echo base_url()."index.php/CrudFakultas/tambah";?>">
											<button id="sample_editable_1_new" class="btn green">
											Load
											</button>
											</a> -->
										</div>
									</div>
									<!-- <div class="col-md-6">
										<div class="btn-group pull-right">
											<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right">
												<li>
													<a href="javascript:;">
													Print </a>
												</li>
												<li>
													<a href="javascript:;">
													Export to Excel </a>
												</li>
											</ul>
										</div>
									</div> -->
								</div>
							</div>
							
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
								<tr>
									 <th rowspan="2">No.</th>
									 <th rowspan="2">Jenis Penggunaan</th>
									 <th colspan="3">Jumlah Dana (juta rupiah)</th>
									 <th rowspan="2">Jumlah</th>
								 </tr>
								 <tr>
								 	<th>TS-2</th>
								 	<th>TS-1</th>
								 	<th>TS</th>
								 </tr>
							</thead>
							<tbody>
							<!-- <?php 
								$no=1; 
								foreach ($data as $d ) { 
							?> -->
							<!-- <tr class="odd gradeX">
								<td>
									<?php echo $no++; ?>
								</td>
								<td>
									 <?php echo $d['kode_fakultas']; ?>
								</td>
								<td>
									<?php echo $d['nama_fakultas']; ?>
								</td>
								<td class="center">
									<a href="<?php echo base_url()."index.php/CrudFakultas/edit_data/".$d['kode_fakultas'];?>">Edit</a> ||
         							<a href="<?php echo base_url()."index.php/CrudFakultas/do_hapus/".$d['kode_fakultas'];?>">Delete</a>
								</td>
							</tr>
							<?php } ?> -->
								<tr>
								 	<td>1</td>
								 	<td>Pendidikan</td>
								 	<td><input type="text" name="" class="form-control" value="2298266,46"></td>
								 	<td><input type="text" name="" class="form-control" value="2466829,158"></td>
								 	<td><input type="text" name="" class="form-control" value="2920170,734"></td>
								 	<td>7685266.352</td>
								 </tr>
								 <tr>
								 	<td>2</td>
								 	<td>Penelitian</td>
								 	<td><input type="text" name="" class="form-control" value="59800"></td>
								 	<td><input type="text" name="" class="form-control" value="59200"></td>
								 	<td><input type="text" name="" class="form-control" value="65600"></td>
								 	<td>184600</td>
								 </tr>
								 <tr>
								 	<td>3</td>
								 	<td>Pengabdian kepada Masyarakat</td>
								 	<td><input type="text" name="" class="form-control" value="40200"></td>
								 	<td><input type="text" name="" class="form-control" value="41300"></td>
								 	<td><input type="text" name="" class="form-control" value="50600"></td>
								 	<td>132100</td>
								 </tr>
								  <tr>
								 	<td colspan="2">Jumlah Dana Operasional</td>
								 	<td>2398266.46</td>
								 	<td>2567329.158</td>
								 	<td>3036370.734</td>
								 	<td>8001966.352</td>
								 </tr>
								 <tr>
								 	<td>4</td>
								 	<td>Investasi Prasarana</td>
								 	<td><input type="text" name="" class="form-control" value="1969942,68"></td>
								 	<td><input type="text" name="" class="form-control" value="2114424,993"></td>
								 	<td><input type="text" name="" class="form-control" value="2503003,486"></td>
								 	<td>6587371.159</td>
								 </tr>
								 <tr>
								 	<td>5</td>
								 	<td>Investasi Sarana</td>
								 	<td><input type="text" name="" class="form-control" value="1313295,12"></td>
								 	<td><input type="text" name="" class="form-control" value="1409616,662"></td>
								 	<td><input type="text" name="" class="form-control" value="1668668,991"></td>
								 	<td>4391580.773</td>
								 </tr>
								  <tr>
								 	<td>6</td>
								 	<td>Investasi SDM</td>
								 	<td><input type="text" name="" class="form-control" value="656647,56"></td>
								 	<td><input type="text" name="" class="form-control" value="704808,331"></td>
								 	<td><input type="text" name="" class="form-control" value="834334,495"></td>
								 	<td>2195790.386</td>
								 </tr>
								 <tr>
								 	<td colspan="2">Jumlah Dana Investasi</td>
								 	<td>3939885.36</td>
								 	<td>4228849.986</td>
								 	<td>5006006.972</td>
								 	<td>13174742.32</td>
								 </tr>
								 <tr>
								 	<td colspan="2">Jumlah Dana (Operasional + Investasi)</td>
								 	<td>6338151.82</td>
								 	<td>6796179.144</td>
								 	<td>8042377.706</td>
								 	<td>21176708.67</td>
								 </tr>
							</tbody>
							</table>
							<div class="btn-group">
								<a href="#">
									<button id="sample_editable_1_new" class="btn blue">
										Simpan 
									</button>
								</a>
							</div>
							
							<div class="btn-group">
								<a href="<?php echo base_url()."index.php/Apd_b6112_excel/export_excel";?>">
									<button id="sample_editable_1_new" class="btn red">
										Batal
									</button>
								</a>
							</div>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div>
	</div>
	<!-- END CONTAINER -->		
	<!-- BEGIN FOOTER -->
		<?php 
			$this->load->view('footer.php');
		 ?>
	<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo base_url()."assets/";?>global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url()."assets/";?>global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url()."assets/";?>global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="<?php echo base_url()."assets/";?>global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url()."assets/";?>global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>admin/pages/scripts/index.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/";?>admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   Index.init();   
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>