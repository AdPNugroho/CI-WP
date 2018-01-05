<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?=$title?>
				<small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?=base_url()?>">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">
				<?=(isset($title) ? $title : '') ?>
			</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<section class="col-lg-12 connectedSortable">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">1. Criteria Weight Normalization</h3>
					</div>
					<div class="box-body table-bordered no-padding">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Name</th>
									<th>Value Criteria</th>
									<th>Type Criteria</th>
									<th>Normalization</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach($normalization as $value){
										echo "<tr><td>".$value['nama']."</td><td>".$value['bobot']."</td><td>".$value['type']."</td><td>".$value['normalisasi']."</td></tr>";
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</section>
			<section class="col-lg-12 connectedSortable">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">2. Vector V Calculation Result Weighted Product</h3>
					</div>
					<div class="box-body table-bordered no-padding">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Name</th>
									<th>Vector S</th>
									<th>Vector V</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach($preferensi as $value){
										echo "<tr><td>".$value['nama']."</td><td>".$value['vektor_s']."</td><td>".$value['vektor_v']."</td></tr>";
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
