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
						<h3 class="box-title">Data Evaluation Alternative</h3>
					</div>
					<div class="box-body table-bordered no-padding">
						<table class="table table-hover">
							<thead id="theadEvaluation"></thead>
							<tbody id="tbodyEvaluation"></tbody>
						</table>
					</div>
				</div>
			</section>
		</div>
	</section>
	<div class="modal fade" id="modal-edit-evaluation">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Edit Evaluation Alternative</h4>
				</div>
				<div class="modal-body">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>ID Alternative</td>
								<td><input type="text" id="idAlternativeTable" class="form-control" readonly></td>
							</tr>
							<tr>
								<td>Alternative Name</td>
								<td><input type="text" id="nameAlternativeTable" class="form-control" readonly></td>
							</tr>
						</tbody>
					</table>
					<form id="formEvaluationEdit">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th style="width: 10px">#</th>
									<th>Criteria Name</th>
									<th>Evaluation</th>
								</tr>
							</thead>
							<tbody id="bodyModalEvaluation"></tbody>
						</table>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" id="save">Update</button>
				</div>
			</div>
		</div>
	</div>
</div>
