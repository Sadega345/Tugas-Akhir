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
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>index.php/Web">
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
				<!-- BEGIN ANGULARJS LINK -->
			
				<!-- END ANGULARJS LINK -->
				<li>
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Borang 3A</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<span class="title">Butir 3</span>
							<span class="arrow "></span>
							<ul class="sub-menu">
								<li>
									<a href="<?php echo base_url(); ?>index.php/User/table_prodi">
								Butir 3.1.1 </a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/User/table_prodi">
								Butir 3.1.3 </a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/User/table_prodi">
								Butir 3.4.1 </a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/User/table_prodi">
								Butir 3.4.5 </a>
								</li>
							</ul>
							
						</li>

						<li>
							<a href="javascript:;">
							<span class="title">Butir 4</span>
							<span class="arrow "></span>
							<ul class="sub-menu">
								<li>
									<a href="<?php echo base_url(); ?>index.php/User/table_prodi">
								Butir 4.1.1 </a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/User/table_prodi">
								Butir 4.1.3 </a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/User/table_prodi">
								Butir 4.4.1 </a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/User/table_prodi">
								Butir 4.4.5 </a>
								</li>
							</ul>
							
						</li>
						
						<li>
							<a href="<?php echo base_url(); ?>index.php/User/table_instrumen">
							Instrumen </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/User/table_user">
							User </a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Borang 3B</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>index.php/User/table">
							Fakultas</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/User/table_prodi">
							Program Studi </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/User/table_instrumen">
							Instrumen </a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/User/table_user">
							User </a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR