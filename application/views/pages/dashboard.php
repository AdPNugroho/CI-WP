<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>WP Methods SPK - CodeIgniter</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue-light sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="index2.html" class="logo">
				<span class="logo-mini"><b>WP</b></span>
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
                                        Adi Prasetyo Nugroho<br>
                                        Web Developer
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
                    
                    <li>
                        <a href="<?=base_url('dashboard')?>">
                            <i class="fa fa-bank"></i>
                            <span>Dashboard System</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('kriteria')?>">
                            <i class="fa fa-balance-scale"></i>
                            <span>Data Criteria</span>
                            <span class="pull-right-container">
								<span class="label label-primary pull-right">4</span>
							</span>
                        </a>
                    </li>
					<li>
                        <a href="<?=base_url('alternatif')?>">
                            <i class="fa fa-user"></i>
                            <span>Data Alternative</span>
							<span class="pull-right-container">
								<span class="label label-primary pull-right">4</span>
							</span>
                        </a>
                    </li>
					<li>
                        <a href="<?=base_url('evaluasi')?>">
                            <i class="fa fa-server"></i>
                            <span>Data Evaluation</span>
                        </a>
                    </li>
                    <li class="header">Report</li>
					<li>
						<a href="<?=base_url('report')?>"><i class="fa fa-book"></i><span>Weighted Product Result</span></a>
                    </li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Dashboard
					<small>Control panel</small>
				</h1>
				<ol class="breadcrumb">
					<li>
						<a href="#">
							<i class="fa fa-dashboard"></i> Home</a>
					</li>
					<li class="active">Dashboard</li>
				</ol>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3>150</h3>
								<p>Total Criteria</p>
							</div>
							<div class="icon">
								<i class="ion ion-clipboard"></i>
							</div>
							<a href="<?=base_url('kriteria')?>" class="small-box-footer">More info
								<i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-green">
							<div class="inner">
								<h3>53
									<sup style="font-size: 20px">%</sup>
								</h3>

								<p>Total Alternative</p>
							</div>
							<div class="icon">
								<i class="ion ion-person"></i>
							</div>
							<a href="<?=base_url('alternative')?>" class="small-box-footer">More info
								<i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3>44</h3>
								<p>WP Ranking</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="<?=base_url('report')?>" class="small-box-footer">More info
								<i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<section class="col-lg-7 connectedSortable">
						
					</section>
					<section class="col-lg-5 connectedSortable">

					</section>
				</div>
			</section>
        </div>
        
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.0.0
			</div>
			<strong>Copyright &copy; 2014-2018
				<a href="https://portdevapn.cf">PortDevAPN</a>.</strong> All rights reserved.
		</footer>
	</div>
	<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
