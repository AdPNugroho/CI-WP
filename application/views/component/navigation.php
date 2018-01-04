<body class="hold-transition skin-blue-light sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="index2.html" class="logo">
				<span class="logo-mini">
					<b>WP</b>
				</span>
				<span class="logo-lg">
					<b>WP</b>Admin</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="assets/dist/img/user2-160x160.png" class="user-image" alt="User Image">
								<span class="hidden-xs">Adi Prasetyo Nugroho</span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
									<p>
										Adi Prasetyo Nugroho
										<br> Web Developer
										<small>Since 2014</small>
									</p>
								</li>
								<!-- Menu Body -->
								<li class="user-body">
									<div class="row">
										<div class="col-xs-6 text-center">
											<a href="https://facebook.com/Cursed.Script/">Facebook</a>
										</div>
										<div class="col-xs-6 text-center">
											<a href="https://portdevapn.cf/">Sites</a>
										</div>
									</div>
								</li>
								<li class="user-footer">
									<div class="pull-left">
										<a href="https://portdevapn.cf/" class="btn btn-default btn-flat">Profile</a>
									</div>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" data-toggle="control-sidebar">
								<i class="fa fa-gears"></i>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="assets/dist/img/user2-160x160.png" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>Admin Panel DSS</p>
					</div>
				</div>
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">Main Navigation</li>
					<li <?= ($pages=='dashboard'  ? "class='active'" : '' ) ?></li>
						<a href="<?=base_url('dashboard')?>">
							<i class="fa fa-bank"></i>
							<span>Dashboard System</span>
						</a>
					</li>
					<li <?= ($pages=='criteria'  ? "class='active'" : '' ) ?></li>	
						<a href="<?=base_url('criteria')?>">
							<i class="fa fa-balance-scale"></i>
							<span>Data Criteria</span>
							<span class="pull-right-container">
								<span class="label label-primary pull-right"><?=$criteria?></span>
							</span>
						</a>
					</li>
					<li <?= ($pages=='alternative'  ? "class='active'" : '' ) ?></li>
						<a href="<?=base_url('alternative')?>">
							<i class="fa fa-user"></i>
							<span>Data Alternative</span>
							<span class="pull-right-container">
								<span class="label label-primary pull-right"><?=$alternative?></span>
							</span>
						</a>
					</li>
					<li <?= ($pages=='evaluation'  ? "class='active'" : '' ) ?></li>
						<a href="<?=base_url('evaluation')?>">
							<i class="fa fa-server"></i>
							<span>Data Evaluation</span>
						</a>
					</li>
					<li class="header">Report</li>
					<li>
						<a href="<?=base_url('report')?>">
							<i class="fa fa-book"></i>
							<span>Weighted Product Result</span>
						</a>
					</li>
				</ul>
			</section>
		</aside>