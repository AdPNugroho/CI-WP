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
							<tbody>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Value Criteria</th>
									<th>Type Criteria</th>
									<th>Normalization</th>
								</tr>
								<tr>
									<td>183</td>
									<td>John Doe</td>
									<td>11-7-2014</td>
									<td>11-7-2014</td>
									<td>11-7-2014</td>
								</tr>
								<tr>
									<td>219</td>
									<td>Alexander Pierce</td>
									<td>11-7-2014</td>
									<td>11-7-2014</td>
									<td>11-7-2014</td>
								</tr>
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
							<tbody>
								<tr>
									<th>Name</th>
									<th>Vector S</th>
									<th>Vector V</th>
									<th>Ranking</th>
								</tr>
								<tr>
									<td>183</td>
									<td>John Doe</td>
									<td>11-7-2014</td>
									<td>11-7-2014</td>
								</tr>
								<tr>
									<td>219</td>
									<td>Alexander Pierce</td>
									<td>11-7-2014</td>
									<td>11-7-2014</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section>
		</div>
	</section>
</div>
