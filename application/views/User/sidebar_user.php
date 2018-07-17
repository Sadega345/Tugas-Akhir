BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu page-sidebar-menu-light" data-keep-expanded="true" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
				<a href="javascript"></a>
				<center><img src="<?php echo base_url()."assets/";?>admin/layout/img/universitas nasional pasim.png" alt="logo" width="80" height="80"/></center>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<!-- <li class="sidebar-search-wrapper"> -->
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<!-- <form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form> -->
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				<!-- </li> -->
				<!-- <li>
					<i class=""></i>
				</li> -->
				<li class="start active open">
					<a href="javascript:;">
					<a href="<?php echo base_url(); ?>index.php/User">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
					<!-- <span class="selected"></span> -->
					<!-- <span class="arrow "></span> -->
					<!-- <span class="arrow open"></span> -->
					</a>
					<!-- <ul class="sub-menu">
						<li class="active">
							<a href="<?php echo base_url(); ?>index.php/Web">
							<i class="icon-bulb"></i>
							Halaman Utama</a>
						</li>
					</ul> -->
				</li>

				
				<li >
					<a href="javascript:;">
						<a href="<?php echo base_url(); ?>index.php/Pengisi_excel">
							<i class="icon-briefcase"></i>
						<span class="title">Pengisian data borang</span>
					</a>
				</li>

				<li >
					<a href="javascript:;">
						<a href="<?php echo base_url(); ?>index.php/Prodi_excel">
						<i class="icon-briefcase"></i>
						<span class="title">Identitas program studi</span>
					</a>
				</li>
				

				<li >
					<a href="javascript:;">
					<a href="<?php echo base_url(); ?>index.php/Data_dosen_excel">
						<i class="icon-briefcase"></i>
						<span class="title">Data Dosen</span>
					</a>
				</li>
				<!-- BEGIN ANGULARJS LINK -->
			
				<!-- END ANGULARJS LINK -->
				<li>
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Standar 3</span>
					<span class="arrow "></span>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a311_excel">
						Butir A 3.1.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a313_excel">
						Butir A 3.1.3 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a341_excel">
						Butir A 3.4.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a345_excel">
						Butir A 3.4.5 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_b312_excel">
						Butir B 3.1.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_b321_excel">
						Butir B 3.2.1 </a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Standar 4</span>
					<span class="arrow "></span>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a431_excel">
						Butir A 4.3.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a432_excel">
						Butir A 4.3.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a433_excel">
						Butir A 4.3.3 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a434_excel">
						Butir A 4.3.4 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a435_excel">
						Butir A 4.3.5 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a441_excel">
						Butir A 4.4.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a442_excel">
						Butir A 4.4.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a451_excel">
						Butir A 4.5.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a452_excel">
						Butir A 4.5.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a453_excel">
						Butir A 4.5.3 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a455_excel">
						Butir A 4.5.5 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a461_excel">
						Butir A 4.6.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_b411_excel">
						Butir B 4.1.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_b412_excel">
						Butir B 4.1.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_b42_excel">
						Butir B 4.2 </a>
						</li>
					</ul>
				</li>
						
				<li>
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Standar 5</span>
					<span class="arrow "></span>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a5121_excel">
						Butir A 5.1.2.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a522_excel">
						Butir A 5.2.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a541_excel">
						Butir A 5.4.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a552_excel">
						Butir A 5.5.2 </a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Standar 6</span>
					<span class="arrow "></span>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a6211_excel">
						Butir A 6.2.1.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a6212_excel">
						Butir A 6.2.1.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a622_excel">
						Butir A 6.2.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a623_excel">
						Butir A 6.2.3 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a631_excel">
						Butir A 6.3.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a641_excel">
						Butir A 6.4.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a652_excel">
						Butir A 6.5.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_b6111_excel">
						Butir B 6.1.1.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_b6112_excel">
						Butir B 6.1.1.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_b6113_excel">
						Butir B 6.1.1.3 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_b642_excel">
						Butir B 6.4.2 </a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Standar 7</span>
					<span class="arrow "></span>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a711_excel">
						Butir A 7.1.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a712_excel">
						Butir A 7.1.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a721_excel">
						Butir A 7.2.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_b711_excel">
						Butir B 7.1.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_b721_excel">
						Butir B 7.2.1</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">Pengaturan User</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>/index.php/EdeUser">
							<span class="badge badge-roundless badge-danger"></span>Ganti Password<br>
							</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<a href="<?php echo base_url(); ?>index.php/Data_dosen_excel">
						<i class="icon-briefcase"></i>
						<span class="title">Export Excel</span>
					</a>
				</li>
			</ul>
		</li>
		
				
			
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR