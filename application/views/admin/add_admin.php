<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Add Admin</title>

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

	          	<div class="col-md-2 dashboard-right-cell">
	          	</div>
	          	<div class="col-md-8 dashboard-right-cell">
	          		<div class="admin-content-con">
	          			<header>
	          				<h5>Create Admin</h5>
	          			</header>

	          	<form action="<?= base_url()?>index.php/users/register" method="post">
	          	<?php if($error)
	          	{echo '<div style="color:red;">'.$error.'</div>'; }
	          	?>
	          		
	              <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Cornfirm-Password</label>
                    <input type="text" class="form-control" name="passconf" placeholder="Cornfirm-Password">
                  </div>
                   <div class="clearfix">
                  <button type="submit" class="btn btn-primary pull-right" name="add">Save / Publish</button>
                  </div>
	            </form>
	          		</div>
	          	</div>
	          	<div class="col-md-2 dashboard-right-cell">
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