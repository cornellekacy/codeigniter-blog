<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Settings</title>

		<!-- Bootstrap CSS -->

		<link rel="stylesheet" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/default.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/settings.css"); ?>" />

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
	        <!-- side menu -->
<?php 
include 'include/sidebar.php';
 ?>

	        <!-- main content area -->
	        <div class="col-md-10 col-sm-11 display-table-cell valign-top">
          <?php 
include 'include/header.php';
 ?>
	          <div id="content">
	            <header class="clearfix">
	              <h2 class="page_title">General blog settings</h2>
	            </header>

	            <div class="content-inner">
	              <div class="row">
	              	<div class="col-md-6">
	              		<form>
	              			<div class="settings-row">
	              				<h3>Site name</h3>
	              				<p>This is permanently shown on the top left corner of navigation</p>
	              				<div class="form-group">
	              					<input type="text" id="input" class="form-control"required="required" title="">
	              				</div>
	              			</div>

	              			<div class="settings-row">
	              				<h3>Posts per page</h3>
	              				<p>Control total number of blogs shown on the blog index page.</p>
	              				<div class="form-group">
	              					<input type="number" id="input" class="form-control small-input" value="10" min="{5"} max="" step="" required="required">
	              				</div>
	              			</div>

	              			<div class="settings-row">
	              				<h3>Under maintenance</h3>
	              				<p>Redirect all requests to a a holding page.</p>
	              				<div class="checkbox">
	              					<label>
	              						<input type="checkbox" value="">
	              						blog is under maintenance
	              					</label>
	              				</div>
	              			</div>

	              			<div class="settings-row">
	              				<h3>Prevent commenting</h3>
	              				<p>Prevent or Enable visitors from leaving comments.</p>
	              				<select id="input" class="form-control small-input">
	              					<option value="">active</option>
	              					<option value="">disable</option>
	              				</select>
	              			</div>

	              			<div class="settings-row">
	              				<h3>Tags visibility</h3>
	              				<p>Enable or Disable tag visibility on all blog posts.</p>
	              				<select id="input" class="form-control small-input">
	              					<option value="">active</option>
	              					<option value="">disable</option>
	              				</select>
	              			</div>

	              			<button type="submit" class="btn btn-primary">Save Settings</button>
	              		</form>
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
	    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("assets/admin/js/jquery.min.js"); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="<?php echo base_url("assets/admin/js/bootstrap.min.js"); ?>"></script>
	</body>
</html>