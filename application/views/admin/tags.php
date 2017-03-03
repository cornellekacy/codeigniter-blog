<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tags</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/default.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/tags.css"); ?>" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<div class="container-fluid display-table">
		<div class="row display-table-row">
<?php 
include 'include/sidebar.php';
 ?>

	        <!-- main content area -->
	        <div class="col-md-10 col-sm-11 display-table-cell valign-top">
          <?php 
include 'include/header.php';
 ?>

	          <div class="row">
	          	<div class="col-md-4 dashboard-left-cell">
	          		<div class="admin-content-con">
	          			<header>
	          				<h5>Create tags</h5>
	          			</header>

	          			<form>
	          				<div class="form-group">
	          					<label>Add comma separated tags below</label>
	          					<p>
	          						<textarea class="form-control" rows="3" placeholder="e.g coding, css, python, ruby"></textarea>
	          					</p>
	          					<p>
	          						<button type="button" class="btn btn-large btn-block btn-primary">Save Tags</button>
	          					</p>
	          				</div>
	          			</form>
	          		</div>
	          	</div>

	          	<div class="col-md-8 dashboard-right-cell">
	          		<div class="admin-content-con">
	          			<header>
	          				<h5>Tags</h5>
	          			</header>

	          			<table class="table table-striped table-hover">
	          				<thead>
	          					<tr>
	          						<th>Name</th>
	          						<th>Status</th>
	          						<th>Created</th>
	          						<th>Actions</th>
	          					</tr>
	          				</thead>
	          				<tbody>
	          					<tr>
	          						<td>python</td>
	          						<td><span class="label label-success">in use</span></td>
	          						<td>2 days ago</td>
	          						<td>
	          							<button type="button" class="btn btn-xs btn-warning">edit</button>
	          							<button type="button" class="btn btn-xs btn-danger disabled">delete</button>
	          						</td>
	          					</tr>
	          					<tr>
	          						<td>ruby</td>
	          						<td><span class="label label-success">not use</span></td>
	          						<td>4 days ago</td>
	          						<td>
	          							<button type="button" class="btn btn-xs btn-warning">edit</button>
	          							<button type="button" class="btn btn-xs btn-danger">delete</button>
	          						</td>
	          					</tr>
	          				</tbody>
	          			</table>
	          		</div>
	          	</div>
	          </div>


	          <div class="row">
	            <footer id="admin-footer" class="clearfix">
	              <div class="pull-left"><b>Copyright </b>&copy; 2015</div>
	              <div class="pull-right">admin system</div>
	            </footer>
	          </div>
	        
	      </div>
	    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("assets/admin/js/jquery.min.js"); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="<?php echo base_url("assets/admin/js/bootstrap.min.js"); ?>"></script>
	</body>
</html>