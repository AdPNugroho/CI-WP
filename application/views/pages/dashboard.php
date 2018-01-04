		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					<?=$title?>
					<small>Control panel</small>
				</h1>
				<ol class="breadcrumb">
					<li>
						<a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a>
					</li>
					<li class="active"><?=(isset($title) ? $title : '') ?></li>
				</ol>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-lg-4 col-xs-6">
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3><?=$criteria?></h3>
								<p>Total Criteria</p>
							</div>
							<div class="icon">
								<i class="ion ion-clipboard"></i>
							</div>
							<a href="<?=base_url('criteria')?>" class="small-box-footer">More info
								<i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-xs-6">
						<div class="small-box bg-green">
							<div class="inner">
								<h3><?=$alternative?></h3>
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
					<section class="col-lg-12 connectedSortable">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Weighted Product</h3>
							</div>
							<div class="box-body">
								<p>
									The weighted product model (WPM) is a popular multi-criteria decision analysis (MCDA) / multi-criteria decision making (MCDM) method. 
									It is similar to the weighted sum model (WSM). 
									The main difference is that instead of addition in the main mathematical operation now there is multiplication. 
									As with all MCDA / MCDM methods, given is a finite set of decision alternatives described in terms of a number of decision criteria. 
									Each decision alternative is compared with the others by multiplying a number of ratios, one for each decision criterion. 
								</p>
							</div>
						</div>
					</section>
				</div>
				<div class="row">
					<section class="col-lg-6 connectedSortable">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">List Criteria</h3>
							</div>
							<div class="box-body table-bordered no-padding">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Type Criteria</th>
											<th>Value Criteria</th>
										</tr>
									</thead>
									<tbody>
										<?php
											if($dataCriteria->num_rows()>0){
												foreach($dataCriteria->result() as $row){
													echo "<tr><td>".$row->id_kriteria."</td><td>".$row->nama_kriteria."</td><td>".$row->type_kriteria."</td><td>".$row->nilai_kriteria."</td></tr>";
												}
											}else{
												echo "<tr><td colspan='4'><center>No data available</center></td></tr>";
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</section>
					<section class="col-lg-6 connectedSortable">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">List Alternative</h3>
							</div>
							<div class="box-body table-bordered no-padding">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>ID Alternative</th>
											<th>Name Alternative</th>
										</tr>
									</thead>
									<tbody>
										<?php
											if($dataAlternative->num_rows()>0){
												foreach($dataAlternative->result() as $row){
													echo "<tr><td>".$row->id_alternatif."</td><td>".$row->nama_alternatif."</td></tr>";
												}
											}else{
												echo "<tr><td colspan='2'><center>No data available</center></td></tr>";
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</section>
				</div>
			</section>
		</div>

