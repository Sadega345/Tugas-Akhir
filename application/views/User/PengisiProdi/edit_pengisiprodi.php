<!DOCTYPE html>
<title>PROGRAM STUDI</title>
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
			$this->load->view('User/header_user.php');
		?>

	<!-- BEGIN CONTAINER -->
		<?php 
			$this->load->view('User/sidebar_user.php');
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
								<i class="fa fa-edit"></i>Edit PROGRAM STUDI
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
							<div style="overflow-x:auto;">
							<form action="<?php echo base_url()."index.php/Prodi_excel/do_edit"; ?>" method="POST">
							<table id="sample_1">
							<thead>
								<tr>
									<th></th>
									<th></th>
									<th></th>
									<!-- <th>Kode sesuai kode PPDT</th> -->
									<!-- <th>Keterangan</th> -->
									
								</tr>
								<tr>
									<th>1.</th>
									<th>Program Studi</th>
									<th>
										<input type="text" name="PRODI" value="<?php echo $PRODI ?>" > 
										Kode sesuai kode PPDT <input type="text" name="KODE_PRODI"  value="<?php echo $KODE_PRODI; ?>" readonly="">
									</th>

								 </tr>
								 <tr>
								 	<th>2.</th>
									<th>Jurusan/Departemen</th>
									<th><input type="text" name="jurusan" value="<?php echo $jurusan ?>"></th>
								 </tr>
								 <tr>
								 	<th>3.</th>
									<th>Fakultas</th>
									<th><input type="text" name="NAMA_FAKULTAS" value="<?php echo $NAMA_FAKULTAS; ?>"></th>
								 </tr>
								 <tr>
								 	<th>4.</th>
									<th>Perguruan Tinggi</th>
									<th>
										<input type="text" name="NAMA_PT" value="<?php echo $NAMA_PT; ?>">
										Kode sesuai kode PPDT<input type="text" name="kode_pt" readonly="" value="<?php echo $kode_pt; ?>" >
									</th>
									
								 </tr>
								  <tr>
								  	 <th>5.</th>
									 <th>SK Pendirian PS</th>
								 </tr>
								 <tr>
								 	<th></th>
									<th>Nomor SK</th>
									<th><input type="text" name="NO_SK_PS" value="<?php echo $NO_SK_PS; ?>"></th>
								 </tr>
								 <tr>
								 	<th></th>
									<th>Tanggal SK</th>
									<th><input type="text" name="TGL_SK_PS" value="<?php echo $TGL_SK_PS; ?>"></th>
								 </tr>
								 <tr>
								 	<th></th>
									<th>Pejabat penandatangan</th>
									<th><input type="text" name="PJBT_TTD" value="<?php echo $PJBT_TTD; ?>"></th>
								 </tr>
								 <tr>
								 	<th>6.</th>
									<th>Bulan dan tahun dimulainya <br>penyelenggaraan PS</th>
									<th>
										<input type="text" name="BLN_MULAI_PS" value="<?php echo $BLN_MULAI_PS; ?>">
										<input type="text" name="THN_MULAI_PS" value="<?php echo $THN_MULAI_PS; ?>">

										<!-- <select>
											<option>Januari</option>
											<option>Februari</option>
											<option>Maret</option>
											<option>April</option>
											<option>Mei</option>
											<option>Juni</option>
											<option>Juli</option>
											<option>Agustus</option>
										</select> -->
									</th>
								 </tr>
								 <tr>
								 	<th>7.</th>
									<th>SK Ijin operasional</th>
								 </tr>
								 <tr>
								 	<th></th>
									<th>Nomor SK</th>
									<th><input type="text" name="NO_SK_OPR" value="<?php echo $NO_SK_OPR; ?>"></th>
								 </tr>
								 <tr>
								 	<th></th>
									<th>Tanggal SK</th>
									<th><input type="text" name="TGL_SK_OPR" value="<?php echo $TGL_SK_OPR; ?>"></th>
								 </tr>
								 <tr>
								 	<th>8.</th>
									<th>Akreditasi terakhir BAN-PT</th>
								 </tr>
								 <tr>
								 	<th></th>
									<th>Peringkat</th>
									<th><input type="text" name="PERINGKAT" value="<?php echo $PERINGKAT; ?>"></th>
								 </tr>
								 <tr>
								 	<th></th>
									<th>Nilai</th>
									<th><input type="text" name="NILAI" value="<?php echo $NILAI; ?>"></th>
								 </tr>
								 <tr>
								 	<th></th>
									<th>Nomor SK BAN-PT</th>
									<th><input type="text" name="NO_SK_BAN_PT" value="<?php echo $NO_SK_BAN_PT; ?>"></th>
								 </tr>
								 <tr>
								 	<th>9.</th>
									<th>Alamat PS</th>
									<th><textarea rows="4" cols="20" name="ALAMAT_PS"><?php echo $ALAMAT_PS; ?></textarea></th>
								 </tr>
								 <tr>
								 	<th>10.</th>
									<th>No telepon PS</th>
									<th><input type="text" name="NO_TELP_PS" value="<?php echo $NO_TELP_PS; ?>"></th>
								 </tr>
								 <tr>
								 	<th>11.</th>
									<th>Nomor Faksimili PS</th>
									<th><input type="text" name="NO_FAX_PS" value="<?php echo $NO_FAX_PS; ?>"></th>
								 </tr>
								 <tr>
								 	<th>12.</th>
									<th>Homepage PS</th>
									<th><input type="text" name="HOMEPAGE_PS" value="<?php echo $HOMEPAGE_PS; ?>"></th>
								 </tr>
								 <tr>
								 	<th>13.</th>
									<th>Email PS</th>
									<th><input type="text" name="EMAIL_PS" value="<?php echo $EMAIL_PS; ?>"></th>
								 </tr>
							</thead>
							</table>
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							</div>
							<div class="btn-group">
								<button id="sample_editable_1_new" class="btn blue">
									Simpan 
								</button>
								
							</div>
							</form>
							<div class="btn-group">
								<a href="<?php echo base_url()."index.php/Prodi_excel/";?>">
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