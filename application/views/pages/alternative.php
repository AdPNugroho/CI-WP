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
						<h3 class="box-title">List Alternative</h3>
						<div class="pull-right box-tools">
							<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-alternative">
								<i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp; Add Alternative</button>
						</div>
					</div>
					<div class="box-body table-bordered no-padding">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>183</td>
									<td>John Doe</td>
								</tr>
								<tr>
									<td>219</td>
									<td>Alexander Pierce</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section>
		</div>
	</section>
	
	<div class="modal fade" id="modal-add-alternative">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Add Alternative</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" id="addAlternative">
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-3 control-label">Alternative Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Alternative Name for Decision Making" name="alternative_name"> 
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-edit-alternative">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Edit Alternative</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" id="editAlternative">
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-3 control-label">ID Alternative</label>
								<div class="col-sm-9">
									<input type="text" id="idAlternative" class="form-control" readonly name="id_alternative">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Alternative Name</label>
								<div class="col-sm-9">
									<input type="text" id="alternativeName" class="form-control" placeholder="Alternative Name for Decision Making" name="alternative_name">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Update</button>
				</div>
			</div>
		</div>
	</div>
</div>
