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
						<h3 class="box-title">List Criteria</h3>
						<div class="pull-right box-tools">
							<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-criteria" id="add"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp; Add Criteria</button>
						</div>
					</div>
					<div class="box-body table-bordered no-padding">
						<table class="table table-hover">
							<thead>
								<tr>
									<th style="width:10px">ID</th>
									<th>Name</th>
									<th>Type Criteria</th>
									<th>Score Criteria</th>
									<th style="width:100px">Action</th>
								</tr>
							</thead>
							<tbody id="tbodyCriteria"></tbody>
						</table>
					</div>
				</div>
			</section>
		</div>
	</section>
	<div class="modal fade" id="modal-add-criteria">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Add Criteria</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" id="addCriteria">
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-3 control-label">Criteria Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Criteria Name for Decision Making" name="nama_kriteria">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Type Criteria</label>
								<div class="col-sm-9">
									<select class="form-control" name="type_kriteria">
										<option value="benefit">Benefit</option>
										<option value="cost">Cost</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Weight Criteria</label>
								<div class="col-sm-9">
									<select class="form-control" name="nilai_kriteria">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" id="save">Save</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-edit-criteria">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Edit Criteria</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" id="editCriteria">
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-3 control-label">ID Criteria</label>
								<div class="col-sm-9">
									<input type="text" id="criteriaID" class="form-control" readonly name="id_kriteria">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Criteria Name</label>
								<div class="col-sm-9">
									<input type="text" id="criteriaName" class="form-control" placeholder="Criteria Name for Decision Making" name="nama_kriteria">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Type Criteria</label>
								<div class="col-sm-9">
									<select class="form-control" id="typeCriteria" name="type_kriteria">
										<option value="benefit">Benefit</option>
										<option value="cost">Cost</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Weight Criteria</label>
								<div class="col-sm-9">
									<select class="form-control" id="weightCriteria" name="nilai_kriteria">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" id="saveUpdate">Update</button>
				</div>
			</div>
		</div>
	</div>
</div>
