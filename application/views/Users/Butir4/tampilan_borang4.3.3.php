<!DOCTYPE html>
<title>Butir 4.3.3 : AKTIVITAS DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS</title>
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
								<i class="fa fa-edit"></i>Butir 4.3.3 : AKTIVITAS DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS
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
											<a href="<?php echo base_url()."index.php/Aps_a433_excel/tambah";?>">
											<button id="sample_editable_1_new" class="btn green">
											Tambah <i class="fa fa-plus"></i>
											</button>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div style="overflow-x:auto;">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
								<tr>
									 <th rowspan="2"><center>No</center></th>
									 <th rowspan="2"><center>Nama Dosen Tetap</center></th>
									 <th colspan="3"><center>SKS Pengajaran pada</center></th>
									 <th rowspan="2"><center>SKS Penelitian</center></th>
									 <th rowspan="2"><center>SKS Pengabdian Masyarakat</center></th>
									 <th colspan="2"><center>SKS Manajemen</center></th>
									 <th rowspan="2"><center>Jumlah SKS</center></th>
									 <th rowspan="2"><center>Aksi</center></th>
								 </tr>
								 <tr>
								 	<th><center>PS Sendiri</center></th>
								 	<th><center>PS Lain, PT Sendiri</center></th>
								 	<th><center>PT Lain</center></th>
								 	<th><center>PS Sendiri</center></th>
								 	<th><center>PT Lain</center></th>
								 </tr>
							</thead>
							<tbody>
							<?php 
								$no=1; 
								foreach ($data as $d ) { 
							?>
							<tr>
							 	<td><?php echo $no++; ?></td>
							 	<td><?php echo $d['NAMA_DOSEN']; ?></td>
							 	<td><?php echo $d['SKS_PSS']; ?></td>
							 	<td><?php echo $d['SKS_PSL_PTS']; ?></td>
							 	<td><?php echo $d['SKS_PTL']; ?></td>
							 	<td><?php echo $d['SKS_PENELITIAN']; ?></td>
							 	<td><?php echo $d['SKS_PP_MAS']; ?></td>
							 	<td><?php echo $d['SKS_MAN_PTS']; ?></td>
							 	<td><?php echo $d['SKS_MAN_PTL']; ?></td>
							 	<td><?php echo $d['total']; ?></td>
							 	<td class="center">
									<a href="<?php echo base_url()."index.php/Aps_a433_excel/ubah/".$d['id'];?>" >Edit</a>
									||
								 	<a href="<?php echo base_url()."index.php/Aps_a433_excel/do_hapus/".$d['id'];?>" id="alerthapus"">Hapus</a>
								</td>
							 </tr>
							 <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							 <?php } ?>

							 
							 <tr>
							 	<td colspan="2"><strong>Jumlah</strong></td>
							 	<?php 
									foreach ($jumlah_pssendiri as $h ) { 
							  	?>
							 	<td><?php echo $h['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($pt as $p ) { 
							  	?>
							 	<td><?php echo $p['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($lain as $l ) { 
							  	?>
							 	<td><?php echo $l['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($penelitian as $p ) { 
							  	?>
							 	<td><?php echo $p['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($pengabdian as $p ) { 
							  	?>
							 	<td><?php echo $p['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($jumsks as $j ) { 
							  	?>
							 	<td><?php echo $j['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($manptlain as $man ) { 
							  	?>
							 	<td><?php echo $man['jml']; ?></td>
							 	<?php } ?>
							 	<?php 
									foreach ($totsks as $tot ) { 
							  	?>
							 	<td><?php echo $tot['jml']; ?></td>
							 	<?php } ?>
							 </tr>
							 
							  <tr>
							 	<td colspan="2"><strong>Rata-rata</strong></td>
							 	<?php 
									foreach ($rata as $r ) { 
							  	?>
							 	<td><?php echo number_format((double)$r['rata'],2,',',','); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($prlain as $pr ) { 
							  	?>
							 	<td><?php echo number_format((double)$pr['rata'],2,',',','); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($ptlain as $pt ) { 
							  	?>
							 	<td><?php echo number_format((double)$pt['rata'],2,',',','); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($ratapenelitian as $rp ) { 
							  	?>
							 	<td><?php echo number_format((double)$rp['rata'],2,',',','); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($pengmas as $peng ) { 
							  	?>
							 	<td><?php echo number_format((double)$peng['rata'],2,',',','); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($rataman as $m ) { 
							  	?>
							 	<td><?php echo number_format((double)$m['rata'],2,',',','); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($manlain as $ml ) { 
							  	?>
							 	<td><?php echo number_format((double)$ml['rata'],2,',',','); ?></td>
							 	<?php } ?>

							 	<?php 
									foreach ($ratajumsks as $ratasks ) { 
							  	?>
							 	<td><?php echo number_format((double)$ratasks['rata'],2,',',','); ?></td>
							 	<?php } ?>
							 	
			 				</tr>
							</tbody>
							
							</table>
							</div>
							<!-- <div class="btn-group">
								<a href="<?php echo base_url()."index.php/Apd_a433_excel/ubah";?>">
									<button id="sample_editable_1_new" class="btn green">
										Ubah 
									</button>
								</a>
							</div>	 -->						
							<div class="btn-group">
								<a href="<?php echo base_url()."index.php/Aps_a433_excel/export_excel";?>">
									<button id="sample_editable_1_new" class="btn blue">
										Export To Excel
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