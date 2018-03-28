
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
					<a href="<?php echo base_url(); ?>index.php/Users">
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
						<a href="<?php echo base_url(); ?>index.php/Pengisis_excel">
							<i class="icon-briefcase"></i>
						<span class="title">Pengisian data borang</span>
					</a>
				</li>

				<li >
					<a href="javascript:;">
						<a href="<?php echo base_url(); ?>index.php/Prodis_excel">
						<i class="icon-briefcase"></i>
						<span class="title">Identitas program studi</span>
					</a>
				</li>
				

				<li >
					<a href="javascript:;">
					<a href="<?php echo base_url(); ?>index.php/Data_dosens_excel">
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
							<a href="<?php echo base_url(); ?>index.php/Aps_a311_excel">
						Butir 3.1.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a312_excel">
						Butir 3.1.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a314_excel">
						Butir 3.1.4 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a331_excel">
						Butir 3.3.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_b312_excel">
						Butir 3.1.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_b321_excel">
						Butir 3.2.1 </a>
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
							<a href="<?php echo base_url(); ?>index.php/Aps_a431_excel">
						Butir 4.3.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a432_excel">
						Butir 4.3.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a433_excel">
						Butir 4.3.3 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a434_excel">
						Butir 4.3.4 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a435_excel">
						Butir 4.3.5 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a441_excel">
						Butir 4.4.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a442_excel">
						Butir 4.4.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a451_excel">
						Butir 4.5.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a452_excel">
						Butir 4.5.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_a453_excel">
						Butir 4.5.3 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a454_excel">
						Butir 4.5.4 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a455_excel">
						Butir 4.5.5 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a461_excel">
						Butir 4.6.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_b411_excel">
						Butir 4.1.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_b412_excel">
						Butir 4.1.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_b42_excel">
						Butir 4,2 </a>
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
							<a href="<?php echo base_url(); ?>index.php/Aps_a5121_excel">
						Butir 5.1.2.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a5122_excel">
						Butir 5.1.2.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a513_excel">
						Butir 5.1.3 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a541_excel">
						Butir 5.4.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a551_excel">
						Butir 5.5.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a552_excel">
						Butir 5.5.2 </a>
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
							<a href="<?php echo base_url(); ?>index.php/Aps_a6211_excel">
						Butir 6.2.1.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a6212_excel">
						Butir 6.2.1.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a622_excel">
						Butir 6.2.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a623_excel">
						Butir 6.2.3 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a631_excel">
						Butir 6.3.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a6411_excel">
						Butir 6.4.1.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a6412_excel">
						Butir 6.4.1.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a652_excel">
						Butir 6.5.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_b6111_excel">
						Butir 6.1.1.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_b6112_excel">
						Butir 6.1.1.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_b6113_excel">
						Butir 6.1.1.3 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Apd_b642_excel">
						Butir 6.4.2 </a>
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
							<a href="<?php echo base_url(); ?>index.php/Aps_a711_excel">
						Butir 7.1.1 &  Butir 7.1.2 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a713_excel">
						Butir 7.1.3 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a714_excel">
						Butir 7.1.4 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_a721_excel">
						Butir 7.2.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_b711_excel">
						Butir 7.1.1 </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/Aps_b721_excel">
						Butir 7.2.1</a>
						</li>
					</ul>
				</li>
			</ul>
		</li>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR