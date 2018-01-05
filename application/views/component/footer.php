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
	<script src="assets/plugins/jqueryToast/jquery.toast.min.js"></script>
	<?php
		switch ($pages) {
			case 'alternative':
				echo '<script src="assets/js/pages/alternative.js"></script>';
				break;
			case 'criteria':
				echo '<script src="assets/js/pages/criteria.js"></script>';
				break;
			case 'evaluation':
				echo '<script src="assets/js/pages/evaluation.js"></script>';
				break;
		}
	?>
</body>
</html>
